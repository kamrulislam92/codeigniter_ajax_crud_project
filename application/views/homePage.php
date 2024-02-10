<div class="hero">
    <div class="form_box">
        <div class="button_box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Registration</button>
        </div>
        <div class="social_icons">
            <!-- <img src="img/fb.png" alt="" srcset=""> -->
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-google"></i>
      
            <!-- <img src="img/tw.png" alt="" srcset="">
            <img src="img/instragram.png" alt="" srcset=""> -->
        </div>
        <form id="login" action="" class="kamrul">
            <input type="text" class="input-field" placeholder="Enter email " required>
            <input type="password" class="input-field" placeholder="Enter Password">
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit" class="submit-btn">Login</button>
        </form>
        <form id="register" action="" class="kamrul">
            <div class="form-group" style="display:flex; gap:10px;">
                <input type="text" class="input-field" placeholder="Enter first name" required>
                <input type="text" class="input-field" placeholder="Enter last name" required>
            </div>
            <input type="email" class="input-field" placeholder="Enter email " required>
            <input type="password" class="input-field" placeholder="Enter Password">
            <input type="password" class="input-field" placeholder="Enter Confirm Password">
            <input type="checkbox" class="check-box"><span>I agree to the term & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
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
        z.style.left = "110px";
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

<style>
    #register span {
    color: #777;
    font-size: 12px;
    bottom: 48px;
    left: 17px;
    position: absolute;
    top: 70%;
}
    .container-fluid .row>* {
    flex-shrink: 0;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
    margin: 0 !important;
    padding: 0 !important;
}

    *{
    padding: 0;
    margin: 0;
}
.hero {
    height: 100vh; /* Set height to 100% of the viewport height */
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('assets/images/1.jpg');
    background-position: center;
    background-size: cover;
    position: relative; /* Changed to relative for absolute positioning within its container */
}
.form_box {
    width: 450px;
    height: 560px;
    position: absolute;
    margin: 0 auto;
    background: #fff;
    padding: 10px;
    overflow: hidden;
    left: 0;
    right: 0;
    bottom: 0;
    top: 10%;
}
.button_box{
    width: 220px;
    margin: 0px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn {
    padding: 10px 20px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
    left: 20px;
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
    width: 110px;
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
.kamrul{
    top: 180px;
    position: absolute;
    width: 80%;
    transition: .5s;
    margin: 0 auto;
    left: 15%;
}
.input-field{
    width: 100%;
    padding: 10px 0;
    margin: 5px 0;
    border-left: 0;
    border-right: 0;
    border-top: 0;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;
    text-align:center;
}

span {
    color: #777;
    font-size: 12px;
    bottom: 48px;
    left: 17px;
    position: absolute;
    top: 62%;
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