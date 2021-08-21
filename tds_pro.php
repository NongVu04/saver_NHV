<?php
error_reporting(0); $do="\033[1;91m"; $luc="\033[1;92m"; $end="\033[0m"; $black="\033[0;30m"; $blackb="\033[1;30m"; $white="\033[0;37m"; $ver="1.0"; $green="\033[1;32m"; $wait = $green."WAIT"; $res="\033[0m"; $red="\033[1;31m"; $yellow="\033[0;93m"; $lightblue="\033[1;35m"; $bluelight="\033[1;34m"; $blue="\033[1;36m"; $purple="\e[35m"; $maufulldo = "\e[1;47;31m"; $res = " [0m"; $red = "\e[1;31m"; $pink = "\e[1;35m"; $luc="\033[1;92m"; $green = "\e[1;32m"; $yellow = "\e[1;33m"; $y2 = " [0;33m"; $white = " [0;37m"; $cyan = "\e[1;36m"; $blue = "\e[1;34m"; $ngreen = " [42m"; $ngblack = " [40m"; 
system('clear');$thanhngang = $blue."────────────────────────────────────────────────────────────────\n";
$ktfile = file_exists("TDS.txt");if ($ktfile == 1){unlink('TDS.txt');}
@system('clear');

$_SESSION['check'] = file_exists("log.txt");
if ($_SESSION['check'] =='1'){
print "🌺".$red."[".$green."✓".$red."] => ".$green."Bạn Đã Đăng Nhập$cyan Trao Đổi Sub$green Trước Đó. Bấm$yellow Enter$green Để Tiếp Tục, Bấm $red No $green Để Đăng Nhập Tài Khoản Mới: ";
$_SESSION['nhap'] = trim(fgets(STDIN));
if ($_SESSION['nhap'] !='no' and $_SESSION['nhap'] != 'No' and $_SESSION['nhap'] !=''){
print $res."🌺".$red."[".$green."✓".$red."]".$res." => ".$red."Lựa Chọn Còn Cái Nịt\n";
exit;
}
if ($_SESSION['nhap'] =='no' or $_SESSION['nhap'] =='No'){
$my = fopen("log.txt", "w+");
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập Access Token TDS: ";
$tokenacc =trim(fgets(STDIN));
$arr = array("tokenacc"=> $tokenacc);
fwrite($my,json_encode($arr));
    $my = file("log.txt");
$bb = file_get_contents('log.txt');
$cc =json_decode($bb);
}
if ($_SESSION['nhap'] == ''){
$bb = file_get_contents("log.txt");
$cc =json_decode($bb);
$tokenacc = $cc->{"tokenacc"};

}
} else {
$my = fopen("log.txt","w+");
print $res."🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Nhập Access Token TDS: ";
$tokenacc =trim(fgets(STDIN));
$arr = array("tokenacc"=> $tokenacc);
fwrite($my,json_encode($arr));
}
$m = login($tokenacc);
$mm = json_decode($m);
$sss = $mm->{"success"};
if ($sss=='200'){
  print $res."🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Đăng Nhập Thành Công\n";
  // get xu
  $user = $mm->{"data"}->{"user"};
  $xuhientai = $mm->{"data"}->{"xu"};
}else{
	print $res."🌺".$red."[".$green."✓".$red."]".$res." => ".$red."Sai Access Token Trao Đổi Sub\n";
	exit; 
}
usleep(100000);
do {
@system('clear');

$khocookie = [];
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập Token Facebook.$yellow Dừng Thì Bấm Xuống Hàng Nha\n";
for($a = 1; $a < 999999;$a++){
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}

array_push($khocookie,$nhapck);
}
            
$demcki=count($khocookie);
            
print "🌺".$red."[".$green."✓".$red."] => ".$green."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
sleep(1);
} while (count($khocookie)==0);
//api tds
$urlinfo = "https://traodoisub.com/api/?fields=profile&access_token=$tokenacc";
$urllike = "https://traodoisub.com/api/?fields=like&access_token=$tokenacc";
$urlsub = "https://traodoisub.com/api/?fields=follow&access_token=$tokenacc";
$urlshare = "https://traodoisub.com/api/?fields=share&access_token=$tokenacc";
$urlcmt = "https://traodoisub.com/api/?fields=comment&access_token=$tokenacc";
system('clear');

