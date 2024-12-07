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

                    <h3 class="text-center">Masuk</h3>
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
                    <form action="/masuk" method="post">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label" for="">NIM</label>
                                <input class="form-control" type="text" id="nim" name="nim" placeholder="Masukan NIM"
                                    required>
                            </div>
                            <div class="col-md-6" id="tanggal_lahir">
                                <label class="form-label" for="">Tanggal Lahir</label>
                                <input class="form-control" id="tanggal_lahir" type="date" name="tanggal_lahir">
                            </div>
                            <div class="col-md-6 d-none" id="password">
                                <label class="form-label" for="">Password</label>
                                <input class="form-control" type="password" name="password"
                                    placeholder="Masukan Password">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch"
                                        id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Gunakan
                                        Password</label>
                                </div>
                                <script>
                                    const switchInput = document.getElementById('flexSwitchCheckDefault');
                                    const tanggalLahirDiv = document.getElementById('tanggal_lahir');
                                    const passwordDiv = document.getElementById('password');

                                    switchInput.addEventListener('change', function () {
                                        if (this.checked) {
                                            document.querySelector('input[name="tanggal_lahir"]').removeAttribute('required');
                                            document.querySelector('input[name="password"]').setAttribute('required', '');
                                            tanggalLahirDiv.classList.add('d-none');
                                            passwordDiv.classList.remove('d-none');
                                        } else {
                                            document.querySelector('input[name="tanggal_lahir"]').setAttribute('required', '');
                                            document.querySelector('input[name="password"]').removeAttribute('required');
                                            tanggalLahirDiv.classList.remove('d-none');
                                            passwordDiv.classList.add('d-none');
                                        }
                                    });
                                </script>
                            </div>
                        </div>
                        <button class="btn btn-neobrutalism-blue" type="submit">Masuk</button>
                    </form>
                    <p class="mt-3">Belum Punya Akun? <a class="url" href="/daftar">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>