from bs4 import BeautifulSoup
import requests
from newsDB import updateNews

page = requests.get('https://econewstoday.com/')
print(page)
soup = BeautifulSoup(page.text, 'html.parser')
news = soup.find_all(class_="td-block-span6")

for i in range(4):
    img = str(news[i].find('img').get('src'))
    
    title = news[i].find('h3').text
    
    link =str(news[i].find('h3').find('a').get('href'))
    updateNews(link, img, title, i+9)