const puppeteer = require('puppeteer');

async function scrapeNews(url) {
    const browser = await puppeteer.launch();
    const page = await browser.newPage();
    await page.goto(url);

    const [el] = await page.$x('/html/body/ytd-app/div[1]/ytd-page-manager/ytd-search/div[1]/ytd-two-column-search-results-renderer/div/ytd-section-list-renderer/div[2]/ytd-item-section-renderer/div[3]/ytd-video-renderer[2]/div[1]/ytd-thumbnail/a/yt-img-shadow/img');
    const src = await el.getProperty("src");
    const newsImg = await src.jsonValue();

    const [el2] = await page.$x('/html/body/ytd-app/div[1]/ytd-page-manager/ytd-search/div[1]/ytd-two-column-search-results-renderer/div/ytd-section-list-renderer/div[2]/ytd-item-section-renderer/div[3]/ytd-video-renderer[2]/div[1]/div/div[1]/div/h3/a/yt-formatted-string');
    const text = await el2.getProperty('textContent');
    const newsTitle = await text.jsonValue();

    console.log({ newsImg, newsTitle });
    browser.close();
}

scrapeNews('https://www.youtube.com/results?search_query=justicia+social');