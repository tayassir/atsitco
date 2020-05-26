<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->


    <?= link_tag("assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css");?>
    <?= link_tag("assets/admin/vendors/font-awesome/css/font-awesome.min.css");?>
    <?= link_tag("assets/admin/vendors/themify-icons/css/themify-icons.css");?>
    <?= link_tag("assets/admin/vendors/flag-icon-css/css/flag-icon.min.css");?>
    <?= link_tag("assets/admin/vendors/selectFX/css/cs-skin-elastic.css");?>

    <?= link_tag("assets/admin/assets/css/style.css");?>

    <?= link_tag("assets/admin/https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800");?>


</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                            <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php  echo base_url()  ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/js/main.js"></script>



</body>

</html>
