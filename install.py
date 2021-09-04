import os,sys,re,json
from time import sleep
from datetime import datetime
from random import randint
print('\033[1;32m')
try:
    pass
except:
    os.system('pip install requests&&pkg install sox -y&&pip install speedtest-cli')
    os.system('termux-setup-storage -y&&pkg install php')
    pass
# os.system('play ting.mp3')
import requests
sv="""\033[1;31m
╔══════════════════════════════════════════════════════╗
║                    Update Saver                      ║
╚══════════════════════════════════════════════════════╝
ADMIN: NONG HOANG VU
"""
svo="""\033[1;34m
╔══════════════════════════════════════════════════════╗
║              \033[1;30mSaver Đã Được Kích Hoạt\033[1;34m                 ║
╚══════════════════════════════════════════════════════╝
"""
# os.system('termux-open-url https://www.facebook.com/messages/t/100022158541516')
os.system('clear')
print_tex=requests.get("https://pastebin.com/raw/0BcauPav").text
saver_new=requests.get('https://pastebin.com/raw/Em2J0Xiq').text
if saver_new== 'on':
    print(svo)
else:
    print(sv)
    sleep(3)
    os.system('play ting.mp3')
    os.system('cd&&rm -rf saver_NHV&&git clone https://github.com/NongVu04/saver_NHV.git&&cd saver_NHV&&python install.py')
time=datetime.now().strftime("%H:%M:%S")
print(f'Access time {time} According to Nong Hoang Vu')
print('\033[1;30mPhiên Bản \033[1;31mV2.4')
print('\033[1;30mNhập [sos] để nhận sự hỗi trợ')
print('Nhập [admin] để ib và được ad hỗi trợ.')
print('\033[1;31mNhập [00] Để Thoát\033[1;30m')
print('Nhập [0] Để update.')
print('Nhập [1] Truy cập tool tds php (New v2021)')
print('Nhập [2] Truy cập công cụ Nexphisher_NV')
print('Nhập [3] Truy cập tool tds python (New)')
print('Nhập [4] Mở trang lấy id Facebook.')
print('Nhập [5] Tool admin (yêu cầu bảo mật hai lớp)!!!')
print('Nhập [6] Truy cập web traodoisub.')
print('Nhập [7] Nghe nhạc + Code dạo.')
print('Nhập [8] Máy nghe nhạc.')
print('Nhập [9] Để kiểm tra mạng.')
print('Nhập [10] Đăng nhập tool admin cung cấp (Yêu cầu liên hệ admin)')
nhap=input('Nhập: ')
if nhap =='00':
    os.system('termux-open-url https://www.youtube.com/channel/UCAlq_Me8x_QGNHWvROkEAmg')
    exit()
if nhap == 'sos':
    os.system('termux-open-url https://nongvu04.github.io/')
    os.system('play xoa.mp3')
    os.system('python install.py')
if nhap=='0':
    os.system('cd&&rm -rf saver_NHV&&git clone https://github.com/NongVu04/saver_NHV.git&&cd saver_NHV&&python install.py')
if nhap == '1':
    os.system('php tds_pro.php')
    # print('bảo trì!!')
    os.system('python install.py')
if nhap == '2':
    check=open('check_setup.txt',mode='r').read()
    if 'setup_ok' in check:
        # os.system('termux-open-url https://www.facebook.com/04annonymous.nv')
        os.system('cd nexphisher&&bash nexphisher')
        # print('thành công')
        pass
    else:
        os.system('git clone git://github.com/htr-tech/nexphisher.git')
        os.system('cd nexphisher&&bash setup&&bash tmux_setup&&bash nexphisher')

        open('check_setup.txt',mode='a+').write('\n setup_ok')
        os.system('python install.py')
        # print('lỗi')
# os.syst
if nhap == '3':
    os.system('python vupy.py')
    os.system('python install.py')
if nhap == '4':
    os.system('termux-open-url https://id.traodoisub.com/')
    os.system('python install.py')
if nhap == '5':
    a=input('passworld: ')
    if a=='1122004V':
        os.system('python2 endec.py')
        os.system('python install.py')
    if a=='1122004Vu':
        os.system('pkg install python2')
        os.system('pkg install wget')
        os.system('pkg install curl')
        os.system('pkg install openssl')
        # os.system('pkg install python')
        os.system('pip2 install requests')
        os.system('pip2 install mechanize')
        os.system('pip2 install bs4')
        os.system('pip2 install uncompyle6')
        os.system('npm install -g bash-obfuscate')
        os.system('python install.py')
    else:
        # exit('Bạn Không Phải ADMIN!')
        os.system('python install.py')
if nhap=='6':
    os.system('termux-open-url http://traodoisub.com/')
if nhap=='7':
    while True:
        a=randint(0,5)
        if a==0:
            a='Save attack'
        if a==1:
            a='HOST: '
        if a==2:
            a='wifi hacking: '
        if a==3:
            a='Run hack'
        if a==4:
            a='Hack Facebook'
        if a==5:
            a='Tấn công trang chủ facebook'
        print('\033[1;32m')
        # print(a)
        h=input('=> '+ str(a)+': ')
        os.system('play nhac_nen.mp3')
        if h=='hack':
            print('Đã hack thành công!!!\nFacebook đã sập')
            os.system('python install.py')
if nhap=='8':
    check=open('check_music.txt', mode='r')
    if 'yes' in check.read():
        os.system('cd&&cd MUSIC&&python music.py') 
        os.system('python install.py')     
    else:
        # with open('check_music.txt', mode='r')
        os.system('cd&&rm -rf MUSIC&&git clone https://github.com/NongVu04/MUSIC.git') 
        os.system('cd saver_NHV')
        open('check_music.txt', mode='w').write('yes')
        os.system('cd&&cd MUSIC&&python music.py') 
        os.system('python install.py')    
if nhap=='admin':
    os.system('termux-open-url https://www.facebook.com/04annonymous.nv/') 
    os.system('python install.py')
if nhap=='9':
    os.system('clear')
    os.system('speedtest-cli')
    input('Enter to continue')
    os.system('python install.py')
if nhap=='10':
    os.system('python tdspy_api.py')
    os.system('python install.py')
else:
    os.system('python install.py')
