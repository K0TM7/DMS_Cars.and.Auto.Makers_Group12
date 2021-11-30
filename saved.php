<?php
  include_once 'header.php';
  //show the table that user saved and export JSON
?>

<?php
 $username = "root";
 $pass = "";
 $connectionString = "mysql:dbname=otuniversity;host=localhost:3306;";
 $profile_id=$_SESSION["uiduser"];
?>

<div class="container-fluid">
<hr class="mb-4">
<form action="" method="post" enctype="multipart/form-data"> 
  <h2>Saved Car information</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
          </thead>
          <?php try{
          $conn= new PDO($connectionString,$username,$pass);
          $sql = "select * from saved where profile_id=\"".$profile_id."\"";
          ?>
          <tbody>
          <td> <?php foreach($conn->query($sql) as $row){echo $row['Year']."<br>";}?></td>
          <td> <?php foreach($conn->query($sql) as $row){echo $row['Make']."<br>";}?></td>
          <td> <?php foreach($conn->query($sql) as $row){echo $row['Model']."<br>";}?></td>  
          </tbody>
        </table>
        <?php
            $conn = null;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
            ?>
      </div>
</form>
<hr class="featurette-divider">
<?php include_once 'footer.php';?>