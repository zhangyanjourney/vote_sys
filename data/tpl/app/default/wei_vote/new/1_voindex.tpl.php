<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_head_topnew', TEMPLATE_INCLUDEPATH)) : (include template('common_head_topnew', TEMPLATE_INCLUDEPATH));?>

	
	
  <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/conn.css">
  <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>css/rank.css">
  <link rel="stylesheet" type="text/css" href="<?php echo TEMPLATE_PATH;?>js/sweetalert.css">

   <script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/sweetalert.min.js"></script>
  <script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/leftTime.min.js"></script>
   <style>
body {
    background: #ffffff;
    font-size: 14px;
}
.rank-lt-d img {
   
   
    border-radius: 100%;
}

@media (max-width: 474px){

	.rank-lt .rank-lt-s {
		width: 25px;
		height: 25px;
		margin: 8px;
		line-height: 20px;
	}
	.rank-lt-d {
		width: 40px;
		height: 40px;
	}
	.bg1, .bg2, .bg3 {
		background-size: 180%;
		top: 3px;
		    left: 22px;
		height: 20px;
		width: 20px;
		background-position: -17px 6px;
	}
	
	.rank-lt {
		width: 180px;
		height: 60px;
	}
	
	.rank-rt {
    width: 100px;
    color: red;
}
}







#no, #lian-no, #shouno, #feifano, #zui {
    display: none;
    color: #F00;
    position: fixed;
    left: 50%;
    top: 40%;
    z-index: 2;
    width: 218px;
    height: 100px;
    border-radius: 8px;
    margin: -64px 0 0 -114px;
    line-height: 100px;
    text-align: center;
    font-size: 12px;
    color: #fff;
    opacity: 0.9;
    background: #3A3232;
}


.rotate {
     -webkit-animation: rotating 1.2s linear infinite;
     -moz-animation: rotating 1.2s linear infinite;
     -o-animation: rotating 1.2s linear infinite;
     animation: rotating 1.2s linear infinite
 }
 
 @-webkit-keyframes rotating {
    from { -webkit-transform: rotate(0) }
     to { -webkit-transform: rotate(360deg) }
 }
 
 @keyframes rotating {
     from { transform: rotate(0) }
    to { transform: rotate(360deg) }
 }
@-moz-keyframes rotating {
     from { -moz-transform: rotate(0) }
     to { -moz-transform: rotate(360deg) }
 }


@media (max-width: 474px){
#search-spa {
    width: 80px;
    line-height: 35px;
    height: 35px;
}

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
    background: url(../../addons/wei_vote/template/style//images/title.png) no-repeat;
    background-size: 181px auto;
    margin: 0 auto;
    font-size: 18px;
    color: #fff;
    line-height: 28px;
    text-align: center;
    margin-bottom: 5px;
}


.index_desc_title {
    height: 35px;
    line-height: 35px;
    background: #eee;
    border-top: 1px dashed #ddd;
    padding-left: .6rem;
}

.index_desc_title {
 
    color: #6d6060;
}



   </style>
 

  <style type="text/css">
       #xiana
       {
         
		   text-align: center;
		  
		
		   height: 40px;
		   line-height: 40px;
		       background: #FFFFFF;color: #060606;    border-radius: 5px; background: #FFFFFF;
       }
       #xiana a{
      color: #060606;
       }
     
      #subt{
      display:none;
      }
      #zui{

        display:none;
        color:#F00;


        position: fixed;
        left: 50%;
        top: 40%;
        z-index: 2;
        width: 218px;
        height: 100px;
        border-radius: 8px;
        margin: -64px 0 0 -114px;
        background: #888888;
        line-height: 100px;
        text-align: center;
        font-size: 12px;
        color: #fff;

        
      }
	  
	#new{
	overflow: hidden;
	}  
	  
	  
	  
	  
	  
	  
	  
