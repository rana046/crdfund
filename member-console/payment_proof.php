<?php
include_once ("z_db.php");
include_once ("z_db1.php");
include_once ("z_db2.php");
// Inialize session
//session_start();
// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['username'])) {
        print "
				<script language='javascript'>
					window.location = 'login.php';
				</script>
			";
}

?>
<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="mylifestylewealth Angular Admin Theme">
    <meta name="author" content="Theme Guys - The Netherlands">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="assets/img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/img/favicon/manifest.json">
    <link rel="shortcut icon" href="assets/img/favicon/favicon.ico">
    <title>Payment Proof</title>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>  <![endif]-->
    <link href="assets/css/vendors.min.css" rel="stylesheet" />
    <link href="assets/css/styles.min.css" rel="stylesheet" />
    <script charset="utf-8" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  </head>
  <body scroll-spy="" id="top" class=" theme-template-dark theme-pink alert-open alert-with-mat-grow-top-right">
    <main>
      <aside class="sidebar fixed" style="width: 260px; left: 0px; ">
        <div class="brand-logo">
         <img src="images/login_logo.png"> </div>
        <div class="user-logged-in">
          <div class="content">
            <div class="user-name">mylifestylewealth <span class="text-muted f9">admin</span></div>
            
            
          </div>
        </div>
   <?php include_once ("sidebar.php"); ?>
   
   </aside>
         </aside>
      <div class="main-container">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header pull-left">
              <button type="button" class="navbar-toggle pull-left m-15" data-activates=".sidebar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <ul class="breadcrumb">
                <li><a href="#/">mylifestylewealth</a></li>
                <li class="active">Payment Proof</li>
              </ul>
            </div>
            <ul class="nav navbar-nav navbar-right navbar-right-no-collapse">
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/dropdown-navbar.php"> <i class="md md-more-vert f20"></i> </button>
              </li>
              <li class="dropdown pull-right">
                <button class="dropdown-toggle pointer btn btn-round-sm btn-link withoutripple" data-template-url="assets/tpl/partials/theme-picker.php"> <i class="md md-settings f20"></i> </button>
              </li>
              <li navbar-search="" class="pull-right">
                <div>
                  <div class="mat-slide-right pull-right">
                    <form class="search-form form-inline pull-left ">
                      <div class="form-group">
                        <label class="sr-only" for="search-input">Search</label>
                        <input type="text" class="form-control" id="search-input" placeholder="Search" autofocus=""> </div>
                    </form>
                  </div>
                  <div class="pull-right">
                    <button class="btn btn-sm btn-link pull-left withoutripple"> <i class="md md-search f20"></i> </button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
    <div class="main-content ng-scope" autoscroll="true" ng-view="" bs-affix-target=""><section class="tables-data ng-scope" ng-controller="TablesDataController">
<style>
  .btn-danger { background-size: 187%; background-color: #F44336; height: 25px; padding-top: 1px;}
  
</style>
  <div class="page-header">
    <h1>
      <i class="md md-list"></i>
     Payment Proof
    </h1>
  </div>

  




<?php
        $q="SELECT * FROM  don_list"; 
        $single_data = mysqli_query($con_don,$q); 

        ?>
<div class="card">
<style>
.custom_change_code_form { float: left; width: 100%; padding: 50px 2%;}
.custom_change_code_form row { margin: 10px 0;}
.select_box_payment { float: left; padding: 5px 10px;}
.textarea_class  textarea{ border: 1px solid #CCC; padding: 5px 10px; width: 60%;}
</style>
    <div class="table-responsive white">
        <div class="table-responsive white custom_change_code_form">
        <?php if(isset($_POST['proof_desc'])) {
            $donation_id = $_POST['donation_id'];            
            $transaction_id = $_POST['transaction_id'];            
            $description = $_POST['proof_desc'];
            $username = $_SESSION['username'];
            if($username)
            {
                $sql = "SELECT * FROM users WHERE users_name='$username' OR users_email='$username'";
                $user_data = mysqli_query($con_don2,$sql);
                while($user_row = mysqli_fetch_array($user_data))
                { 
                    
                    $user_id = $user_row['users_id'];
                }
            }
          
            
            $target_dir = "uploads/";
            $temp = explode(".", $_FILES["fileToUpload"]["name"]);
            $newfilename = round(microtime(true)) . '.' . end($temp);
            $target_file = $target_dir.$newfilename;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                        
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                   $sql = "INSERT INTO attachment (user_id, donation_id, transaction_id, file_name, description)
                    VALUES ($user_id, '$donation_id', '$transaction_id', '$newfilename', '$description')";

                    if ($con_don->query($sql) === TRUE) {
                        echo "Payment Proof File Uploaded Successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $con_don->error;
                    }
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            
        } else {
		
		$username = $_SESSION['username'];
            if($username)
            {
                $sql = "SELECT * FROM users WHERE users_name='$username' OR users_email='$username'";
                $user_data = mysqli_query($con_don2,$sql);
                while($user_row = mysqli_fetch_array($user_data))
                { 
                    
                    $user_id = $user_row['users_id'];
                }
            }
		$q="SELECT *,payments.id payment_id FROM  payments inner join don_list on payments.itemid = don_list.auto_id where payments.userid = '".$user_id."' and payments.payment_status = '0'"; 
        $single_data = mysqli_query($con_don,$q); 
		$single_row = mysqli_fetch_array($single_data);
?>
        <form action="" method="POST" enctype="multipart/form-data">
            
                

                <div class="row">
                    <div class="col-md-3">
                        <p><b>Donation ID:</b></p>
                    </div>                  
                    <div class="col-md-9">
						<input type="text" readonly="readonly" name="donation_id" id="donation_id" value="<?php echo $single_row['auto_id'] ?>" />
                    </div> 
                </div>
            
                <div class="row">
                    <div class="col-md-3">
                        <p><b>Transaction ID:</b></p>
                    </div>                  
                    <div class="col-md-9">
						<input type="text" readonly="readonly" name="transaction_id" id="transaction_id" value="<?php echo $single_row['payment_id'] ?>" />
                    </div>
                </div>
				
				<div class="row">
                    <div class="col-md-3">
                        <p><b>Amount:</b></p>
                    </div>                  
                    <div class="col-md-9">
						<input type="text" readonly="readonly" name="amount" id="amount" value="<?php echo $single_row['payment_amount']; ?>" />
                    </div> 
                </div>
            
                <div class="row">
                    <div class="col-md-3">
                        <p><b>Upload Attachment:</b></p>
                    </div>                  
                    <div class="col-md-9">
                        <input required type="file" name="fileToUpload" id="fileToUpload">
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-md-3">
                        <p><b>Description:</b></p>
                    </div>                  
                    <div class="col-md-9 textarea_class">
                        <textarea required name="proof_desc" placeholder="write your description.."></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    </div>                  
                    <div class="col-md-9">
                        <br />
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary" />
                    </div>
                </div>
            
            
            
        </form>
        <?php }?>
     </div>
    </div>
  </div>






</section>
</div>  </div>
    </main>
    <style>
    .glyphicon-spin-jcs {
      -webkit-animation: spin 1000ms infinite linear;
      animation: spin 1000ms infinite linear;
    }
    
    @-webkit-keyframes spin {
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
    

    
    <script charset="utf-8" src="assets/js/vendors.min.js"></script>
    <script charset="utf-8" src="assets/js/app.min.js"></script>
  </body>

</html>