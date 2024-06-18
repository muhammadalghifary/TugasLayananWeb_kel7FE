<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
</head>

<body>


    <div class="container">
        <form action="aksi-login.php" method="POST">
            <img src="assets/form.svg" alt="form" class="form">
            <img src="assets/duabijikopi.png" alt="form" class="duabijikopi">
            <p>CoffeeGill</p>
            <input type="username" name="username" placeholder="Username" required>
            <img src="assets/pesan.svg" alt="" class="pesan">
            <br>
            <br>
            <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <img src="assets/hidepw.svg" alt="" class="pw" id="showhidepassword">
            <br>
            <br>
            <br>
            <button class="login" id="btnlogin">LOGIN</button>
            <button class="signup" id="btnsignup">SIGN UP</button>
            <a href="#">Forgot Password?</a>
        </form>
    </div>
    <script>
        const showHidePassword = document.getElementById('showhidepassword');
        const passwordInput = document.getElementById('password');
        

        showHidePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });

        //ketika mouse mendekat btn signup bg warna biru dan text putih
        //ketika mouse mendekat btn login bg warna coklat dan text putih
        const btnlogin = document.getElementById('btnlogin')
        const btnsignup = document.getElementById('btnsignup')
        
        btnlogin.addEventListener('mouseover', function () {
            btnlogin.style.background = '#9c928a' //coklat
            btnlogin.style.color = 'white'
            btnlogin.style.border = "1px solid rgb(15, 98, 254)" //biru
            btnsignup.style.background = 'rgb(15, 98, 254)'//biru
            btnsignup.style.color = 'white'

        })

        //ketika mouse menjauh btn sign up bg warna coklat dan text putih
        //ketika mouse menjauh btn login bg warna biru dan text white
        btnlogin.addEventListener('mouseout', function () {
            btnsignup.style.background = '#9c928a' //coklat
            btnsignup.style.color = 'white'
            btnlogin.style.background = 'rgb(15, 98, 254)'//biru
            btnlogin.style.color = 'white'
        })

        //ketika mouse mendekat btn sign up bg warna coklat dan text putih
        //ketika mouse mendekat btn login bg warna coklat dan text putih
        btnsignup.addEventListener('mouseover', function () {
            btnsignup.style.background = 'rgb(15, 98, 254)'//biru
            btnsignup.style.color = 'white'
            btnlogin.style.background = '#9c928a' //coklat
            btnlogin.style.color = 'white'
        })

        //ketika mouse menjauh btn signup bg warna coklat dan text putih
        //ketika mouse menjauh btn login bg warna biru dan text putih
        btnsignup.addEventListener('mouseout', function () {
            btnsignup.style.background = '#9c928a' //coklat
            btnsignup.style.color = 'white'
            btnlogin.style.background = 'rgb(15, 98, 254)'//biru
            btnlogin.style.color = 'white'
        })

    </script>
</body>

</html>