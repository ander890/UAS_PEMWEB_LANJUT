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
        <h1>Form Ubah Data Mahasiswa</h1>
        <br>
        <br>
        <?php if ($this->session->flashdata('message')) :
                echo $this->session->flashdata('message');
            endif;
        ?>
        <form action="" method="POST">
            <label for="">NIM</label>
            <input type="text" class="form-control" name="nim" value="<?= $data_mahasiswa->nim ?>" required>
            <br>
            <label for="">Nama</label>
            <input type="text" class="form-control" name="nama" value="<?= $data_mahasiswa->nama ?>" required>
            <br>
            <label for="">Jenis Kelamin</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="flexRadioDefault1" <?php if($data_mahasiswa->jenis_kelamin == "Laki-laki"): echo "checked"; endif;?> > 
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="flexRadioDefault2" <?php if($data_mahasiswa->jenis_kelamin == "Perempuan"): echo "checked"; endif;?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
            </div>
            <br>
            <label for="">Telepon</label>
            <input type="text" class="form-control" name="telepon" value="<?= $data_mahasiswa->telepon ?>" required>
            <br>
            <label for="">Alamat</label>
            <textarea name="alamat" class="form-control" id="" cols="30" rows="3" required><?= $data_mahasiswa->alamat ?></textarea>
            <br>
            <label for="">Kode POS</label>
            <input type="text" class="form-control" name="kode_pos" value="<?= $data_mahasiswa->kode_pos ?>" required>
            <br>
            <button type="submit" class="btn btn-success btn-block">Simpan</button>
            <a href="<?= base_url("mahasiswa") ?>" class="btn btn-secondary btn-block">Kembali / Batal</a>

        </form>
    </div>

</body>
</html>