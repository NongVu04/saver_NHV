import os,sys,re,json
# import requests
# os.system('pip install requests')
# os.system('pip install response')
# os.system('pip install object')
print('Hãy đảm bảo rằng mạng của bạn ổn đinh!')
print("Hacker sẽ yêu cầu cấp quyền nếu bạn là người mới!!")
ip=input("Bạn là người mới hay cũ [moi] hay [cu]: ")
# saver=requests.get('https://pastebin.com/raw/gs1sP0JG')
# if saver=='on':
#     print('saver hoạt động')
# if saver == 'off':
#     print('saver đóng')
#     exit()
if ip == 'moi':
    os.system('termux-setup-storage')
    os.system('pip install requests')
    os.system('pkg update')
    os.system('pkg upgrade')
    os.system('pkg install wget')
    os.system('wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip')
    os.system('pkg install php')
    os.system('pkg install curl')
    os.system('apt upgrade')
    os.system('git clone https://github.com/htr-tech/zphisher.git') #đổi nhv
    os.system('ls')
    os.system('chmod +x zphisher')
    
    os.system('clear')
    os.system('cd')
    print('Cài đặt hoàn tất!!')
    print('Bạn muốn:')
    print('Nhập [1] Truy cập tool tds')
    print('Nhập [2] Truy cập saver hacker')
#     print('Nhập [3] Xem hướng dẫn cho những lần truy cập sau')
#######################################################
    import requests
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    saver_2=input(f"{sr}Nhập id saver: ")
    if saver_2 == saver_1:
            print(f"{sr} Saver hoạt động")
    else:
        print(f"{sr} saver ngừng hoạt động!!!")
        exit()
        #########################
    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        os.system('bash zphisher.sh')
    
if ip == 'cu':
    os.system('clear')
    import requests
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    saver_2=input(f"{sr}Nhập id saver: ")
    if saver_2 == saver_1:
            print(f"{sr} Saver hoạt động")
    else:
        print(f"{sr} saver ngừng hoạt động!!!")
        exit()
    print('Nhập [1] Truy cập tool tds')
    print('Nhập [2] Truy cập saver hacker')
#     print('Nhập [3] Xem hướng dẫn cho những lần truy cập sau')
    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        os.system('bash zphisher.sh')
