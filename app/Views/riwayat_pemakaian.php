<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pemakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/css/alpha.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center">Riwayat Pemakaian</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Deskripsi</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data -->
                    <tr>
                        <td>1</td>
                        <td>2024-12-01</td>
                        <td>Pembelian Alat</td>
                        <td>Rp 1,500,000</td>
                        <td><span class="badge bg-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>2024-12-05</td>
                        <td>Pembayaran Listrik</td>
                        <td>Rp 500,000</td>
                        <td><span class="badge bg-warning">Menunggu</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>2024-12-10</td>
                        <td>Perawatan Kendaraan</td>
                        <td>Rp 2,000,000</td>
                        <td><span class="badge bg-danger">Ditolak</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <form action="/logout">
            <button type="submit" class="btn btn-neobrutalism-red">Logout</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>