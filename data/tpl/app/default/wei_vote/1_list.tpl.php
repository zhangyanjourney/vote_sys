<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_head_top', TEMPLATE_INCLUDEPATH)) : (include template('common_head_top', TEMPLATE_INCLUDEPATH));?>
<script type="text/javascript" src="<?php  echo $_W['siteroot'];?>app/resource/js/lib/mui.min.js?v=20170802"></script>


	<link href="<?php  echo $_W['siteroot'];?>app/resource/css/common.min.css?v=20170802" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/conn.css">
    <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/list.css">
	<link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>js/sweetalert.css">
	 
</head>
<body>
<style>
.photo-but a {
    <!-- background: #87D7DC; -->
    color: #fff;border-radius: 3px
}
.photo-myvote {
   
    <!-- background:#87D7DC; -->
	border-radius: 3px

}
.paim-1,.paim-2 {
    <!-- background: #87D7DC; -->
	  
}



#daojishi{

       background: #F64343;
border-radius: 3px
}
#paim {
    padding: 10px;

    background: #fff;
	border-radius: 3px
}


</style>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_head', TEMPLATE_INCLUDEPATH)) : (include template('common_head', TEMPLATE_INCLUDEPATH));?>
<style>
#hour_show,#minute_show,#second_show{
color:#fff;

}
#Children .Children-ul li {
    width: 16%;

}

.fdfdfdf {
    height: 40px;
    line-height: 40px;
    width: 100%;
    text-align: center;
    background: #f25959;
    margin-top: 10px;
}
.fdfdfdf a{

 overflow:hidden;
 display:block;color:#fff;
 

}





.ui-panel {
    <!-- background-color: #fff; -->
}
.ui-panel {
    overflow: hidden;
     margin-bottom: 10px;
}


.list-title {
       padding: 18px 0 0px 0;
}


.list-title .tit {
    width: 181px;
    height: 32px;
    background: url(<?php echo TEMPLATE_PATH;?>/images/title.png) no-repeat;
    background-size: 181px auto;
    margin: 0 auto;
    font-size: 18px;
    color: #fff;
    line-height: 28px;
    text-align: center;
    margin-bottom: 5px;
}


#vote {
    overflow: hidden;
    background: #fff;
    margin-top: 0.01px;
}

</style>



  <style>
  
  @media only screen and (max-width: 767px)
	.play_gift {
		position: relative;
		border: 0;
		padding: 25px 0;
	}
  
  @media only screen and (max-width: 767px)
.play_gift:before {
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 10px;
    background-color: #f6f6f6;
    border-top: 1px solid #efefef;
    border-bottom: 1px solid #efefef;
}
  
  @media only screen and (max-width: 767px)
.play_gift__title {
    display: block;
    font-size: 16px;
    padding: 0 10px 5px;
}

.play_gift__title {
    display: none;
}
h1, h2, h3, h4, h5, h6 {
    font-size: 100%;
    font-weight: 400;
}
 @media only screen and (max-width: 767px)
.play_gift__rank {
    height: 73px;
}
.play_gift__rank {
    position: relative;
    height: 93px;
    overflow: hidden;
    color: grey;
}

.clear_fix {
    zoom: 1;
}

@media only screen and (max-width: 767px)
.play_rank__item {
    float: left;
    width: auto;
    margin: 0 7px 0 10px;
    padding: 10px 0;
    text-align: center;
}
.play_rank__item {
    float: left;
    width: 15.4%;
    padding: 10px 0;
    text-align: center;
}

.mod_wrap a:hover {
    text-decoration: none;
}
@media only screen and (max-width: 767px)
.play_rank__img {
    width: 40px;
    height: 40px;
}
.play_rank__img {
    position: relative;
    display: block;
    width: 50px;
    height: 50px;
    margin: 0 auto;
}
.play_rank__img img {
    display: block;
    width: 100%;
    height: 100%;
    border-radius: 100%;
}
 .play_rank__count {
    text-align: center;
    padding-top: 5px;
}

