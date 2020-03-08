<?php 
  session_start();
  
  if(!isset($_SESSION['platformtech_users_id']) || !isset($_SESSION['platformtech_users_name']) || !isset($_SESSION['platformtech_users_email'])){
    header("location: ../pages/login.php");
  }
?>
<?php include '../includes/heading.php'; ?>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <?php include '../includes/header.php'; ?>
        
            <div class="app-main">
                <?php include '../includes/navbar.php'; ?>

                <div class="app-main__outer">
                    <div class="app-main__inner">

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="fab fa-windows icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>
                                        Windows 10
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <iframe width="100%" height="500px" src="https://www.youtube.com/embed/groEilO7ivY"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include '../includes/footer.php'; ?>
                </div>
            </div>
        </div>
    </body>
</html>
