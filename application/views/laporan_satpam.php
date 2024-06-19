<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <tr>
        <th>NO</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>TGL LAHIR</th>
        <th>ALAMAT</th>
        <th>NO TELP</th>
        <th>TGL PEREKRUTAN</th>
    </tr>
    <?php $no = 1; foreach($satpam as $stpm) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $stpm->nik ?></td>
                <td><?= $stpm->nama ?></td>
                <td><?= $stpm->tgl_lahir ?></td>
                <td><?= $stpm->alamat ?></td>
                <td><?= $stpm->no_telp ?></td>
                <td><?= $stpm->tgl_perekrutan ?></td>
            </tr>
            <?php endforeach ?>
    </table>
</body></html>