.play_gift__more {
    display: block;
    position: absolute;
    right: 0;
    top: 0;
    padding: 22px 12px;
}

.icon_gray_right {
    background-image: url(<?php echo TEMPLATE_PATH;?>images/index.png?max_age=2592000&v=ee20b28d71165fb9fb637b091de95391);
    background-position: -314px -236px;
    width: 8px;
    height: 12px;
    vertical-align: -1px;
}
.icon {
    display: inline-block;
    font-size: 0;
    line-height: 0;
}

.play_gift__rank {
    position: relative;
    height: 93px;
    overflow: hidden;
    color: grey;
}



.dingwen{
    position: fixed;
    top: 25%;
    right: 10%;
    z-index: 2000;
    width: 80%;
    background: #FFF;
    border-radius: 5px;
    border: 10px solid #fff;
  <!-- background:red; -->


}

.votets {
    position: fixed;
    top: 10%;
    z-index: 2000;
    font-size: 1.2em;
    font-weight: bold;
    color: #fff;
    text-align: center;
    width: 100%;
    text-shadow: 0 2px 3px #000;
}

.mui-backdrop {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 998;
    background-color: rgba(0,0,0,.5);
}

  </style>



<script type="text/javascript">
var cc = <?php  echo strtotime($this->settings[0]['endtime'])-time();?>;
var intDiff = parseInt(cc);//倒计时总秒数量

function timer(intDiff){
	window.setInterval(function(){
	var day=0,
		hour=0,
		minute=0,
		second=0;//时间默认值		
	if(intDiff > 0){
		day = Math.floor(intDiff / (60 * 60 * 24));
		hour = Math.floor(intDiff / (60 * 60)) - (day * 24);
		minute = Math.floor(intDiff / 60) - (day * 24 * 60) - (hour * 60);
		second = Math.floor(intDiff) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
	}
	if (minute <= 9) minute = '0' + minute;
	if (second <= 9) second = '0' + second;
	$('#day_show').html(day+"天");
	$('#hour_show').html('<s id="h"></s>'+hour+'时');
	$('#minute_show').html('<s></s>'+minute+'分');
	$('#second_show').html('<s></s>'+second+'秒');
	intDiff--;
	}, 1000);
} 

$(function(){
	timer(intDiff);
});	
</script>


<script>



function call(){
var mask = mui.createMask();//callback为用户点击蒙版时自动执行的回调；
mask.close();//关闭遮罩
					   $(".zhe").hide();
}
</script>

<div class="zhe" style="display:none">
	<div class="voteadd dingwen" onclick="location='<?php  echo $this->settings[0]['advurl']?>&id=<?php  echo $account['id'];?>&hdid=<?php  echo $_GPC['hdid'];?>'">
		<img src="<?php  echo tomedia($this->settings[0]['advimg'])?>" class="adimg" width="100%">
		<p class="adtext"><?php  echo $this->settings[0]['advwenzi']?></p>
	</div>

	<div class="votets ">投票成功，今天您还可以投5票。</div>
</div>

    <div id="paim">
      <div class="paim-bt">
        	<div class="paim-1 lef">
        		<span class="paim-1-spa">票数</span>
        		<span class="paim-1-spb piao"><?php  echo $account['piao'];?></span>
        	</div>
          <div class="paim-2 rig ">
            <span class="paim-1-spa">排名</span>
            <span class="paim-1-spb"><?php  echo ($z_total+1); ?></span>
          </div>
      </div>
	<!-- <div class="fdfdfdf" style="background-color:#EDA671;">
        <a href="<?php  echo $this->createMobileUrl('weiindex',array('type'=>'uids','hid'=>$_GPC['hid']))?>"><span id="">我也要参加</span></a>
         
      </div> -->
	  
      <div class="paim-content">
   <!-- <p style="text-align:center"><?php  echo $account['name'];?></p> -->
        <p style="text-align:center"><span><strong class="dataid"><?php  echo $account['bh'];?></strong>号<strong><?php  echo $account['name'];?></strong></span></p>
		<div id="daojishi" style=" WIDTH: 100%;  color:#fff;FONT-FAMILY: arial; TEXT-ALIGN: center;">
    <P style="font-size:.8em;line-height:2em; color:#fff">距活动结束还有：</P>

	
	<div class="time-item">
	<span id="day_show">0天</span>
	<strong style ="color:#fff;font-size:14px"  id="hour_show">0时</strong>
	<strong style ="color:#fff;font-size:14px" id="minute_show">0分</strong>
	<strong style ="color:#fff;font-size:14px" id="second_show">0秒</strong>
