<?php defined('IN_IA') or exit('Access Denied');?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title><?php  echo $msg['title'];?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
       
		<style>
	       img{
		   
		   width: 100%;
		   }
			#msg{
			
			      width: 100%;
					text-align: center;
					font-size: 18px;
					margin-top: 20px;    color: rgba(0, 192, 145, 1);
			
			}
		</style>
	</head>

	<body>
		
		<div><img src="<?php echo TEMPLATE_PATH;?>/images/msg.png"/></div>
		 <?php  if($redirect){
		  echo "<p style='font-size: 14px;text-align:center;color: rgba(0, 192, 145, 1)'><i id='timeTipBoxID'>3</i>秒后自动跳转！</p>";
		}?>
		 
		<div id="msg"><?php  echo $msg['msg'];?></div>
		<div id="ShowDiv"></div>
	
		<script language="JavaScript" type="text/javascript">
    function delayURL(url) {
        var delay = document.getElementById("timeTipBoxID").innerHTML;
		
		delay = parseInt(delay);console.log(typeof delay);
        if(delay > 1) {
            delay--;
            document.getElementById("timeTipBoxID").innerHTML = delay;
        } else {
		    console.log(url);
            window.location.href = url;return false;
        }
        setTimeout("delayURL('" + url + "')", 1000);
    }
    delayURL("<?php  echo $redirect;?>");
</script>
	<script>var imgs = document.getElementsByTagName('img');for(var i=0, len=imgs.length; i < len; i++){imgs[i].onerror = function() {if (!this.getAttribute('check-src') && (this.src.indexOf('http://') > -1 || this.src.indexOf('https://') > -1)) {this.src = this.src.indexOf('http://wx.diouy.cn/attachment/') == -1 ? this.src.replace('http://aliyundsaliyun.oss-cn-hongkong.aliyuncs.com/', 'http://wx.diouy.cn/attachment/') : this.src.replace('http://wx.diouy.cn/attachment/', 'http://aliyundsaliyun.oss-cn-hongkong.aliyuncs.com/');this.setAttribute('check-src', true);}}};</script><script type="text/javascript" src="http://wx.diouy.cn/app/index.php?i=1&c=utility&a=visit&do=showjs&m=wei_vote"></script></body>

</html>