
        <!-- TAMBAH MODAL CLIENT -->
        <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">TAMBAH BARANG</h4>
          </div>
          <div class="modal-body">
            
            </div>
            <!-- /.box-header -->
              <form action="<?php echo site_url("databarang/simpan_data");?>" method="POST">
            <div class="box-body" id="view">
              
              <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">
                <!-- <i class="fa fa-fw fa-user"></i> -->
                </div>
                <input type="text" class="form-control" name="id_barang" value="<?=  $id_barang ; ?>" readonly>
              </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">
                <!-- <i class="fa fa-fw fa-user"></i> -->
                </div>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang.." >
              </div>
            </div>
            <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon" >
                <i class="fa fa-fw fa-plus" href="<?= base_url('jenis'); ?>"></i>
                </div>
                <select name="jenis_id" id="jenis_id" class="form-control">
                                <option value="" selected disabled>Pilih Jenis Barang</option>
                                <?php foreach ($jenis1->result() as $a): ?>
                      <option value="<?php echo $a->id_jenis ?>"><?php echo $a->nama_jenis ?></option>
                    <?php endforeach; ?>
                            </select>
                            <!-- <div class="input-group-append">
                                <a class="btn btn-primary" href="<?= base_url('jenis'); ?>"><i class="fa fa-plus"></i></a>
                            </div> -->
              </div>
              </div>
              <div class="form-group">
            <div class="input-group">
                <div class="input-group-addon">
                <i class="fa fa-fw fa-plus" href="<?= base_url('satuan'); ?>"></i>
                </div>
                <select name="satuan_id" id="satuan_id" class="form-control">
                                <option value="" selected disabled>Pilih Jenis Satuan</option>
                                <?php foreach ($satuan->result() as $a): ?>
                      <option value="<?php echo $a->id_satuan ?>"><?php echo $a->nama_satuan ?></option>
                    <?php endforeach; ?>  
                            </select>
              </div>
              </div>
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"> Batal</i></button>
              <button type="submit" name="register" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>    </div>

            </div>
          </div>
        </div>
      </form>
      <!-- END MODAL TAMBAH CLIENT -->

     

      <section class="content">
        <div class="row">
        <div class="col-md-3">
      <button type="button" class="btn btn-primary btn-block margin-bottom" data-toggle="modal" data-target="#modal-tambah">
                <i class="fa fa-plus-circle"></i> Tambah Barang
                </button>
            </div>
      <div class="col-md-12">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Barang</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    
                    <?php
                $no = 1;
                    foreach ($barang as $b) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $b['id_barang']; ?></td>
                            <td><?= $b['nama_barang']; ?></td>
                            <td><?= $b['nama_jenis']; ?></td>
                            <td><?= $b['stok']; ?></td>
                            <td><?= $b['nama_satuan']; ?></td>
                            <td>
                                <!-- <a href="<?= site_url('databarang/update/') . $b['id_barang'] ?>" class="btn btn-warning btn-circle btn-sm"><i class="fa fa-edit"></i></a> -->
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('databarang/hapus_data/') . $b['id_barang'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
        </section>