</div>
</div>

		
        <p>介绍:<?php  echo html_entity_decode($account['feifa'], ENT_QUOTES)?></p>
		<p></p>
		
		 <?php  if($this->settings[0]['zidingyi1'] != '') { ?>
				
				  
				  
				   <p><?php  echo $this->settings[0]['zidingyi1']?>：<?php  echo $account['zidingyi1'];?></p>
			<?php  } else { ?>
			
			<?php  } ?>
		 <?php  if($this->settings[0]['zidingyi2'] != '') { ?>
				
				  
				  
				   <p><?php  echo $this->settings[0]['zidingyi2']?>：<?php  echo $account['zidingyi2'];?></p>
			<?php  } else { ?>
			
			<?php  } ?>
 <?php  if($this->settings[0]['zidingyi3'] != '') { ?>
				
				  
				  
				   <p><?php  echo $this->settings[0]['zidingyi3']?>：<?php  echo $account['zidingyi3'];?></p>
			<?php  } else { ?>
			
			<?php  } ?>
		
      </div>
    </div>
    <div id="photo">
    
       
      <ul class="photo-Child">
	           <?php 
					$he = (explode(",",$account['tupian'])); 

					for($i=0;$i<count($he)-1;$i++){ 
					$f = $he[$i];
					$f = str_replace("&quot;","",$f);
					$f =  htmlspecialchars_decode($f);
					$f = stripslashes($f);
					//$f = 'images/'.$f;
					
					echo "<li><img src='".tomedia($f)."'></li>";
					} 


					?>   
	  
             
			  
	  </ul>
	  <?php  
         $houzhou = substr($account['zidingyi4'], -3);

	  ?>
            <?php  if($this->settings[0]['zidingyi4'] != ''&&$account['zidingyi4'] != ''&&$houzhou=='mp4') { ?>
				
				  <div width="100%" height="100%" >
					<video  width="100%" height="100%" id="playVideo" src="<?php  echo $account['zidingyi4'];?>" controls="controls">
					your browser does not support the video tag
					</video>
					
				 </div>
				  
			<?php  } else { ?>
				<div width="394px" height="221px" style="overflow:hidden">	
				  <?php  echo html_entity_decode($account['zidingyi4'], ENT_QUOTES)?>
				 
				</div>
			<?php  } ?>	
		
		<?php  echo html_entity_decode($account['shuoming'], ENT_QUOTES)?>
		
		<style>
		iframe{
			width:100%;
			height:221px;
		  
		}
		
		</style>
      <div class="photo-but">
         <a class="photo-but-list" href="<?php  echo $this->createMobileUrl('voindex',array('type'=>'uids','hdid'=>$_GPC['hdid']))?>">查看列表</a>
         <a class="photo-but-Share" href="javascript:;" ontouchstart="" onclick="javascript:showCover();">分享好友</a>
      </div>
	  <!--  <div class="photo-myvote" style="background-color:#EDA671;">
        <a href="<?php  echo $this->createMobileUrl('weiindex',array('type'=>'uids'))?>"><span id="">我也要参加</span></a>
         
      </div> -->
	  <?php  if($this->settings['0']['yaz'] == 1) { ?>
		<div onclick="toupiao2(<?php  echo $_GPC['id'];?>,'<?php  echo $_W['openid'];?>')" class="photo-myvote">
		<?php  } else { ?>
		<div onclick="toupiao(<?php  echo $_GPC['id'];?>,'<?php  echo $_W['openid'];?>')" class="photo-myvote">
	  <?php  } ?>
     
      <i class="tup"><img src="<?php echo TEMPLATE_PATH;?>images/07.png"></i><span id="toupiao" style="color:#fff">为我投票</span>
         
      </div>
    </div>
	<?php  if($this->settings[0]['isliwu'] == 1 &&!empty($liwujilu)) { ?>
	
		  <div id="wrap">
			  <div class="arrow"></div>
			  <p class="wrap-p">最新送礼物好友</p>
			</div>
			<!-- <div id="Children">
			  <ul class="Children-ul">
			  <?php  if(is_array($liwujilu)) { foreach($liwujilu as $it) { ?>
			  <?php  if($it['avatar']){ ;?>
				   <li><img src="<?php  echo $it['avatar'];?>"><p><?php echo $it['nickname']?$it['nickname']:'匿名';?></p><p><?php  echo $it['jiner']?>点</p></li> 
			  <?php  } ;?>
				
			  <?php  } } ?>	
				
			  </ul>
			</div> -->
			
			
				<div class="play_gift">      
				  <h4 class="play_gift__title">礼物榜</h4>
				<div class="play_gift__rank"  style="height: 75px;" onClick="location.href='<?php  echo $this->createMobileUrl('Liwubang',array('id'=>$_GPC['id'],'hdid'=>$_GPC['hdid']))?>'">


				  <ul class="play_rank__list clear_fix">
					<li class="play_rank__item">
					  
					  <a href="javascript:;" class="play_rank__img">
						<img src="//y.gtimg.cn/mediastyle/kge_v2/img/gift_default.png?max_age=2015122900" alt="头像">
					  </a>
					  <p class="play_rank__count"><?php  echo $liwu_total;?></p>
					  
				</li>
				 <?php  if(is_array($liwujilu)) { foreach($liwujilu as $it) { ?>
				
				<li class="play_rank__item">
				  <a href="#" class="play_rank__img">
					<img src="<?php  echo $it['avatar']?>" alt="头像">
					<span class="icon icon_crown1"></span>
				  </a>
				  <!-- <p class="play_rank__count"><?php  echo $it['jiner']?></p> -->
				</li>
			   <?php  } } ?>	
				
			  
					
				  </ul>
				  <a href="javascript:" class="play_gift__more" data-hottag="play_gift__more" data-luopan="248,248018,248018007">
					<span class="icon icon_gray_right"></span>
				  </a>
				</div>
    
      </div>
	
	
	<?php  } else { ?>
	
	         <div id="wrap">
				  <div class="arrow"></div>
				  <p class="wrap-p">最新帮我投票的微友：当前票数<strong class ="piao"><?php  echo $account['piao'];?></strong></p>
				</div>
				<div id="Children">
				  <ul class="Children-ul">
				  <?php  if(is_array($zhi)) { foreach($zhi as $it) { ?>
				  <?php  if($it['avatar']){ ;?>
					   <li><img src="<?php  echo $it['avatar'];?>"><p><?php echo $it['nickname']?$it['nickname']:'匿名';?></p></li> 
				  <?php  } ;?>
					
				  <?php  } } ?>	
					
				  </ul>
				</div>
	
	
	
	<?php  } ?>
	


	
	 <?php  if($peiz[0]['huodong_sm'] != '') { ?>
         <div id="Voting">
        <!-- <div class="Voting-title"> ——立刻报名 ——</div> -->
		
		<section id="free-read" class="ui-panel">         
			<div class="list-title">             
			    <div class="tit">活动说明</div>            
			    
			</div>        
	
		</section>
        <div class="Voting-Content">
           <?php  echo html_entity_decode($peiz[0]['huodong_sm'], ENT_QUOTES)?>
        </div>
       
    </div>
    <?php  } else { ?>

    <?php  } ?>
	
	<?php  if($peiz[0]['weng_x'] != '') { ?>
            <div id="prize">
        
				<!-- <div class="Voting-title">温馨提示</div> -->
				
				<section id="free-read" class="ui-panel">         
					<div class="list-title">             
						<div class="tit">温馨提示</div>            
						
					</div>        
			
				</section>
				
				<div class="Voting-Content">
					<?php  echo html_entity_decode($peiz[0]['weng_x'], ENT_QUOTES)?>
				</div>
			  
			</div>
    <?php  } else { ?>

    <?php  } ?>
	
 


    
   <?php  if($peiz[0]['jian_p'] != '') { ?>
              <div id="reminder">
					<!-- <div class="Voting-title">活动奖品</div> -->
					
					<section id="free-read" class="ui-panel">         
					<div class="list-title">             
						<div class="tit">活动奖品</div>            
						
					</div>        
			
				</section>
					<div class="Voting-Content">
						<?php  echo html_entity_decode($peiz[0]['jian_p'], ENT_QUOTES)?>
					</div>
				</div>
    <?php  } else { ?>

    <?php  } ?>


    <script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/zepto.20140212.js"></script>
	

	<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/sweetalert.min.js"></script>
    <script type="text/javascript">
        <?php  if(empty($this->settings[0]['diqu'])){ $this->settings[0]['diqu'] =0; } ?>
        var diqu = '<?php  echo $this->settings[0]['diqu'];?>';
		if(diqu !=0){
		     
			var latitude = 0;
			var longitude = 0;
			wx.ready(function () {
								wx.getLocation({
									type: 'wgs84', // 默认为wgs84的gps坐标，如果要返回直接给openLocation用的火星坐标，可传入'gcj02'
									success: function (res) {
										latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
										longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
										var speed = res.speed; // 速度，以米/每秒计
										var accuracy = res.accuracy; // 位置精度
										//alert(latitude);
									},
									cancel: function (res) {
										alert('用户拒绝授权获取地理位置');
										//location.reload(); 

									}
								});

						});
   
			
		}
		
 
   
   
   
    $(".photo-myvote33").on('click', function (e)
    {
             e.preventDefault();

             $.post('<?php  echo $this->createMobileUrl('listajax',array('type'=>'uids'))?>', { hdid:<?php  echo $_GPC['hdid']?>,p: <?php  echo $_GPC['id']; ?>,latitude:latitude,longitude:longitude  }, function(data){
  
	if(data.b){
	   $('#toupiao').html(data.b+'票');
	}else{
	   $('#toupiao').html(data.a);
	
	}
    
         
    if (data == '')
    {
	
	        swal({   title: "'公众号:'+$_W['account']['account']",   text: "今日投票数以用完！",   timer: 4000 });
            $('#toupiao').append('<span>已投票</span>');
    }else
    {
	    swal(data.a);
		
		if(data.c==1){
							
							
								<?php  if($this->settings[0]['keyword'] == '') { ?>
							
							
							
							      swal({    title: "",   text: "<div id ='guanzhu' style='width:250px;height:250px;text-align:center;margin:0px auto;'> <img src='<?php  echo $_W['account']['qrcode'];?>'><p style='text-align:center;'>关注公众号，回复关键词<?php  echo $this->settings[0]['wxkeyword']?>进入活动</p></div>",    html: true  });
							
							
							     <?php  } else { ?>
							
						
							    setTimeout(function(){
				   
				                   window.location.href="<?php  echo $this->settings[0]['keyword'];?>";
							    },2000)

			
							
							
							    <?php  } ?>
							
						
							
							
			}
			
		    if(data.c==4){
					 setTimeout(function(){
				   
				          window.location.href="<?php  echo $this->createMobileUrl('Chouqiang',array('type'=>'uids','hdid'=>$_GPC['hdid']))?>";
						 },2000)

			}
		   
	
    };
         
    },'json')



    });
    </script>
	
