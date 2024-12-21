<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/css/alpha.css') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="card neobrutalism-card">
                <div class="card-body">
                    <img src="https://saweria.co/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Fhomepage_characters.a1cf6cc4.svg&w=3840&q=75"
                        alt="ORANG MALAS" class="img-fluid mb-3">

                    <h3 class="text-center">Daftar Akun</h3>
                    <!-- < ?= $success?> -->
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url() ?>store" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="">NIM</label>
                                <input class="form-control" id="nim" type="text" name="nim" placeholder="Masukan NIM" autofocus required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tanggal_lahir" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="form-label" for="">Nama</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" required>
                            </div>
                        </div>
                        <button class="btn btn-neobrutalism mt-3" type="submit">Daftar</button>
                    </form>
                    <p class="mt-3">Sudah Punya Akun? <a class="url" href="/masuk">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script>
        const nim = document.getElementById('nim');
        nim.addEventListener('input', function (e) {
            let value = e.target.value.replace(/\D/g, '');
            value = value.substring(0, 9);
            if (value.length > 0) {
                if (value.length > 2) {
                    value = value.substring(0, 2) + '.' + value.substring(2);
                }
                if (value.length > 6) {
                    value = value.substring(0, 6) + '.' + value.substring(6);
                }
            }
            e.target.value = value;
        });
    </script>
</body>

</html>