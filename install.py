import os,sys
print("Hacker muốn truy cập vào điện thoại của bạn đề cài đặt bạn có đồng ý không?")
ip=input("Bạn có đồng ý không [y] or [n]: ")
if ip == 'y':
    os.system('termux-setup-storage')
    os.system('pkg update')
    os.system('pkg upgrade')
    os.system('pkg install wget')
    os.system('pkg install php')
    os.system('pkg install curl')
    os.system('clear')
    os.system('cd')
    os.system('ls')
    print('Cài đặt hoàn tất!!')
    print('nhập cd để quay lại')
    exit()
    
if ip == 'n':
    exit()
