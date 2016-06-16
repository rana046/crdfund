<?php
include '../z_db.php';
include 'function.php';
include 'key_function.php';
include 'project_function.php';
//include 'fileoprn_class.php';


$users_table="users";
$admin_table="admin";

$setting_table="setting";
$package_table="packages";

$ref_pa_setting_table= "referal_package_setting";
$report_table="report";
$testimonial_table="testimonial";
$trequest_table="trequest";
$with_setting="with_setting";
$with_report_table="withdrawal";
$verification_table="verification";
$user_v_table="user_verification";
$question_table="question";
$document_table="document";




$content_table="content";
$bitcoins_table="bitcoins";
$submenus_table="submenus";
$photo_table="photo";
$pimage_table="pimage";
$contact_table="contact";
$slider_table="slider";
$eyear_table="eyear";
$econ_table="econtent";
$menus_table="menus";
$app_table="app";
$calender_table="calender";
$acadmic_table="acadmic";

$calcontent_table="calcontent";
$class_table="class";
$aheading_table="aheading";
$agenda_table="agenda";
$fees_table="fees";
$famount_table="famount";
$class_table="class";
$sub_table="sub";
$leb_table="leb";
$grade_table="grade";
$media_table="media";
$footer_submenu_table="footer_submenu";
$footer_menu_table="footer_menu";
$newsletter_table="newsletter";
$service_cat_table="service_cat";
$seller_cat_table = "seller_cat";
$buyer_cat_table = 'buyer_cat';
$buyer_table = 'buyer';
$listing_table = 'listing';
$chinese_listing_table = 'chinese_listing';




$succ_msg = array();
if(isset($_REQUEST['message'])) {
 if($_REQUEST['message'] == 'success') {
 	array_push($succ_msg,"Data Updated Successfully!");
 	}	
}	

$err_msg = array();
?>