print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập ".$do."[".$vang."1".$do."]".$luc." Để Chọn Nhiệm Vụ Like\n";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập ".$do."[".$vang."2".$do."]".$luc." Để Chọn Nhiệm Vụ Follow\n";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập ".$do."[".$vang."3".$do."]".$luc." Để Chọn Nhiệm Vụ Comment\n";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập ".$do."[".$vang."4".$do."]".$luc." Để Chọn Nhiệm Vụ Share\n";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Muốn Chọn Random Thì Ghép Số Lại Ví Dụ 1+2+n";
sleep(5);
print"                                                                           \r";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Vui Lòng Chọn Nhiệm Vụ: $vang";
$nhiemvu = trim(fgets(STDIN));
print "🌺".$red."[".$green."✓".$red."] => ".$green."Nhập Thời Gian Delay Làm Nhiệm Vụ: $vang";
$thoigianmin = trim(fgets(STDIN));
$thoigianmax = $thoigianmin;
print "🌺".$red."[".$green."✓".$red."] => ".$green."Sau Bao Nhiêu Nhiệm Vụ Thì Dừng Chống Block: $vang";
$xxxxx = trim(fgets(STDIN));
print "🌺".$red."[".$green."✓".$red."] => ".$green."Sau ".$vang.$xxxxx.$luc." Nhiệm Vụ Nghỉ Ngơi Bao Nhiêu Giây: $vang";
$delaybl = trim(fgets(STDIN));
print "🌺".$red."[".$green."✓".$red."] => ".$green."Chuyển Nick Sau Bao Nhiêu Nhiệm Vụ: $vang";
$doinick = trim(fgets(STDIN));
print "🌺".$red."[".$green."✓".$red."] => ".$green."Chạy Bao Nhiêu Nhiệm Vụ Rồi Dừng Tool: $vang";
$dungtool = trim(fgets(STDIN));
sleep(1);
system('clear');

