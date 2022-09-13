const puppeteer = require('puppeteer');

async function scrapeNews(url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);

    const [el] = await page.$x('//*[@id="block-nationalgeographic-content"]/article/div[2]/div/div[1]/picture/img');
    const src = await el.getProperty('src');
    const newsImg = await src.jsonValue();

    const [el2] = await page.$x('//*[@id="block-nationalgeographic-content"]/article/div[1]/h1');
    const text = await el2.getProperty('textContent');
    const newsTitle = await text.jsonValue();

    console.log({ newsImg, newsTitle });
    browser.close();
}

scrapeNews('https://www.nationalgeographicla.com/historia/2022/09/la-lucha-de-los-inmigrantes-para-obtener-atencion-medica-por-la-covid-19');