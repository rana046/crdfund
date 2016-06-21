<?php
$page_title = "Dashboard";
 require('header.php');?>
<?php 


$current_date = new \DateTime();
$earlier_date = new \DateTime();
$earlier_date->modify('1 month ago');

$user_query = "SELECT * FROM users WHERE users_name='".$_SESSION['username']."'";      
$user_data = mysqli_query($con,$user_query);
$user_details_data = (object)mysqli_fetch_array($user_data);

$don_query = "SELECT * FROM don_list WHERE user_id='".$user_details_data->users_id."'";      
$donation_data = mysqli_query($con_don,$don_query);
$donation_details_data = (object)mysqli_fetch_array($donation_data);

$incoming_fund_query = "select SUM(payment_amount) total_outgoing from payments where userid = '".$user_details_data->users_id."' and payment_status = 1 and createdtime > '".$current_date->format('Y-m-d')."'";
$incoming_fund_data = mysqli_query($con,$incoming_fund_query);
$incoming_fund_details_data = mysqli_fetch_object($incoming_fund_data);

$total_incoming_fund_query = "select SUM(payment_amount) total_outgoing from payments where userid = '".$user_details_data->users_id."' and payment_status = 1 and createdtime > '".$earlier_date->format('Y-m-d')."'";
$total_incoming_fund_data = mysqli_query($con,$total_incoming_fund_query);
$total_incoming_fund_details_data = mysqli_fetch_object($total_incoming_fund_data);

$total_available_fund = 0;
$available_fund_query = "select * from payments inner join users on payments.userid = users.users_id inner join packages on packages.packages_id = users.users_package where payments.userid = '".$user_details_data->users_id."' and payments.payment_status = 1 and payments.createdtime > '".$current_date->format('Y-m-d')."'";
$available_fund_data = mysqli_query($con,$available_fund_query);
while($available_fund_row = mysqli_fetch_object($available_fund_data)){
	$total_available_fund += $available_fund_row->payment_amount + ($available_fund_row->payment_amount * $available_fund_row->packages_percent) / 100;
}

$monthly_total_available_fund = 0;
$available_fund_query = "select * from payments inner join users on payments.userid = users.users_id inner join packages on packages.packages_id = users.users_package where payments.userid = '".$user_details_data->users_id."' and payments.payment_status = 1 and payments.createdtime > '".$earlier_date->format('Y-m-d')."'";
$available_fund_data = mysqli_query($con,$available_fund_query);
while($available_fund_row = mysqli_fetch_object($available_fund_data)){
	$monthly_total_available_fund += $available_fund_row->payment_amount + ($available_fund_row->payment_amount * $available_fund_row->packages_percent) / 100;
}


$total_fund_raised = 0;
$total_fund_received = 0;
$total_fund_received_all = 0;

$query = "select * from payments where createdtime > '".$current_date->format('Y-m-d')."' and payment_status = 1";
$payment_result = $con->query($query);
while($payment_row = mysqli_fetch_object($payment_result)) {
	$query = "select * from don_list where auto_id = '".$payment_row->itemid."'";
	$donation_list_data = mysqli_query($con_don,$query);
	while($donation_row = mysqli_fetch_object($donation_list_data)) {
		if($donation_row->user_id == $user_details_data->users_id) {
			
			$total_fund_raised = $donation_row->amount;
			$total_fund_received += $payment_row->payment_amount;
		}
	}
}

$query = "select * from payments where payment_status = 1";
$payment_result_all = $con->query($query);
while($payment_row = mysqli_fetch_object($payment_result_all)) {
	$query = "select * from don_list where auto_id = '".$payment_row->itemid."'";
	$donation_list_data = mysqli_query($con_don,$query);
	while($donation_row = mysqli_fetch_object($donation_list_data)) {
	//echo $donation_row->user_id;
		if($donation_row->user_id == $user_details_data->users_id) {
			$total_fund_received_all += $payment_row->payment_amount;
		}
	}
}


