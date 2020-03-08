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
                                        <i class="fas fa-book-open icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>
                                        Introduction
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="main-card mb-3 card">
                                <div class="card-body">
                                    <h5 class="card-title">Platform Technologies</h5>
                                    <p>A technology platform is an environment for building and running applications, systems
                                        and processes. These can be viewed as toolsets for developing and operating customized
                                        and tailored services.
                                    </p>
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
