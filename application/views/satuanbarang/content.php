
        <!-- TAMBAH MODAL CLIENT -->
        <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">TAMBAH SATUAN</h4>
          </div>
          <div class="modal-body">
            
            </div>
            <!-- /.box-header -->
              <form action="<?php echo site_url("satuan/simpan_data");?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
                <div class="input-group">
                <div class="input-group-addon">
                <i class="fa fa-fw fa-folder"></i>
                </div>
                <input type="text" class="form-control" name="nama_satuan" placeholder="Nama Satuan.." >
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
                <i class="fa fa-plus-circle"></i> Tambah Satuan
                </button>
            </div>
      <div class="col-md-12">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data Satuan</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Satuan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <tr>
                      <?php 
                      $no=1;
                        foreach($isi->result() as $row){
                      ?>
                      <td><?php echo $no++;  ?></td>
                      <td><?php echo $row->nama_satuan;  ?></td>

                      <td align="center">
                       <a href="<?= site_url()?>/satuan/update/<?php echo $row->id_satuan; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                      <a href="<?= site_url()?>/satuan/hapus_data/<?php echo $row->id_satuan; ?>" class="btn btn-danger" onClick='return confirm("Apakah Ada yakin menghapus <?php echo $row->nama_supplier;?> Sebagai Supplier?")'><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

        </section>
