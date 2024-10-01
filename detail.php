<?php
// Ambil data dari formulir jika ada
$pilihan = isset($_POST['pilihan']) ? $_POST['pilihan'] : '';
$pricekopi = isset($_POST['pricekopi']) ? $_POST['pricekopi'] : 0;
$hotorice = isset($_POST['hotorice']) ? $_POST['hotorice'] : '';
$ukuran = isset($_POST['ukuran']) ? $_POST['ukuran'] : '';
$priceukuran = isset($_POST['priceukuran']) ? $_POST['priceukuran'] : 0;
$sweet = isset($_POST['sweet']) ? $_POST['sweet'] : '';
$dairy = isset($_POST['dairy']) ? $_POST['dairy'] : '';

// Pastikan $topping adalah array, bahkan jika kosong
$topping = isset($_POST['topping']) && is_array($_POST['topping']) ? $_POST['topping'] : [];
$pricetopping = isset($_POST['pricetopping']) ? $_POST['pricetopping'] : 0;

$note = isset($_POST['note']) ? $_POST['note'] : '';
$total_harga = $pricekopi + $priceukuran + $pricetopping;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pemesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .custom-table {
            width: 50%;
            margin: 0 auto; /* Tabel berada di tengah */
        }
        .custom-table td, .custom-table th {
            font-size: 1rem; /* Ukuran font sesuai gambar */
            padding: 10px; /* Padding untuk kesesuaian */
            background-color: #f8f9fa; /* Warna latar tabel */
        }
        .custom-table td:nth-child(2) {
            background-color: lightgray;
        }
        .text-title {
            font-size: 3rem; /* Sesuaikan dengan gambar */
            color: #C7253E;
        }
        .subtext {
            color: #C7253E;
            margin-bottom: 20px;
        }
        .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .button-container .btn {
            background-color: #C7253E;
            color: white;
            padding: 10px 20px;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row text-center fw-bold text-title">
            <div class="col">
                Detail Pemesanan
            </div>
        </div>
        <div class="row text-center subtext">
            <div class="col">
                <p>Detail Pemesanan Anda</p> 
            </div>
        </div>

        <div class="card mb-3 border-0">
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <table class="table custom-table">
                            <tbody>
                                <tr>
                                    <td>Pilihan Kopi</td>
                                    <td><?php echo $pilihan; ?></td> 
                                </tr>
                                <tr>
                                    <td>Harga Kopi</td>
                                    <td>Rp <?php echo number_format($pricekopi, 0, ',', '.'); ?></td> 
                                </tr>
                                <tr>
                                    <td>Pilihan Hot/Ice</td>
                                    <td><?php echo $hotorice; ?></td> 
                                </tr>
                                <tr>
                                    <td>Pilihan Ukuran</td>
                                    <td><?php echo $ukuran; ?></td>
                                </tr>
                                <tr>
                                    <td>Harga Ukuran</td>
                                    <td>Rp <?php echo number_format($priceukuran, 0, ',', '.'); ?></td> 
                                </tr>
                                <tr>
                                    <td>Pilihan Sweetness Level</td>
                                    <td><?php echo $sweet; ?></td>
                                </tr>
                                <tr>
                                    <td>Pilihan Dairy</td>
                                    <td><?php echo $dairy; ?></td>
                                </tr>
                                <tr>
                                    <td>Pilihan Topping</td>
                                    <td><?php echo implode(', ', $topping); ?></td> 
                                </tr>
                                <tr>
                                    <td>Harga Topping</td>
                                    <td>Rp <?php echo number_format($pricetopping, 0, ',', '.'); ?></td> 
                                </tr>
                                <tr>
                                    <td>Catatan</td>
                                    <td><?php echo $note; ?></td> 
                                </tr>
                                <tr>
                                    <th>Total Harga</th>
                                    <td>Rp <?php echo number_format($total_harga, 0, ',', '.'); ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="button-container">
                            <a href="index.php"><button type="button" class="btn">Kembali ke menu utama</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
