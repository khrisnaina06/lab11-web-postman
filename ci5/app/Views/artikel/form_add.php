<?= $this->include('template/admin_header'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post" enctype="multipart/form-data">
    <p>
        <input type="text" name="judul">
    </p>
    <p>
        <textarea name="isi" cols="50" rows="10"></textarea>
    </p>
    <p>
<input type="file" name="gambar">
</p>
<form action="" method="post" enctype="multipart/form-data">
    
    <div class="file-input-container">
    <p class="file-input" >
    <input type="submit" value="Kirim" class="btn btn-large"></p>
    </div>
</form>
<?= $this->include('template/admin_footer'); ?>