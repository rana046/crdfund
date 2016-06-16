<?	



$valid_extensions1 = array('mp3','ogg','Wav','mpeg' ); // valid extensions
$path = 'uploads/'; // upload directory

 $img = $_FILES['audio']['name'];
 $tmp = $_FILES['audio']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 $final_image = rand(1000,1000000).$img;
 
  if(in_array($ext, $valid_extensions1)) 
 {     
  $path = $path.strtolower($final_image); 
   
  if(move_uploaded_file($tmp,$path)) 
  {
   echo ' <audio controls>
  <source src="'.$path.'" type="audio/ogg">
  <source src="'.$path.'" type="audio/mpeg">
Your browser does not support the audio element.
</audio> ';
  }}
 else 
 {

  echo 'invalid file';
 }
 


		
		?>