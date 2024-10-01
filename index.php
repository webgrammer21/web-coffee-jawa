<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Jawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="min-vh-100">
    <div class="container">
        <div class="row text-center fw-bold" style="font-size: 4rem; color: #C7253E">
            <div class="col">
                Coffe Jawa
            </div>
        </div>
        <div class="row text-center pb-5" style="color: #C7253E">
            <div class="col" >
                <p st>Selamat Datang di Caffe Jawa, platform pemesanan kopi untuk anak muda</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="https://www.coffeemakered.com/wp-content/uploads/2017/05/What-is-Americano-Coffee-1.jpg" class="card-img-top" alt="Americano Coffee">
                    <div class="card-body">
                        <p class="card-title fw-bold">Americano Coffee</p>
                        <p class="card-text">Secangkir kopi americano yang pahit dan enak.
                            Rasa biji kopi robusta yang khas membuat kopi ini cocok diminum untuk pecinta
                            kopi sejati.
                        </p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="Americano Coffee">
                            <input type="hidden" name="harga" value="10000">
                            <input type="hidden" name="poster" value="https://www.coffeemakered.com/wp-content/uploads/2017/05/What-is-Americano-Coffee-1.jpg">
                            <button class="btn btn-primary"><i class="bi bi-cart2 pe-1"></i>Beli sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="https://www.haushaltstipps.net/wp-content/uploads/cappucino-selber-machen.jpg" class="card-img-top" alt="Cappucino Coffee">
                    <div class="card-body">
                        <p class="card-title fw-bold">Cappucino Coffee</p>
                        <p class="card-text">Segelas kopi Cappucino, kopi kekinian untuk anak muda.
                            Menggunakan kopi Aceh yang berkualitas sehingga rasanya dijamin enak.
                        </p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="Cappucino Coffee">
                            <input type="hidden" name="harga" value="15000">
                            <input type="hidden" name="poster" value="https://www.haushaltstipps.net/wp-content/uploads/cappucino-selber-machen.jpg">
                            <button class="btn btn-primary"><i class="bi bi-cart2 pe-1"></i>Beli sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-auto d-flex justify-content-center">
                <div class="card m-2" style="width: 21rem;">
                    <img src="https://www.dashofbutter.com/wp-content/uploads/2022/08/Iced-coffee-1024x683.jpg" class="card-img-top" alt="Kopi Susu">
                    <div class="card-body">
                        <p class="card-title fw-bold">Kopi Susu</p>
                        <p class="card-text">Kopi susu yang khas perpaduan anatar kopi Jawa
                            dengan susu sapi sunda. Cocok diminum sebagai teman mengerjakan tugas.
                        </p>
                        <form action="order.php" method="post">
                            <input type="hidden" name="judul" value="Kopi Susu">
                            <input type="hidden" name="harga" value="12000">
                            <input type="hidden" name="poster" value="https://www.dashofbutter.com/wp-content/uploads/2022/08/Iced-coffee-1024x683.jpg">
                            <button class="btn btn-primary"><i class="bi bi-cart2 pe-1"></i>Beli sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>