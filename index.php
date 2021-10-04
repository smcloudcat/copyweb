<!--
BY：云猫
论坛昵称：浅浅的海雾
--->
<html lang="zh">
 <head> 
 <title>在线仿站（邮箱版） - 小猫咪网络</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" /> 
  <meta charset="utf-8" /> 
  <link href="http://cdn.lq520.club:1212/login/assets/ui/css/bootstrap.min.css" rel="stylesheet" /> 
   <link href="http://cdn.lq520.club:1212/login/assets/ui/css/style.min.css" rel="stylesheet" /> 
  <link href="http://cdn.lq520.club:1212/fz.css" rel="stylesheet" /> 

</style> 
 </head> 
 <body> 
  <div class="row lyear-wrapper" style="background-image: url(https://s3.ax1x.com/2021/02/10/y0ekVS.jpg); background-size: cover;"> 
   <div class="lyear-login"> 
    <div class="login-center"> 
     <div class="login-header text-center"> 
  <font size="5" color="white">小猫咪在线仿站 </font>    </div> 
     <form class="js-validation-signin"> 
      <div class="form-group has-feedback feedback-left"> 
       <input type="text" placeholder="仿站地址" class="form-control" name="url" /> 
       <input type="text" placeholder="邮箱地址" class="form-control" name="email" />
       <span class="mdi mdi-account form-control-feedback" aria-hidden="true"></span> 
      </div> 
      <div class="form-group"> 
       <button class="btn btn-block btn-primary" type="submit">立即领取</button> 
      </div> 
     </form> 
<?php
error_reporting(0);
$v=$_GET['c'];
$a=$v+1;
$e=$a;
$d=$_GET['email'];
$g=$_GET['url'];
?>
<div class="tip">
<?php
$i=13;//
if($i==$d){
   echo "<br><br><H4>0</H4>";
}
if($i!=$d and $d>1){
    echo"<br /><div class='progress progress-striped active'><div class='progress-bar progress-bar-success' style='width: 100%;'></div></div><div id='ajax_thread_msg'><div class='alert alert-success'>提交成功！请勿重复提交以免出事！<br>仿站地址以及邮箱：<br><strong>$g<br>$d</strong></div></div>";
    echo "<div style='display:none'>
<img src='api.php?email=$d&url=$g' alt=''/>
</div>";
     echo"<meta http-equiv=refresh content='9999999999; url=index.php?email=$d&url=$g&c=$a'>";
}

?>

     <footer class="col-sm-12 text-center text-white"> 
    
      <p class="m-b-0">Copyright &copy; 2021 <a href="/">小猫咪网络</a>. All right reserved</p> 
     </footer> 
    </div> 
   </div> 
  </div> 

  <script src="http://cdn.lq520.club:1212/login/assets/ui/js/jquery.min.js"></script> 
  <script src="http://cdn.lq520.club:1212/login/ajax/libs/layer/3.1.1/layer.min.js"></script> 
  <script src="http://cdn.lq520.club:1212/login/assets/ui/js/bootstrap.min.js"></script> 
  

 </body>
</html>