import os,sys
print("Hacker")
print("[y] Có")
print("[n] Không")
ip=input("Bạn có muốn cài đặt chương trình này không:")
if ip == 'y' or 'Y':
    os.system('termux-setup-storage')
    os.system('pkg update')
    os.system('pkg upgrade')
    os.system('pkg install wget')
    os.system('pkg install php')
    os.system('pkg install curl')
    os.system('rm -rf tes_install')
    os.system('clear')
    os.system('cd')
    os.system('git clone https://github.com/NongVu04/hacker-tds.git')
    os.system('ls')
    print('thành công')
    
if ip == 'n':
    print('Tắt chương trình')
    exit()