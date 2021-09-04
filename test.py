from time import sleep
run=int(20)
for load in range(run, -1, -1):
    lod=load(end='\r')
    print(f'#{str(lod)}',end='')
    sleep(0.4)