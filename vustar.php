<?php
error_reporting(0);
session_start();
//color
$res="\033[0m";
$red="\033[1;31m";
$green="\033[1;32m";
$yellow="\033[1;33m";
$white= "\033[1;37m";
@system('clear');
@system('clear');
echo"\033[1;37m\033[1;41m \033[1;32m\033[;33m TOOL TDS Đa Luồng Token By Nông Hoàng Vũ VS1.4\033[1;32m \033[0m
\033[1;32m╔═════════════════════════════════════════════════════════╗
\033[1;32m║ \033[1;96m██╗  ██╗\033[1;91m███╗   ███╗  ║ \033[1;95m ➽ Facebook : Nông Hoàng Vũ       \033[1;32m   
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m████╗ ████║  ║\033[1;94m  ➽ Zalo : 766-359-238            \033[1;32m      
\033[1;32m║ \033[1;96m███████║\033[1;91m██╔████╔██║  ║\033[0;33m  ➽ Agk: 8414205264959         \033[1;32m       
\033[1;32m║ \033[1;96m██╔══██║\033[1;91m██║╚██╔╝██║  ║  \033[1;92m➽ Name: Nông Hoàng Vũ         \033[1;32m    
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m██║ ╚═╝ ██║  ║\033[1;97m  ➽ Bản Quyền By Nông Hoàng Vũ   \033[1;32m     
\033[1;32m╚═════════════════════════════════════════════════════════╝           
 $green=>Mua key tại Facebook: Nông Hoàng Vũ\n ═══════════════════════════════════════════════════════
 $green=>Link: https://www.facebook.com/04annonymous.\n═══════════════════════════════════════════════════════
 $yellow=>Hỗi trợ liên hiện zalo: 0766359238
$green ═══════════════════════════════════════════════════════\n";
echo $yellow."=>Key sẽ đổi theo ngày:\n═══════════════════════════════════════════════════════\n=>Lấy key free tại: https://link1s.com/Ux4e4\n═══════════════════════════════════════════════════════\n"; 
    $checkkey = file('https://pastebin.com/raw/jWbZS7qK');
    $lock = file_get_contents('https://pastebin.com/raw/L6xwhJ3k');    
    $keylock = md5(htmlspecialchars($lock));
    echo $red;
    if(md5('saver_on') != $keylock) {
        exit($yellow.'Tools đã có bản cập nhật mới!!!
Xem hướng dẫn cập nhật tại đây: https://pastebin.com/raw/058kM76q
');
    } else {
        echo $yellow.'Saver 2 Hoạt Động Vui Lòng Nhập Key...
═══════════════════════════════════════════════════════';
        sleep(1);
    }
    echo "
";
    while (true) {
         echo "\033[1;97m ~\033[1;91m[\033[1;92mNhập Key\033[1;91m] \033[1;97m=> \033[1;93m";
        $makey = trim(fgets(STDIN));
        if ($makey == $checkkey[0]) {
            echo "[1;32mĐang kiểm tra saver...";
            echo "
";
            break;
        } else {
            echo "[1;31m~Key sai!!";
            echo "
";
        }
    }

    @system('clear');

@system('rm TDS.txt');
@system('clear');
echo $banner;
echo"\033[1;37m\033[1;41m \033[1;32m\033[;33m TOOL TDS Đa Luồng Token\033[1;32m \033[0m
\033[1;32m╔═════════════════════════════════════════════════════════╗
\033[1;32m║ \033[1;96m██╗  ██╗\033[1;91m███╗   ███╗  ║ \033[1;95m ➽ Facebook : Nông Hoàng Vũ       \033[1;32m    
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m████╗ ████║  ║\033[1;94m  ➽ Zalo : 766-359-238            \033[1;32m      
\033[1;32m║ \033[1;96m███████║\033[1;91m██╔████╔██║  ║\033[0;33m  ➽ Agk: 8414205264959         \033[1;32m       
\033[1;32m║ \033[1;96m██╔══██║\033[1;91m██║╚██╔╝██║  ║  \033[1;92m➽ Name: Nông Hoàng Vũ         \033[1;32m    
\033[1;32m║ \033[1;96m██║  ██║\033[1;91m██║ ╚═╝ ██║  ║\033[1;97m  ➽ Bản Quyền By Nông Hoàng Vũ   \033[1;32m     
\033[1;32m╚═════════════════════════════════════════════════════════╝           
$green=>Mua key tại Facebook: Nông Hoàng Vũ\n ═══════════════════════════════════════════════════════
 $green=>Link: https://www.facebook.com/04annonymous.\n ═══════════════════════════════════════════════════════
 $yellow=>Hỗi trợ liên hiện zalo: 0766359238 
$green ═══════════════════════════════════════════════════════
$yellow=>Link lấy token tds: Traodoisub.com\n═══════════════════════════════════════════════════════
$yellow=>link lấy token facebook: https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed
$green  ═══════════════════════════════════════════════════════\n";
//login
$dem = 0;
  echo"=> ".$luc."Nhập token tds: $vang";
  $tokenacc = trim(fgets(STDIN));
//Token 
$khoToken = [];
echo$trang."=> ".$luc."Nhập Số Token Facebook Cần Làm: $vang"; 
$luong=trim(fgets(STDIN));
for($a=1;$a<=$luong;$a++){
echo$trang."=> ".$luc."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
//url
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
//login https://traodoisub.com/api/?fields=share&access_token=TDS0nIxIXZ2V2ciojIyVmdlNnIsISNwAzM0RnxawfIyV2c1Jye
$info = api($urlinfo);
if ($info["error"]) {
    exit ($info["error"]);
}
//$thongtin
$user = strtolower($info["data"]["user"]);
$xuhientai = $info["data"]["xu"];
@system('clear');
 echo"\033[1;37m\033[1;41m \033[1;32m\033[;33m TOOL TDS Đa Luồng Token By Nông Hoàng Vũ\033[1;32m \033[0m
 \033[1;32m╔═════════════════════════════════════════════════════════╗
 \033[1;32m║ \033[1;96m██╗  ██╗\033[1;91m███╗   ███╗  ║ \033[1;95m ➽ Facebook : Nông Hoàng Vũ       \033[1;32m    
 \033[1;32m║ \033[1;96m██║  ██║\033[1;91m████╗ ████║  ║\033[1;94m  ➽ Zalo : 766-359-238            \033[1;32m      
 \033[1;32m║ \033[1;96m███████║\033[1;91m██╔████╔██║  ║\033[0;33m  ➽ Agk: 8414205264959         \033[1;32m       
 \033[1;32m║ \033[1;96m██╔══██║\033[1;91m██║╚██╔╝██║  ║  \033[1;92m➽ Name: Nông Hoàng Vũ         \033[1;32m    
 \033[1;32m║ \033[1;96m██║  ██║\033[1;91m██║ ╚═╝ ██║  ║\033[1;97m  ➽ Bản Quyền By Nông Hoàng Vũ   \033[1;32m     
 \033[1;32m╚═════════════════════════════════════════════════════════╝           
$green=>Mua key tại Facebook: Nông Hoàng Vũ\n═══════════════════════════════════════════════════════
$green=>Link: https://www.facebook.com/04annonymous.\n═══════════════════════════════════════════════════════
$yellow=>Hỗi trợ liên hiện zalo: 0766359238\n═══════════════════════════════════════════════════════\n";

echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tên Tài Khoản Trao Đổi Sub: ".$vang."".$user."\n═══════════════════════════════════════════════════════\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."\033[1;93m Số Xu Hiện Tại: ".$vang."".$xuhientai."\n═══════════════════════════════════════════════════════\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."\033[1;95mNhập ".$do."[".$vang."1".$do."]".$luc." \033[0;36mNhiệm Vụ Like\n═══════════════════════════════════════════════════════\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."\033[1;95mNhập ".$do."[".$vang."2".$do."]".$luc." \033[1;93mNhiệm Vụ Follow\n═══════════════════════════════════════════════════════\n";
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."\033[0;36mNhập ".$do."[".$vang."3".$do."]".$luc." \033[1;95mNhiệm Vụ Comment\n═══════════════════════════════════════════════════════\n"; 
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."\033[0;36mNhập ".$do."[".$vang."4".$do."]".$luc." \033[1;93mNhiệm Vụ Share\n═══════════════════════════════════════════════════════\n";
echo $do."\033[1;33mMuốn Chạy Random Thì ghi số rồi thêm dấu cộng: 1 + 2 + 3\n═══════════════════════════════════════════════════════\n";                                            
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Chọn Chế Độ : $vang";
$nhiemvu = trim(fgets(STDIN));
//while (true){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."MIN ".$luc.": $vang";
$delay1 = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."MAX ".$luc.": $vang";
$delay2 = trim(fgets(STDIN));
//if ( is_numeric($delay1) == '' or numeric($delay2) == '' ) { echo " Lỗi Không Xác Định !!! \n"; continue; }
//else if ( ($delay1) > ($delay2) ) { echo $do." Min Phải Nhỏ Hơn Max Nhé, Vui Lòng Nhập Lại \n"; continue; }
//else { break; }}
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau Bao Nhiêu Nhiệm Vụ Bật Chống Block: $yellow";
$xxxxx = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Thì Nghỉ Bao Nhiêu Giây : $yellow";
$delaybl = trim(fgets(STDIN));
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Đổi Cấu Hình Sau: $yellow";
$doinick = trim(fgets(STDIN));
 echo $vang ."═══════════════════════════════════════════════════════\n";
while(true){
  if(count($khoToken) == 0){
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Nếu Muốn Dừng Bấm Xuống Hàng Nhé\n";
for($a = 1; $a < 999999;$a++){
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khoToken,$nhapck);
    }
            $js=json_encode($khoToken);
            $demcki=count($khoToken);
            $k = fopen("Token.txt","a+");
fwrite($k, $js);
fclose($k);
echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Tìm Thấy ".$vang.$demcki." ".$luc."Token\n";
  }
  for($xz=0;$xz<count($khoToken);$xz++){
    $cookie = $khoToken[$xz];
$access_token = $cookie;
if (strpos($access_token, 'EAAAA') !== 0) {
    echo "Token lỗi!!?! \n";
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
    echo $vang."═══════════════════════════════════════════════════════\n";
    echo $vang."Đang Cấu Hình ID: ".$luc.$idfb." ".$vang."Tên FB: ".$do.$tenfb."".$res."\n";
    echo $vang."═══════════════════════════════════════════════════════\n";
} else {
    echo $do."Cấu hình thất bại token có thể bị die thay token.".$trang."Thay token\n";
    exit;
}
$spam = 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        for ($i = 0; $i < 30; $i++) {
            $listlike = api($urllike);
            if (count($listlike) !== 0) {
                break;
            }
        }
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
        while (true) {
            $listsub = api($urlsub);
            if (count($listsub) !== 0) {
                break;
            }
        }}
    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listcmt = api($urlcmt);
            if (count($listcmt) !== 0) {
                break;
            }}
    }
    //listshare
    if (strpos($nhiemvu, '4') !== false) {
        for ($i = 1; $i < 30; $i++) {
            $listshare = api($urlshare);
            if (count($listshare) > 0) {
                break;
            }}
    }
    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike !== NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike !== '') {
                $g = like($access_token, $idlike, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;33m"."Đổi cấu hình:";
                    echo "\n";
                    $spam = 1;
                    break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    $spam = 1;
                    array_splice($khoToken,$xz,1);
                    break;
                }
                $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                           if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                                  $delay = rand($delay1,$delay2);  
                    delay($delay);
                }
            }}
        //follow
        if ($listsub !== NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub !== '') {
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
                    echo "Token die !!?!\n";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 368) {
                    echo "\033[1;33m"."Đổi cấu hình:";
                    echo "\n";
                    $spam = 1; break;
                }
                if ($g -> {'error'} -> {'code'} == 405) {
                    echo "\033[1;91m"."Tài khoản bị checkpoint";
                    array_splice($khoToken,$xz,1);
                    $spam = 1; break;
                }
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                            if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                                  $delay = rand($delay1,$delay2);  
                    delay($delay);
                }
            }}
            if ($listshare !== NULL) {
                $idshare = $listshare[$lap]["id"];
                if (isset($idshare)) {
                    $r = share($access_token, $idshare);
                    $g = json_decode($r);
                    if ($g -> {'error'} -> {'code'} == 190) {
                        echo "Token die !!?!\n";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 368) {
                        echo "\033[1;33m"."Đổi cấu hình:";
                        echo "\n";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if ($g -> {'error'} -> {'code'} == 405) {
                        echo "\033[1;91m"."Tài khoản bị checkpoint";
                        array_splice($khoToken,$xz,1);
                        $spam = 1; break;
                    }
                    if (strpos($r, '"id"')){
                        $nhanshare = nhantien('SHARE', $idshare, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, ' SHARE ', $idshare, $xujob, $xu);
                            if($dem % $doinick == 0){
                              $spam = 1; break;
                            }
                             if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                                  $delay = rand($delay1,$delay2);  
                    delay($delay);
                }

                    }else{
                        echo $r;
                    }

                }else{
                    break;
                }
            }
        //cmt
        if ($listcmt !== NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt !== '') {
                cmt($access_token, $idcmt, $cookie, $msg);
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $xu);
                    if($dem % $doinick == 0){
                      $spam = 1; break;
                    }
                              if($dem % $xxxxx == 0){
                      delay($delaybl);
                    }
                    
                                  $delay = rand($delay1,$delay2);  
                    delay($delay);
                }
            }}
        }
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Linux; Android 9; Mi A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.110 Mobile Safari/537.36",
        "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
        "sec-fetch-site: none",
        "sec-fetch-mode: navigate",
        "sec-fetch-user: ?1",
        "sec-fetch-dest: document",
        //"accept-encoding: gzip, deflate, br",
        "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5",
    );
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_SSL_VERIFYPEER => FALSE,
        CURLOPT_RETURNTRANSFER => 1
    ));
    $get = curl_exec($ch);
    curl_close($ch);
    return json_decode($get, true);
}
function nhantien($type, $id, $tokenacc) {
    $nhan = file_get_contents("https://traodoisub.com/api/coin/?type=$type&id=$id&access_token=$tokenacc");
    return json_decode($nhan, true);
}
function follow($access_token, $idtest, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idtest.'/subscribers');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token, $id, $cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);

}
function share($access_token,$id){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/me/feed?method=POST&link=https://www.facebook.com/'.$id.'&privacy={%27value%27:%20%27EVERYONE%27}&access_token='.$access_token);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $headers = array();
    $headers[] = 'Authority: graph.facebook.com';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    $headers[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36';
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Sec-Fetch-Site: none';
    $headers[] = 'Sec-Fetch-Mode: navigate';
    $headers[] = 'Sec-Fetch-User: ?1';
    $headers[] = 'Sec-Fetch-Dest: document';
    $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close($ch);
    return $result;
}
function cmt($access_token, $idcmt, $cookie, $msg) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$idcmt.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg, 'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function hoanthanh($dem, $type, $id, $xujob, $xu) {
$time = date('H:i');
$maul=rand(31,37);
$maui="\033[1;".$maul."m";
    echo     " \033[1;37m[\033[1;33m$dem\033[1;37m]\033[1;33m•\033[1;35m[\033[1;92m$time\033[1;35m]\033[1;33m•\033[1;32m[\033[1;37m$maui$type\033[1;32m]\033[1;33m•\033[1;35m[\033[1;37m$id\033[1;35m]\033[1;33m•\033[1;32m[\033[1;33m$xu xu\033[1;32m]\033[1;35m\n";
    $len = strlen($a);
    for ($x = 0; $x < $len; $x++) {
        echo $a[$x];
        usleep(1000);
    
    }
}
function delay($delay) {
    for ($time = $delay; $time > -1; $time--) {
        echo "\r\033[1;93m   (•°_°•)\033[1;91m ~>       \033[1;92m ...      \033[1;91m |\033[1;93m $time\033[1;91m | ";
        usleep(150000);

        echo "\r\033[42m   Hello ..\033[0;33m   ~>     \033[0;37m LO     \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;92m   (•°_°•)\033[0;33m     ~>   \033[0;37m LOA    \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;94m   (•°_°•)\033[0;33m       ~> \033[0;37m LOAD   \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   (•°_°•)\033[0;33m        ~>\033[0;37m LOAD.  \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   (•°_°•)\033[0;33m        ~>\033[0;37m LOAD.. \033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(150000);
        echo "\r\033[1;95m   (•°_°•)\033[0;33m        ~>\033[0;37m LOAD...\033[0;31m |\033[0;33m $time\033[0;31m | ";
        usleep(100000);
        echo "\r                                          \r";
    }}
function laytoken($cookie) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://m.facebook.com/composer/ocelot/async_loader/?publisher=feed');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Mi 9T Pro) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/12.1 Chrome/79.0.3945.136 Mobile Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $access = curl_exec($ch);
    curl_close($ch);
    if (explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0]) {
        $access_token = explode('\",\"useLocalFilePreview', explode('accessToken\":\"', $access)[1])[0];
    }
    return $access_token;
}