?>

                            <div class="row widget-row">
                                <div class="col-md-4">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                        <h4 class="widget-thumb-heading">Current Balance</h4>
                                        <div class="widget-thumb-wrap">
                                            <i class="widget-thumb-icon bg-green icon-bulb"></i>
                                            <div class="widget-thumb-body">
                                                <span class="widget-thumb-subtitle">ZAR</span>
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php if($monthly_total_available_fund != 0) echo $monthly_total_available_fund; else echo "-"; ?>">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                                <div class="col-md-4">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                        <h4 class="widget-thumb-heading">Incoming Funds</h4>
                                        <div class="widget-thumb-wrap">
                                            <i class="widget-thumb-icon bg-red icon-layers"></i>
                                            <div class="widget-thumb-body">
                                                <span class="widget-thumb-subtitle">ZAR</span>
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo $total_fund_received_all ?>">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                                <div class="col-md-4">
                                    <!-- BEGIN WIDGET THUMB -->
                                    <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                                        <h4 class="widget-thumb-heading">Outgoing Funds</h4>
                                        <div class="widget-thumb-wrap">
                                            <i class="widget-thumb-icon bg-purple icon-screen-desktop"></i>
                                            <div class="widget-thumb-body">
                                                <span class="widget-thumb-subtitle">ZAR</span>
                                                <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php if(isset($total_incoming_fund_details_data->total_outgoing)) echo $total_incoming_fund_details_data->total_outgoing; else echo "0"; ?>">0</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END WIDGET THUMB -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class="icon-bubbles font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Comments</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#portlet_comments_1" data-toggle="tab"> Pending </a>
                                                </li>
                                                <li>
                                                    <a href="#portlet_comments_2" data-toggle="tab"> Approved </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="portlet_comments_1">
                                                    <!-- BEGIN: Comments -->
                                                    <div class="mt-comments">
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Michael Baker</span>
                                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The generated Lorem or non-characteristic Ipsum is therefore or non-characteristic. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-pending">Pending</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The standard chunk of Lorem or non-characteristic Ipsum used since the 1500s or non-characteristic. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-rejected">Rejected</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Comments -->
                                                </div>
                                                <div class="tab-pane" id="portlet_comments_2">
                                                    <!-- BEGIN: Comments -->
                                                    <div class="mt-comments">
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar4.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Michael Baker</span>
                                                                    <span class="mt-comment-date">26 Feb, 10:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Larisa Maskalyova</span>
                                                                    <span class="mt-comment-date">12 Feb, 08:30AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> It is a long established fact that a reader will be distracted by. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar6.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Natasha Kim</span>
                                                                    <span class="mt-comment-date">19 Dec,09:50 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-comment">
                                                            <div class="mt-comment-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-comment-body">
                                                                <div class="mt-comment-info">
                                                                    <span class="mt-comment-author">Sebastian Davidson</span>
                                                                    <span class="mt-comment-date">10 Dec, 09:20 AM</span>
                                                                </div>
                                                                <div class="mt-comment-text"> The standard chunk of Lorem Ipsum used since the 1500s </div>
                                                                <div class="mt-comment-details">
                                                                    <span class="mt-comment-status mt-comment-status-approved">Approved</span>
                                                                    <ul class="mt-comment-actions">
                                                                        <li>
                                                                            <a href="#">Quick Edit</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">View</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#">Delete</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Comments -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="portlet light ">
                                        <div class="portlet-title tabbable-line">
                                            <div class="caption">
                                                <i class=" icon-social-twitter font-dark hide"></i>
                                                <span class="caption-subject font-dark bold uppercase">Payment Confirmation</span>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="#tab_actions_pending" data-toggle="tab"> Pending </a>
                                                </li>
                                                <li>
                                                    <a href="#tab_actions_completed" data-toggle="tab"> Completed </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab_actions_pending">
                                                    <!-- BEGIN: Actions -->
                                                    <div class="mt-actions">
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar10.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Natasha Kim</span>
                                                                            <p class="mt-action-desc">Dummy text of the printing</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar3.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-bubbles"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Gavin Bond</span>
                                                                            <p class="mt-action-desc">pending for approval</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-call-in"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Diana Berri</span>
                                                                            <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar7.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-bell"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">John Clark</span>
                                                                            <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Donna Clarkson </span>
                                                                            <p class="mt-action-desc">Simply dummy text of the printing</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar9.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-magnet"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Tom Larson</span>
                                                                            <p class="mt-action-desc">Lorem Ipsum is simply dummy text</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- END: Actions -->
                                                </div>
                                                <div class="tab-pane" id="tab_actions_completed">
                                                    <!-- BEGIN:Completed-->
                                                    <div class="mt-actions">
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar1.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-action-redo"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Frank Cameron</span>
                                                                            <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar8.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-cup"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Ella Davidson </span>
                                                                            <p class="mt-action-desc">Text of the printing and typesetting industry</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar5.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class=" icon-graduation"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Jason Dickens </span>
                                                                            <p class="mt-action-desc">Dummy text of the printing and typesetting industry</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-red"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="mt-action">
                                                            <div class="mt-action-img">
                                                                <img src="../assets/pages/media/users/avatar2.jpg" /> </div>
                                                            <div class="mt-action-body">
                                                                <div class="mt-action-row">
                                                                    <div class="mt-action-info ">
                                                                        <div class="mt-action-icon ">
                                                                            <i class="icon-badge"></i>
                                                                        </div>
                                                                        <div class="mt-action-details ">
                                                                            <span class="mt-action-author">Jan Kim</span>
                                                                            <p class="mt-action-desc">Lorem Ipsum is simply dummy</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="mt-action-datetime ">
                                                                        <span class="mt-action-date">3 jun</span>
                                                                        <span class="mt-action-dot bg-green"></span>
                                                                        <span class="mt=action-time">9:30-13:00</span>
                                                                    </div>
                                                                    <div class="mt-action-buttons ">
                                                                        <div class="btn-group btn-group-circle">
                                                                            <button type="button" class="btn btn-outline green btn-sm">Appove</button>
                                                                            <button type="button" class="btn btn-outline red btn-sm">Reject</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- END: Completed -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							
                           
<?php require('footer.php');?>              
                        