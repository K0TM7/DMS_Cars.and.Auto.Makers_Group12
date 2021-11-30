<?php
include_once 'header.php';
$umodel=$_GET["model"];
$umake=$_GET["make"];
include_once 'header.php';
$link = "https://vpic.nhtsa.dot.gov/api/vehicles/GetCanadianVehicleSpecifications/?Year=2020&Make=".$umake."&Model=".$umodel."&units=&format=json";
$data = file_get_contents($link);
$arr = json_decode($data, true);
unset($arr['Count']); 
unset($arr['Message']); 
unset($arr['SearchCriteria']);
//print_r($arr)
$key=0;
foreach($arr as $pass => $value)
    {
    foreach($value as $key => $make)
        {
          foreach($make as $tt => $pp)
          {
            foreach($pp as $xx => $oo)
            {
              if($xx==1)
              {
                $Car_info[$key]=$oo['Value'];
              }
            } 
          } 
        }     
}
?>

<div class="container-fluid">
<hr class="mb-4">
<form action="" method="post" enctype="multipart/form-data" onsubmit="return ValidationEvent()">  
      <h2>Car information</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <th>Year</th>
            <th>Make</th>
            <th>Model</th>
        </thead>
        <tbody>
                <td><?php if($key>0){for ($x = 0; $x <= $key; $x++) {echo "2021<br>";}}?>
                <td><?php if($key>0){for ($x = 0; $x <= $key; $x++) {echo ucfirst($umake)."<br>";}}?>
                <td><?php if($key>0){for ($x = 0; $x <= $key; $x++) {echo "$Car_info[$x]<br>";}}?>     
                <td><?php if($key>0)
                          {
                            for ($x = 0; $x <= $key; $x++) 
                            {
                              $temp='2021'."#".ucfirst($umake)."#".$Car_info[$x]."#";
                              echo  "<input type='checkbox' name='checksave[]' value='$temp' >                             
                                    <br>";
                            }
                          }?></td>           
        </tbody>
        </table>
      </div>
      <hr class="mb-4">
      <?php
      if($key<=0){
        echo "Sorry, the car can't be found or we don't have any information of it!";
        echo "<hr class='mb-4'>";
        echo "<a class='btn btn-primary btn-lg btn-block'  href='cars.php'>Try another car please!</a>";

      }

        else{echo "
          <div class='row'>
          <div class='col-md-6 mb-3'>
          <a class='btn btn-primary btn-lg btn-block'  href='cars.php'>Search for another car!</a>
            </div>
            <div class='col-md-6 mb-3'>
              <button class='btn btn-lg btn-primary btn-block' name='sub' type='submit'>Save</button>
            </div>
            </div>
          ";}      
      ?>
      </form>
    <hr class="mb-4">

<?php
if(isset($_POST['sub']))  
{   
    $username = "root";
    $pass = "";
    $connectionString = "mysql:dbname=otuniversity;host=localhost:3306;";
    $checkbox1=$_POST['checksave'];  
    $chk=""; 

    foreach($checkbox1 as $chk1)  
      {  
          $chk .= $chk1.",";  
      }      
    $i=0;
    $year="";
    $ma="";
    $mo="";
    $x=0;
    $x2=0;
    $profile_id=$_SESSION["uiduser"];
    //$chk[strlen($chk)]='@';
    while ($x<=strlen($chk)) 
    {          
      $x2=0;
      while($i==0)
      {
        if($chk[$x]=='#')
        {
          $i+=1;
        }
        else
        {
          $year[$x2]=$chk[$x];
          $x2+=1;
        }
        $x+=1;
      }
      $x2=0;
      while($i==1)
      {
        if($chk[$x]=='#')
        {
          $i+=1;
        }
        else
        {
          $ma[$x2]=$chk[$x];
          $x2+=1;
        }
        $x+=1;
      }
      $x2=0;
      while($i==2)
      {
        if($chk[$x]=='#')
        {
          $i+=1;
        }
        else
        {
          $mo[$x2]=$chk[$x];
          $x2+=1;
        }
        $x+=1;
      }
      if($chk[$x]=',')
      {
        try{
          $conn= new PDO($connectionString,$username,$pass);
          $sql = "insert into saved (profile_id,Year,Make,Model) values(\"". $profile_id . "\",\"". $year . "\",\"". $ma . "\",\"" . $mo . "\");";   
          $conn->query($sql);
          //echo "<p>$sql</p>";
          $conn = null;    
        }
        catch(PDOException $e)
        {
          echo $e->getMessage();
        }
        $i=0;
        $year="";
        $ma="";
        $mo="";
        $x+=1;
        $x2=0;
        if(strlen($chk)==$x)
        {
          $i=-1;
          $x+=1000;
        }
      }
      else{
      $x+=1;
      }
      echo "Saved!!"; 
    }

} 


?> 

<?php include_once 'footer.php';?>
