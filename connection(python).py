import pymysql

#database connection
connection = pymysql.connect(host="localhost", user="root", passwd="root", database="greenhouse")
cursor = connection.cursor()
# Query for creating table
ArtistTableSql = """CREATE TABLE Test(
ID INT(20) PRIMARY KEY AUTO_INCREMENT,
val VARCHAR(10) NOT NULL)"""

cursor.execute(ArtistTableSql)
connection.close()