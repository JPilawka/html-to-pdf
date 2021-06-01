const puppeteer = require('puppeteer')
const fs = require("fs")
const merge = require('easy-pdf-merge');
const pages = [1,2,3,4]
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
    await page.setContent(data.toString());
    // await page.pdf({format: 'a4' });
    await page.pdf({path: `./src/pages/page${p}.pdf`, format: 'a4', printBackground: true });
    // fs.writeFile('file1.pdf', pdf, (err, dat) => console.log(err, dat))
    console.log(`%cPage ${p} created`, "color:green;font-size:14px")
    await browser.close();
    return true;
}

async function mergePDFs() {
    const files = pages.map (p => `./src/pages/page${p}.pdf`)
    await merge(files, './src/pages/File Output.pdf', function (err) {
        if (err) {
            return console.log(err)
        }
        console.log('Successfully merged!')
    });
    return true;
}

async function process() {
    return pages.map(async page => await printPDF(page));

}

process().then(v => Promise.all(v)).then(p => mergePDFs()).catch(e => console.error(e))