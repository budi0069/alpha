<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
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

                    <h3 class="text-center">Input Pemakaian</h3>
                    <!-- < ?= $success?> -->
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('success') ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } elseif (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php } ?>
                    <form action="/form_input/simpan" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6" id="password">
                                <label class="form-label" for="">Nim</label>
                                <input class="form-control" type="text" value="<?= $session['nim'] ?>" readonly>
                            </div>
                            <div class="col-md-6" id="password">
                                <label class="form-label" for="">Nama</label>
                                <input class="form-control" type="text" value="<?= $session['nama'] ?>" readonly>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-6 mb-2">
                                <label class="form-label" for="">Software yang digunakan</label>
                                <input class="form-control" type="text" name="software" placeholder="Example : Visual Studio Code"
                                    required>
                            </div>
                            <div class="col-md-6 mb-3" id="password">
                                <label class="form-label" for="">Pemakaian</label>
                                <input class="form-control" type="text" name="pemakaian"
                                    placeholder="Example : Mengerjakan Tugas">
                            </div>
                        </div>
                        <a class="btn btn-neobrutalism" href="/riwayat_pemakaian">Kembali</a>
                        <button class="btn btn-neobrutalism-blue" type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>