# Raspberry Pi Uzaktan Kontrol Projesi Server Programi

import RPi.GPIO as GPIO 	#raspberry pi'nin pinlerini kontrol kutuphanesini ekle
import time

GPIO.setmode(GPIO.BCM) 	#pin numaralarini boarddaki siralamaya gore ayarla
GPIO.cleanup()			#onceden kalmis olan pin ayarlarini temizle
GPIO.setup(18,GPIO.OUT)		#led 1in bagli olacagi pini cikis olarak ayarla

while 1:                                
	GPIO.output(pin,GPIO.HIGH)              #ledi yak
	time.sleep(1)							#1sn bekle                                          
	GPIO.output(pin,GPIO.LOW)               #ledi sondur
	time.sleep(1)							#1sn bekle 