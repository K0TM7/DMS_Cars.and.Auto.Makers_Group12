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
            <form  class="needs-validation" action="success.php" method="POST"  onsubmit="return ValidationEvent()" novalidate>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" name="first" id="firstName" placeholder="i.e John" required>
                            <div class="invalid-feedback">
                            Valid first name is required.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" name="last" id="lastName" placeholder="i.e Doe" required>
                            <div class="invalid-feedback">
                            Valid last name is required.
                            </div>
                        </div>
                    </div>
            
                <div class="col-md-6 mb-3">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="i.e 123 elm street" required>
                    <div class="invalid-feedback">
                    Valid address is required.
                    </div>
                </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="city">City</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="i.e Oshawa" required>
                        <div class="invalid-feedback">
                            Valid city is required.
                        </div>
                    </div>
            
                    <div class="col-md-6 mb-3">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country" placeholder="i.e Canada" required>
                        <div class="invalid-feedback">
                            Valid country is required.
                        </div>
                    </div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="phone">Phone Number</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="i.e 6132451242" required>
                        <div class="invalid-feedback">
                        Valid phone number is required.
                        </div>
                    </div>


                    <div class="col-md-5 mb-3">
                    <label for="company">Company</label>
                    <input type="text" class="form-control" id="company" name="company"  placeholder="Optional" value="null" >
                    </div>
                
                    <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
                    <div class="invalid-feedback">
                        Please enter a valid email.
                    </div>
                    </div>

                    <div class="mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="mininum 8 characters" minlength="8" required>
                    <div class="invalid-feedback">
                        Please enter a valid password.
                    </div>
                    </div>

                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
            </form>
    </div>

  <hr class="mb-4">
  <!-- FOOTER -->
  <?php
include_once 'footer.php';
?>
</html>
