import os,sys
print('Hãy đảm bảo rằng mạng của bạn ổn đinh!')
print("Hacker cần quyền truy cập")
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
    print('Nhập [1] Truy cập tool tds')
    print('Nhập [2] Truy cập saver hacker')
#     print('Nhập [3] Xem hướng dẫn cho những lần truy cập sau')
    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        print('pass2')
        exit()
    
if ip == 'n':
    exit()
