<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="../home.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
</head>

<body>
    <nav>
      <img src="../Login/assets/duabijikopi.png" alt="duabijikopi" class="duabijikopi">
      <p class="kopigil">CoffeeGill</p>
      <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Home</a></li>
        <li><a href="#">Menu</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <img src="../Login/assets/line.svg" alt="garis" class="garis">
      <button class="register" id="btnregister">Logout</button>
    </nav>

    <h2>Hallo User !</h2>
      <img src="../Login/assets/duabijikopi.png" alt="duabijikopi" class="duabijikopi2">
      <p class="kopigil2 mt-5">CoffeeGill</p>
      <img src="Login/assets/bgkopi.png" alt="" class="bgkopi">

      <!-- Form Control Input Data -->
      <div class="container">
        <div class="row">

            <h3>Pemesanan Kopi</h3>
            <form action="proses-menu.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama_customer" class="form-control" id="exampleFormControlInput2" placeholder="masukkan nama">

            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="exampleFormControlInput2" placeholder="maul@gmail.com">
            </div>
            
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">No.telp</label>
                <input type="text" name="noTelp" class="form-control" id="exampleFormControlInput2" placeholder="+62">
        
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput2" placeholder="ciawi">
        
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">jumlah pembelian</label>
                <input type="text" name="jumlah_pembelian" class="form-control" id="exampleFormControlInput2" placeholder="1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Catatan</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="catatan" rows="3"></textarea>
            </div>

            <button class="btn btn-primary" type="submit" href="" name="bsimpan">Pesan Sekarang</button>
            </form>
            
        </div>
    </div>
    <!-- Akhiran Input -->
      

  <script>
    document.getElementById('btnregister').addEventListener('click' , function () {
      window.location.href = 'register/register.php'
    })

    

    //ketika mouse mendekat btn register bg warna putih dan text coklat
    //ketika mouse mendekat btn login bg warna biru dan text coklat
    const btnlogin = document.getElementById('btnlogin')
    btnlogin.addEventListener('mouseover',function() {
      btnlogin.style.background = '#0066ff' //biru
      btnlogin.style.color = 'white'
      btnregister.style.background = 'white'
      btnregister.style.color = '#54382c'//coklat
      
    })

    //ketika mouse menjauh btn register bg warna biru dan text putih
    //ketika mouse menjauh btn login bg warna putih dan text coklat
    btnlogin.addEventListener('mouseout',function() {
      btnregister.style.background = '#0066ff' //biru
      btnregister.style.color = 'white'      
      btnlogin.style.background = 'white'
      btnlogin.style.color = '#54382c'//coklat
    })
    
    //ketika mouse mendekat btn register bg warna putih dan text coklat
    //ketika mouse menjauh btn login bg warna biru dan text putih
    btnregister.addEventListener('mouseover',function(){
      btnregister.style.background = 'white' 
      btnregister.style.color = '#54382c'//coklat
      btnlogin.style.background = '#0066ff' //biru
      btnlogin.style.color = 'white'
    })
    
    //ketika mouse menjauh btn register bg warna biru dan text putih
    //ketika mouse menjauh btn login bg warna putih dan text coklat
    btnregister.addEventListener('mouseout',function() {
      btnregister.style.background = '#0066ff' //biru
      btnregister.style.color = 'white'      
      btnlogin.style.background = 'white'
      btnlogin.style.color = '#54382c'//coklat
    })
    
    btnlogin.addEventListener('click', function () {
      window.location.href = 'login/login.php'
    })
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>