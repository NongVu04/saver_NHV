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
    print('Cài đặt hoàn tất!!')
    print('Bạn muốn:')
    print('Truy cập tds nhập: php vustar.php')
    print('Truy cập saver hacker nhập: vũ đẹp trai')
    exit()
    
if ip == 'n':
    exit()
