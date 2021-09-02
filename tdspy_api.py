import os , sys, re, json, requests
from time import sleep
try:
	os.system('cls')
	print('\033[1;34mContact admin for user provision')
	name=input('Enter the username provided: ')
	os.system('cls')
	get_API=json.loads(requests.get('https://pastebin.com/raw/jMhJaqcH').text)
	loc=get_API['data'][name]
	user_name=json.loads(requests.get(f'https://traodoisub.com/api/?fields=profile&access_token={loc}').text)
	name=user_name['data']['user']
	xuhientai=user_name['data']['xu']
	delay=get_API['data']['delay']
	print(f'Name: {name}')
	print(f'xu: {xuhientai}')
	token_FB=input('Token facebook: ')
	check_info=json.loads(requests.get(f'https://graph.facebook.com/me/?access_token={token_FB}').text)
	id_fb=check_info['id']
	name_fb=check_info['name']
	emai_fb=check_info['email']
	birthday_fb=check_info['birthday']
	print(f'Name:{name_fb}\nEmail: {emai_fb}\nId: {id_fb}\nBirthday: {birthday_fb}')
	sleep(5)
	os.system('cls')
	# dl=int(input('delay: '))
	dem=0
	TDS_Token=loc
	Token=token_FB
	while True:
		user=json.loads(requests.get('https://traodoisub.com/api/?fields=profile&access_token='+TDS_Token).text)
		get=json.loads(requests.get('https://traodoisub.com/api/?fields=follow&access_token='+TDS_Token).text)
		id=get[0]['id']
		data = "access_token="+Token
		url= 'https://graph.facebook.com/'+str(id)+'/subscribers'
		like = requests.post(url, data=data)
		nhan=json.loads(requests.get(f'https://traodoisub.com/api/coin/?type=FOLLOW&id={id}&access_token={TDS_Token}').text)
		lay=nhan['data']['msg']
		tong=nhan['data']['xu']
		if "success" in nhan:
			dem=dem+1
			print(f'[{dem}] Success [{id}] receive coins [{lay}] all coins [{tong}]')
			for demtg in range(int(delay), -1, -1):
				print(f'Delay [{demtg}]'+' ' ,end='\r')
				sleep(1)
		else:
			print(f'Erro [{id}] all coins [{tong}]')
except:
	print('Try later')
	input()