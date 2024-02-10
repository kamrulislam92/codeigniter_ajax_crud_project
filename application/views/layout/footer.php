</main>
        </div>
    </div>

    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Toggle sidebar
        document.querySelector('.navbar-toggler').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
            document.querySelector('.content').classList.toggle('active');
        });
    </script>
</body>
</html>
<!-- 
<style>
    *{
    padding: 0;
    margin: 0;
}
.hero {
    height: 100%;
    width: 100%;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(img/banner.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form_box{
    width: 400px;
    height: 460px;
    position: relative;
    margin: 3% auto;
    background:#fff;
    padding: 5px;
    overflow: hidden;
}
.button_box{
    width: 220px;
    margin: 35px auto;
    position: relative;
    box-shadow: 0 0 20px 9px #ff61241f;
    border-radius: 30px;
}
.toggle-btn{
    padding: 10px 20px;
    cursor: pointer;
    background: transparent;
    border: 0;
    outline: none;
    position: relative;
    left: 20px;
}
#btn{
    top: 0;
    left: 0;
    position: absolute;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right, #ff105f , #ffad06);
    border-radius: 30px;
    transition: .5s;

}
.social_icons{
    margin: 30px auto;
    text-align: center;
}
.social_icons img{
    width: 30px;
    margin: 0 12px;
    cursor: pointer;
    box-shadow: 0 0 20px 0 #7f7f7f3d;
    border-radius: 50%;
}
.input-group{
    top: 180px;
    position: absolute;
    width: 280px;
    transition: .5s;
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
}

.submit-btn{
    width: 85%;
    padding: 10px 30px;
    cursor: pointer;
    display: block;
    margin:auto;
    background: linear-gradient(to right, #ff105f , #ffad06 );
    border: 0;
    outline: none;
    border-radius: 30px;
}
i.fa.fa-facebook {
    color: #fff;
    background: linear-gradient(to right, #ff105f , #ffad06 );
    padding: 11px;
    font-size: 19px;
    font-weight: bold;
    border-radius: 50%;
}
i.fa.fa-twitter {
    color: #fff;
    background: linear-gradient(to right, #ff105f , #ffad06 );
    padding: 11px;
    font-size: 19px;
    font-weight: bold;
    border-radius: 50%;
}
i.fa.fa-google {
    color: #fff;
    background: linear-gradient(to right, #ff105f , #ffad06 );
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
span {
    color: #777;
    font-size: 12px;
    bottom: 48px;
    left: 17px;
    position: absolute;
}
.login{
    left: 30px;
}
.resister{
    left: 450px;
}
</style> -->