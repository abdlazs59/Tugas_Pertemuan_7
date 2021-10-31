<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Toko Sepatu</title>
</head>
<center>
    <div class="card text-center">
    <div class="card-header">
        FORM INPUT PEMBELIAN SEPATU
    </div>
<center>
    <div class="card-body">
<center>
        <form action="<?= base_url("Pembelian/cetak"); ?>" method="post">
        <table>
        <tr>
            <th colspan="4">
                King Shoe Abdul Azis Silahkan Isi Untuk Memesan 
            </th>
        </tr>   
        <tr>
            <td colspan="4">
                <hr>
            </td>
        </tr>
        <tr>
            <th>Nama Pembelian</th>
            <th>:</th>
            <td>
                <input type="text"name="nama" id="nama" >
            </td>
            </tr>
            <tr>
                <th>No Tlpn</th>
                <td>:</td>
                <td>
                    <input type="text" name="tlp" id="tlp" >
                </td>
            </tr>
            <tr>
                <th>Merek Sepatu</th>
                <td>:</td>
                <td>
                    <select name="merek" id="merek">
                        <option value="">Pilih Merek</option>
                        <option value="Nike">Nike</option>
                        <option value="Adidas">Adidas</option>
                        <option value="Kickers">Kickers</option>
                        <option value="Eiger">Eiger</option>
                        <option value="Bucherri">Bucherri</option>
                    </select>
                </td>
            </tr>
            </td>
            <tr>
                <th>Ukuran Sepatu</th>
                <td>:</td>
                <td>
                    <select name="ukuran" id="ukuran">
                        <option value="">Pilih Ukuran</option>
                        <option value="32">32</option>
                        <option value="33">33</option>
                        <option value="34">34</option>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Harga</th>
                <td>:</td>
                <td>
                    <select name="harga" id="harga">
                        <option value="">Harga</option>
                        <option value="375000">Nike</option>
                        <option value="300000">Adidas</option>
                        <option value="250000">Kickers</option>
                        <option value="275000">Eiger</option>
                        <option value="400000">Bucherri</option>
                    </select>
                </td>
            </tr>
            </td>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" value="Submit">
                </td>
            </tr>
        </table>
        </form>
    </center>
  </div>
  <div class="card-footer text-muted">
    Selamat Datang Di Toko Kami Cek Kembali Inputan Anda Sebelum Mengklik Submit
  </div>
</div>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>