for($i = 0; $i < strlen($thanhnang); $i++){print $thanhnang[$i];usleep(10000);}
print "🌺".$red."[".$green."✓".$red."] => ".$green."Tài Khoản: ".$vang.$user."\n";
print "🌺".$red."[".$green."✓".$red."] => ".$green."Xu Hiện Tại: ".$pink.$xuhientai."\n";
$thanhnang = $blue."────────────────────────────────────────────────────────────────\n";
for($i = 0; $i < strlen($thanhnang); $i++){print $thanhnang[$i];usleep(10000);}
while(true){
  if(count($khocookie) == 0){
    
    print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Nhập Token Facebook.$yellow Dừng Thì Bấm Xuống Hàng Nha\n";
for($a = 1; $a < 999999;$a++){
print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Nhập Token Thứ $a: $vang";
$nhapck = (string)trim(fgets(STDIN));
if($nhapck == ''){break;}
array_push($khocookie,$nhapck);
    }
$demcki=count($khocookie);
print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Bạn Đã Nhập ".$vang.$demcki." ".$luc."Token Facebook\n";
  }
  $themtk = 0;
  for($xz=0;$xz<count($khocookie);$xz++){
 if ( $themck == 1){ break; }
 $access_token = $khocookie[$xz];

if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
    print "\r";
    print "                                                      \r";
    print "🌺".$red."[".$green."✓".$red."]".$res." => ".$red."Token Die\n";
    array_splice($khocookie,$xz,1);
    continue;
}
$tenfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'name'};
$idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))-> {'id'};
$urlcauhinh = "https://traodoisub.com/api/?fields=run&id=$idfb&access_token=$tokenacc";
$cauhinh = api($urlcauhinh);
if ($cauhinh["data"]["msg"] == "Cấu hình thành công!") {
    print "🌺".$red."[".$green."✓".$red."] => ".$green."Đang Cấu Hình $vang".$tenfb."\n";

} else {
    print "🌺".$red."[".$green."✓".$red."] => ".$red."Cấu Hình Thất Bại Có Thể Do Bạn Chưa Thêm$tenfb Vào Cấu Hình\n";
    exit;
}
$spam = 0;
$stt = 0;
$count_like = 0;
$count_share = 0;
$count_sub = 0;
$count_cmt= 0;
while (true) {
    if ($spam == 1) {
        break;
    }
    //listlike
    if (strpos($nhiemvu, '1') !== false) {
        $listlike = api($urllike);
        if (count($listlike) == 0) {
          print "🌺".$red."[".$green."✓".$red."] => ".$green."Hết Nhiệm Vụ Like\r";
        }
    }
    //listfollow
    if (strpos($nhiemvu, '2') !== false) {
         $listsub = api($urlsub);
        if (count($listsub) == 0) {
          print "🌺".$red."[".$green."✓".$red."] => ".$green."Hết Nhiệm Vụ Follow\r";
        } 
    }

    //listcmt
    if (strpos($nhiemvu, '3') !== false) {
          $listcmt = api($urlcmt);
        if (count($listcmt) == 0) {
          print "🌺".$red."[".$green."✓".$red."] => ".$green."Hết Nhiệm Vụ Comment\r";
        }
    }
    //share
    if (strpos($nhiemvu, '4') !== false) {
            $listshare = api($urlshare);
            if (count($listshare) == 0) {
          print "🌺".$red."[".$green."✓".$red."] => ".$green."Hết Nhiệm Vụ Share\r";
        }
    }

    for ($lap = 0; $lap < 20; $lap++) {
        // like
        if ($listlike != NULL) {
            $idlike = $listlike[$lap]["id"];
            if ($idlike != '') {
              $stt++;
                $g = like($access_token, $idlike, $cookie);
            if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print "🌺".$red."[".$green."✓".$red."] => ".$green."\033[1;91mĐợi 5s Check Xem Có Block Ảo Không\r";
sleep(5);
              $blao = like($access_token,'10103832396388711', $cookie);
              if ($blao -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
  $nhanlike = nhantien('LIKE', $idlike, $tokenacc);
                if ($nhanlike["success"] == 200) {
                    $xu = $nhanlike["data"]["xu"];
                    $xujob = $nhanlike["data"]["msg"];
                    $dem++;
                    
                    hoanthanh($dem, ' LIKE ', $idlike, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
  print "🌺".$red."[".$green."✓".$red."] => ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }else{
                  
                  $count_like = $count_like + 1;
                }
            }}
        //follow
        if ($listsub != NULL) {
            $idsub = $listsub[$lap]["id"];
            if ($idsub != '') {
              $stt++;
                $g = follow($access_token, $idsub, $cookie);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."\033[1;91mĐợi 10s Check Xem Có Block Ảo Không\r";
sleep(15);
              $blao = follow($access_token,'4', $cookie);
              if ($blao -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
              
                $nhansub = nhantien('FOLLOW', $idsub, $tokenacc);
                if ($nhansub["success"] == 200) {
                    $xu = $nhansub["data"]["xu"];
                    $xujob = $nhansub["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, 'FOLLOW', $idsub, $xujob, $xu);
                    if ( $dem >= $dungtool ){
    
	$dungtool = 999999;
  print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
  exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }  else{
                  $count_sub = $count_sub + 1;
                }
            }}
      
  //share
            if ($listshare != NULL) {
                $id = $listshare[$lap]["id"];
                  if ($id != '') {
                    $stt++;
                    $g = share($access_token, $id);
                    if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."\033[1;91mĐợi 5s Check Xem Có Block Ảo Không\r";
sleep(5);
              $blao = share($access_token,'10103832396388711');
              if ($blao -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                        $nhanshare = nhantien('SHARE', $id, $tokenacc);
                        if ($nhanshare["success"] == 200) {
                            $xu = $nhanshare["data"]["xu"];
                            $xujob = $nhanshare["data"]["msg"];
                            $dem++;
                            hoanthanh($dem, 'SHARE', $id, $xujob, $xu);
                            if ( $dem >= $dungtool ){
	$dungtool = 999999;
    print "🌺".$red."[".$green."✓".$red."]".$res." => ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                            if($dem % $doinick == 0){
                              if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                            }
                            if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }else{
                  
                  $count_share = $count_share + 1;
                }
                  }}
        //cmt
        if ($listcmt != NULL) {
            $idcmt = $listcmt[$lap]["id"];
            $msg = $listcmt[$lap]["msg"];
            if ($idcmt != '') {
              $stt++;
                $g = cmt($access_token, $idcmt, $cookie, $msg);
                if ($g -> {'error'} -> {'code'} == 190) {
            if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){}else{
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."]".$res." => ".$red."Token Die\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1; break;
              }
                }
                if ($g -> {'error'} -> {'code'} == 368) {
print "🌺".$red."[".$green."✓".$red."] => ".$green."\033[1;91mĐợi 10s Check Xem Có Block Ảo Không\r";
sleep(15);
              $blao = cmt($access_token,'10103832396388711', $cookie,'Nông Hoàng Vũ');
              if ($blao -> {'error'} -> {'code'} == 368) {
                  print "\r";
       print "                                                      \r";
                    print "🌺".$red."[".$green."✓".$red."] => ".$g-> {'error'}-> {'message'};
                    print "\n";
                    array_splice($khocookie,$xz,1);
                    $spam = 1;
                    break;
                }}
                
                $nhancmt = nhantien('COMMENT', $idcmt, $tokenacc);
                if ($nhancmt["success"] == 200) {
                    $xu = $nhancmt["data"]["xu"];
                    $xujob = $nhancmt["data"]["msg"];
                    $dem++;
                    hoanthanh($dem, ' CMT  ', $idcmt, $xujob, $xu);
                    if ( $dem >= $dungtool ){
	$dungtool = 999999;
    print "🌺".$red."[".$green."✓".$red."] => ".$green."Chạy Tool Hoàn Thành Tổng Xu: ".$vang.$xu."\n";
    exit;
 }
                    if($dem % $doinick == 0){
                      if (count($khocookie)>1){
                      $spam = 1; break;
                      }
                    }
                    if($dem % $xxxxx == 0){
                      delay2($delaybl);
                    }
                    
                    $delay = rand($thoigianmin, $thoigianmax);    
                    delay($delay);
                }else{
                  
                  $count_cmt = $count_cmt + 1;
                }
            }}
     
       
    
    }
}}}
function api($url) {
    $head = array(
        "Host: traodoisub.com",
        "cache-control: max-age=0",
        "upgrade-insecure-requests: 1",
        "user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/E7FBAF",
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
function follow($access_token,$id,$cookie){
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
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
	curl_setopt($ch, CURLOPT_POST,count($data));
	curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
	$access = curl_exec($ch);
	curl_close($ch);
	return json_decode($access);
}


function share($access_token,$id) {
 $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => '',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);                                    
curl_close($ch);
   return $a;
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
	$today=date('H:i:s');
$hảird = rand(2,7);
$mau12221 = "\033[1;9".$hảird."m";

$a = " \e[10;657;50m\033[1;36m『$vang$dem\033[1;36m』 \033[1;31m● \033[1;35m$mau12221".$tim.date("H:i:s")." \033[1;31m ● $mau".$type."\033[1;91m ● \033[1;92m".$id."\033[1;91m ●\033[1;32m $xujob \033[1;31m● \033[1;37m".$xu.""."\033[1;90m\e[0m\n";
$len = strlen($a);
print "\r";
       print "                                                      \r";
    for ($x = 0; $x < $len; $x++) {
        print $a[$x];
        usleep(100);
    }
}
function delay($delay) {$time = $delay; for ( $x = $time; $x--; $x ) {print "\r\033[1;93m   Hello_Vu \033[1;91m ~>       \033[1;92m LO      \033[1;91m | $x | "; usleep(150000); print "\r\033[1;91m   Hello_Vu \033[0;33m   ~>     \033[0;37m LOA     \033[0;31m | $x | "; usleep(150000); print "\r\033[1;92m   Hello_Vu \033[0;33m     ~>   \033[0;37m LOAD    \033[0;31m | $x | "; usleep(150000); print "\r\033[1;94m   Hello_Vu \033[0;33m       ~> \033[0;37m LOADI   \033[0;31m | $x | "; usleep(150000); print "\r\033[1;95m   Hello_Vu \033[0;33m        ~>\033[0;37m LOADIN  \033[0;31m | $x | "; usleep(150000); print "\r\033[1;95m   Hello_Vu \033[0;33m        ~>\033[0;37m LOADING \033[0;31m | $x | "; usleep(150000); print "\r\033[1;95m   Hello_Vu \033[0;33m        ~>\033[0;37m LOADING.\033[0;31m | $x | ";usleep(150000); print "\r\e[1;95m    Hello_Vu                       \r";}}

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
function login($tokentds){
  $login = file_get_contents("https://traodoisub.com/api/?fields=profile&access_token=".$tokentds);
  return $login;
}

function hảidepchai(){$do="\033[1;91m"; $luc="\033[1;92m"; $end="\033[0m"; $black="\033[0;30m"; $blackb="\033[1;30m"; $white="\033[0;37m"; $ver="1.0"; $green="\033[1;32m"; $wait = $green."WAIT"; $res="\033[0m"; $red="\033[1;31m"; $yellow="\033[0;93m"; $lightblue="\033[1;35m"; $bluelight="\033[1;34m"; $blue="\033[1;36m"; $purple="\e[35m"; $maufulldo = "\e[1;47;31m"; $res = " [0m"; $red = "\e[1;31m"; $pink = "\e[1;35m"; $luc="\033[1;92m"; $green = "\e[1;32m"; $yellow = "\e[1;33m"; $y2 = " [0;33m"; $white = " [0;37m"; $cyan = "\e[1;36m"; $blue = "\e[1;34m"; $ngreen = " [42m"; $ngblack = " [40m"; $thanhngang = $blue."────────────────────────────────────────────────────────────────\n"; $fuction = "\n\n  \33[1;32m██████╗ \33[1;32m██╗  ██╗\33[1;34m █████╗\33[1;36m ███╗  ██ \33[1;34m ██████╗\n  \33[1;31m██╔══██╗\33[1;33m██║  ██║\33[1;32m██   ██╗\33[1;34m████╗ ██ \33[1;33m██╔════╝\n  \33[1;33m██████╔╝\33[1;35m███████║\33[1;31m██   ██║\33[1;31m██╔██╗██ \33[1;32m██║  ██╗\n  \33[1;37m██╔═══╝ \33[1;37m██╔══██║\33[1;32m██   ██║\33[1;33m██║╚████ \33[1;32m██║  ╚██╗\n  \33[1;35m██║     \33[1;31m██║  ██║\33[1;31m╚█████╔╝\33[1;32m██║ ╚███ \33[1;36m╚██████╔╝\n\33[1;33m  ╚═╝     \33[1;36m╚═╝  ╚═╝ \33[1;34m╚════╝ \33[1;34m╚═   ╚══╝\33[1;35m ╚═════╝\n"; $bluelight="\033[1;34m";$blue="\033[1;36m";date_default_timezone_set("Asia/Ho_Chi_Minh"); $res="\033[0m"; $red="\033[1;31m"; $lime="\033[1;32m"; $cyan="\033[1;36m"; $yellow="\033[1;33m"; $turquoise="\033[1;34m"; $hải="\033[1;35m"; $white= "\033[1;37m"; system('clear'); $max='n'; $dem = 0; $thanhngang = $blue."────────────────────────────────────────────────────────────────\n";$do ="\033[1;91m"; $trang ="\033[1;97m"; $vang ="\033[1;93m"; $luc="\033[1;92m"; $xanhduong="\033[1;94m"; $xduong="\033[1;96m"; $hong="\033[1;95m";$thanhvanh=$vang."===============================================================\n";$dem = 0; for($i = 0; $i < strlen($fuction); $i++){print $fuction[$i];usleep(1000);} for($i = 0; $i < strlen($thanhngang); $i++){print $thanhngang[$i];usleep(1000);} print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\e[1;42;91m Tool Trao Đổi Sub Đa Cookie\e[0m\033[1;37m\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;34m B\xe1\xba\xa3n Quy\xe1\xbb\x81n \33[1;32m: Hello_Vu\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;33m Facebook.com/vip.profile.8\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;34m Zalo : 0948658716\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;31m \xe1\xbb\xa6ng H\xe1\xbb\x99 T\xc3\xb4i T\xe1\xba\xa1i Momo  : 0385695813 (H\xc3\xa0 V\xc4\x83n Vu)\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;32m Th\xe1\xba\xbb Si\xc3\xaau R\xe1\xba\xbb : bomelanhat0946491582@gmail.com\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[1;34m Vu Ch\xc3\xbac Anh Em 1 Ng\xc3\xa0y C\xc3\xa0y Th\xe1\xba\xadt Nhi\xe1\xbb\x81u Xu\n"; print "\33[0m\xf0\x9f\x8c\xba\33[1;31m[\33[1;32m\xe2\x9c\x93\33[1;31m]\33[0m =>\33[35m Tools N\xc3\xb3i Kh\xc3\xb4ng V\xe1\xbb\x9bi Key Log\n"; for($i = 0; $i < strlen($thanhngang); $i++){print $thanhngang[$i];usleep(1000);}}
function delay2($time){$do ="\033[1;91m"; $trang ="\033[1;97m"; $vang ="\033[1;93m"; $luc="\033[1;92m"; $xanhduong="\033[1;94m"; $xduong="\033[1;96m"; $hong="\033[1;95m"; for($j = $time;$j> 0;$j--){ print "\r".$do."~"."[".$trang."|".$do."]".$do." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$do."/".$do."]".$trang." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$vang."-".$do."]".$luc." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$hong."\\".$do."]".$vang." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$xangduong."|".$do."]".$hong." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$xduong."/".$do."]".$xduong." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$luc."-".$do."]".$xanhduong." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "\r".$do."~"."[".$vang."\\".$do."]".$vang." Vui Lòng Đợi $j Giây\r"; usleep(125000); print "                                                      \r";}}

?>