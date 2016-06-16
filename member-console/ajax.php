<?php
include("z_db.php");
if(isset($_REQUEST['cpass']))
{
$cpass = md5($_REQUEST['cpass']);

 $sql1 = "SELECT * FROM scl_admin WHERE admin_id = '".$_SESSION['ADMINID']."'";
$s_res1 = mysql_query($sql1);
$result1 = mysql_fetch_array($s_res1);

if($result1['admin_password']== $cpass ){
echo 0;
}

else {
echo 1;

}
}

if(isset($_REQUEST['string'])) {
	
	$message=$_REQUEST['string'];
	?>
	
	
	<?
	$message=$dta;
	$sql="insert into chat (users_name,mesage) values ('".$_SESSION['username']."','$dta') ";
	$insert=mysql_query($sql);
	$last = mysql_insert_id();
	$getd=mysql_query("select * from chat where chat_id='$last'"); 
	$row=mysql_fetch_array($getd);
$chat=$row['chat_id'];
$img1=profile($row['users_name']);
	$return='<article class="box-typical profile-post">
									<div class="profile-post-header">
										<div class="user-card-row">
											<div class="tbl-row">
												<div class="tbl-cell tbl-cell-photo">
													<a href="#">
														<img src="images/'.$img1.'" alt="">
													</a>
												</div>
												<div class="tbl-cell">
													<div class="user-card-row-name"><a href="#">'.$row['users_name'].'</a></div>
													<div class="color-blue-grey-lighter">'.$row['time'].'</div>
												</div>
											</div>
										</div>
										<a href="#" class="shared">
											<i class="font-icon font-icon-share"></i>
										</a>
									</div>
									<div class="profile-post-content">
										<p class="profile-post-content-note">Subminted a new post</p>
										<p>'.$row['mesage'].'. </p>
									</div>
									<div class="box-typical-footer profile-post-meta">
					
									</div>
									<div class="comment-rows-container hover-action scrollable-block">
									


									<div class="appenddata1_'.$row['chat_id'].'">
									
									</div>	

									</div><!--.comment-rows-container-->
									<form method="post">
										<input type="hidden" value="'.$row['chat_id'].'" class="chat_id_'.$row['chat_id'].'">
									<input type="text"  class="write-something comment_input_'.$row['chat_id'].'" name="comment" placeholder="Leave a comment">
									
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
									
												</div>
												<div class="tbl-cell tbl-cell-action">
													<button type="button" id="" class="btn btn-rounded comment_'.$row['chat_id'].'">Send</button>
												</div>
											</div>
										</div>
										</form>
										      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
								<script>
								
      $(function () {

        $(".comment_'.$chat.'").on("click", function (e) {
        
           var string22= $(".comment_input_'.$chat.'").val();
           var chat_id22= $(".chat_id_'.$chat.'").val();
           
            $.ajax({
            type: "post",
            url: "ajax.php",
            data: "string1="+string22+"&chat_id="+chat_id22,
            success: function (res) {
            	
            	$(".appenddata1_'.$chat.'").append(res);

            }
          });
            

        });

      });
    </script>	
									</div>
								</article>';
								//echo "<script>window.location.reload()</script>";
								echo $return;
	}

if(isset($_REQUEST['string1'])) {
	$message=$_REQUEST['string1'];

	$sql="insert into chat_comment (users_name,message,chat_id) values 
	('".$_SESSION['username']."','$message','".$_REQUEST['chat_id']."') ";
	$insert=mysql_query($sql);
	$last = mysql_insert_id();
	$getd=mysql_query("select * from chat_comment  where comment_id='$last'"); 
	$row=mysql_fetch_array($getd);
 $img1=profile($row['users_name']); 
	$return1='<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="images/'.$img1.'" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">'.$row['users_name'].'</div>
													<div class="tbl-cell tbl-cell-date">'.$row['time'].'</div>
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>'. stripslashes($row['message']).'</p>
												
											</div>
										</div><!--.comment-row-item-->

								';
								//echo "<script>window.location.reload()</script>";
								echo $return1;
	}

if(isset($_REQUEST['chat'])) {
	$chatd=mysql_real_escape_string(htmlspecialchars($_REQUEST['chat']));
	$mysql_query=mysql_query("insert into message (message_user1,message_user2,message_chat) 
	values ('".$_SESSION['username']."','".$_REQUEST['user']."','$chatd')");
	
	$last =mysql_insert_id();
						 $chatmes=mysql_query("select * from message where message_id='$last' ");
					$rowchat=mysql_fetch_array($chatmes);
					echo '	
							<div class="chat-message">
								<div class="checkbox-bird">
									<input type="checkbox" id="mess-1">
									<label for="mess-1"></label>
								</div>
								<div class="chat-message-photo">
									<img src="images/'.profile($rowchat['message_user1']).'" alt="">
								</div>
								<div class="chat-message-header">
									<div class="tbl-row">
										<div class="tbl-cell tbl-cell-name">'.$rowchat['message_user1'].'</div>
										<div class="tbl-cell tbl-cell-date">'.$rowchat['message_time'].'</div>
									</div>
								</div>
								<div class="chat-message-content">
									<div class="chat-message-txt">'. stripslashes($rowchat['message_chat']).'</div>
								</div>
							</div>';
						
								//echo "<script>window.location.reload()</script>";
	
	}
	if(isset($_FILES['image'])) {


$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp'); // valid extensions
$path = 'uploads/'; // upload directory

 $img = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 $final_image = rand(1000,1000000).$img;
 
 // check's valid format
 if(in_array($ext, $valid_extensions)) 
 {     
  $path = $path.strtolower($final_image); 
   
  if(move_uploaded_file($tmp,$path)) 
  {
   echo "<img src='$path' />";
  }
 } 
 else 
 {
  echo 'invalid file';
 }

		}
?>


