const puppeteer = require('puppeteer');
const fs = require("fs");
const path = './src/class-report';

const colorPages = ['class-report-color'];
const printPages = ['class-report-print'];
async function printPDF(page, type) {
    try {
        const data = await fs.readFileSync(`${path}/${page}.html`)
        await convert(data, page, type)
    } catch(e) {
        console.warn('printPDF error:',e)
    }
}

async function convert(data, p, type) {
    const browser = await puppeteer.launch({ headless: true });

    const page = await browser.newPage();
    await page.setContent(data.toString(), { waitUntil: 'networkidle2' });
    await page.evaluateHandle('document.fonts.ready');
    await page.content();

    await page.pdf({path: `${path}/Class-Report(${type}).pdf`, format: 'a4', printBackground: true, preferCSSPageSize: true,landscape: true });
    await browser.close();
    return true;
}


async function process(array, type) {
    return array.map(async page => await printPDF(page, type));
}

process(colorPages, 'color').then().catch(e => console.error(e));
process(printPages, 'print').then().catch(e => console.error(e));