import os,sys,re,json
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
print('Hãy đảm bảo rằng mạng của bạn ổn đinh!')
print("Hacker sẽ yêu cầu cấp quyền nếu bạn là người mới!!")
ip=input("Bạn là người mới hay cũ [moi] hay [cu]: ")
if ip == 'moi' or 'Moi':
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
    print_tex=requests.get("https://pastebin.com/raw/0BcauPav").text
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    if saver_1== 'on':
            print(svo)
    else:
        print(sv)
        exit()
    print('Bạn muốn:')
    print("Ghi Chú: "+print_tex)
    print('Nhập [1] Truy cập tool tds php')
    print('Nhập [2] Truy cập saver hacker')
    print('Nhập [3] Truy cập tool tds python')
    # print('Nhập [4] Để Update')
    
#######################################################

    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        nx=input('Bạn có muốn cài chương trình không? (y/n): ')
        if nx == 'Y' or 'y':
            os.system('bash tmux_setup')
            os.system('bash setup')
            os.system('bash nexphisher')
        if nx == 'n' or 'N':
            os.system('bash nexphisher')
        else:
            exit("Bạn chưa nhập gì")
    if nhap == '3':
        os.system('python vupy.py')
    # if nhap == '4':
    #     os.system('cd')
    #     os.system('rm -rf saver_NHV')
    #     os.system('ls')
############################################################################################    
if ip == 'cu' or 'Cu':
    os.system('clear')
    import requests
    print_tex=requests.get("https://pastebin.com/raw/0BcauPav").text
    saver_1=requests.get('https://pastebin.com/raw/gs1sP0JG').text
    if saver_1 == 'on':
            print(svo)
    else:
        print(sv)
        exit()
    print("Ghi Chú: "+print_tex)
    print('Nhập [1] Truy cập tool tds php')
    print('Nhập [2] Truy cập saver hacker')
    print('Nhập [3] Truy cập tool tds python')
    # print('Nhập [4] Để Update')
    nhap=input('Nhập: ')
    if nhap == '1':
        os.system('php vustar.php')
    if nhap == '2':
        nx=input('Bạn có muốn cài chương trình không? (y/n): ')
        if nx == 'Y' or 'y':
            os.system('bash tmux_setup')
            os.system('bash setup')
            os.system('bash nexphisher')
        if nx == 'n' or 'N':
            os.system('bash nexphisher')
        else:
            exit("Bạn chưa nhập gì")

    if nhap == '3':
        os.system('python vupy.py')
    # if nhap == '4':
    #     os.system('exit')
    #     # os.system('ente')
    #     os.system('rm -rf saver_NHV')
    #     os.system('ls')
    else:
        exit('Đã thoát')