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

    <?= link_tag("assets/admin/stylecustom.css");?>

    <script src="<?php  echo base_url()  ?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php  echo base_url()  ?>assets/admin/js/main.js"></script>

    



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <!-- <img class="align-content" src="images/logo.png" alt=""> -->
                        <h1>Atsitco Admin</h1>
                    </a>
                </div>
                <div class="login-form">
                    <?php echo form_open('admin/index'); ?>
                         <p class="text-center eror_msg" id="validationMsg"><!-- The Username and/or Password is incorrect. --></p>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" id="email" class="form-control" placeholder="Email">
                        </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" id="password" class="form-control" placeholder="Password">
                        </div>
                                <div class="checkbox">
                                    
                                    <label class="pull-right">
                                <a href="<?php echo base_url() ?>index.php/admin/forgetPassword">Forgotten Password?</a>
                            </label>

                                </div>
                                <button type="submit"  id="loginbtn" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        
$('#loginbtn').click(function(){
let emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let email = $('#email').val();
let password = $('#password').val();

  if(email != "" && password != "" )
  {

      if(emailCheck.test(email))
      {
       $('#validationMsg').text('');  
        $('#email').removeClass('error');
      }
      else
      {
        $('#validationMsg').text('Please Check your email address.');
        $('#email').addClass('error');
        return false;
      }
      $('#password').removeClass('error');
        // alert('login');
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var result = this.responseText;
                 result =  JSON.parse(result)
                // alert(JSON.stringify(result));
                // alert(JSON.parse(result));


                if(result == 'invalid') 
                {  
                    // alert(result);
                     $('#validationMsg').text('The email and/or Password is incorrect.');                     
                    
                }
                if(result == 'notverify')
                {
                    // alert(result);
                    $('#validationMsg').text('Some thing worng please contact eptechno.com');
                  // swal("Account Inactivate!", "Verify your email address by clicking the link in your mailbox"); 
                }  
                if(result == 'login')
                {
                    // alert(result);
                  location.replace("<?php echo base_url(); ?>index.php/customize");
                }       
            }
        };
        xhttp.open("POST", "<?php echo base_url()?>index.php/admin/index", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("email="+email+"&password="+password);   
  }
  else
  {

    if(email != "")
    {
            if(emailCheck.test(email))
            {
              $('#validationMsg').text('');  
              $('#email').removeClass('error');
            }
            else
            {
              $('#validationMsg').text('Please check your email address.');
              $('#email').addClass('error');
              return false;
            }
    }
    else
    {
      $('#validationMsg').text('Please enter your email address.');
      $('#email').addClass('error');
      return false;
    }
    if(password != "")
    {
    
      $('#password').removeClass('error');
    }
    else
    {
      $('#validationMsg').text('Please enter your password.');
      $('#password').addClass('error');
      return false;
    }

    if(email == "" && password == "")
    {
      $('#validationMsg').text('Please enter your email and password.');      
      $('#email').addClass('error');
      $('#password').addClass('error');  
    }

  }


});

    </script>



    


</body>

</html>
