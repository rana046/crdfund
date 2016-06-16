<?	



$valid_extensions1 = array('mp4','ogv', 'ogg' ,'flv','webm', 'mp3'); // valid extensions
$path = 'uploads/'; // upload directory

 $img = $_FILES['image']['name'];
 $tmp = $_FILES['image']['tmp_name'];
  
 // get uploaded file's extension
 $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
 
 // can upload same image using rand function
 $final_image = rand(1000,1000000).$img;
 //echo $img;
  if(in_array($ext, $valid_extensions1)) 
 {     
  $path = $path.strtolower($final_image); 
   
  if(move_uploaded_file($tmp,$path)) 
  {
   echo ' <video width="320" height="240" controls>
  <source src="'.$path.'" type="video/mp4">


</video> ';
  }}
 else 
 {

  echo 'invalid file';
 }
 


		
		?>