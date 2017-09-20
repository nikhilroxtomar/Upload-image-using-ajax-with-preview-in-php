<?php

if(isset($_FILES['photo'])){
  $file_name = $_FILES['photo']['name'];
  $file_tmp = $_FILES['photo']['tmp_name'];
  move_uploaded_file($file_tmp, "uploads/".$file_name );
  echo '<img src="uploads/'.$file_name.'" style="width: 500px;">';
}else{
  echo 'Error';
}

?>
