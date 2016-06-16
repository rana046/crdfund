<?php
include_once ("z_db.php");
include_once ("z_db1.php");
        
$protocol = isset($_SERVER["HTTPS"]) ? 'https' : 'http';
$base_url = $protocol."://".$_SERVER["HTTP_HOST"]."/member-console/";
//$base_url = $protocol."://".$_SERVER["HTTP_HOST"]."/html/paydae/";                // local

$total_donation_amount = $_POST["total_donation_amount"];
$donate_amount = $_POST["donate_amount"];
$payment_method = $_POST["payment_method"];
$package_name = $_POST["package_name"];
$don_id = $_POST["don_id"];

?>
<div style="text-align:center;">
<img src="images/loading1.gif" alt="loading.." />
</div>
<?php

if($payment_method=='paypal')
{
    
   ?>
<form name="paypal_form" id="paypal_form" action="https://paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="paypal@Paydae.co.za">
    <input type="hidden" name="item_name" value="Paydae Donate Payment for '<?php echo $package_name;?>'">
    <input type="hidden" name="amount" value="<?php echo $donate_amount;?>">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="custom" value="<?php echo $don_id;?>::<?php echo $total_donation_amount;?>::<?php echo $donate_amount;?>::<?php echo "USD";?>"  />
    <input type="hidden" name="notify_url" value="<?php echo $base_url;?>congratulations.php?paypal_notify=1" />
    <input type="hidden" name="return" value="<?php echo $base_url;?>congratulations.php?paypal_thankyou=1" />
    <input type="hidden" name="cancel_return" value="<?php echo $base_url;?>congratulations.php?paypal_cancel=1" />
    
    </form>
    <script type="text/javascript">
    document.getElementById("paypal_form").submit();
    </script>
<?php 

}
else
{
    $remainning_amount = number_format($total_donation_amount-$donate_amount,2);    
    header('Location:congratulations.php?pay_method='.$payment_method.'&&payment='.$donate_amount.'&&don_id='.$don_id);
    
}

?>