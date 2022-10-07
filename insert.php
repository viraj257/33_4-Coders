<?php
$name =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];
if (!empty($name)||!empty($email)||!empty($password)||!empty($cpassword))
{
  $host="localhost";
  $dbemail="root";
  $dbpassword="";
  $dbname="first";

  $conn = new mysqli('localhost','root',,'first');
    if(mysqli_connect_error()){
      die('Connect Error('.mysqli_connect_error().')').mysqli_connect_error());
         }
    else {
      $SELECT="SELECT email from register where email=? Limit 1 ";
      $INSERT="INSERT Into register (name,email,password,cpassword) values(?,?,?,?,?,?)";
      $stmt=$conn->prepare($SELECT);
      $stmt->bind_param("s",$email);
      $stmt->exeute();
      $stmt->bind_result($email);
      $stmt->store_result();
      $rnum=$stmt->num_rows;

      if ($rnum==0){
         $stmt->close();
    
         $stmt =$conn->prepare($INSERT);
         $stmt->bind_param("ssssii",$name,$email,$password,$cpassword);
         $stmt->execute();
         echo "New record inserted sucessfully";
      }
      else{
        echo "Someone already register using this email";
       }
$stmt->close();
$conn->close();
}

}else{
echo"All field are required";
die();}
?>