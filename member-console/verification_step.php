<?php 
include 'header.php';
if(isset($_REQUEST['start'])){
$keycode=rand(1000,1000000);
$keycodeupdate=mysql_query("UPDATE  user_verification set key_code='$keycode'  where users_name='".$_SESSION['username']."' ");
echo "<script>window.location='verification_step.php</script>";	
}
if(isset($_REQUEST['question'])) {
	$sql=mysql_query("UPDATE  user_verification set 
		verification_q='".$_REQUEST['q']."', 
		verification_a='".$_REQUEST['a']."' 

				
		 where users_name='".$_SESSION['username']."' ");
		echo "<script>window.location='verification_thank_you.php?review'</script>";
	}
	
	
		if(isset($_REQUEST['vupdate'])) {
		$sql=mysql_query("UPDATE  user_verification set f_verify='0', verification_document='".$_REQUEST['verification_image']."'  where users_name='".$_SESSION['username']."' ");
		echo "<script>window.location='verification_step.php?message=success'</script>";	
		
		}
		  
if(isset($_REQUEST['keycode'])) {
$sql=mysql_query("UPDATE  user_verification set s_verify='0', users_image='".$_REQUEST['verification_image']."'  where users_name='".$_SESSION['username']."' ");

echo "<script>window.location='verification_step.php?message=sucess'</script>";
}
	if(isset($_REQUEST['address'])) {
		$sql=mysql_query("UPDATE  user_verification set 
		t_verify='0'.
		address_image='".$_REQUEST['verification_image']."', 
		address_image2='".$_REQUEST['verification_image1']."' ,
		address_name1='".$_REQUEST['d1']."',
		address_name2='".$_REQUEST['d2']."',
		issue_date1='".$_REQUEST['da1']."',
		issue_date2='".$_REQUEST['da2']."',
		institute1='".$_REQUEST['i1']."',
		institute2='".$_REQUEST['i2']."'
				
		 where users_name='".$_SESSION['username']."' ");
		echo "<script>window.location='verification_step.php?message=success'</script>";	
		
		}

	$sql_v=mysql_query("select * from  user_verification where users_name='".$_SESSION['username']."' ");
	$count=mysql_num_rows($sql_v);
	$row_v=mysql_fetch_array($sql_v);
?>
<style type="text/css">
.icon
{
height: 49px;
margin: auto;
text-align: center;
margin-top: -32px;
}
.panel-icon
{
margin: auto;
text-align: center;
}
.panel_border
{
border: 2px solid lightblue;
}
.panel-back
{

    background-image: url('assets/img/img1.png');
    background-size: cover;
    background-repeat: no-repeat;
}
 .body-img
 {
height: 200px;
width: 100%;
 }.icon1
 {
height:15px; 
 }
 .margin-top
 {
margin-top:-88px; 
 }
@media screen and (max-width: 750px) {
.box {
height: 192px !important;
width: 155px !important;
    font-size: 10px;
    padding: 0px;
} 
 .margin-top
 {
margin-top:0px; 
 }
 }
@media screen and (max-width: 450px) {
.box {
    height: 142px !important;
    width: 99px !important;
    font-size: 3px !important;
    padding: 0px;
}
.box h4
{
    font-size: 10px !important;
}
 }
</style>
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
        <li ng-bind="pageTitle" class="active ng-binding">  Verification  Center</li>
      </ul>
    </div>

 <div class="dropdown pull-right">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown"> 
    <i class="fa fa-ellipsis-v"></i>
</button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a href="userverification.php" role="menuitem" tabindex="-1" href="#"> Verification Center</a></li>

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
  <h2> Verification Center </h2>

  <div class="panel panel-info ">
    <div class="panel-heading"> Verification Process :</div>
    <div class="panel-body">
    <br>
    <br>
    <div class="row">
     <?php 
    $Note=mysql_fetch_array(mysql_query("select * from verification where verification_id='1'"));
  
    ?>
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading "><img src="<?php echo $baseurl;?>assets/img/icon-Number1.png" alt="" class="icon"></div>
       <div class="panel-body"> <h4 class=""><?   echo $Note['verification_1']; ?></h4><hr>
       <div class="row">
      
       
             <div class="col-sm-offset-8 col-sm-4 text-left">
            
       <? if(empty($row_v['verification_document'])) { ?>
        <div class="alert alert-warning">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['f_verify']=='0'){
        	?>
              <div class="alert alert-success">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['f_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }elseif($row_v['f_verify']==2) {
        	?>
        	 <div class="alert alert-danger">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>
        	<?
        	}
      }?> 
        </div>

      <div class="col-sm-8 margin-top">
       <form class="form-horizontal" role="form">
  <div class="form-group">

    <label class="control-label col-sm-2" for="uploadimage">Upload  Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="image" id="uploadimage1" placeholder="Enter email">
    </div>
    <label class="col-sm-offset-2 col-sm-10 text-left" style="color:red;">
    must provide Proof of Identity which can be: Government issued ID such as Passport, Drivers License or National ID that includes users Photo, Signature, Name and Date Of Birth.</label>
     <label class="col-sm-offset-2 col-sm-10 afterupload1 text-left">
     
     </label>
  
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 text-left">
      <button type="submit" name="vupdate" class="btn btn-info">Submit</button>
</div>
</div>  
   </form> 
   
               <div class="text-left well">
<br> Your Uploaded Document .<br><a href="<?php if(empty($row_v['verification_document'])) { }else { echo $baseurl;?>uploads/<?  echo $row_v['verification_document']; }?>">
<ul><li>
<strong>
       <? if(empty($row_v['verification_document'])) { echo "not Found";}else {
      
        echo $row_v['verification_document']; }?></strong></li></ul>
         </a>       
        </div>
      </div>  
      <div class="col-sm-4"></div>     
       
       </div>
      
       
       
       </div>

       </div>
     </div>
     
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  ">
       <img src="<?php echo $baseurl;?>assets/img/icon-Number2.png" alt=""  class="icon" ></div>
       <div class="panel-body  " ><h4><?   echo $Note['verification_2']; ?></h4>
       <hr>
          <div class="row">
              <div class="col-sm-4 col-sm-offset-8 text-left">
            
       <? if(empty($row_v['users_image'])) { ?>
        <div class="alert alert-warning">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['s_verify']=='0'){
        	?>
              <div class="alert alert-success">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['s_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }elseif($row_v['s_verify']==2) {
        	?>
        	 <div class="alert alert-danger">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>
        	<?
        	}
      }?> 
        </div>    
      <div class="col-sm-8 margin-top">
      	 <form class="form-horizontal" role="form">
  <div class="form-group">
<style type="text/css">
.box
{
height: 200px;
width: 200px;
}
</style>
 	<div class="row ">
 	<div class="col-xs-6">
 	  <div class="well box pull-right ">
 	  <h4><strong class="text-center" >VERIFICATION<br> CODE</strong></h4>
 	  <br><br>
   <h5><? echo $row_v['key_code'];?>  </h5>

  
  </div>
 	</div>
 	<div class="col-xs-6">
 	  <div class="well box pull-left">
     <img src="<?php echo $baseurl;?>assets/img/type2.png" alt="" class="body-img" style="width:100%;height:100%;">
  
  
  </div>
 	</div>



 	
 	</div>
 

    <label class="control-label col-sm-2 " for="uploadimage">Upload Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="users_image" id="uploadimage2" placeholder="" required="">
    </div>
    <label class="col-sm-offset-2 col-sm-10 text-left" style="color:red;">
Provide a photo of you holding the<strong> verification code </strong>
 displayed above  in one hand and your <strong>ID clearly visible in your other hand.</strong>   </label>
     <label class="col-sm-offset-2 col-sm-10 text-left afterupload2">
     
     </label>
  
  </div>


  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 text-left ">
      <button type="submit" name="keycode" class="btn btn-info">Submit</button>

    </div>
  </div>
</form>
               <div class="text-left well">
       <br> Your Uploaded Document .<br><ul><li><a href="<?php if(empty($row_v['users_image']) ){ }else { echo $baseurl; echo 'uploads'; echo $row_v['users_image']; }?>"><strong>
       <? if(empty($row_v['users_image'])) { echo "not Found";}else {
      
        echo $row_v['users_image']; }?></strong></a></li></ul>
        </div>
      </div>       
       
       </div>

       </div>

       </div>
     </div> 
     
     <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon">
       <div class="panel-heading  "><img src="<?php echo $baseurl;?>assets/img/icon-Number3.png" alt="" class="icon"> </div>
       <div class="panel-body">
             <h4><?   echo $Note['verification_3']; ?></h4>
             <hr>
         <div class="row">
                <div class="col-sm-4 col-sm-offset-8 text-left">
            
       <? if(empty($row_v['address_image'])) { ?>
        <div class="alert alert-warning">
                 <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1"> Document Not uploaded.        
        </div>
       
        <?php }else {
        	if($row_v['t_verify']=='0'){
        	?>
              <div class="alert alert-success">
        <img src="<?php echo $baseurl;?>assets/img/preview.png" alt="" class="icon1">  Under Review
        </div>  


     <?   
        }else if($row_v['t_verify']==1){
        ?>
            <div class="alert alert-info">
        <img src="<?php echo $baseurl;?>assets/img/right.png" alt="" class="icon1">  Document Accepted
        </div>  
        <?
        }elseif($row_v['t_verify']==2) {
        	?>
        	 <div class="alert alert-danger">
        <img src="<?php echo $baseurl;?>assets/img/wrong.png" alt="" class="icon1">  Document Rejected
        </div>
        	<?
        	}
      }?> 
        </div> 
      <div class="col-sm-8 margin-top">
              <form class="form-horizontal" role="form">
         
         <div class="form-group">
         <label class="control-label col-sm-2" >Enter Institute </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="i1" id="i1" required="" placeholder="Enter Institute Name">
           </div>
         
         </div>
        <div class="form-group">
         <label class="control-label col-sm-2" >Select Document </label>
          <div class="col-sm-10">

                   <select class="form-control" name="d1" id="d1" required="">
          <option value="">--select--</option>
          <?php 
        $doc=mysql_query("select * from document ")   ;      
        while($d_row=mysql_fetch_array($doc)) {
        	echo "<option value='".$d_row['document_document']."'>".$d_row['document_document']."</option>";
        	} 
          ?>
          </select> </div>
         
         </div>
   <div class="form-group">
         <label class="control-label col-sm-2" > Issue Date</label>
          <div class="col-sm-10">
          <input type="date" class="form-control datepicker" name="da1" required="" id="da1" placeholder="Enter Issue Date">
           </div>
         
         </div>
  <div class="form-group">

    <label class="control-label col-sm-2" for="uploadimage">Upload Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="image" id="uploadimage" required="" placeholder="Enter email">
    </div>
    <label class="col-sm-offset-2 col-sm-10" style="color:red;"></label>

     <label class="col-sm-offset-2 col-sm-10 text-left afterupload">
     
     </label>
  
  </div>
<hr>
           <div class="form-group">
         <label class="control-label col-sm-2" >Enter Institute </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="i2" id="i2" required="" placeholder="Enter Institute Name">
           </div>
         
         </div>
        <div class="form-group">
         <label class="control-label col-sm-2" >Select Document </label>
          <div class="col-sm-10">

          <select class="form-control" name="d2" id="d2" required="">
          <option value="">--select--</option>
          <?php 
        $doc=mysql_query("select * from document ")   ;      
        while($d_row=mysql_fetch_array($doc)) {
        	echo "<option value='".$d_row['document_document']."'>".$d_row['document_document']."</option>";
        	} 
          ?>
          </select>
           </div>
         
         </div>
   <div class="form-group">
         <label class="control-label col-sm-2" > Issue Date</label>
          <div class="col-sm-10">
          <input type="date" class="form-control datepicker" name="da2" required="" id="da2" placeholder="Enter Issue Date">
           </div>
         
         </div>
  <div class="form-group">

    <label class="control-label col-sm-2" for="uploadimage">Upload Image</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" name="image" id="uploadimage3" required="" placeholder="">
    </div>
    <label class="col-sm-offset-2 col-sm-10" style="color:red;"></label>

     <label class="col-sm-offset-2 col-sm-10 text-left afterupload3">
     
     </label>
  
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 text-left">
      <button type="submit" name="address" class="btn btn-info">Submit</button>

      
    </div>
  </div>
</form>
       <div class="text-left well">
       Your Uploaded Document .<br>
      <ul><li> 
       
       <a href="<?php echo $baseurl;?>uploads/<? echo $row_v['address_image']; ?>"><strong>
       <? if(empty($row_v['address_image'])) { echo "not Found";}else {
      
        echo $row_v['address_image']; }?></strong></a>
        
       </li>
       
       <li><a href="<?php  if(empty($row_v['address_image2'])) { }else {echo $baseurl;?>uploads/<? echo $row_v['address_image2']; }?>">
<strong>
       <? if(empty($row_v['address_image2'])) { echo "not Found";}else {
      
        echo $row_v['address_image2']; }?></strong></a>
        </li>
        </ul>
        </div>
      </div>       
       
       </div>

       </div>

       </div>
     </div> 
        <div class="col-sm-12">
       <div class="panel panel-default panel_border panel-icon ">
	       <div class="panel-heading text-left "><h3>Answer the follwoing Question  .</h3> </div>
       <form method="post">
          <div class="panel-body ">
       <div class="form-group text-left">
  <?
       
       $result = mysql_fetch_array(mysql_query("SELECT * FROM `question` ORDER BY     RAND() LIMIT 1;"));
      echo $result['question_question'];      
       ?>
       <input type="hidden" class="form-control" placeholder="Enter Question?" name="q"  value="<?  echo $result['question_question'];;?>"> 
       </div>          
             <div class="form-group col-sm-8">
       <input type="text" class="form-control" placeholder="Enter Answer." name="a" required="">
       
       </div>
      <div class="text-left col-sm-4">
      <?
      if(empty($row_v['verification_document'])) { 
      ?>
          <button type="button" name="" class="btn btn-info identity" style="margin:auto;">Complete</button>
      <?
      
      }else {
      	 if(empty($row_v['users_image'])) { 
      	 ?>
      	     <button type="button" name="" class="btn btn-info keycode" style="margin:auto;">Complete</button>
      	 <?
      	 }else {
      	 	
      	 	 if(empty($row_v['address_image'])) { 
      	?> 	     <button type="button" name="" class="btn btn-info address " style="margin:auto;">Complete</button><?
      	 	 }else {
      	 	 	if(!empty($row_v['verification_q'])) { 
      	 	 	?>
      	 	 	<button type="submit" name="question" class="btn btn-info " style="margin:auto;">Complete</button>
      	 	 	<?
      	 	 	
      	 	 	}else {
      	 	 		?>
      	 	 		
      	 	
      	 	 	     
<a href="verification_thank_you.php?review"><button type="" class="btn btn-primary">Complete </button></a>

      	 	 	      	<?  }
      	 	 	}
      	 	}
      	
      	
      	}
      ?>        
<?php 
if(!empty($row_v['verification_q'])) { 
?>

<?

}

?>
    
        </div>
          </div>
  
       </form>
    
       </div>
     </div> 
         
    </div>
    </div>
    <div class="panel-footer" style="text-align:center">

        
    </div>
  </div>

  

</div>
</section>


</div>
</div>
</div>
</div>


   
   </div>
    </div> </main>
   <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $(".datepicker").datepicker();
  });
  </script> 
    <style>
    @media screen and (max-width: 992px){

}
    </style>
    <style>
    .glyphicon-spin-jcs {
      -webkit-animation: spin 1000ms infinite linear;
      animation: spin 1000ms infinite linear;
    }
    
    @-webkit-keyframes spin{
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }
    
    @keyframes spin {
      0% {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
      }
      100% {
        -webkit-transform: rotate(359deg);
        transform: rotate(359deg);
      }
    }
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
  function handleChange(input) {
    if (input.value < 10){ input.value = 0; alert("Please enter 10 words");}
    if (input.value > 100) input.value = 100;
  }
