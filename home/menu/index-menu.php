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
    <style>
      .custom {
        background-color:#E2D9C8;
        margin-top:50px;
        padding:20px;
      }
      .card-text {
        font-weight:bold;
      }
      .card-title {
        font-weight:bold;
      }
      .btn {
        background-color:#AC7E64;
        color:white;
        border-radius:15px;
      }
      .flex-center {
            display: flex;
            align-items: center;
        }
        .flex-center img {
            margin: 0 5px;
            cursor: pointer;
        }
         .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
        }
        .d-flex.justify-content-between.align-items-center {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
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
    <img src="assets/menu kopi.png" alt="">

    

      <!-- Form Control Input Data -->
      <div class="container custom">
      <div class="row">

      <!-- Cappucino -->
            <div class="col-md-2">
                <div class="card custom-card">
                    <img src="assets/cappucino.png" class="card-img-top" alt="Image 1">
                    <div class="card-body">
                        <h5 class="card-title custom-card-title">CAPPUCINO</h5>
                        <p class="custom-card-text">"Rasakan kesempurnaan rasa antara kopi dan susu dalam cappuccino kami."</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="custom-card-text mb-0">Rp. 18.000,-</p>
                            <div class="flex-center">
                                <img src="assets/min.png" alt="Minus" class="minus" data-item="cappucino">
                                <p class="jumlahbayar mb-0" id="jumlah-cappucino">0</p>
                                <img src="assets/plus.png" alt="Plus" class="plus" data-item="cappucino">
                            </div>
                        </div>
                        <button class="btn  mt-2" data-bs-toggle="modal" data-bs-target="#Cappucino">Order Here</button>
                        <!-- Modal -->
                        <div class="modal fade" id="Cappucino" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <img src="assets/cappucino.png" alt="">
                                                </div>
                                                <div class="col-sm-6">
                                                    <h5>Cappucino</h5>
                                                    <p>Harga: Rp. 18.000</p>
                                                    <p>Jumlah: <span id="modal-jumlah-cappucino">0</span></p>
                                                    <p>Total Harga: Rp. <span id="modal-total-cappucino">0</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <p class="fw-semibold">Konfirmasi Tindakan?</p>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <button type="button" class="btn btn-primary">Ya</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Mocha -->
        <div class="col-md-2">
          <div class="card custom-card">
            <img src="assets/mocha.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title custom-card-title">MOCHA</h5>
              <p class="custom-card-text">"Perpaduan sempurna antara cokelat dan kopi dalam segelas mocha yang memanjakan lidah."</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="custom-card-text mb-0">Rp. 15.000,-</p>
                <div class="flex-center">
                  <img src="assets/min.png" alt="Minus" class="minus" data-item="mocha">
                  <p class="jumlahbayar mb-0" id="jumlah-mocha">0</p>
                  <img src="assets/plus.png" alt="Plus" class="plus" data-item="mocha">
                </div>
              </div>
              <button class="btn mt-2" data-bs-toggle="modal" data-bs-target="#Mocha">Order Here</button>
              <!-- Modal -->
              <div class="modal fade" id="Mocha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="assets/mocha.png" alt="">
                          </div>
                          <div class="col-sm-6">
                            <h5>Mocha</h5>
                            <p>Harga: Rp. 15.000</p>
                            <p>Jumlah: <span id="modal-jumlah-mocha">0</span></p>
                            <p>Total Harga: Rp. <span id="modal-total-mocha">0</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="fw-semibold">Konfirmasi Tindakan?</p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

             <!-- Americano -->
        <div class="col-md-2">
          <div class="card custom-card">
            <img src="assets/americano.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title custom-card-title">AMERICANO</h5>
              <p class="custom-card-text">"Kopi hitam yang kuat dan klasik, sempurna untuk memulai hari Anda."</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="custom-card-text mb-0">Rp. 16.000,-</p>
                <div class="flex-center">
                  <img src="assets/min.png" alt="Minus" class="minus" data-item="mocha">
                  <p class="jumlahbayar mb-0" id="jumlah-mocha">0</p>
                  <img src="assets/plus.png" alt="Plus" class="plus" data-item="mocha">
                </div>
              </div>
              <button class="btn mt-2" data-bs-toggle="modal" data-bs-target="#Mocha">Order Here</button>
              <!-- Modal -->
              <div class="modal fade" id="Mocha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="assets/mocha.png" alt="">
                          </div>
                          <div class="col-sm-6">
                            <h5>Mocha</h5>
                            <p>Harga: Rp. 16.000</p>
                            <p>Jumlah: <span id="modal-jumlah-mocha">0</span></p>
                            <p>Total Harga: Rp. <span id="modal-total-mocha">0</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="fw-semibold">Konfirmasi Tindakan?</p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

             <!-- machiato -->
        <div class="col-md-2">
          <div class="card custom-card">
            <img src="assets/expresso.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title custom-card-title">macchiato</h5>
              <p class="custom-card-text">"Sentuhan susu yang lembut pada espresso yang kaya, membuat macchiato kami istimewa."</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="custom-card-text mb-0">Rp. 17.000,-</p>
                <div class="flex-center">
                  <img src="assets/min.png" alt="Minus" class="minus" data-item="mocha">
                  <p class="jumlahbayar mb-0" id="jumlah-mocha">0</p>
                  <img src="assets/plus.png" alt="Plus" class="plus" data-item="mocha">
                </div>
              </div>
              <button class="btn mt-2" data-bs-toggle="modal" data-bs-target="#Mocha">Order Here</button>
              <!-- Modal -->
              <div class="modal fade" id="Mocha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="assets/mocha.png" alt="">
                          </div>
                          <div class="col-sm-6">
                            <h5>Mocha</h5>
                            <p>Harga: Rp. 17.000</p>
                            <p>Jumlah: <span id="modal-jumlah-mocha">0</span></p>
                            <p>Total Harga: Rp. <span id="modal-total-mocha">0</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="fw-semibold">Konfirmasi Tindakan?</p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
             <!-- Expresso -->
        <div class="col-md-2">
          <div class="card custom-card">
            <img src="assets/expresso.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title custom-card-title">EXPRESSO</h5>
              <p class="custom-card-text">"Nikmati keharuman dan kekuatan espresso kami yang segar."</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="custom-card-text mb-0">Rp. 15.000,-</p>
                <div class="flex-center">
                  <img src="assets/min.png" alt="Minus" class="minus" data-item="mocha">
                  <p class="jumlahbayar mb-0" id="jumlah-mocha">0</p>
                  <img src="assets/plus.png" alt="Plus" class="plus" data-item="mocha">
                </div>
              </div>
              <button class="btn mt-2" data-bs-toggle="modal" data-bs-target="#Mocha">Order Here</button>
              <!-- Modal -->
              <div class="modal fade" id="Mocha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="assets/mocha.png" alt="">
                          </div>
                          <div class="col-sm-6">
                            <h5>Mocha</h5>
                            <p>Harga: Rp. 15.000</p>
                            <p>Jumlah: <span id="modal-jumlah-mocha">0</span></p>
                            <p>Total Harga: Rp. <span id="modal-total-mocha">0</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="fw-semibold">Konfirmasi Tindakan?</p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

          <!-- Latte -->
          <div class="col-md-2">
          <div class="card custom-card">
            <img src="assets/latte.png" class="card-img-top" alt="Image 2">
            <div class="card-body">
              <h5 class="card-title custom-card-title">LATTE</h5>
              <p class="custom-card-text">"Perpaduan sempurna antara cokelat dan kopi dalam segelas mocha yang memanjakan lidah."</p>
              <div class="d-flex justify-content-between align-items-center">
                <p class="custom-card-text mb-0">Rp. 20.000,-</p>
                <div class="flex-center">
                  <img src="assets/min.png" alt="Minus" class="minus" data-item="mocha">
                  <p class="jumlahbayar mb-0" id="jumlah-mocha">0</p>
                  <img src="assets/plus.png" alt="Plus" class="plus" data-item="mocha">
                </div>
              </div>
              <button class="btn mt-2" data-bs-toggle="modal" data-bs-target="#Mocha">Order Here</button>
              <!-- Modal -->
              <div class="modal fade" id="Mocha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="container">
                        <div class="row">
                          <div class="col-sm-6">
                            <img src="assets/mocha.png" alt="">
                          </div>
                          <div class="col-sm-6">
                            <h5>Latte</h5>
                            <p>Harga: Rp. 23.000</p>
                            <p>Jumlah: <span id="modal-jumlah-mocha">0</span></p>
                            <p>Total Harga: Rp. <span id="modal-total-mocha">0</span></p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <p class="fw-semibold">Konfirmasi Tindakan?</p>
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                      <button type="button" class="btn btn-primary">Ya</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

            <!-- Lainnya... -->

        </div>
    </div>

  <script>
    document.getElementById('btnregister').addEventListener('click' , function () {
      window.location.href = 'register/register.php'
    });

    const items = {
      cappucino: { price: 18000, quantity: 0 },
      mocha: { price: 15000, quantity: 0 },
      macchiato: { price: 17000, quantity: 0 },
      americano: { price: 16000, quantity: 0 },
      latte: { price: 20000, quantity: 0 },
      expresso: { price: 15000, quantity: 0 }
    };

    document.querySelectorAll('.plus').forEach(button => {
      button.addEventListener('click', () => {
        const item = button.getAttribute('data-item');
        items[item].quantity++;
        updateDisplay(item);
      });
    });

    document.querySelectorAll('.minus').forEach(button => {
      button.addEventListener('click', () => {
        const item = button.getAttribute('data-item');
        if (items[item].quantity > 0) items[item].quantity--;
        updateDisplay(item);
      });
    });

    function updateDisplay(item) {
      document.getElementById(`jumlah-${item}`).innerText = items[item].quantity;
      document.getElementById(`modal-jumlah-${item}`).innerText = items[item].quantity;
      document.getElementById(`modal-total-${item}`).innerText = items[item].quantity * items[item].price;
    }

    // Add more modal functionality as needed...
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
