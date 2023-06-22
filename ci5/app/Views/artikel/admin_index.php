<?php
// Initialize the $q variable
$q = isset($_GET['q']) ? $_GET['q'] : '';
?>

<?= $this->include('template/admin_header'); ?>
<style>
   
    .form-search {
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
    }
    .form-search input[type="text"] {
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-search input[type="submit"] {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<form method="get" class="form-search">
    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari data">
    <input type="submit" value="Cari" class="btn btn-primary">
</form>



<table class="table" style="text-align:center;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($artikel) {
            foreach ($artikel as $row) {
        ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td>
                        <b><?= $row['judul']; ?></b>
                        <p><small><?= substr($row['isi'], 0, 50); ?></small></p>
                    </td>
                    <td><?= $row['status']; ?></td>
                    <td>
                        <a class="btn" href="<?= base_url('/admin/artikel/edit/' . $row['id']); ?>">Ubah</a>
                        <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/artikel/delete/' . $row['id']); ?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        } else {
        ?>
            <tr>
                <td colspan="4">Belum ada data.</td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<div><?= $pager->only(['q'])->links(); ?></div>

<?= $this->include('template/admin_footer'); ?>
