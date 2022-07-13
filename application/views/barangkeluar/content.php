
<section class="content">
        <div class="row">
        <div class="col-md-3">
        <a href="<?= site_url('barangkeluar/add');?>" class="btn btn-primary btn-block margin-bottom"> <i class="fa fa-plus-circle" ></i> Input Barang Keluar
       </a>
      <!-- <button type="button" class="btn btn-primary btn-block margin-bottom" href="<?= site_url('barangkeluar/add');?>"> -->
                
                <!-- </button> -->
            </div>
      <div class="col-md-12">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Riwayat Data Barang Keluar</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No </th>
                    <th>No Transaksi</th>
                    <th>Tanggal Keluar</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Keluar</th>
                    <th>User</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php
                     $no = 1;
                     if ($barangkeluar) :
                         foreach ($barangkeluar as $bk) :
                        ?>
                        <tr>
                        <td><?= $no++; ?></td>
                            <td><?= $bk['id_barang_keluar']; ?></td>
                            <td><?= $bk['tanggal_keluar']; ?></td>
                            <td><?= $bk['nama_barang']; ?></td>
                            <td><?= $bk['jumlah_keluar'] . ' ' . $bk['nama_satuan']; ?></td>
                            <td><?= $bk['nama']; ?></td>

                            <td align="center">
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('barangkeluar/delete/') . $bk['id_barang_keluar'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
               
                <?php endif; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>

        </section>