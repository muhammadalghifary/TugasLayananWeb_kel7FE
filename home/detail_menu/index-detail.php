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


    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h3>Detail Pemesanan</h3>

                    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>

  <tbody>
    <?php
    require '../koneksi.php';

    $sql = "SELECT * FROM customer";
    while ($row = mysqli_fetch_assoc($result)):
    ?>
    <tr>
      <th scope="row">1</th>
      <td><?= $row['nama_customer']?></td>
      <td><?= $row['email']?></td>
      <td><?= $row['noTelp']?></td>
      <td><?= $row['alamat']?></td>
      <td><?= $row['jumlah_pembelian']?></td>
      <td><?= $row['catatan']?></td>
      <td>
        <button href="" type="button" class="btn btn-success">Edit</button>
        <button href="" type="button" class="btn btn-danger">Hapus</button>
      </td>

    </tr>

    <?php endwhile; ?>
  </tbody>
</table>
                    <?php
                    
                    ?>
                </div>
            </div>
        </div>
    </div>
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