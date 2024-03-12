<?php
    $cust = array("Dada", "Didi", "Dudu", "Dede", "Dodo");
?>
<?php
    $barang = array("Mie Instan"=>3000,
                    "Sabun Mandi"=>3500,
                    "Shampoo"=>1000,
                    "Sandal Jepit"=>11000,
                    "Roti"=>12000,
                    "Buku Tulis"=>5500,
                    "Susu Kotak"=>6000,
                    "Minyak Goreng"=>13000,
                    "Ice Cream"=>11000,
                    "Baterai"=>16000)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Transaksi</title>
    <style>
        table, tr, th, td{
            border: 1px solid black;
            border-collapse: collapse;
            padding-left: 20px;
            padding-right: 20px;
        }
    </style>
</head>
<body>
    <?php include "header.php" ?>
    <div class="container">
    <?php
if(isset($_POST['btnSubmit'])){
    $kode = $_POST['code'];
    $tgl = date_format(date_create('now'), "d-m-Y");
    $pel = $_POST['customer'];
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $h1 = $_POST['barang1'];
    $h2 = $_POST['barang2'];
    $h3 = $_POST['barang3'];
    $hb1 = $h1 * $q1;
    $hb2 = $h2 * $q2;
    $hb3 = $h3 * $q3;
    if($_POST['member']=="true"){
        $disc = ($hb1 + $hb2 + $hb3)*0.05;
    } else $disc = 0;
    $th  = $hb1 + $hb2 + $hb3 - $disc;
    $cash = $_POST['money'];
    $kembalian = $cash - $th;
    // $tl = date_create($_POST['bd']);
    // $tanggal = date_format($tl, "l, d F Y");
    echo "<p>Kode Transaksi = $kode</p>";
    echo "<p>Tanggal Transaksi = $tgl</p>";
    echo "<p>Customer = $pel</p>";
    echo "<p>Detail Pembelian:</p>";
    echo '<table class="table table-striped table-hover">
    <tr>
        <th>No.</th>
        <th>Nama Barang</th>
        <th>Qty</th>
        <th>Harga Satuan</th>
        <th>Jumlah</th>
    </tr>
    <tr>
        <td>1</td>
        <td>nama</td>
        <td>'.$q1.'</td>
        <td>'.$h1.'</td>
        <td>'.$hb1.'</td>
    </tr>
    <tr>
        <td>2</td>
        <td>nama</td>
        <td>'.$q2.'</td>
        <td>'.$h2.'</td>
        <td>'.$hb2.'</td>
    </tr>
    <tr>
        <td>3</td>
        <td>nama</td>
        <td>'.$q3.'</td>
        <td>'.$h3.'</td>
        <td>'.$hb3.'</td>
    </tr>
    </table>';
    echo "Subtotal = Rp.".number_format($hb1+$hb2+$hb3, 0,"",".")."<br>";
    echo "Diskon = Rp.".number_format($disc,0,"",".")."<hr>";
    echo "Total Bayar =".number_format($th,0,"",".")."<br>";
    echo "Uang Pembayaran =".number_format($cash,0,"",".")."<hr>"."<br>";
    echo "Kembali =".number_format($kembalian,0,"",".");
    echo "<br>";
    echo "<br>";
    echo "<hr>";
}
?>
</div>
    <form action="#" method="post">
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Kode Transaksi:</label><br>
            </div>
            <div class="col-8">
            <input class="form-control" type="text" name="code"><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Tanggal Transaksi:</label><br>
            </div>
            <div class="col-8">
            <label class="form-label" name="date"><?php echo date_format(date_create('now'), "d-m-Y");?></label><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Customer:</label><br>
            </div>
            <div class="col-8">
            <select class="form-control" name="customer">
                <option value="" selected>--Pilih Customer--</option>
                <?php
                foreach($cust as $pelanggan){
                ?>
                <option value="<?php echo $pelanggan?>"><?php echo $pelanggan?></option>
                <?php }?>
            </select><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Barang 1:</label><br>
            </div>
        <div class="col-6">
            <select class="form-control" name="barang1">
            <option value="" selected>--Pilih Barang--</option>
            <?php
            foreach($barang as $b1=>$harga){
            ?>
            <option value="<?php echo $harga?>"><?php echo $b1?></option>
            <?php }?>
            </select>
            </div>
        <div class="col-2">
                <input class="form-control" type="number" name="q1"><br>
        </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Barang 2 :</label><br>
            </div>
            <div class="col-6">
            <select class="form-control" name="barang2">
                <option value="" selected>--Pilih Barang--</option>
                <?php
                foreach($barang as $b2=>$harga){
                    ?>
                    <option value="<?php echo $harga?>"><?php echo $b2?></option>
                <?php }?>
            </select>
            </div>
            <div class="col-2">
            <input class="form-control" type="number" name="q2"><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Barang 3 :</label><br>
            </div>
            <div class="col-6">
            <select class="form-control" name="barang3">
                <option value="" selected>--Pilih Barang--</option>
                <?php
                foreach($barang as $b3=>$harga){
                ?>
                <option value="<?php echo $harga?>"><?php echo $b3?></option>
                <?php }?>
            </select>
            </div>
            <div class="col-2">
            <input class="form-control" type="number" name="q3"><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Punya Kartu Member?</label><br>
            </div>
            <div class="col-8">
                <input type="radio" name="member" value="true" class="form-check-input"><label class="form-check-label">Ya</label><br>
                <input type="radio" name="member" value="false" class="form-check-input"><label class="form-check-label">Tidak</label><br>
            </div>
        </div>
        <div class="row container">
            <div class="col-4">
            <label class="form-label">Uang Pembayaran</label><br>
            </div>
            <div class="col-8">
            <input type="number" name="money" class="form-control">
            </div>
        </div>
        <div class="container-fluid">
            <input type="submit" value="Simpan" name="btnSubmit" class="btn btn-success">
            <input type="reset" value="Batal" name="reset" class="btn btn-danger">
        </div>
    </form>
    <?php include "footer.php" ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@523distjsbootstrapbundleminjs" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>    
</body>
</html>