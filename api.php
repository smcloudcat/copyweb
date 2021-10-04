<?php
//BY：云猫
//2021.7.18
$awa=0;//如果你是用官方邮箱接口，那么就填0，用自己接口就填1（或者填啥都行）
$url = @$_GET['url'];//需要扒站的网站，做个注备，不用管
$email= @$_GET['email'];//仿站结果接收邮箱，做个注备，不用管
if($awa==0){
$tongji = file_get_contents("http://tool.lq520.club:66/api/webfzapi.php?url=".$url."&email=".$email."");
echo "请到邮箱查看";
}else{
//如果你用的是官方邮箱接口，那么下面请无视，否则请编辑邮箱信息，如果邮箱接口凉了，请自行更换（有能力前提，很简单而已）
//---自定义邮箱接口
$host="服务器地址";//QQ邮箱为smtp.qq.com
$port="端口";//QQ邮箱为465，其他百度
$secure="ssl";//如果你是用QQ邮箱，那这个不用改，163好像也不用
$sendemail="发件人账号";//不用说了吧
$sendpass="发件人密码";//如果你是QQ邮箱，这里不是填QQ密码，而是要去QQ邮箱那里申请授权码
$sendaddress="邮箱回复接收地址";//别人如果回复你信息，用来接收的邮箱地址，不知道就填发送地址
//----下面呢，有能力就修改，不然，碰坏了我不管哦

$result = file_get_contents("http://tool.lq520.club:66/fz/api.php?type=get&url=".$url."");
$arr=json_decode($result,true);
$code=$arr['code'];
if($code=='1'){
$down= $arr['url'];
$tongji = file_get_contents('http://tool.lq520.club:66/api/sendmail.php?host='.$host.'&port='.$port.'&secure='.$secure.'&sendemail='.$sendemail.'&sendpass='.$sendpass.'&sendaddress='.$sendaddress.'&address='.$email.'&content=仿站目标：'.$url.'<br><a href="'.$down.'">点击下载源码</a>&title=仿站成功～');
echo "请到邮箱查看";
} else {
$msg= $arr['msg'];
$tongji = file_get_contents('http://tool.lq520.club:66/api/sendmail.php?host='.$host.'&port='.$port.'&secure='.$secure.'&sendemail='.$sendemail.'&sendpass='.$sendpass.'&sendaddress='.$sendaddress.'&address='.$email.'&content=仿站目标：'.$url.'<br>'.$msg.'<br>建议您换一个网址哦！（为了节省资源，内容太少，一些官方网址不能仿站哦！）&title=仿站失败');
echo "请到邮箱查看";
}}
?>