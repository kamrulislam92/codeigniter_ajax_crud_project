<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="hero">
        <div class="form_box">
            <div class="button_box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Registration</button>
            </div>
            <div class="social_icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-google"></i>
            </div>


        <form id="login" action="<?php echo base_url('auth/LoginRegistration_Controller/logins'); ?>" method="POST" class="form_main">
                <div class="container">
                    <?php if($this->session->flashdata('status')): ?>
                        <div class="alert alert-success">  
                            <?= $this->session->flashdata('status'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" >   
                            <input type="text" name="email" class="input-field" placeholder="Enter email" required>
                            <small><?php echo form_error('email'); ?></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" >   
                            <input type="password" name="password" class="input-field" placeholder="Enter Password" required>
                            <small><?php echo form_error('password'); ?></small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="display:flex; position:relative; gap:10px;"> 
                                <input type="checkbox" name="agree" class="check-box"><span>Remember Password</span>
                                <small><?php echo form_error('agree'); ?></small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" >  
                            <button type="submit" class="submit-btn">Login</button>
                        </div>
                    </div>
                </div>
            </form>


            <form id="register" action="<?php echo base_url('auth/LoginRegistration_Controller/register'); ?>" method="POST" class="form_main">
                <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6" >                     
                        <input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" class="input-field" placeholder="Enter first name" >
                        <small><?php echo form_error('first_name'); ?></small>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6" >
                        <input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" class="input-field" placeholder="Enter last name" >
                        <small><?php echo form_error('last_name'); ?></small>                     
                    </div>
                </div>
            
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <input type="email" name="email" value="<?php echo set_value('email'); ?>" class="input-field" placeholder="Enter email " >
                        <small><?php echo form_error('email'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="input-field" placeholder="Enter Password">
                        <small><?php echo form_error('password'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <input type="password" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" class="input-field" placeholder="Enter Confirm Password">
                        <small><?php echo form_error('confirm_password'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="display:flex; position:relative; gap:10px;"> 
                        <input type="checkbox" name="agree"  class="check-box"><span>I agree to the term & conditions</span>
                        <small><?php echo form_error('agree'); ?></small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12"> 
                        <button type="submit" class="submit-btn">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
   </div>

   <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "150px";
        }

        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

        // Initially hide the registration form
        document.addEventListener("DOMContentLoaded", function() {
            y.style.left = "450px";
        });
    </script>
</body>
</html>

<style>

#register span {
    margin-left: 15px;
    /* margin-top: -10px; */
}
    .container-fluid .row>* {
    flex-shrink: 0;
    /* width: 100%; */
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);

}

    *{
    padding: 0;
    margin: 0;
}
.hero {
    height: 100vh; 
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('http://localhost/codeigniter_ajax_crud_project/assets/images/5.jpg');
    background-position: center;
    background-size: cover;
    position: relative; 
}

.form_box {
    width: 450px;
    height:520px;
    position: absolute;
    margin: 0 auto;
    background: #fff;
    padding: 10px;
    overflow: hidden;
    left: 0;
    right: 0;
    top: 5%;
}
.button_box{
    width: 275px;
    margin: 0px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn {
    padding: 10px 30px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
    left: 30px;
    color: #000000;
}
/* #btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right, #ff105f , #ffad06);
    border-radius: 30px;
    transition: .5s;

} */
#btn {
    top: 0;
    left: 0;
    position: absolute;
    width: 125px;
    height: 100%;
    background: linear-gradient(to right, #0134a5 ,#879ff3);
    border-radius: 30px;
    transition: .5s;
    color: #fff;
}
.social_icons {
    margin: 15px auto;
    text-align: center;
}
.social_icons img{
    width: 30px;
    margin: 0 12px;
    cursor: pointer;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    border-radius: 50%;
}
.form_main{
    top: 160px;
    position: absolute;
    width: 80%;
    transition: .5s;
    margin: 0 auto;
    left: 15%;
}
.input-field {
    width: 100%;
    padding: 2px 0;
    margin: 13px 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
    text-align: center;
    border-radius: 10px;
}
/* span {
    color: #777;
    font-size: 12px;
    bottom: 48px;
    left: 20px;
    position: absolute;
    top: 54%;
} */
span {
    color: #777;
    font-size: 12px;
    margin-top: 10px;
}

.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin:auto;
    /* background: linear-gradient(to right, #ff105f , #ffad06 ); */
    background: linear-gradient(to right, #0134a5 ,#879ff3);
    border: 0;
    outline: none;
    border-radius: 30px;
}
i.fa.fa-facebook {
    color: #fff;
    /* background: linear-gradient(to right, #ff105f , #ffad06 ); */
    background: linear-gradient(to right, #0134a5 ,#879ff3);
    padding: 11px;
    font-size: 19px;
    font-weight: bold;
    border-radius: 50%;
}
i.fa.fa-twitter {
    color: #fff;
    /* background: linear-gradient(to right, #ff105f , #ffad06 ); */
    background: linear-gradient(to right, #0134a5 ,#879ff3);
    padding: 11px;
    font-size: 19px;
    font-weight: bold;
    border-radius: 50%;
}
i.fa.fa-google {
    color: #fff;
    /* background: linear-gradient(to right, #ff105f , #ffad06 ); */
    background: linear-gradient(to right, #0134a5 ,#879ff3);
    padding: 11px;
    font-size: 19px;
    font-weight: bold;
    border-radius: 50%;
    text-transform: uppercase;
}

.check-box {
    padding: 30px 10px 30px 0;
    margin: 15px 0;
}
/* span {
    color: #777;
    font-size: 12px;
    bottom: 48px;
    left: 17px;
    position: absolute;
} */
.login{
    left: 30px;
}
.resister{
    left: 450px;
}
</style>