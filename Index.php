<?php
require_once 'Kucing.php';
require_once 'Anjing.php';

$kucing = new Kucing();
$kucing->setNama("Mondy");
$kucing->setUmur(2);

$anjing = new Anjing();
$anjing->setNama("Brian");
$anjing->setUmur(4);


$daftarHewan = [
    [
        'nama'  => $kucing->getNama(),
        'umur'  => $kucing->getUmur(),
        'jenis' => $kucing->getJenis(),
        'suara' => $kucing->getSuara(),
        'ikon'  => '🐱',
        'tema'  => 'kucing'
    ],
    [
        'nama'  => $anjing->getNama(),
        'umur'  => $anjing->getUmur(),
        'jenis' => $anjing->getJenis(),
        'suara' => $anjing->getSuara(),
        'ikon'  => '🐶',
        'tema'  => 'anjing'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Hewan Peliharaan</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #f0f4f8, #d9e2ec);
            min-height: 100vh;
            padding: 40px 20px;
            color: #1f2933;
        }

        .container {
            max-width: 760px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .header h1 {
            font-size: 28px;
            color: #102a43;
            margin-bottom: 6px;
        }

        .header p {
            color: #627d98;
            font-size: 14px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .card {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            box-shadow: 0 10px 25px rgba(16, 42, 67, 0.08);
            border-top: 5px solid #334e68;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(16, 42, 67, 0.12);
        }

        .card.kucing {
            border-top-color: #f59e0b;
        }

        .card.anjing {
            border-top-color: #3b82f6;
        }

        .card-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 18px;
        }

        .ikon {
            font-size: 36px;
            background: #f0f4f8;
            width: 58px;
            height: 58px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
        }

        .badge {
            padding: 6px 12px;
            border-radius: 999px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .kucing .badge {
            background: #fef3c7;
            color: #b45309;
        }

        .anjing .badge {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .nama {
            font-size: 22px;
            font-weight: 700;
            color: #102a43;
            margin-bottom: 12px;
        }

        .info {
            font-size: 14px;
            color: #486581;
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .suara-box {
            background: #f8fafc;
            border-left: 3px solid #9fb3c8;
            padding: 10px 14px;
            border-radius: 0 8px 8px 0;
            font-size: 14px;
            color: #334e68;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Data Hewan Peliharaan</h1>
            
        </div>

        <div class="grid">
            <?php foreach ($daftarHewan as $hewan): ?>
                <div class="card <?= htmlspecialchars($hewan['tema']) ?>">
                    <div class="card-top">
                        <div class="ikon"><?= $hewan['ikon'] ?></div>
                        <span class="badge"><?= htmlspecialchars($hewan['jenis']) ?></span>
                    </div>
                    <div class="nama"><?= htmlspecialchars($hewan['nama']) ?></div>
                    <div class="info">
                        <strong>Umur:</strong> <?= htmlspecialchars($hewan['umur']) ?> tahun
                    </div>
                    <div class="suara-box">
                        "<?= htmlspecialchars($hewan['suara']) ?>"
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>