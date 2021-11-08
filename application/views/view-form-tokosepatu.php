<html>

<head>
    <title>Tugas Toko Sepatu</title>

    <style>
        .error1 {
            color: red;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
            <table bgcolor='blue' width="200px">
                <tr>
                    <th>
                        <h3>Toko Sepatu BSI</h3>
                        <hr>
                    </th>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" name="nama" id="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td class="error1"><b><?= form_error('nama'); ?> </b></td>
                </tr>
                <tr>
                    <td colspan="5"><input type="text" name="no" id="no" placeholder="No HP"></td>
                </tr>
                <tr>
                    <td class="error1"><b><?= form_error('no'); ?> </b></td>
                </tr>
                <tr>
                    <td>
                        <select name="merk" id="merk">
                            <option value="">-Pilih Merk-</option>
                            <option value="nike">Nike</option>
                            <option value="adidas">Adidas</option>
                            <option value="kickers">Kickers</option>
                            <option value="eiger">Eiger</option>
                            <option value="bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1">><b><?= form_error('merk'); ?> </b></td>
                </tr>
                <tr>
                    <td><b>Size Sepatu:</b></td>
                </tr>
                <tr>
                    <td>
                        <select name="size" id="size">
                            <option value="">-Pilih Size-</option>
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
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="error1">><b><?= form_error('size'); ?> </b></td>
                </tr>
                <tr>
                    <td align="center" colspan="3">
                        <input type="submit" value="input">
                        <input type="reset" value="Batal">
                </tr>
            </table>
    </center>
</body>

</html>