import pymysql
import json

connection = pymysql.connect(host="localhost", user="root", passwd="root", database="greenhouse")
cursor = connection.cursor()
cursor.execute("SELECT * FROM Test")
    
value = list()
time = list()
rows = cursor.fetchall()


for row in rows:
    value[0][] = row[0]
    

result = list()
result.insert(value)

print "result"
connection.commit()
connection.close()
    

