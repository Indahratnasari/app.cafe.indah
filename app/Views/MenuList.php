<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
<?php 
    if (session()->getFlashdata('success')){
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <?= session()->getFlashdata('success')?>
    <button type="button" class="close" data-dismiss="alert" role="alert" aria-label="close">close</button>
</div>
<?php
    }
?>
    <h3>Data Menu</h3>
    <button type="button" class="btn btn-info mb-2" data-toggle="modal" data-target="#addMenu">Tambah Data</button>

    <table class="table table-border">
        <thead>
            <th>Id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jenis</th>
            <th>Stok</th>
            <th>Option</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach ($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['Nama']?></td>
                <td><?=$row['Harga']?></td>
                <td><?=$row['Jenis']?></td>
                <td><?=$row['Stok']?></td>
                <td>
                <a href="#" class="btn btn-info" data-toggle="modal" data-target="#editMenu-<?=$row['id']?>">Edit</a>
                <a href="<?=base_url('menu/delete/'.$row['id'])?>" onclick="return confirm('Yakin Akan Dihapus')" class= "btn btn-info btn-sm btn-hapus">Hapus</a>
                </td>
            </tr>

<form action="<?=base_url('/menu/edit/'.$row['id'])?>" method="post">
    <div class="modal fade" id="editMenu-<?=$row['id']?>" tabindex="-1" aria-labelladby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="Nama" id="Nama" class="form-control" value="<?=$row['Nama']?>">
                </div>
                    
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="Harga" placeholder="Harga" value="<?=$row['Harga']?>">
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="flexRadioDefault1" value="makanan">
                        <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="flexRadioDefault1" value="minuman">
                        <label class="form-check-label" for="flexRadioDefault1">Minuman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis" id="flexRadioDefault1" value="camilan">
                        <label class="form-check-label" for="flexRadioDefault1">Camilan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="Stok" placeholder="Stok" value="<?=$row['Stok']?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
</form>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div>

<!-- Modal Add Product-->
<form action="<?=base_url('menus')?>" method="post">
    <div class="modal fade" id="addMenu" tabindex="-1" aria-labelladby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="Nama_pemesan" placeholder="Nama">
                </div>
                    
                <div class="form-group">
                    <label>Harga</label>
                    <input type="text" class="form-control" name="Harga" placeholder="Harga">
                </div>

                <div class="form-group">
                    <label>Jenis</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="flexRadioDefault1" value="makanan">
                        <label class="form-check-label" for="flexRadioDefault1">Makanan</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="flexRadioDefault1" value="minuman">
                        <label class="form-check-label" for="flexRadioDefault1">Minuman</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="Jenis" id="flexRadioDefault1" value="camilan">
                        <label class="form-check-label" for="flexRadioDefault1">Camilan</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Stok</label>
                    <input type="text" class="form-control" name="Stok" placeholder="Stok">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
</form>
<!-- End Modal Add User-->

<?= $this->endSection()?>
