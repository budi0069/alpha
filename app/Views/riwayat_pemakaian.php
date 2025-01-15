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
    <div class="card neobrutalism-card">
        <h2 class="text-center">Riwayat Pemakaian</h2>
        <section>
        <a class="btn btn-neobrutalism-green mb-3" href="/form_input">Tambah</a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>Nim</th>
                        <th>pemakaian</th>
                        <th>Tanggal</th>
                        <th>sofware</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php foreach ($riwayat as $r) { ?>
                            <td><?= $r['id_pemakaian'] ?></td>
                            <td><?= $r['nim'] ?></td>
                            <td><?= $r['pemakaian'] ?></td>
                            <td><?= date('d M Y', strtotime($r['created_at'])) ?></td>
                        <?php } ?>
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
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const sidebar = document.getElementById('sidebar');

        menuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });
    </script>
</body>

</html>