<?php 
  session_start();
  
  if(isset($_SESSION['platformtech_users_id']) || isset($_SESSION['platformtech_users_name']) || isset($_SESSION['platformtech_users_email'])){
    header("location: ../pages/index.php");
  }
?>
<?php include '../includes/heading.php'; ?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-main">
            <div class="app-main__inner">
                <div class="col-lg-8 col-md-12 main-card mx-auto card border-radius-5">
                    <div class="mx-auto mt-4">
                        <h1>Sign Up</h1>
                    </div>
                    <div class="card-body">
                        <form action="../includes/signup.inc.php" method="POST" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom01">Full name</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="fullname" placeholder="Full name..." required autofocus>
                                    <div class="invalid-feedback">
                                        Please type your full name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustomUsername">E-mail Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">
                                                <i class="pe-7s-mail"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control" id="validationCustomUsername" name="email" placeholder="E-mail Address..." aria-describedby="inputGroupPrepend" required>                                      
                                        <div class="invalid-feedback">
                                            Please type your e-mail address.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-8 mb-3">
                                    <label for="validationCustom03">Address</label>
                                    <input type="text" class="form-control" id="validationCustom03" name="address" placeholder="Address..." required>
                                    <div class="invalid-feedback">
                                        Please provide a valid address.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Contact Number</label>
                                    <input type="text" class="form-control" id="validationCustom04" name="contactnumber" placeholder="Contact Number..." required>
                                    <div class="invalid-feedback">
                                        Please type your contact number.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom03">Password</label>
                                    <input type="password" class="form-control" id="validationCustom03" name="password" placeholder="Password..." required>
                                    <div class="invalid-feedback">
                                        Please type your password.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom04">Confirm Password</label>
                                    <input type="password" class="form-control" id="validationCustom04" name="confirmpassword" placeholder="Confirm Password..." required>
                                    <div class="invalid-feedback">
                                        Please type your password again.
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" name="signup-submit" class="btn btn-primary btn-round">SUBMIT</button>
                                    <a href="login.php" class="btn btn-info btn-round">ALREADY HAVE AN ACCOUNT</a>
                                </div>
                            </div>
                        </form>
            
                        <script>
                            // Example starter JavaScript for disabling form submissions if there are invalid fields
                            (function() {
                                'use strict';
                                window.addEventListener('load', function() {
                                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                var forms = document.getElementsByClassName('needs-validation');
                                // Loop over them and prevent submission
                                var validation = Array.prototype.filter.call(forms, function(form) {
                                    form.addEventListener('submit', function(event) {
                                        if (form.checkValidity() === false) {
                                            event.preventDefault();
                                            event.stopPropagation();
                                        }
                                        form.classList.add('was-validated');
                                        }, false);
                                    });
                                }, false);
                            })();
                        </script>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../assets/scripts/main.js"></script></body>
</html>
