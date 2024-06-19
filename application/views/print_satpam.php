<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Satpam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        @media print {
            table {
                page-break-inside: auto;
            }
            tr {
                page-break-inside: avoid;
                page-break-after: auto;
            }
            thead {
                display: table-header-group;
            }
            tfoot {
                display: table-footer-group;
            }
            th, td {
                border: 1px solid #000;
            }
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Data Satpam</h2>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>TGL LAHIR</th>
                <th>ALAMAT</th>
                <th>NO TELP</th>
                <th>JABATAN</th>
                <th>TGL PEREKRUTAN</th>
                <th>PENDIDIKAN TERAKHIR</th>
                <th>AREA</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($satpam as $stpm) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $stpm->nik ?></td>
                <td><?= $stpm->nama ?></td>
                <td><?= $stpm->tgl_lahir ?></td>
                <td><?= $stpm->alamat ?></td>
                <td><?= $stpm->no_telp ?></td>
                <td><?= $stpm->jabatan ?></td>
                <td><?= $stpm->tgl_perekrutan ?></td>
                <td><?= $stpm->pendidikan_terakhir ?></td>
                <td><?= $stpm->area ?></td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
