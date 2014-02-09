# Raspberry Pi Uzaktan Kontrol Projesi Server Programi

import RPi.GPIO as GPIO 	#raspberry pi'nin pinlerini kontrol kutuphanesini ekle
import time

led1=18
led2=23

GPIO.setmode(GPIO.BCM) 	#pin numaralarini boarddaki siralamaya gore ayarla
GPIO.cleanup()			#onceden kalmis olan pin ayarlarini temizle
GPIO.setup(18,GPIO.OUT)		#led 1in bagli olacagi pini cikis olarak ayarla

for x in range(1,5):                                
	GPIO.output(led1,GPIO.HIGH)              #ledi yak
	time.sleep(1)							#1sn bekle                                          
	GPIO.output(led1,GPIO.LOW)               #ledi sondur
	time.sleep(1)							#1sn bekle
