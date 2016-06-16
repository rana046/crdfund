<?php 
include 'header.php';
if(isset($_REQUEST['send'])) {
//echo "select * from  withdrawal where users_name='".$_SESSION['username']."' and  	withdrawal_status='1' and trequest_id='0' ";
	$checklast=mysql_query("select * from  withdrawal where users_name='".$_SESSION['username']."' and  	withdrawal_status='1' and trequest_id='0' ");
   $count=mysql_num_rows($checklast);
   $withid=mysql_fetch_array($checklast);   
    $id=$withid['withdrawal_id'];
   if($count>0) {
	$extension = strtolower(end(explode('.',$_FILES['image']['name'])));  
    $img = 'message-'.time().'.'.$extension;
    
   move_uploaded_file($_FILES["image"]["tmp_name"],"testimonial/".$img);
    $sql="insert into trequest (`trequest_name`,`trequest_surname`,`trequest_city`,`trequest_country`,`trequest_state`,
   `trequest_username`,`trequest_subject`,`trequest_message`,`trequest_type`,`testimonial_id`)
   values (
   '".$_REQUEST['name']."',
   '".$_REQUEST['surname']."',
   '".$_REQUEST['city']."',
   '".$_REQUEST['country']."',
   '".$_REQUEST['state']."',
   '".$_SESSION['username']."',
   '".$_REQUEST['subject']."',
    '".$_REQUEST['message']."',
   '$img',
  '".$_REQUEST['testimonial']."' ) ";
  
   $update=mysql_query($sql);
   $lastinsertid=mysql_insert_id();
   //echo "update  withdrawal set trequest_id='$lastinsertid' where withdrawal_id='$id'";
   $sql=mysql_query("update  withdrawal set trequest_id='$lastinsertid' where withdrawal_id='$id' ");
   
print "
   <script language='javascript'>
				window.location = '".$_SERVER['PHP_SELF']."?sucess';
				</script>
  ";
  
	
	}
	else {
	print "
   <script language='javascript'>
				window.location = '".$_SERVER['PHP_SELF']."?fail';
				</script>
  ";	
		
		}
		}
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
        <li ng-bind="pageTitle" class="active ng-binding"> TESTIMONIAL </li>
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
<div class="page-content ng-scope">

<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 ">
				<section class="tabs-section">
				
				
<div class="h">
  <h2>TESTIMONIAL </h2>
  <?
  if(isset($_REQUEST['sucess'])) {
 

  	 echo '<div>
  	 
   <div class="alert alert-success">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Your Request has been sent Sucessfully .
</div>  	 
  	 
  	 </div>';
  	

  }
    if(isset($_REQUEST['fail'])) {
 

  	 echo '<div>
  	 
   <div class="alert alert-danger">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Fail!</strong> Already apply for Testimonial  Rewards  for Bonus Withdrwal  for More Testimonial Rewards Apply for wallet Withdrawl .
</div>  	 
  	 
  	 </div>';
  	

  }
  
  ?>
  <div class="panel panel-primary">
    <div class="panel-heading">TESTIMONIAL REWARD REQUEST</div>
	<form class="form-horizontal change-cover" role="form" method="post" action="" enctype="multipart/form-data"  onsubmit="return validate_form(this);">
     <div class="panel-body">
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="email" placeholder="Enter Name">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Surname</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="surname" placeholder="Enter Surname">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">City</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="city" placeholder="Enter City">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Province/State</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="state" placeholder="Enter Province/State">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Country</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="country" placeholder="Enter Country">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Subject</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="subject" placeholder="Enter Subject">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Type of Bonus </label>
    <div class="col-sm-10">
      <select type="text" class="form-control" name="testimonial" id="testimonial" placeholder="Enter Subject" required="">
      <option value="-1" >Type</option>
      <?php
												$i = 1;
												$select_sl = mysql_query("select * from testimonial where  	testimonial_status ='1' ");
												while($sl_row = mysql_fetch_array($select_sl)) {
													?>
						<option value="<? echo $sl_row['testimonial_id']; ?>"><? echo $sl_row['testimonial_bonus_type']; ?></option>
													<? }
		?>
      </select>
      <input type="hidden" value="1" id="type_change">
      <input onchange="ValidateSingleInput(this);" accept="file_extension|audio/*|video/*|image/*|media_type" type="file" style="visibility:hidden" name="image" class="test btn" id="select_box" required=""> 
    </div>
  </div>
      <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Message</label>
    <div class="col-sm-10">
      <textarea class="form-control" name="message">
      
      </textarea> 
    </div>
  </div>

  </div>
  <div class="panel-footer">
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit"name="send" id="btn-sub" class="btn btn-default">Submit</button>
    </div>
  </div>
  </div>
</form>

  </div>

</div>
</section>


</div>
</div>
</div>
</div>


   
   </div>
   
   
    <?
      
      include  "footer.php";
      ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
   <script type="text/javascript">
 
   $(document).ready(function () {
    	
    $("#testimonial").on("change",function () {
   	var nature =$(this).val();
   	if (nature=="1") {
   		 $("#select_box").css("visibility","visible");
   	}else if (nature=="2") {
   		 $("#select_box").css("visibility","visible");
   	}else if (nature=="3") {
   		 $("#select_box").css("visibility","visible");
   	}else {
   		 $("#select_box").css("visibility","hidden");
   	}

 
   });
   });	
 
   </script>


<script type="text/javascript">



function ValidateSingleInput1(oInput) {
	var _validFileExtensions = [".mp4", ".mpeg", ".ogg", ".mp3"];    
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
 
 function ValidateSingleInput2(oInput) {
	var _validFileExtensions = [".doc", ".txt", ".docx",".odt"];    
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}

       
        
$("#select_box").change(function () {
	var type1 = $("#testimonial").val();
if (type1=="1") {
	
ValidateSingleInput2(this);
} else if (type1=="2") {
ValidateSingleInput1(this);
}if (type1=="3") {
ValidateSingleInput1(this);
}else {
	
}
});

$("#btn-sub").click(function () {
		var type1 = $("#testimonial").val();
if (type1=="1") {
	
	Doc_upload()
} else if (type1=="2") {
	file_upload()
}if (type1=="3") {
	file_upload()
}else {
	
}
});

     
</script>


  <script type="text/javascript">
  $(".close").on("click",function () {
  	<?php 
  	$message='change';
  	?>
  });
  </script>