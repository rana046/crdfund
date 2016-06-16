<?php 
include "z_db.php";
if(isset($_REQUEST['log'])) {
$i=0;
$return =array();
	$getd=mysql_query("select * from chat  order by time desc"); 
	while($row=mysql_fetch_array($getd))
	{
$img1=profile($row['users_name']);
$chat[$i]=$row['chat_id'];
	$return[$i]='<article class="box-typical profile-post">
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
										<p>'. stripslashes($row['mesage']).'. </p>
									</div>
									<div class="box-typical-footer profile-post-meta">
							
									</div>
									<div class="comment-rows-container hover-action scrollable-block">
									


									<div class="appenddata1_'.$row['chat_id'].'">';

$comment=mysql_query("select * from chat_comment  where chat_id='".$row['chat_id']."'");
while($rowcom=mysql_fetch_array($comment)) { 
    $img1=profile($rowcom['users_name']);                         
							$return[$i]=$return[$i].'<div class="comment-row-item">
											<div class="avatar-preview avatar-preview-32">
												<a href="#">
													<img src="images/'.$img1.'" alt="">
												</a>
											</div>
											<div class="tbl comment-row-item-header">
												<div class="tbl-row">
													<div class="tbl-cell tbl-cell-name">'.$rowcom["users_name"].'</div>
													
												</div>
											</div>
											<div class="comment-row-item-content">
												<p>'. stripslashes($rowcom['message']).'</p>
												<button type="button" class="comment-row-item-action edit">
													<i class="font-icon font-icon-pencil"></i>
												</button>
												<button type="button" class="comment-row-item-action del">
													<i class="font-icon font-icon-trash"></i>
												</button>
											</div>
										</div>';
 }
								$return[$i]=$return[$i].'</div>	

									</div><!--.comment-rows-container-->
									<form method="post">
										<input type="hidden" value="'.$row['chat_id'].'" class="chat_id_'.$row['chat_id'].'">
									<input type="text"  class="write-something comment_input_'.$row['chat_id'].'" name="comment" placeholder="Leave a comment">
									
									<div class="box-typical-footer">
										<div class="tbl">
											<div class="tbl-row">
												<div class="tbl-cell">
													<button type="button" class="btn-icon">
														<i class="font-icon font-icon-earth"></i>
													</button>
									
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

        $(".comment_'.$chat[$i].'").on("click", function (e) {
        
           var string22= $(".comment_input_'.$chat[$i].'").val();
           var chat_id22= $(".chat_id_'.$chat[$i].'").val();
           
            $.ajax({
            type: "post",
            url: "ajax.php",
            data: "string1="+string22+"&chat_id="+chat_id22,
            success: function (res) {
            	
            	$(".appenddata1_'.$chat[$i].'").append(res);

            }
          });
            

        });

      });
    </script>	
									</div>
								</article>';
								$i++;
								
								}
								//echo count($return);

							foreach($return as $re){ echo $re;}
	}
if(isset($_REQUEST['chat'])) {
	$id=$_REQUEST['chat'];
?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script type="text/javascript">
	 $(".CONTENT").removeClass("message_<?php echo  $id;?>");
	 $(".CONTENT").removeClass("textarea_<?php echo  $id;?>");
	</script>
<?php
						 $chatmes=mysql_query("select * from message where  ( 
						message_user1='".$_SESSION['username']."' and message_user2='".$_REQUEST['chat']."') OR ( 
						message_user2='".$_SESSION['username']."' and message_user1='".$_REQUEST['chat']."')");
						while($rowchat=mysql_fetch_array($chatmes)) {
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
									<div class="chat-message-txt">'. html_entity_decode( $rowchat['message_chat']).'</div>
								</div>
							</div><!--.chat-message-->
							
							';
							 }

						echo '</div>
											<div class="chat-area-bottom">
				
						</div><!--.chat-area-bottom-->
						
					
					</div><!--.chat-area-in-->
				</section>';

    }
    
    ?>
   