</script>
<script type="text/javascript">
$(document).ready(function () {
	$(".identity").click(function () {
		alert("First Complete <?   echo $Note['verification_1']; ?> process  ");
	})
	$(".keycode").click(function () {
		alert("First Complete <?   echo $Note['verification_2']; ?> process  ");
	})
		$(".address").click(function () {
		alert("First Complete <?   echo $Note['verification_3']; ?> process  ");
	})
	
});
</script>
     <script type="text/javascript">

    	

 $(document).ready(function(){
$('#uploadimage1').change(function(e){
//	alert("DFG");

var file = this.files[0];


var form = new FormData();
form.append('image', file);

	$.ajax({
url : "verfication.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".afterupload1").html(response);

}
});


});

});
    </script> 
    <script type="text/javascript">

    	

 $(document).ready(function(){
$('#uploadimage2').change(function(e){
//	alert("DFG");

var file = this.files[0];


var form = new FormData();
form.append('image', file);

	$.ajax({
url : "verfication.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".afterupload2").html(response);

}
});


});

});
    </script>
        <script type="text/javascript">

    	

 $(document).ready(function(){
$('#uploadimage').change(function(e){
//	alert("DFG");

var file = this.files[0];


var form = new FormData();
form.append('image', file);

	$.ajax({
url : "verfication.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".afterupload").html(response);

}
});


});

});
    </script>
    <script type="text/javascript">

    	

 $(document).ready(function(){
$('#uploadimage3').change(function(e){
//	alert("DFG");

var file = this.files[0];


var form = new FormData();
form.append('image', file);

	$.ajax({
url : "verification1.php",
type: "POST",
cache: false,
contentType: false,
processData: false,
data : form,
success: function(response){
	//alert(response);
	   $(".afterupload3").html(response);

}
});


});

});
    </script>
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>

  </body>

</html>