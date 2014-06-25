<?php
if (1 ==2) {
}
else
{
  ob_start();
    //Upload files
  if(isset($_POST['upload'])) {

  $allowed_filetypes = array('.zip');
  $max_filesize = 10485760;
  $upload_path = 'files/';

  $filename = $_FILES['userfile']['name'];
  $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1);


  if(!in_array($ext,$allowed_filetypes))
    die('The file you attempted to upload is not allowed.');

  if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
    die('The file you attempted to upload is too large.');

  if(!is_writable($upload_path))
    die('You cannot upload to the specified directory, please CHMOD it to 777.');

  if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $_POST['photonumber'])) {

    echo 'Your file upload was successful!';


  } 
  else {
       echo 'There was an error during the file upload.  Please try again.';
  }
  }


  $hostname_connect= "192.168.1.94";
  $username_connect= "root";
  $password_connect= "password";
  $database_connect= "ghost";
  $connect_solning = mysql_connect($hostname_connect, $username_connect, $password_connect) or trigger_error(mysql_error(),E_USER_ERROR); 
  @mysql_select_db($database_connect) or die (mysql_error()); 

  if($_POST)
  { 
  // $_FILES["file"]["error"] is HTTP File Upload variables $_FILES["file"] "file" is the name of input field you have in form tag.

  if ($_FILES["file"]["error"] > 0)
  {
  // if there is error in file uploading 
  echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

  }
  else
  {
  // check if file already exit in "images" folder.
  if (file_exists("images/" . $_FILES["file"]["name"]))
  {
  //echo $_FILES["file"]["name"] . " already exists. ";
  }
  else
  {  //move_uploaded_file function will upload your image.  if you want to resize image before uploading see this link http://b2atutorials.blogspot.com/2013/06/how-to-upload-and-resize-image-for.html
  if(move_uploaded_file($_FILES["file"]["tmp_name"],"images/" . $_FILES["file"]["name"]))
  {
  // If file has uploaded successfully, store its name in data base
  $query_image = "insert into acc_images (image, status, acc_id) values ('".$_FILES['file']['name']."', 'display','')";
  if(mysql_query($query_image))
  {
  echo "Stored in: " . "images/" . $_FILES["file"]["name"];
  }
  else
  {
  echo 'File name not stored in database';
  }
  }
  }


  }
  }

  $con=mysqli_connect("192.168.1.94","root","password","ghost");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  date_default_timezone_set('America/New_York');
  $date = date("F j, Y");
  $id = 302;
  $sql="INSERT INTO packages (author, name, date, version, files, website, license, summary, tags, id)
  VALUES
  ('$_POST[author]','$_POST[name]','$_POST[ddate]','$_POST[version]','Servo_1.py','$_POST[website]','$_POST[licesnse]','$_POST[summary]','$_POST[tags]', $id)";

  if (!mysqli_query($con,$sql))
    {
    die('Error: ' . mysqli_error($con));
    }
}