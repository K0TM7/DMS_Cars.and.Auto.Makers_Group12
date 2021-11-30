<?php include_once 'header.php';?>

<script type="text/javascript">
function update(){
var select = document.getElementById('make');
var value = select.options[select.selectedIndex].value;
localStorage.setItem('makefor',value);
window.location.href="cars.php?umake="+value;
}
</script>

<hr class="mb-4">
    <div class="container">
  <div class="py-5 text-center">
    <img class="bd-placeholder-img rounded-circle" src="./img/car-logos.jpg" alt="" width="72" height="72">
    <h2>Car Search</h2>
  </div>
  
    <div class="order-md-1">
    <form  class="needs-validation" action="cardir.php" method="GET" onsubmit="return ValidationEvent()" novalidate>
          <label for="state">Make</label>
            <select class="custom-select d-block w-100" name="make" id="make" onChange="update()" required>
              <option value="">Choose...</option>
              <option value="toyota">Toyota</option>
              <option value="honda">Honda</option>
              <option value="tesla">Tesla</option>
              <option value="ford">Ford</option>
              <option value="hyundai">Hyundai</option>
              <option value="chevrolet">Chevrolet</option>
              <script type="text/javascript">
                document.getElementById('make').value = localStorage.getItem('makefor');
                localStorage.clear();
                </script>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Make.
            </div>


    <hr class="mb-4">   
        <label for="state">Model</label>
            <select class="custom-select d-block w-100" name="model" id="model" required>
              <option value="">Choose...</option>
              <?php
                $x=$_GET["umake"];
                $link = "https://vpic.nhtsa.dot.gov/api/vehicles/getmodelsformake/".$x."?format=json";
                $data = file_get_contents($link);
                $arr = json_decode($data, true);
                unset($arr['Count']); 
                unset($arr['Message']); 
                unset($arr['SearchCriteria']);
                foreach($arr as $pass => $value)
                    {
                    foreach($value as $key => $make)
                        {
                            $Car_Make=$make['Model_Name'];
                            $Car_Make_ID=$make['Model_ID'];
                            echo "<option value=$Car_Make>$Car_Make</option>";
                        }     
                }
                ?>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Model.
            </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>
    </div>

<?php include_once 'footer.php';?>
