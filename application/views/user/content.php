
        <!-- TAMBAH MODAL CLIENT -->
        <div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">TAMBAH USER</h4>
          </div>
          <div class="modal-body">
            
            </div>
            <!-- /.box-header -->
              <form action="<?php echo site_url("user/simpan_data");?>" method="POST">
            <div class="box-body" id="view">
              <div class="form-group">
            <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username.." >
            </div>
            <div class="form-group">
            <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password.." >
            </div>
            <div class="form-group">
               <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama.." >
            </div>
            <div class="form-group">
            <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email.." >
            </div>
            <div class="form-group">
            <label>Nomor Telepon</label>
                <input type="text" class="form-control" name="no_telp" placeholder="Nomor Telepon.." >
              </div>
              <div class="form-group">
                  <label>Role</label>
                  <div class="input-group">
                  <input <?= set_radio('role', 'admin'); ?> value="admin" type="radio" id="admin" name="role" class="custom-control-input"> Admin
                  <input <?= set_radio('role', 'gudang'); ?> value="gudang" type="radio" id="gudang" name="role" class="custom-control-input"> Gudang
                
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
                <i class="fa fa-plus-circle"></i> Tambah User
                </button>
            </div>
      <div class="col-md-12">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Data User</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Nomor Telepon</th>
                    <th>Role</th>
                    
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
                      <td><?php echo $row->nama;  ?></td>
                    <td><?php echo $row->username;  ?></td>
                    <td><?php echo $row->email;  ?></td>
                      <td><?php echo $row->no_telp;  ?></td>
                      <td><?php echo $row->role;  ?></td>

                      <td align="center">
                       <a href="<?= site_url()?>/user/update/<?php echo $row->id_user; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                      <a href="<?= site_url()?>/user/hapus_data/<?php echo $row->id_user; ?>" class="btn btn-danger" onClick='return confirm("Apakah Ada yakin menghapus <?php echo $row->nama;?>?")'><i class="fa fa-trash"></i></a>
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

      <!-- END MODAL EDIT CLIENT -->
        </section>
