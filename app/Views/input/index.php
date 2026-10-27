
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
</head>
<body>

    <h1>Form Input Data Sederhana</h1>

    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;">
            <?= esc(session()->getFlashdata('error')) ?>
        </p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
        <p style="color: green;">
            <?= esc(session()->getFlashdata('success')) ?>
        </p>

        <p>Nama: <?= esc(session()->getFlashdata('nama')) ?></p>
        <p>Keterangan: <?= esc(session()->getFlashdata('keterangan')) ?></p>
    <?php endif; ?>

    <form action="<?= base_url('input/store') ?>" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="nama">Nama:</label>
            <input
                type="text"
                id="nama"
                name="nama"
                value="<?= esc(old('nama', '')) ?>"
                required
            >
        </div>

        <br>

        <div>
            <label for="keterangan">Keterangan:</label>
            <input
                type="text"
                id="keterangan"
                name="keterangan"
                value="<?= esc(old('keterangan', '')) ?>"
                required
            >
        </div>

        <br>

        <button type="submit">Kirim Data</button>
    </form>

</body>
</html>
