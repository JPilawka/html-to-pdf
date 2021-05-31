const puppeteer = require('puppeteer')
const fs = require("fs")
const pages = [1,2,3,4]
async function printPDF(page) {
    try {
        fs.readFile(`./src/pages/${page}.html`, (err, data) => {
            convert(data, page)
        });

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
}

pages.forEach(page => printPDF(page).then(data => data).catch(e=>console.error(e)))
