<?php
if(isset($_POST['simpan'])){
    $nama_lengkap = $_POST['nama_lengkap'];
    $banyak_amplop = $_POST['banyak_amplop'];
    $nomor_amplop = $_POST['nomor_amplop'];

    if($fungsi->tambah($nama_lengkap, $banyak_amplop, $nomor_amplop))
        header('Location: index.php?page=add_data&&add=success');
    else
        header('Location: index.php?page=add_data&&add=failure');
}

if(isset($_GET['add'])){
    $add = $_GET['add'];

    switch($add){
        case 'success':
            $message = '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Berhasil!</strong> Data telah diinput.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            break;
        case 'failure':
            $message = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Gagal!</strong> Terjadi kesalahan saat proses penginputan.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>';
            break;
    }

    echo '<br>'.$message;
}
?>

<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
    <h1 class='h2'>Tambah Data</h1>
    <?php
    $fungsi->breadcrumb();
    ?>
</div>
<form method='post'> 
    <div class='form-group'>
        <label for='nama_lengkap'>Nama lengkap</label>
        <input type='text' class='form-control' name='nama_lengkap' id='nama_lengkap' placeholder='Nama lengkap Penanggung Jawab'>
    </div>
    <div class='form-group'>
        <label for='banyak_amplop'>Banyak amplop</label>
        <input type='text' class='form-control' name='banyak_amplop' id='banyak_amplop' placeholder='Banyak amplop yang diterima (Misalkan : 3)'>
    </div>
    <div class='form-group'>
        <label for='nomor_amplop'>Nomor amplop</label>
        <input type='text' class='form-control' name='nomor_amplop' id='nomor_amplop' placeholder='Nomor amplop (Misalkan : 1-5; 7-10)'>
    </div>
    <button type='submit' name='simpan' class='btn btn-primary'>Simpan</button>
</form>
