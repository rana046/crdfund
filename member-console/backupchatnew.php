<?php 

include 'header.php';
echo '<link rel="stylesheet" type="text/css" media="all" href="'.$baseurl.'php-emoji-master/lib/emoji.css?cb=<?=time()?>" />';
include('php-emoji-master/lib/emoji.php');
function message($id) {
	$img1=profile($id);
	?>



<section class="chat-area">
					<div class="chat-area-in">
						<div class="chat-area-header">
							<div class="chat-list-item online">
								<div class="chat-list-item-photo">
									<img src="images/<? echo profile($_SESSION['username']);?>" alt="">
								</div>
								<div class="chat-list-item-name">
									<span class="name"><? echo $_SESSION['username']; ?></span>
								</div>
								<div class="chat-list-item-txt writing">Last Seen :<? if(!empty($chat1['message_time'])){echo $chat1['message_time'];}else{ echo date("d-m-y : h:i:sa");}?> </div>
							</div>
							<div class="chat-area-header-action">
								<div class="dropdown dropdown-typical">
									<a class="dropdown-toggle dropdown-toggle-txt" id="dd-chat-action" data-target="#" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="lbl">Actions</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-chat-action">
										<a class="dropdown-item no-nowrap " href="messagechat.php?delete=<?php echo $id ?>">Delete&nbsp;conversation</a>

									</div>
								</div>
							</div>
						</div><!--.chat-area-header-->
<div class="">
					  <input type="hidden" name="chat" value="<?php echo  $id;?>">
<div class="chat-dialog-area scrollable-block chat_box_<?php echo $id;?>" >


</div>
</div>
<div id="append_<?php echo $id;?>">

</div>											
											
											
											<div class="chat-area-bottom">
											
											<div class="">
											<style type="text/css">
											.dropdown-menu
											{
width: 700px;											
											}
@media screen and (min-width: 992px) {
											{
	.dropdown-menu
											{
width:400px;											
											}											
											}
											</style>
	<ul class="list-inline">

  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Smiley
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
				<li class="emogijies">							<?php 
	$GLOBALS['emoji_maps']['html_to_unified'] = array_flip($GLOBALS['emoji_maps']['smily']);
   foreach($GLOBALS['emoji_maps']['html_to_unified'] as $r)
   {
echo emoji_unified_to_html($r);   
   }
?>
  </li>  </ul>
  </li>
  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">other
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
												<?php 
	$GLOBALS['emoji_maps']['html_to_unified'] = array_flip($GLOBALS['emoji_maps']['other']);
   foreach($GLOBALS['emoji_maps']['html_to_unified'] as $r)
   {
echo emoji_unified_to_html($r);   
   }
?>
    </ul>
  </li>  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">signal
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
											<?php 
	$GLOBALS['emoji_maps']['html_to_unified'] = array_flip($GLOBALS['emoji_maps']['signal']);
   foreach($GLOBALS['emoji_maps']['html_to_unified'] as $r)
   {
echo emoji_unified_to_html($r);   
   }
?>
    </ul>
  </li>  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">flag
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
												<?php 
	$GLOBALS['emoji_maps']['html_to_unified'] = array_flip($GLOBALS['emoji_maps']['flag']);
   foreach($GLOBALS['emoji_maps']['html_to_unified'] as $r)
   {
echo emoji_unified_to_html($r);   
   }
?>	
    </ul>
  </li>  <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">symbol
    <span class="caret"></span></a>
    <ul class="dropdown-menu">
											<?php 
	$GLOBALS['emoji_maps']['html_to_unified'] = array_flip($GLOBALS['emoji_maps']['symbol']);
   foreach($GLOBALS['emoji_maps']['html_to_unified'] as $r)
   {
echo emoji_unified_to_html($r);   
   }
?>
    </ul>
  </li>


  
   <li>
<form id="video_<?php echo $id;?>" method="post" enctype="multipart/form-data">
<label for="video1_<?php echo $id;?>"> <span class=""><img src="assets/img/video.png"  style="height:20px;"></span></label>

     <input style="visibility: hidden; position: absolute;" id="video1_<?php echo $id;?>" class="form-control uploadvideo_<?php echo $id;?>"
                    type="file" name="video" onchange="" >
                    <input type="hidden" id="id_<?php echo $id;?>" name="r" value="">
             

 </form>
  
  </li>
   <li>
<form id="audio_<?php echo $id;?>" method="post" enctype="multipart/form-data">
<label for="audio1_<?php echo $id;?>"> <span class=""><img src="assets/img/audio.png" style="height:20px;" ></span></label>

     <input style="visibility: hidden; position: absolute;"  accept="audio/*" id="audio1_<?php echo $id;?>" class="form-control audioupload_<?php echo $id;?>"
                    type="file" name="audio" >
                    <input type="hidden" id="id_<?php echo $id;?>" name="r" value="">
</form>
  
  </li>  
  <li>
<form id="image_<?php echo $id;?>" method="post" enctype="multipart/form-data">
<label for="uploadimage_<?php echo $id;?>"> <span class=""><i class="md md-photo"></i></span></label>

     <input style="visibility: hidden; position: absolute;" accept="image/*" id="uploadimage_<?php echo $id;?>" class="form-control uploadimage_<?php echo $id;?>"
                    type="file" name="image" >
                    <input type="hidden" id="id_<?php echo $id;?>" name="r" value="">

 </form>
  
  </li>
</ul>										

 <style type="text/css">
 .textarea {
    -moz-appearance: textfield-multiline;
    -webkit-appearance: textarea;
    border: 1px solid gray;
    font: medium -moz-fixed;
    font: -webkit-small-control;
    height: 128px;
    overflow: auto;
    padding: 2px;
    resize: both;
    width: 100%;
}
 </style>
 <form>
  <input type="hidden" value="" class="span_<?php echo  $id;?>" >  
  <div class="textarea message_<?php echo  $id;?>" contenteditable="">

  </div>

										<span class="span_<?php echo  $id;?>1"></span>	
											<br>
												
							<button type="button" class="btn btn-rounded send_<?php echo  $id ;?>">Send</button>
							<button type="button" class="btn btn-rounded btn-default cancel">Cancel</button>
						
							</form>
						</div><!--.chat-area-bottom-->
						
					
					</div><!--.chat-area-in-->
				</section><!--.chat-area-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript">

    	

 $(document).ready(function(){
$('#audio1_<?php echo $id;?>').change(function(e){
//	alert("DFG");
var file = this.files[0];
var form = new FormData();
form.append('audio', file);
$.ajax({
url : "audio.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".message_<?php echo  $id;?>").append(response);
//$('.result').append(response.html)
}
});
});
});
    </script>
    <script type="text/javascript">

    	

 $(document).ready(function(){
$('#video1_<?php echo $id;?>').change(function(e){
	alert("DFG");

var file = this.files[0];
var form = new FormData();
form.append('image', file);
$.ajax({
url : "video.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".message_<?php echo  $id;?>").append(response);
//$('.result').append(response.html)
}
});
});
});
    </script>
    <script type="text/javascript">

    	

 $(document).ready(function(){
$('#uploadimage_<?php echo $id;?>').change(function(e){
//	alert("DFG");

var file = this.files[0];

var id =$("#id_<?php echo $id;?>").val();

var form = new FormData();
form.append('image', file);

	$.ajax({
url : "upload.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".message_<?php echo  $id;?>").append(response);
//$('.result').append(response.html)
}
});


});
});
    </script>
				 <script>
      $(function () {

        $('.send_<?php echo  $id;?>').on('click', function (e) {
        //	alert();
           var string= $(".message_<?php echo  $id;?>").html();
           var user =   "<?php echo  $id;?>";
//alert(string);
          $.ajax({
            type: 'post',
            url: 'ajax.php',
            data: 'chat='+string+'&user='+user,
            success: function (res) {
            	var appdata= res;
            	$("append_<?php echo $id;?>").append(res);
            //alert(res);
             // alert('form was submitted');
             var blank ="";
//$(".message_<?php echo  $id;?>").html(blank);
 $('input[type="text"],textarea').val('');
            }
          });

        });

      });
    </script>
 <script type="text/javascript">

