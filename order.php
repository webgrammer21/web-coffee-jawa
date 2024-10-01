<?php 
$title = $_POST['judul'];
$poster = $_POST['poster'];
$pricekopi = $_POST['harga'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coffee Jawa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row text-center fw-bold" style="font-size: 4rem; color: #C7253E">
            <div class="col">
                Pemesanan
            </div>
        </div>
        <div class="row text-center pb-5" style="color: #C7253E">
            <div class="col" >
                <p st>Detail Pemesanan Anda</p>
            </div>
        </div>
    <div class="card mb-3 border-0">
        <div class="row g-0">
            <div class="col-md-4 px-3">
                <img src="<?php echo $poster ?>" class="img-fluid rounded-start" alt="<?php echo htmlspecialchars($title); ?>">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="container">
                        <form action="detail.php" method="post">
                            <div class="row align-items-start">
                                <div class="col">
                                    <p class="fw-bold">Pilihan kopi</p>
                                    <p class="container border"><?php echo htmlspecialchars($title); ?></p>
                                    <input type="hidden" name="pilihan" value="<?php echo htmlspecialchars($title); ?>">
                                    <input type="hidden" name="pricekopi" value="<?php echo htmlspecialchars($pricekopi); ?>">
                                    
                                    <p class="fw-bold">Hot/Ice</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hotorice" id="hot" value="Hot" checked>
                                        <label class="form-check-label" for="hot">Hot</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="hotorice" value="Ice" id="ice">
                                        <label class="form-check-label" for="ice">Ice</label>
                                    </div>
                                    
                                    <p class="fw-bold">Ukuran</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ukuran" id="reguler" value="Reguler" checked>
                                        <input type="hidden" name="priceukuran" value="0">
                                        <label class="form-check-label" for="reguler">Reguler</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ukuran" value="Large" id="large">
                                        <input type="hidden" name="priceukuran" value="5000">
                                        <label class="form-check-label" for="large">Large</label>
                                    </div>
                                    
                                    <p class="fw-bold">Sweetness Level</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sweet" id="normal" value="Normal sweet" checked>
                                        <label class="form-check-label" for="normal">Normal sweet</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sweet" value="Less sugar" id="less">
                                        <label class="form-check-label" for="less">Less sugar</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <p><span class="fw-bold">Dairy</span> (opsional)</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dairy" value="Milk" id="milk">
                                        <label class="form-check-label" for="milk">Milk</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="dairy" value="Oatmilk" id="oatmilk">
                                        <label class="form-check-label" for="oatmilk">Oatmilk</label>
                                    </div>
                                    
                                    <p><span class=" fw-bold">Topping</span> (opsional)</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="topping[]" value="Caramel sauce" id="caramel_sauce">
                                        <input type="hidden" name="pricetopping" value="2000">
                                        <label class="form-check-label" for="caramel_sauce">Caramel sauce</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="topping[]" value="Caramel crumble" id="caramel_crumble">
                                        <input type="hidden" name="pricetopping" value="2000">
                                        <label class="form-check-label" for="caramel_crumble">Caramel crumble</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="topping[]" value="Choco granola" id="choco_granola">
                                        <input type="hidden" name="pricetopping" value="2000">
                                        <label class="form-check-label" for="choco_granola">Choco granola</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="topping[]" value="Choco sauce" id="choco_sauce">
                                        <input type="hidden" name="pricetopping" value="2000">
                                        <label class="form-check-label" for="choco_sauce">Choco sauce</label>
                                    </div>
                                    <p><span class="fw-bold">Note</span> (opsional)</p>
                                    <textarea name="note" id="note" rows="3"></textarea>
                                    <div class="col">
                                    
                                    <button type="submit" class="btn btn-primary">Order</button>
                                    <button type="button" class="btn btn-danger" onclick="this.form.reset();">Reset</button>
                                </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>