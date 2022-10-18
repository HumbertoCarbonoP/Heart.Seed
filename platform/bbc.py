from bs4 import BeautifulSoup
import requests
from newsDB import updateNews

page = requests.get('https://www.bbc.com/mundo/topics/cjgn709jk16t')
soup = BeautifulSoup(page.text, 'html.parser')
news = soup.find_all(class_="bbc-bjn8wh e1v051r10")

for i in range(4):
    img = str(news[i].find('img').get('src'))
    
    title = str(news[i].find('a').text)
    
    link = str(news[i].find('a').get('href'))
    updateNews(link, img, title, i+1)