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
    <div class="card neobrutalism-card p-4">
        <h2 class="text-center mb-4">Riwayat Pemakaian</h2>
        <section class="mb-4">
            <a class="btn btn-neobrutalism-green" href="/form_input">Tambah</a>
        </section>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary text-white">
                    <tr>
                        <th>No</th>
                        <th>NIM</th>
                        <th>Pemakaian</th>
                        <th>Tanggal</th>
                        <th>Software</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($riwayat)) { ?>
                        <?php foreach ($riwayat as $index => $r) { ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($r['nim'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= htmlspecialchars($r['pemakaian'], ENT_QUOTES, 'UTF-8') ?></td>
                                <td><?= date('d M Y', strtotime($r['created_at'])) ?></td>
                                <td><?= htmlspecialchars($r['software'], ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        <?php } ?>
                    <?php } else { ?>
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data riwayat pemakaian</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <form action="/logout" method="POST" class="mt-3">
            <button type="submit" class="btn btn-neobrutalism-red">Logout</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>