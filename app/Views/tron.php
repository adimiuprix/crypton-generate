<!DOCTYPE html>
<html>
<head>
    <title>Form Informasi Akun Tron Baru</title>
</head>
<body>
    <h1>Informasi Akun Tron Baru</h1>
    <form>
        <label>Alamat Tron:</label><br>
        <input type="text" value="<?php echo $rawdata['address_base58']; ?>" readonly><br>
        <label>Alamat Hexadecimal:</label><br>
        <input type="text" value="<?php echo $rawdata['address_hex']; ?>" readonly><br>
        <label>Kunci Publik:</label><br>
        <input type="text" value="<?php echo $rawdata['public_key']; ?>" readonly><br>
        <label>Kunci Privat:</label><br>
        <input type="text" value="<?php echo $rawdata['private_key']; ?>" readonly><br>
        <button type="button" onclick="window.location.href='<?php echo base_url('tron'); ?>'">Buat Akun Baru</button>
    </form>
</body>
</html>
