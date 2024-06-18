<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="register.css">
    <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
</head>

<body>

    <div class="container">
        <form action="aksi-daftar.php" method="POST">
            <img src="assets/form.svg" alt="form" class="form">
            <img src="assets/duabijikopi.png" alt="form" class="duabijikopi">
            <p>CoffeeGill</p>
            <input type="text" name="username" placeholder="Fullname" required>
            <img src="assets/user.svg" alt="" class="user">
            <br>
            <br>
            <br>
            <input type="email" name="email" placeholder="E-mail address" required>
            <img src="assets/pesan.svg" alt="" class="pesan">
            <br>
            <br>
            <br>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <img src="assets/hidepw.svg" alt="" class="pw" id="showhidepassword">
            <br>
            <br>
            <br>
            <input type="password" name="password" placeholder="Confirm Password" id="password2" required>
            <img src="assets/hidepw.svg" alt="" class="pw2" id="showhidepassword2">
            <br>
            <input type="text" name="Status" value="User" placeholder="Confirm Password" id="password2" hidden>
            <br>
            <br>
            <button href="../Login/login.php" type="submit">REGISTER</button>
        </form>
    </div>
    <script>
        const showHidePassword = document.getElementById('showhidepassword');
        const showHidePassword2 = document.getElementById('showhidepassword2');
        const passwordInput = document.getElementById('password');
        const passwordInput2 = document.getElementById('password2');

        showHidePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
        showHidePassword2.addEventListener('click', function () {
            const type2 = passwordInput2.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput2.setAttribute('type', type2);
        });
    </script>
</body>

</html>