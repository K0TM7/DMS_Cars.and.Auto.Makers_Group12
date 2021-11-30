<?php
  include_once 'header.php';
?>
    <hr class="mb-4">
    <div class="container">
  <div class="py-5 text-center">
    <img class="bd-placeholder-img rounded-circle" src="./img/car-logos.jpg" alt="" width="72" height="72">
    <h2>Registration Form</h2>
  
  </div>
    <div class="order-md-1">
      <?php
     // use PHPMailer\PHPMailer\PHPMailer;

      
      
      $first = $_POST['first'];
      $last = $_POST['last'];
      $address = $_POST['address'];
      $city = $_POST['city'];
      $country = $_POST['country'];
      $phone = $_POST['phone'];
      $company=$_POST['company'];
      $email = $_POST['email'];
      $password = $_POST['password'];

    

            
      $db = mysqli_connect("localhost:3306", "root", "","otuniversity");
      $check5=mysqli_query($db,"select * from profiles where email='$email'");
      $checkrows=mysqli_num_rows($check5);
      if($checkrows>0){
        echo "Application exists";
     }
        else{
            
            /*$random_hash = substr(md5(uniqid(rand(), true)), 16, 16);
            $massage = "This is your activation code ".$random_hash.". Please sign up using the code and university's website.";
            require_once "PHPMailer/PHPMailer.php";
            require_once "PHPMailer/SMTP.php";
            require_once "PHPMailer/Exception.php";

            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = '465';
            $mail->isHTML();
            $mail->Username = 'UniversofCanada@gmail.com';
            $mail->Password = 'uc377897';
            $mail->SetFrom('no-reply@uoc.ca');
            $mail->Subject = 'Activation Code';
            $mail->Body = $massage;
            $mail->AddAddress($email);
            $mail->Send();*/  

            $username = "root";
            $pass = "";
            $connectionString = "mysql:dbname=otuniversity;host=localhost:3306;";
            try{
                $conn= new PDO($connectionString,$username,$pass);
                $sql = "insert into profiles (first_name,last_name,email,address,city,country,phone,company,password) values(\"". $first . "\",\"". $last . "\",\"". $email . "\",\"". $address . "\",\"". $city . "\",\"". $country . "\",\"". $phone . "\",\"". $company . "\",\"". $password . "\");";
                $conn->query($sql);
                $conn = null;
                echo "Your application have successfully submitted!!"; 

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }    
      ?>
    </div>

  <hr class="mb-4">
  <!-- FOOTER -->
  <?php
    include_once 'footer.php';
  ?>
</html>
