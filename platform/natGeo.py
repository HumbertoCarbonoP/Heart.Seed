from bs4 import BeautifulSoup
import requests
from newsDB import updateNews

page = requests.get('https://www.ngenespanol.com/ecologia/')
print(page)
soup = BeautifulSoup(page.text, 'html.parser')
news = soup.find_all('article')

for i in range(4):
    img = str(news[i].find('img').get('src'))
    
    title = news[i].find('a').get('title')
    
    link =str(news[i].find('a').get('href'))
    updateNews(link, img, title, i+5)