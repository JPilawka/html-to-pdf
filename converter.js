const puppeteer = require('puppeteer')
const fs = require("fs")
const merge = require('easy-pdf-merge');

const COLOR_REPORT_FILE = 'Report(color)';
const PRINT_REPORT_FILE = 'Report(print)';

const colorPages = ['color-1','color-2','color-3','color-4']
const printPages = ['print-1','print-2','print-3','print-4']
async function printPDF(page, type) {
    try {
        const data = await fs.readFileSync(`./src/pages/${page}.html`)
        await convert(data, page, type)
    } catch(e) {
        console.warn(e)
    }
}

async function convert(data, p, type) {
    const browser = await puppeteer.launch({ headless: true });

    const page = await browser.newPage();
    await page.setContent(data.toString(), { waitUntil: 'networkidle2' });
    await page.evaluateHandle('document.fonts.ready');
    await page.content();
    await page.addStyleTag({path: './src/pages/shared.css'});
    await page.addStyleTag({path: `./src/pages/${type}.css`});

    await page.pdf({path: `./src/pages/${p}.pdf`, format: 'a4', printBackground: true, preferCSSPageSize: true });
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

async function process(array, type) {
    return array.map(async page => await printPDF(page, type));
}

process(colorPages, 'color').then(v => Promise.all(v)).then(p => mergePDFs(colorPages,COLOR_REPORT_FILE)).catch(e => console.error(e))
process(printPages, 'print').then(v => Promise.all(v)).then(p => mergePDFs(printPages,PRINT_REPORT_FILE)).catch(e => console.error(e))