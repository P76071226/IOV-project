'''
import pymysql
u
db = pymysql.connect(host='140.116.82.180',port=3306, user='root', passwd='csiecial', db='member', charset='utf8')
#db = pymysql.connect(host='mysql.cs.ccu.edu.tw', port=3306, user='lcf102u', passwd='lf2netdavid', db='lcf102u_food', charset='utf8')
#db = pymysql.connect(host='192.168.83.10',port=3306, user='test', passwd='test', db='test', charset='utf8')
cursor = db.cursor()
sql1 = "SELECT * FROM data WHERE user = 'ee'"
cursor.execute("SELECT * FROM data")
#results = cursor.fetchone()
results = cursor.fetchall()
m=0
who=''
say=''
if results is None:
    print("查询为空")
else:
    for i in results:
        if i[4]>m:
            m=i[4]
            who=i[0]
            say=i[3]
            
print(who, m)
db.close()
'''
import pymysql
import lcd
import time

#connect to db
db = pymysql.connect(host='140.116.82.180',port=3306, user='root', passwd='csiecial', db='member', charset='utf8')

cursor = db.cursor()
cursor.execute("SELECT * FROM data")

results = cursor.fetchall()

money = 0
who = ''
say = ''

#find who win the bid
if result is None:
        print("can't find any!")
else:
        for i in results:
                if i[4]>money:
                        money = i[4]
                        who = i[0]
                        say = i[3]


#show on lcd
lcd.lcd_init()
lcd.lcd_byte(lcd.LCD_LINE_1, lcd.LCD_CMD)

lcd.lcd_string(who,2)
lcd.lcd_byte(lcd.LCD_LINE_2, lcd.LCD_CMD)
lcd.lcd_string(say,2)

time.sleep(60)
lcd.GPIO.cleanup()


db.close()
