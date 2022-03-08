<?= $this->extend('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3><strong>Laporan</strong></h3>
    <table class="table table-striped">
        <thead>
                <th>id</th>
                <th>user_id</th>
                <th>tanggal</th>
                <th>total harga</th>
                <th>no meja</th>
                <th>nama pemesan</th>
        </thead>
    </tbody>
        <?php
        $no=1;
        foreach ($data as $row):
        ?>
        <tr>
            <td><?=$no?></td>
            <td><?=$row['User_id']?></td>
            <td><?=$row['Tanggal']?></td> 
            <td><?=$row['Totalharga']?></td>
            <td><?=$row['No_meja']?></td>
            <td><?=$row['Nama_pemesan']?></td>
            <td>
            <a href="" class="btn btn-info btn-sm btn-edit">Cetak</a> 
            <a href="" class="btn btn-info btn-sm btn-info">Hapus</a>
            <td>
            </tr>
    <?php
    $no++;
    endforeach?>
    </tbody>
    </table>
    </div>
        <!--Add Product-->
             <form action="/Detailcontroller/save" method="post">
                <div class="modal fade" id="addDetail" tabindex="-1"aria-labelledby="exampleModel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Detail Pesanan</h5>
                            <button type="button" class="close" data-dismiss="modal "
                            aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                        <div class="form-group">
                            <label>user id</label>
                            <input type="text" class="form-control" name="user_id"
                            placeholder="Order_id">
                        </div>

                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="text" class="form-control" name="tanggal"
                            placeholder="Menu_id">
                        </div>
                        <div class="form-group">
                            <label>total harga</label>
                            <input type="text" class="form-control" name="total_harga" placeholder="total_harga">
                            <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label>no meja</label>
                            <input type="text" class="form-control" name="no_meja" placeholder="no_meja">
                            <div class="form-group">
                        </div>
                        <div class="form-group">
                            <label>nama pemesan</label>
                            <input type="text" class="form-control" name="nama_pemesan" placeholder="nama_pemesan">
                            <div class="form-group">
                        </div>
                        </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cetak</button>
        </div>
        </div>
        </div>
        </div>
        </form>
           
<?= $this->endSection()?>
                        