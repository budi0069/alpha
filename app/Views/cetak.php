<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3 style="text-align: center;">Data Pemakaian</h3>
    <p style="margin-left: 100px;">dari tanggal <?= date('d M Y', strtotime($tgl_awal)) ?> s.d <?= date('d M Y', strtotime($tgl_akhir))?></p>
    <table>
        <thead>
            <tr>
                <td>Nim</td>
                <td>Pemakaian</td>
                <td>tanggal</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riwayat as $r) { ?>
                <tr>
                    <td><?= $r['nim'] ?></td>
                    <td><?= $r['pemakaian'] ?></td>
                    <td><?= date('d M Y', strtotime($r['created_at'])) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>