$(document).ready(function () {
$(window).scroll(function() {
	var string= "<?php echo $id;?>";
	     $.ajax({
            type: 'post',
            url: 'log.php',
            data: 'chat='+string,
            success: function (res) {
            	var appdata= res;
            	$(".chat_box_<?php echo $id;?>").html(res);
            //alert(res);
             // alert('form was submitted');

            }
          });
});
});
</script>	
<script type="text/javascript">
$('.emoji-inner').on('click', function() {
	var attrb = $(this).attr('class');
	var oldval=$(".span_<?php echo  $id;?>").val();
	var newval =attrb +","+oldval;
	
   $(".span_<?php echo  $id;?>").val(newval);
    var myArray = newval.split(',');
//alert(myArray);
 var htmlc='<span  contenteditable="" class="emoji-outer emoji-sizer"><span contenteditable="" class="'+attrb+'"></span></span>';
   $(".textarea").append(htmlc);
});
</script>				
<? }
?>

      <div ng-include="" src="'assets/tpl/partials/topnav.html'" class="ng-scope"><nav class="navbar navbar-default navbar-fixed-top ng-scope" ng-class="{scroll: (scroll>10)}">
  <div class="container-fluid">
    <div class="navbar-header pull-left">
      <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="breadcrumb">
        <li><a href="#/"><?php echo $settingresult['setting_title'];?></a></li>
        <li ng-bind="pageTitle" class="active ng-binding">  Message /Chat</li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userprofile.php" role="menuitem" tabindex="-1" href="#">Profile</a></li>

      <li role="presentation" class="divider"></li>
      <li role="presentation"><a href="logout.php" role="menuitem" tabindex="-1" href="#">Logout</a></li>    
    </ul>
  </div>


