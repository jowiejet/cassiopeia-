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
                <div class="col-lg-4 col-md-12 main-card mx-auto card border-radius-5">
                    <div class="mx-auto mt-4">
                        <div class="font-icon-wrapper font-icon-lg"><i class="pe-7s-config icon-gradient bg-malibu-beach"> </i></div>
                    </div>
                    <div class="card-body">
                        <form action="../includes/login.inc.php" method="POST" class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustomUsername">E-mail Address</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="email"><i class="fas fa-envelope"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="E-mail Address..." aria-describedby="email" required>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="password">Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="password"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password..." aria-describedby="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                <div class="update ml-auto mr-auto">
                                    <button type="submit" name="login-submit" class="btn btn-primary btn-round">LOG IN</button>
                                    <a href="signup.php" class="btn btn-info btn-round">SIGN UP</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>                        
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/scripts/main.js"></script>
</body>
</html>
