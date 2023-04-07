<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Informasi Akun Tron Baru</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <form action="<?= base_url('tron') ?>" method="post">
                <div class="mb-3">
                    <label class="form-label">Alamat Tron</label>
                    <input type="text" class="form-control" value="<?php echo $rawdata['address_base58']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Alamat Hexadecimal:</label>
                    <input type="text" class="form-control" value="<?php echo $rawdata['address_hex']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kunci Publik:</label>
                    <input type="text" class="form-control" value="<?php echo $rawdata['public_key']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Kunci Privat:</label>
                    <input type="text" class="form-control" value="<?php echo $rawdata['private_key']; ?>" readonly>
                </div>
                <div class="mb-3">
                    <button class="btn btn-danger" type="submit">Buat Akun Baru</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