.wall {
  display: block;
  position: relative;
}
.wall-column {
  display: block;
  position: relative;
  width: 50%;
  float: left;
  padding: 0 1%;
  box-sizing: border-box;
}
.article {
  display: block;
  margin: 0 0 8% 0;
  padding: 5%;
  background: white;
  border-radius: 3px;
  box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.05);
  transition: all 100;
  overflow: hidden;
  position: relative;	box-shadow: 1px 1px 3px #e9e9e9;
}
.article:hover{ transform: scale(1.01);}
.article img {
  display: block;
  width: 100%;
  margin: 0 0 5% 0;
}
.article a{ color: #666;}
.article p{ overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 70%; font-size: 1.2em; line-height: 1.5;}
.article small{ font-size: 1em; color: #fff; line-height: 1.5;}
.article input{ box-sizing: content-box;width: 20%; padding: 0.6em; border-radius: 0em; font-size: 12px; z-index: 100; background-color: #44b549; border: none; position: absolute; bottom: 3%; right: 5%; color: #fff; box-shadow: 0 0 0px #d7d7d7;}
/*瀑布流结束*/
.wrapper h3{ text-align: center; margin:0 20%; white-space: nowrap; text-overflow: ellipsis; font-weight:normal; color: #333; overflow: hidden;  font-size: 1.5em; padding: 0.7em 0;}
.wrapper h4{ width: 90%; margin:0 5%; text-align: justify; font-weight:normal; color: #999;  font-size: 1.2em; margin-bottom: 3%; line-height:1.5; }
.pd{

    padding: 0 10px;
}


.article i {
    position: absolute;
    top: 10px;
    left: 10px;
    /* width: 54px; */
    height: 25px;
    line-height: 27px;
    text-align: center;
    color: #fff;
    z-index: 99;
    background: rgba(0,0,0,.6);
    font-style: normal;
        padding: 1px 8px;

}
#jiaz {

    background: #f60;
   
}
#canyu span.canyu-sp2 {
    background: #f25959;
  background: #f60;
}

.vote-number-p1, .vote-number-p2, .vote-number-p3 {
    color: #555;
}

.mui-bar-tab .mui-tab-item .mui-icon {
    top: 5px;
 
}

.top-p3 a {
    color: #333333;
  
}
.mui-input-row .mui-btn+input, .mui-input-row label+input, .mui-input-row:last-child {

    height: 34px;
}

body {
    font-family: "Microsoft Yahei","微软雅黑",Arial,"Hiragino Sans GB","宋体","Helvetica Neue",Helvetica,sans-serif;
    font-size: 14px;
    line-height: 21px;
    color: #fff;
    background-color: #fff;
    -webkit-overflow-scrolling: touch;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: auto;
}
.mui-input-row .mui-btn+input, .mui-input-row label+input, .mui-input-row:last-child {
    height: 34px;
    line-height: 34px;
}




.date-tiem-span, .date-s-span {
    
}
#dateShow1 strong{border:#CCC 1px solid;background:#FFF;color:#999;line-height:40px;font-size:14px;padding:5px 10px;margin:0 5px;border-radius:3px;box-shadow:1px 1px 1px rgba(0,0,0,0.1);}

#dateShow1 {
    margin: 0 auto;
    width: 100%;
    text-align: center;
}


.daytime {
    line-height: 35px;
    color: #999;
    font-size: 14px;
}

.mui-search .mui-placeholder {
  
    font-size: 14px;
   
}
#search {
  
    background: #fff;
   
}


  </style>
</head>
<body>

<style>
  .gdt{
				
					position: fixed; z-index: 999; top: 0; left: 0; width: 100%; text-align: center; padding: 6px 10px; border: 1px solid transparent; color: #FFFFFF; background-color: rgba(0, 0, 0, 0.5);
				}
			
		</style>
			
			 <?php  if(!empty($this->settings[0]['gdgg'])) { ?>
				
				
				<div class="gdt">
					<span class=""><marquee direction="left"><?php  echo $this->settings[0]['gdgg']?></marquee></span>
				</div>
			<?php  } ?>








<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_headnew', TEMPLATE_INCLUDEPATH)) : (include template('common_headnew', TEMPLATE_INCLUDEPATH));?>

<div class="data-show-box" id="dateShow1">
<div class="daytime">活动结束倒计时</div>
	    					<strong><span class="date-tiem-span d">00</span>天</strong>
	    					<strong><span class="date-tiem-span h">00</span>时</strong>
	    					<strong><span class="date-tiem-span m">00</span>分</strong>
	    					<strong><span class="date-s-span s">00</span>秒</strong>
	    				</div>
<script type="text/javascript">
	    			$(function(){
	    				//日期倒计时
						$.leftTime("<?php  echo $this->settings['0']['endtime']?>",function(d){
							if(d.status){
								var $dateShow1=$("#dateShow1");
								$dateShow1.find(".d").html(d.d);
								$dateShow1.find(".h").html(d.h);
								$dateShow1.find(".m").html(d.m);
								$dateShow1.find(".s").html(d.s);
							}
						});
	    			});
	    		</script>

<?php  if($this->settings[0]['display'] == 1) { ?>
		<div style="padding:10px"><a href="<?php  echo $this->createMobileUrl('weiindex',array('hdid'=>$_GPC['hdid']))?>"><div style="height:40px;line-height:40px;text-align:center;background:#44b549;color:#fff;border-radius:5px">我要报名</div></a></div>
<?php  } ?>
    <div id="search" class="w">
        <div class="">
              <form id="fo1" action="<?php  echo $this->createMobileUrl('so',array('hdid'=>$_GPC['hdid']))?>" method="post">
         
<div class="mui-input-row mui-search">
    <input type="search" class="mui-input-clear" name="name" placeholder="按<?php  echo $this->settings[0]['xingming']?>或者编号搜索">
</div>
              </form>   
        </div>
    </div>
	
	
	
    <!-- <div id="canyu">
      <span class="canyu-sp2">最新参加</span><span class="">最热排名</span>
    </div> -->
 
                                  
    <div id="wsp">
              <div id="rank-1" class="one" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);">
                 
                            <ul class="lie">
                                 
										<?php  if(is_array($res)) { foreach($res as $i => $item) { ?>
										<li class="rank-1-li">
                                            <a href="<?php  echo $this->createMobileUrl('list',array('type'=>'uids','id'=>$item['id'],'hdid'=>$_GPC['hdid']))?>">
                                                  <div class="rank-lt">
                                                      <span class="rank-lt-s hs"><?php  echo $i+1; ?><i class="bg<?php  echo $i+1; ?>"></i></span>
                                                        <?php 
															$item['tupian'] = str_replace("&quot;","",$item['tupian']);
														        $item['tupian'] =  htmlspecialchars_decode($item['tupian']);
														        $item['tupian'] = stripslashes($item['tupian']);
														        $he = (explode(",",$item['tupian'])); 
                                                                $f = $he['0'];
                                                               
														?>
                                                       <div class="rank-lt-d"><img src="<?php  echo tomedia($f);?>"></div>
                                                        <div class="rank-lt-w">
                                                          <p class="rank-lt-p1"><?php  echo $item['name'];?></p>
                                                          <p class="rank-lt-p2">投票编号：<strong class="s1"><?php  echo $item['bh'];?></strong></p>
                                                        </div>
                                                  </div>
                                                  <div class="rank-rt">
                                                   
                                                      <?php 
								 if($item['piao']>999){
								   
									 $mx = $item['piao']%999;
									 $zx = floor($item['piao']/999);
									 
									 echo " <img src='".$_W['siteroot']."addons/wei_vote/template/style/images/1.png'>".$item['piao']."";
								 }else{
								     $mx = $item['piao'];
									 $zx = 0;
								  echo " <img src='".$_W['siteroot']."addons/wei_vote/template/style/images/1.png'>".$item['piao']."";
								 }
							 
							 
							 ?>
                                                  </div>
                                            </a>
                                        </li>
										<?php  } } ?>
										
                            </ul>
                
              <div id="jiaz">
                    <a href="#">点击加载更多...</a>
               </div>
    </div>
    <div id="new-list" class="one" style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1); ">
   
           <div id="new">
               <div class="wrapper">
							<ul class="wall new-ul">
							<?php  if(is_array($nes)) { foreach($nes as $i => $item) { ?>
							<li class="article">
							<?php 
														$item['tupian'] = str_replace("&quot;","",$item['tupian']);
														        $item['tupian'] =  htmlspecialchars_decode($item['tupian']);
														        $item['tupian'] = stripslashes($item['tupian']);
														        $he = (explode(",",$item['tupian'])); 
                                                                $f = $he['0'];
                                                          
														?>
									<a href="<?php  echo $this->createMobileUrl('list',array('type'=>'uids','id'=>$item['id'],'hdid'=>$_GPC['hdid']))?>">
										<img src="<?php  echo tomedia($f);?>" />
									    <p><?php  echo $item['name'];?></p>
										<!-- <small class ="p_<?php  echo $item['id'];?>"><?php  echo $item['piao'];?>票</small> -->
										<?php  if($this->settings['0']['yaz'] == 1) { ?>
									       <input class ="toupiao"  type="button" value="投票" /></input>
								
										<?php  } else { ?>
										<input class ="toupiao"  type="button" value="投票" />
								
										<?php  } ?>
										</a>

                                    <i><?php  echo $item['bh'];?>号,<small class ="p_<?php  echo $item['id'];?>"><?php  echo $item['piao'];?>票</small></i>								
								</li>
								<?php  } } ?>	
								
							</ul>
						</div>
           </div>
          
            <!--  -->
			<div class ="pd">
				<div id="xiana">
						点击加载更多...
				   </div>
			
			</div>
			<?php  if($this->settings[0]['huodong_sm'] != '') { ?>
                <div class ="pd" style="margin-bottom: 60px; background: #fff;margin-top: 50px;">
								<div class="index_desc_title"><i class="iconfont icon-huodongjieshao"></i>活动介绍</div>
								<div style="padding:10px" class="desc_content" deep="2">
								
								
					<?php  echo html_entity_decode($this->settings[0]['huodong_sm'], ENT_QUOTES)?>
					
					
					</div>
						
			    </div>
			<?php  } ?>
       			
         <div style="margin-bottom: 60px"></div>
  </div>
  
  
  

  
  
