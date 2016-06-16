<?php


/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

if (PHP_SAPI == 'cli')
	die('This example should only be run from a Web Browser');

include_once ("z_db1.php");
include_once ("z_db2.php");

/** Include PHPExcel */
require_once dirname(__FILE__) . '/Classes/PHPExcel.php';


// Create new PHPExcel object
$objPHPExcel = new PHPExcel();

// Set document properties
$objPHPExcel->getProperties()->setCreator("Paydae")
							 ->setLastModifiedBy("Paydae")
							 ->setTitle("Office 2007 XLSX Test Document")
							 ->setSubject("Office 2007 XLSX Test Document")
							 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
							 ->setKeywords("office 2007 openxml php")
							 ->setCategory("Donation Users File");


// Add some data
$objPHPExcel->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Username')
            ->setCellValue('B1', 'User Id')
            ->setCellValue('C1', 'Donation Amount')
            ->setCellValue('D1', 'Phone Number')
			->setCellValue('E1', 'Email');
			
$activeSheet = $objPHPExcel->setActiveSheetIndex(0);

if(isset($_POST['export_id'])) {
	$q="SELECT * FROM  don_list"; 
    $single_data = mysqli_query($con_don,$q);
	$row = 2;
    $col = 0;
	while($single_row = mysqli_fetch_array($single_data))
    {
		 $user_query = "select * from users where users_id = '".$single_row['user_id']."'";
		 $user_data = mysqli_query($con_don2,$user_query);
		 $user_row = mysqli_fetch_array($user_data);
		 
		 //echo $user_row['users_name']." ".$user_row['users_id']." ".$user_row['users_donation']." ".$user_row['users_phone']." ".$user_row['users_email']."<br/>";
		 $activeSheet->setCellValueByColumnAndRow(0, $row, $user_row['users_name']);
		 $activeSheet->setCellValueByColumnAndRow(1, $row, $user_row['users_id']);
		 $activeSheet->setCellValueByColumnAndRow(2, $row, $user_row['users_donation']);
		 $activeSheet->setCellValueByColumnAndRow(3, $row, $user_row['users_phone']);
		 $activeSheet->setCellValueByColumnAndRow(4, $row, $user_row['users_email']);
		$row++;
	}
}

// Rename worksheet
$objPHPExcel->getActiveSheet()->setTitle('Donation Users');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


// Redirect output to a client’s web browser (Excel2007)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Users.xlsx"');
header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
header ('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header ('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT'); // always modified
header ('Cache-Control: cache, must-revalidate'); // HTTP/1.1
header ('Pragma: public'); // HTTP/1.0

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
header('Location http://www.paydae.co.za/member-console/admin/export_users.php');
?>