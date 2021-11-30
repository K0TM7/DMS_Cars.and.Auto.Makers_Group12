<?php include_once 'header.php';?>

  <div class="container">
      <div class="py-5 text-center">
        <img class="bd-placeholder-img rounded-circle" src="./img/car-logos.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      </div>
    <div class="order-md-1">
    <form class="form-signin needs-validation" action="log.php" method="POST"  onsubmit="return ValidationEvent()" novalidate>
    
    <div class="row">
    <div class="col-md-3 mb-3">
        </div>
        <div class="col-md-6 mb-3">
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="email"  name="email" class="form-control" placeholder="Email address" required autofocus>
          <div class="invalid-feedback">
            Valid email is required.
          </div>
        </div>

    </div>
    <div class="row">
    <div class="col-md-3 mb-3">
        </div>
        <div class="col-md-6 mb-3">
          <label for="inputPassword"  class="sr-only">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          <div class="invalid-feedback">
            Valid password is required.
          </div>
        </div>
      </div>

      <div class="row">
      <div class="col-md-3 mb-3">
        </div>
        <div class="col-md-6 mb-3">
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </div>
        </div>
        </div>
      
  </form>
  </div>
</div>
<hr class="mb-4">

<?php include_once 'footer.php';?>

