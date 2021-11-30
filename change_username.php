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
            <form  class="needs-validation" action="change_success.php" method="POST"  onsubmit="return ValidationEvent()" novalidate>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="username">Enter New Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="i.e JOE" required>
                    <div class="invalid-feedback">
                        Please enter a valid username.
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Change Username</button>
            </form>
</div>
<hr class="featurette-divider">
<?php include_once 'footer.php';?>