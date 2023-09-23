<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF | <?= $users[0]->name ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <div style="width: 100%; height: 100vh;">
        <p style="font-weight: bold; text-align: center;">PROVINSI JAWA TIMUR</p>
        <p style="font-weight: bold; text-align: center;">KOTA MALANG</p>
        
        <div style="display: inline;">
            <table style="width:100%; margin-top: 30px;">
                <tr>
                    <td style="width:30%;">Nama</td>
                    <td style="width: 10px;">:</td>
                    <td><?= $users[0]->name ?></td>
                    <td rowspan="3">
                        <img src="<?= $image ?>" alt="" width="100px">
                    </td>
                </tr>
                <tr>
                    <td style="width:30%;">Tempat/Tanggal Lahir</td>
                    <td style="width: 10px;">:</td>
                    <td><?= $users[0]->place_of_birth ?>/<?= $users[0]->date_birth ?></td>
                </tr>
                <tr>
                    <td style="width:30%;">Alamat</td>
                    <td style="width: 10px;">:</td>
                    <td><?= $users[0]->address ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>