import os,sys,re,json
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
os.system('pip install requests')
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
print('Nhập [0] Để update tool và sửa lỗi')
print('Nhập [1] Truy cập tool tds php (Bảo trì)')
print('Nhập [2] Truy cập công cụ hacker')
print('Nhập [3] Truy cập tool tds python')
nhap=input('Nhập: ')
if nhap=='0':
    os.system('cd&&rm -rf saver_NHV&&git clone https://github.com/NongVu04/saver_NHV.git&&cd saver_NHV&&termux-setup-storage&&pkg install php&&bash tmux_setup&&bash setup&&python install.py')
if nhap == '1':
    # os.system('php vustar.php')
    print('bảo trì!!')
    exit()
if nhap == '2':
        os.system('bash nexphisher')
if nhap == '3':
    os.system('python vupy.py')