</div>






<span id="no" class="ok1"></span>
<span id="zui" class="ok1"></span>
<div id="loading" style="position:fixed;display:none;z-index:2000;top:0px;left:0px;width:100%;height:100%;background-color:rgba(0, 0, 0, 0.2);"></div>


<script type="text/javascript" src="<?php echo TEMPLATE_PATH;?>js/jaliswall.js"></script>
<script type="text/javascript">
	$(function(){
	 
		$('.wall').jaliswall({ item: '.article' });
	});
</script>
<script type="text/javascript">
     $(function()
     {
	
		 $('#canyu span').on("click",function()
		 {
			var m = $(this).index();
			$('#canyu span').removeClass('canyu-sp2');
			$('#canyu span').eq(m).addClass('canyu-sp2');
			
			$('#wsp .one').show();
			$('#wsp .one').eq(m).hide();
		})
		
		
		
	
	})
</script>


<script type="text/javascript">
$(function(){


          var p = 5, lock = false;
      $("#jiaz").on('click', function (e)
      {
          e.preventDefault();
      if (lock)
      {
          return;
      }
          lock = true;
      $("#jiaz").text('加载中..');
          p = p+5;
	 var hdid = '<?php  echo $_GPC['hdid'];?>';
      $.post('<?php  echo $this->createMobileUrl('Voindexapi',array('type'=>'uids'))?>', { hdid:hdid,p: p }, function(data)
      {
	 if (data)
      {
           console.log(data);
          $('.lie').append(data);
          $("#jiaz").text('加载更多');
          lock = false;

      }else
      {

         $("#jiaz").text('加载完毕');

      };

         
      });
      });








})
 
