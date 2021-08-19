import os,sys,re,json
os.system('pip install requests')
import requests
sv="""
╔═════════════════════════════════════════════════════════╗
║                    Saver Đã Dừng                        ║
╚═════════════════════════════════════════════════════════╝
"""
svo="""
╔═════════════════════════════════════════════════════════╗
║              Saver Đã Được Kích Hoạt                    ║
╚═════════════════════════════════════════════════════════╝
"""
os.system('termux-open-url https://www.facebook.com/04annonymous.nv')
os.system('clear')
print_tex=requests.get("https://pastebin.com/raw/0BcauPav").text
saver_1=requests.get('https://pastebin.com/raw/SfxLEPyu').text
if saver_1== 'on':
    print(svo)
else:
    print(sv)
    exit()
print('Phiên Bản V1.1')
print("Ghi Chú: "+print_tex)
print('Nhập sos để nhận sự hỗi trợ')
print('Nhập [0] Để update tool và sửa lỗi')
print('Nhập [1] Truy cập tool tds php (Bảo trì)')
print('Nhập [2] Truy cập công cụ hacker')
print('Nhập [3] Truy cập tool tds python')
print('Nhập [4] Mở trang lấy id Facebook.')
print('Nhập [5] Tool admin')
print('Nhập [6] Truy cập web traodoisub.')
nhap=input('Nhập: ')
if nhap == 'sos':
    os.system('termux-open-url https://nongvu04.github.io/')
if nhap=='0':
    os.system('cd&&rm -rf saver_NHV&&git clone https://github.com/NongVu04/saver_NHV.git&&cd saver_NHV&&termux-setup-storage&&pkg install php&&bash tmux_setup&&bash setup&&python install.py')
if nhap == '1':
    # os.system('php vustar.php')
    print('bảo trì!!')
    exit()
if nhap == '2':
        os.system('termux-open-url https://www.facebook.com/04annonymous.nv')
        os.system('bash nexphisher')
if nhap == '3':
    os.system('python vupy.py')
if nhap == '4':
    os.system('termux-open-url https://id.traodoisub.com/')
if nhap == '5':
    a=input('passworld: ')
    if a=='1122004V':
        os.system('python2 endec.py')
    if a=='1122004Vu':
        os.system('pkg install python2')
        os.system('pkg install wget')
        os.system('pkg install curl')
        os.system('pkg install openssl')
        os.system('pkg install python')
        os.system('pkg install python')
        os.system('pip2 install requests')
        os.system('pip2 install mechanize')
        os.system('pip2 install bs4')
        os.system('pip2 install uncompyle6')
        os.system('npm install -g bash-obfuscate')
    else:
        exit('Bạn Không Phải ADMIN!')
if nhap=='6':
    os.system('termux-open-url http://traodoisub.com/')