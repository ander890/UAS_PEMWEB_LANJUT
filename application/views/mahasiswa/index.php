<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <br>
        <br>
        <?php if ($this->session->flashdata('message')) :
                echo $this->session->flashdata('message');
            endif;
        ?>
        <a href="<?= base_url('mahasiswa/add'); ?>">Tambah Data</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Jenis Kelamin</td>
                    <td>Telepon</td>
                    <td>Alamat</td>
                    <td>Kode Pos</td>
                    <td colspan="2">Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_mahasiswa as $row) : ?>
                <tr>
                    <td><?= @$row->nim ?></td>
                    <td><?= @$row->nama ?></td>
                    <td><?= @$row->jenis_kelamin ?></td>
                    <td><?= @$row->telepon ?></td>
                    <td><?= @$row->alamat ?></td>
                    <td><?= @$row->kode_pos ?></td>
                    <td><a href="<?= base_url('mahasiswa/edit/'.$row->id); ?>">Ubah</a></td>
                    <td><a href="<?= base_url('mahasiswa/hapus/'.$row->id); ?>">Hapus</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>