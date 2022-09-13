const puppeteer = require('puppeteer');

async function scrapeNews(url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);

    const [el] = await page.$x('//*[@id="hub-page-first-page-content"]/section/div[1]/div/div/div/div/div[1]/div/div[1]/a/div/picture/img');
    const src = await el.getProperty('src');
    const newsImg = await src.jsonValue();

    const [el2] = await page.$x('//*[@id="hub-page-first-page-content"]/section/div[1]/div/div/div/div/div[1]/div/div[2]/h2/a');
    const text = await el2.getProperty('textContent');
    const newsTitle = await text.jsonValue();

    console.log({ newsImg, newsTitle });
    browser.close();
}

scrapeNews('https://www.nationalgeographicla.com/ciencia');