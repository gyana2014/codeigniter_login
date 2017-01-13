<?php
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
?>
<!DOCTYPE html>
<html lang="en">
<head>   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>look</title>
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/login.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="row">
<div class="col-md-4 col-md-offset-4">
<div class="form-body">
    <ul class="nav nav-tabs final-login">
        <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
        <li><a data-toggle="tab" href="#sectionB">Register</a></li>
    </ul>
    <div class="tab-content">
        <div id="sectionA" class="tab-pane fade in active">
        <div class="innter-form">
            <form class="sa-innate-form" action="<?php echo base_url('clogin/logincheck'); ?>" method="POST">
            <label>Email Address</label>
            <input type="text" name="user_id">
            <label>Password</label>
            <input type="password" name="user_psw">
            <button type="submit">Sign In</button>
            <a data-toggle="tab" href="#sectionC">Forgot Password?</a>
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
    		<ul>
            <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div id="sectionB" class="tab-pane fade">
			<div class="innter-form">
            <form class="sa-innate-form"  action="<?php echo base_url('clogin/register_user'); ?>" method="POST">
            <label>Name</label>
            <input type="text" name="customer_name">
           
            <label>Email </label>
            <input type="text" name="customer_email">
            <label>Mobile</label>
            <input type="text" name="customer_mobile">
            <label>Password</label>
            <input type="password" name="customer_psw">
            <button type="submit">Join now</button>
            <p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
            </form>
            </div>
            <div class="social-login">
            <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
			<ul>
            <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
            <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
            </ul>
            </div>
        </div>
       <div id="sectionC" class="tab-pane fade ">
            <div class="innter-form">
                <form class="sa-innate-form" method="post">
                    <label>Email </label>
                    <input type="text" name="customer_email">
                    <button type="submit">Change Password</button>
                </form>
            </div>
         
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
     <script src="<?php echo base_url(); ?>/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
</body>

</html>