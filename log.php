    <?php


    $email = $_POST['email'];
    $password = $_POST['password'];

    $db = mysqli_connect("localhost:3306", "root", "","otuniversity");
    $check5=mysqli_query($db,"select * from profiles where email='$email' and password='$password';");
    $sql="select * from profiles where email='$email';";
    $checkrows=mysqli_num_rows($check5);
    if($checkrows>0){
      session_start();
      $_SESSION["useruid"]=$email;
      foreach($db->query($sql) as $row){$_SESSION["useruname"]=$row['first_name'];$_SESSION["uiduser"]=$row['id'];}
      header("location: ./HomePage.php");
      
   }
   else{
     include_once 'header.php';
    echo "Email or Password was wrong....!!";
   }

    ?>



