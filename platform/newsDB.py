import pgdb

def updateNews(link, img, title, id):    
    connection = pgdb.connect(host="localhost",database="HEARTSEED", user="postgres", password="123")
    cur = connection.cursor()
    query = "UPDATE mydb.heartseed_news SET link='{}', img='{}', title='{}' WHERE id_news={}".format(link, img, title, id)
    cur.execute(query)
    connection.commit()
    connection.close()