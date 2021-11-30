<?php
  include_once 'header.php';
  //show the table that user saved and export JSON
?>
<?php
 $username = "root";
 $pass = "";
 $connectionString = "mysql:dbname=otuniversity;host=localhost:3306;";
?>

<hr class="mb-4">
<div class="container">
        <div class="py-5 text-center">
            <img class="bd-placeholder-img rounded-circle" src="./img/car-logos.jpg" alt="" width="72" height="72">
            <h2>Change Username</h2>
        </div>

        <div class="order-md-1">
        <?php
            $new_username=$_POST['username'];
            $email=$_POST['email'];
            $db = mysqli_connect("localhost:3306", "root", "","otuniversity");
            $check5=mysqli_query($db,"select * from profiles where email='$email'");
            $checkrows=mysqli_num_rows($check5);
            if($checkrows>0){
              try{
                $conn= new PDO($connectionString,$username,$pass);
                $sql = "update profiles set first_name = \"". $new_username . "\" where email = \"". $email . "\";";
                $conn->query($sql);
                $conn = null;
                echo "Your Username have successfully changed!!"; 

                }catch(PDOException $e){
                    echo $e->getMessage();}
            }
            else{
                echo "Email not found";
            }           
        ?>
        </div>
</div>
<hr class="featurette-divider">
<?php include_once 'footer.php';?>