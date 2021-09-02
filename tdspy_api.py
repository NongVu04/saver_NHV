import sys, os, re, json, requests
from datetime import datetime
from time import sleep
get_token=json.loads(requests.get('https://pastebin.com/raw/jMhJaqcH').text)
if 'success' in get_token:
    try:
        #get and print....
        enter_token_tds=input('Nhập tên bạn: ')
        enter_token_fb=input('Nhập token facebook: ')
        Enter=get_token['data'][enter_token_tds]
        check_fb = json.loads(requests.get(f'https://graph.facebook.com/me/?access_token={enter_token_fb}').text)
        check_tds=json.loads(requests.get(f'https://traodoisub.com/api/?fields=profile&access_token={Enter}').text)
        use_tds=check_tds['data']['user']
        xu_tds=check_tds['data']['xu']
        name_fb=check_fb['name']
        dem=0
        time=datetime.now().strftime("%H:%M:%S")
        print(f'use: {use_tds}')
        print(f'xu: {xu_tds}')
        print(f'Tên: {name_fb}')
        dl=int(input('Bạn muốn bao nhiêu giây thì làm nhiệm vụ: '))
        #lam
        try:
            while True:
                get_follow=requests.get(f'https://traodoisub.com/api/?fields=follow&access_token={enter_token_tds}')
                id_follow=get_follow.json[0]['id']
                datasub = f"access_token={enter_token_fb}"
                urlsub = 'https://graph.facebook.com/'+str(id_follow)+'/subscribers'
                sub=requests.post(urlsub, data=datasub)
                nhan = json.loads(requests.get('https://traodoisub.com/api/coin/?type=FOLLOW&id='+str(id_follow)+'&access_token='+enter_token_tds).text)
                if "success" in nhan:
                    dem=dem+1
                    print(f'\033[1;37m[{dem}] ● \033[1;32m{time} ● \033[1;36mFollow ● \033[1;33m{id_follow} ● \033[1;31m+600 ● \033[1;33m'+str(nhan['data']['xu'])+" Xu")
                    for demtg in range(dl, -1, -1):
                        print('\033[1;33mVui Lòng Đợi '+str(demtg)+'   ',end='\r')
                        sleep(1)
                else:
                    print(f'thất bại id {id_follow}')
        except:
            print('lỗi chạy')
    except:
        print('None')
else:
    pass