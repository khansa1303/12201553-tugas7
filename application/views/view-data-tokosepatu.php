<html>

<head>
    <title>Hasil Order</title>
</head>

<body>
    <center>
        <table bgcolor="blue">
            <tr>
                <th colspan ="5">
                    <h3>Toko Sepatu BSI</h3>
                    <hr>
                </th>
            </tr>
            <tr>
                <td>Nama Pembeli</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>No Hp</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Merk Sepatu</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td>Size Sepatu</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>Rp.<?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="5">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/tokosepatu' ?>">Beranda</a></button>
    </center>
</body>
</html>