</nav>
</div>
 <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target="">
	<meta charset="UTF-8" class="ng-scope">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" class="ng-scope">
	<meta http-equiv="x-ua-compatible" content="ie=edge" class="ng-scope">
	<title class="ng-scope">Message and Chat Layout</title>

	<link href="data/img/favicon.144x144.php" rel="apple-touch-icon" type="image/png" sizes="144x144" class="ng-scope">
	<link href="data/img/favicon.114x114.php" rel="apple-touch-icon" type="image/png" sizes="114x114" class="ng-scope">
	<link href="data/img/favicon.72x72.php" rel="apple-touch-icon" type="image/png" sizes="72x72" class="ng-scope">
	<link href="data/img/favicon.57x57.php" rel="apple-touch-icon" type="image/png" class="ng-scope">
	<link href="data/img/favicon.php" rel="icon" type="image/png" class="ng-scope">
	<link href="data/img/favicon-2.php" rel="shortcut icon" class="ng-scope">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script src="data/js/plugins.js" class="ng-scope"></script>
	<script src="data/js/app.js" class="ng-scope"></script>

    <link rel="stylesheet" href="data/css/lib/font-awesome/font-awesome.min.css" class="ng-scope">
    <link rel="stylesheet" href="data/css/main.css" class="ng-scope">



<style type="text/css">
.scrollable-block
{
height: 300px;
}
</style>

	<div class="mobile-menu-left-overlay ng-scope"></div>
<!--.side-menu-->

	<div class="page-content ng-scope">
		<div class="container-fluid">

			<div class="box-typical chat-container">
				<section class="chat-list">
					<div class="chat-list-search">
						<input type="text" class="form-control form-control-rounded" placeholder="Search">
					</div><!--.chat-list-search-->
					<div class="chat-list-in scrollable-block">
					<?php 
					$erf=mysql_fetch_array(mysql_query("select * from users where users_name='".$_SESSION['username']."'"));
$user=mysql_query("select * from users where users_reff_name='".$_SESSION['username']."' or  users_name='".$erf['users_name']."'");					

					while($row=mysql_fetch_array($user)) {
						$img1=profile($row['users_name']);
						$sql=mysql_query("select * from message where  ( 
						message_user1='".$_SESSION['username']."' and message_user2='".$row['users_name']."') OR ( 
						message_user2='".$_SESSION['username']."' and message_user1='".$row['users_name']."') ");
						$count=mysql_num_rows($sql);
						$chat=mysql_fetch_array($sql);
					?>
						<div class="chat-list-item online user_online_<? echo $row['users_name'];?>">
							<div class="chat-list-item-photo">
								<img src="images/<? echo $img1;?>" alt="">
							</div>
							<div class="chat-list-item-header">
								<div class="chat-list-item-name">
									<span class="name"><? echo $row['users_name'];?></span>
								</div>
						
								<div class="chat-list-item-date"><?php 
								if(!empty($chat['message_chat'])) {
									echo  $chat['message_time'];
									}else {
										
										echo "";
										}
								?></div>
							</div>
							<div class="chat-list-item-cont ">
								<div class="chat-list-item-txt writing">
									<div class="icon">

									</div>
								<?php 
								if(!empty($chat['message_chat'])) {
									echo  $chat['message_chat'];
									}else {
										
										echo "no comment";
										}
								?>
								</div>
								<div class="chat-list-item-count"><?php echo $count;?></div>
							</div>
						</div>
								
			
				
					<?php }?>
		
					</div><!--.chat-list-in-->
					
				</section><!--.chat-list-->

<?php 
$sql1=mysql_query("select * from message where  
						message_user1='".$_SESSION['username']."' OR 
						message_user2='".$_SESSION['username']."'   ");

										$chat1=mysql_fetch_array($sql1);


$user=mysql_query("select * from users where users_reff_name='".$_SESSION['username']."' or  users_name='".$erf['users_name']."' ");					
$div=0;
					while($row=mysql_fetch_array($user)) {
						?>
						
						<div class="chat_<? echo $row['users_name']; ?> message_box ">
										<?
echo message($row['users_name']);
?>		
						</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script type="text/javascript">

$(document).ready(function () {
	//$(".firestbox").show();
	$('.message_box').hide();
	
	$(".user_online_<? echo $row['users_name'];?>").on('click',function () {
		//$("div").removeClass("showdiv");
	 // $(".chat_<? echo $row['users_name'];?>").removeClass("message_box");
		 //$(".chat_<? echo $row['users_name'];?>").addClass("showdiv");
		 $('.message_box').hide();$(".firestbox").hide();

		 $(".chat_<? echo $row['users_name'];?>").show();
		
	});
});
</script>
 <script>
      $(function () {
$(".cancel").click(function () {
	 $('input[type="text"],textarea').val('');
})


});

</script>
<?
}

?>
	
						
			</div><!--.chat-container-->

		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<!--Progress bar-->
	<!--<div class="circle-progress-bar pieProgress" role="progressbar" data-goal="100" data-barcolor="#ac6bec" data-barsize="10" aria-valuemin="0" aria-valuemax="100">-->
	    <!--<span class="pie_progress__number">0%</span>-->
	<!--</div>-->


</div><?php include "footer.php";?>



