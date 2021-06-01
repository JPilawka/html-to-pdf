const puppeteer = require('puppeteer')
const fs = require("fs")
const merge = require('easy-pdf-merge');

const COLOR_REPORT_FILE = 'Report(color)';
const PRINT_REPORT_FILE = 'Report(print)';

const colorPages = ['color-1','color-2','color-3','color-4']
const printPages = ['print-1','print-2','print-3','print-4']
async function printPDF(page) {
    try {
        const data = await fs.readFileSync(`./src/pages/${page}.html`)
        await convert(data, page)
    } catch(e) {
        console.warn(e)
    }
}

async function convert(data, p) {
    const browser = await puppeteer.launch({ headless: true });

    const page = await browser.newPage();
    await page.evaluateHandle('document.fonts.ready');
    await page.setContent(data.toString(), { waitUntil: 'networkidle2' });
    // await page.pdf({format: 'a4' });
    await page.pdf({path: `./src/pages/${p}.pdf`, format: 'a4', printBackground: true });
    // fs.writeFile('file1.pdf', pdf, (err, dat) => console.log(err, dat))
    await browser.close();
    return true;
}

async function mergePDFs(array, resultFileName) {
    const files = array.map (p => `./src/pages/${p}.pdf`)
    await merge(files, `./src/pages/${resultFileName}.pdf`, function (err) {
        if (err) {
            return console.error(err)
        }
        console.log(`Successfully merged to file ${resultFileName}.pdf!`)
        clearFiles(array);

    });
    return true;
}
function clearFiles(array) {
    array.forEach(async file => {
       try {
            await fs.unlinkSync(`./src/pages/${file}.pdf`);
        } catch(e) {
           console.error(e)
       }
    })
}

async function process(array) {
    return array.map(async page => await printPDF(page));
}

process(colorPages).then(v => Promise.all(v)).then(p => mergePDFs(colorPages,COLOR_REPORT_FILE)).catch(e => console.error(e))
process(printPages).then(v => Promise.all(v)).then(p => mergePDFs(printPages,PRINT_REPORT_FILE)).catch(e => console.error(e))