</script>


<script type="text/javascript">



$(function(){

         var b = 10, lock = false;
      $("#xiana").on('click', function (e)
      {	
	var ww = $(".article:eq(0) img").width();

         e.preventDefault();
      if (lock)
      {
         return;
      }
         lock = true;
         $("#xiana").text('加载中..');
        // b = b+5;
        var hdid = '<?php  echo $_GPC['hdid'];?>';
		console.log('hdid:'+hdid);
		console.log('b:'+b);
		console.log('ww:'+ww);
		
      $.post('<?php  echo $this->createMobileUrl('Voindexapi1',array('type'=>'uids'))?>', { hdid:hdid,b: b,ww:ww }, function(data)
      {
            
      if (data)
      {
       
		 console.log(data);
		  $.each(data,function(nn,value){
		         var h = $(".wall-column:eq(1)").height(); var n = $(".wall-column:eq(0)").height();
		
					if(h>n){
						$(".wall-column:eq(0)").append(value);
					
					}else{
						  $(".wall-column:eq(1)").append(value);
					
					}
				
				}) 
		   
		  //$('.wall').jaliswall({ item: '.article' });	
          $("#xiana").text('加载更多');
          lock = false;
          b = b+6;
      }else
      {

          $("#xiana").text('加载完毕');

      };

         
          }, "json");
      });


      })
      
</script>

<script type="text/javascript">
	   $(function()
     {
	
	        $('#search-but').click(function()
          {
    					var t =  $('#search-inp').val();
    					var reg1 = /^\s*[\u4e00-\u9fa5]{1,5}\s*$/;
    					var result1 = reg1.test(t);
    					
    					var reg =/^\d{1,6}$/;
    					var result = reg.test(t);
					if(t == '')
          { 
					
						  $('#loading').css('display','block');
                           
              $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
              $("#zui").show().html('请填写内容');

                               
                             
          setTimeout(function()
           {
              $("#zui").css('display','none');
              $('#loading').css('display','none');
                              
              
           },2000);
					
					 }
					else if (result1)
          {
						 document.getElementById("subt").click();    
						
					}else if(result)
          {
					   document.getElementById("subt").click();    
					 
					 
					
				  }else
          {
				    $('#loading').css('display','block');
            $("#zui").css("margin","-"+$("#no").height()/2+"px 0 0 -"+$("#no").width()/2+"px");
            $("#zui").show().html('请填写姓名或编号');

                               
                             
          setTimeout(function()
          {
            $("#zui").css('display','none');
            $('#loading').css('display','none');
                              
          },2000);
				
				  }	
				
			
			   });
	
	  });




</script>


<script type="text/javascript">
    function showCover()
    {
        $("#favor_weixin").show();
        $("#wx-cover").show();
    }
    function hideCover()
    {
        $("#favor_weixin").hide();
        $("#wx-cover").hide();
    }

	
	
	
</script>





<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('common_footnew', TEMPLATE_INCLUDEPATH)) : (include template('common_footnew', TEMPLATE_INCLUDEPATH));?>