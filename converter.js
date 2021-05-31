const puppeteer = require('puppeteer')
const fs = require("fs")

async function printPDF() {
    try {
        fs.readFile('./src/pages/1.html', (err, data) => {
            convert(data)
        });

    } catch(e) {
        console.warn(e)
    }
}

async function convert(data) {
    const browser = await puppeteer.launch({ headless: true });
    const page = await browser.newPage();
    await page.setContent(data.toString());
    // await page.pdf({format: 'a4' });
    await page.pdf({path: './src/pages/file1-chromium.pdf', format: 'a4' });
    // fs.writeFile('file1.pdf', pdf, (err, dat) => console.log(err, dat))

    await browser.close();
}

printPDF().then(data => console.log(data)).catch(e=>console.error(e))