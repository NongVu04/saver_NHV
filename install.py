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
#     os.system('git clone https://github.com/htr-tech/zphisher.git') #đổi nhv
#     os.system('ls')
#     os.system('chmod +x zphisher')
    
    os.system('clear')
    os.system('cd')
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
        print("Bạn đã cài đặt saver chưa??")
        print('[1] Tôi chưa cài nó.')
        print('[2] Tôi đã cài nó.')
        install_sv=input('Nhập [1] hoặc [2]: ')
        if install_sv=='1':
            os.system('git clone https://github.com/htr-tech/zphisher.git')
            os.system('chmod +x zphisher')
            os.system('cd zphisher')
            os.system('bash zphisher.sh')
        if install_sv=='2':
            os.system('chmod +x zphisher')
            os.system('cd zphisher')
            os.system('bash zphisher.sh')
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
        print("Bạn đã cài đặt saver chưa??")
        print('[1] Tôi chưa cài nó.')
        print('[2] Tôi đã cài nó.')
        install_sv=input('Nhập [1] hoặc [2]: ')
        if install_sv=='1':
            os.system('git clone https://github.com/htr-tech/zphisher.git')
            os.system('chmod +x zphisher')
            os.system('cd zphisher')
            os.system('bash zphisher.sh')
        if install_sv=='2':
#             os.system('chmod +x zphisher')
            os.system('cd zphisher')
#             os.system('bash zphisher.sh')
            os.system('ls')
            os.system('cd ')
