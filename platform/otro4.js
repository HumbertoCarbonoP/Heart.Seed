const puppeteer = require('puppeteer');

async function scrapeNews(url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);

    const [el] = await page.$x('/html/body/div[7]/div/div[10]/div/div[2]/div[2]/div/div/div/div/div[8]/div/a/div/div[1]/div/div/img');
    const src = await el.getProperty("src");
    const newsImg = await src.jsonValue();

    const [el2] = await page.$x('//*[@id="rso"]/div/div/div[8]/div/a/div/div[2]/div[2]');
    const text = await el2.getProperty('textContent');
    const newsTitle = await text.jsonValue();

    console.log({ newsImg, newsTitle });
    browser.close();
}

scrapeNews('https://www.google.com/search?q=medio+ambiente&sxsrf=ALiCzsZSwaPr1nkf7dQ_ybT7CUPaecUQqw:1663029955594&source=lnms&tbm=nws&sa=X&ved=2ahUKEwiT3oOuxZD6AhWhsYQIHdhzBRsQ_AUoAnoECAIQBA&biw=1366&bih=695&dpr=1');