<script type="text/javascript">

   
        function toupiao(k,od,inputValue){
		  
		            //var lang = "Java";
                    lang = ".p_"+k;
		            
					
		            $.post('<?php  echo $this->createMobileUrl('listajax',array('type'=>'uids'))?>', { hdid:<?php  echo $_GPC['hdid']?>,p: k,latitude:latitude,longitude:longitude,od:od,inputValue:inputValue }, function(data){
                    if(data.b){
					   $(lang).html(data.b+'票');
					    <?php  if(!empty($this->settings[0]['advimg'])) { ?>
					
						  var mask = mui.createMask(call);
                          mask.show();//显示遮罩
					      $(".zhe").show();
					      $(".votets").html(data.a);return;
					
						<?php  } ?>
					}
						 
					if (data == '')
					{
					
							swal({   title: "'公众号:'+$_W['account']['account']",   text: "今日投票数以用完！",   timer: 4000 });
							
					}else
					{
							
							
							swal(data.a);
							
							
							if(data.c==1){
							
							
							<?php  if($this->settings[0]['keyword'] == '') { ?>
							
							
							
							      swal({    title: "",   text: "<div id ='guanzhu' style='width:250px;height:250px;text-align:center;margin:0px auto;'> <img src='<?php  echo $_W['account']['qrcode'];?>'><p style='text-align:center;'>关注公众号，回复关键词<?php  echo $this->settings[0]['wxkeyword']?>进入活动</p></div>",    html: true  });
							
							
							<?php  } else { ?>
							
						
							    setTimeout(function(){
				   
				                   window.location.href="<?php  echo $this->settings[0]['keyword'];?>";
							    },2000)

			
							
							
							<?php  } ?>
							
						
							
							
							
							
							
							}
							if(data.c==4){
							    setTimeout(function(){
				   
				                   window.location.href="<?php  echo $this->createMobileUrl('Chouqiang',array('hdid'=>$_GPC['hdid']))?>";
							    },2000)

							}
							
							
							
					};
						 
					},'json')
		   
		   
		   
		   
		   
		   
		   
		   
		}
	function toupiao2(k,od){
                    swal({
                        title: "",
                        text: "<img id='toggle' class='imgverify' src='<?php  echo $this->createMobileUrl('Codeyz',array('hdid'=>$_GPC['hdid']))?>&r="+Math.round(new Date().getTime())+"'>",
                        type: "input",
					    confirmButtonText:"确认",
						confirmButtonColor:"#f60",
						cancelButtonText:"取消",
						 html: true,
                        showCancelButton: true,
                        closeOnConfirm: false,
                        animation: "slide-from-top",
                        inputPlaceholder: "请填写上面的验证码"
                    }, function(inputValue) {
                        if (inputValue === false)
                            return false;
                        if (inputValue === "") {
                            swal.showInputError("请输入!");
                            return false
                        }
                       toupiao(k,od,inputValue); 
                        swal.close();
				   });
					
    }


</script>
	
	
    <script type="text/javascript">
    function showCover()
    {
          $("#favor_weixin").show();
          $("#wx-cover").show();
    }
    function hideCover(){
          $("#favor_weixin").hide();
          $("#wx-cover").hide();
    }



</script>
<!-- <?php  if($this->settings[0]['isliwu'] == 0) { ?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_foot', TEMPLATE_INCLUDEPATH)) : (include template('common_foot', TEMPLATE_INCLUDEPATH));?>
<?php  } else { ?>
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_foot1', TEMPLATE_INCLUDEPATH)) : (include template('common_foot1', TEMPLATE_INCLUDEPATH));?>
<?php  } ?> -->
<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_foot1', TEMPLATE_INCLUDEPATH)) : (include template('common_foot1', TEMPLATE_INCLUDEPATH));?>

