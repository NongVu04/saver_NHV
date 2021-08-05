import sys, os, re, json, requests
from datetime import datetime
from time import sleep
import random
sv_off="""\033[1;33m
╔═════════════════════════════════════════════════════════╗
║                    Saver Đã Dừng                        ║
╚═════════════════════════════════════════════════════════╝
"""
DN="""
╔═══════════════════════════════════════════╗
║Bạn Có Muốn Thay Đổi Tài Khoản TDS Không?? ║
║Nhập [N] Không                             ║
║Nhập [Y] Có                                ║
╚═══════════════════════════════════════════╝
"""
logo_NV="""
╔═════════════════════════════════════════════════════════╗
║Tool By Nông Hoàng Vũ                                    ║
║Học hack liên hệ zalo: 0766-359-238                      ║
║Tool 1 chức năng                                         ║
║Ngày Cập Nhật: 05-08-2021                                ║
║Đang hoạt động saver: 001                                ║
╚═════════════════════════════════════════════════════════╝
"""
sv = """
╔═════════════════════════════════════════════════════════╗
║              Saver Đã Được Kích Hoạt                    ║
╚═════════════════════════════════════════════════════════╝
"""
os.system("clear")
print_tex=requests.get("https://pastebin.com/raw/0BcauPav").text
saver_NV=requests.get("https://pastebin.com/raw/q3LFK99C").text
check_key_NHV=requests.get("https://pastebin.com/raw/b2zNxppL").text

if 'on' in saver_NV:
	print(sv)
	print("Ghi Chú: "+print_tex)
else:
	print(sv_off)
	print(print_tex)
	exit()
a = "\033[1;33mTools By "
b = "Nông Hoàng Vũ"
for x in a + b:
	print(x, end='', flush=True)
	sleep(0.1)
print()
nhap=input("Nhập key: ")
if nhap == check_key_NHV:
	print('True')
else:
	print('Key sai!!')
	exit()
os.system("clear")
print(logo_NV)
h=open('tokentds.txt',mode='a+')
h=open('tokentds.txt',mode='r')
hung=h.read()
print(DN)
print('Token TDS Của Bạn Đã Được Lưu')
h.close()
hdoi=input('Bạn Muốn Đổi Token TDS Không (y/n): ')
if hdoi=='y' or hdoi=="Y":
 h=open('tokentds.txt',mode='w')
 os.system('clear')
 htk=input('Nhập Token TDS Mới : ')
 h.write(htk)
 h.close()
 tokentds=htk
else:
 tokentds=hung
h1=open('tokenfb.txt',mode='a+')
h1=open('tokenfb.txt',mode='r')
hung1=h1.read()
print('Token facebook đã được lưu.')
h1.close()
hdoi1=input('Bạn Muốn Đổi Token Fb Không (y/n) : ')
if hdoi1=='y' or hdoi1=="Y":
 h1=open('tokenfb.txt',mode='w')
 os.system('clear')
 htk1=input('Nhập Token facebook Mới : ')
 h1.write(htk1)
 h1.close()
 tokenfb=htk1
else:
 tokenfb=hung1
log=json.loads(requests.get('https://traodoisub.com/api/?fields=profile&access_token='+tokentds).text)
if "success" in log:
 user=log['data']['user']
 xu=log['data']['xu']
 print("Login Thành Công ")
 sleep(1)
else:
 print("Token Không Hợp Lệ")
os.system('clear')
print(logo_NV) 
sleep(0.2)
print("Username: "+user)
print("Tài Khoản Của Bạn Còn: "+xu)
#lam
check_token = json.loads(requests.get('https://graph.facebook.com/me/?access_token='+tokenfb).text)
if "id" in check_token:
	idfb = check_token['id']
	namefb = check_token['name']
	run = json.loads(requests.get('https://traodoisub.com/api/?fields=run&id='+str(idfb)+'&access_token='+tokentds).text)
	if "success" in run:
		print('IDFB : ' +str(idfb) +'-' +str(namefb)+'')
	else:
		exit("Cấu Hình Không Hợp Lệ")
else:
	exit("Token Die")


sleep(0.2)
luajob=input("Nhập [Y] Để Bắt Đầu Chạy Follow: ")
dl=int(input("Nhập Delay : "))
sleep(0.2)
os.system('clear')
dem=0
#run
while True:
	t=datetime.now().strftime("%H:%M:%S")
	# if luajob=="1":
	#Run Follow
	if luajob=='y' or 'Y':	
		getsub=requests.get('https://traodoisub.com/api/?fields=follow&access_token='+tokentds)
		idsub=getsub.json()[0]['id']
		datasub = "access_token="+tokenfb
		urlsub = 'https://graph.facebook.com/'+str(idsub)+'/subscribers'
		sub=requests.post(urlsub, data=datasub)
		nhan = json.loads(requests.get('https://traodoisub.com/api/coin/?type=FOLLOW&id='+str(idsub)+'&access_token='+tokentds).text)
		if "success" in nhan:
			dem=dem+1
			print(f'\033[1;37m[{dem}] ● \033[1;32m{t} ● \033[1;36mFollow ● \033[1;33m{idsub} ● \033[1;31m+600 ● \033[1;33m'+str(nhan['data']['xu'])+" Xu")
			for demtg in range(dl, -1, -1):
				print('\033[1;33mVui Lòng Đợi '+str(demtg)+'   ',end='\r')
		else:
			print('Thất Bại id: '+idsub,end='\r')
	else:
		exit('exit')
				