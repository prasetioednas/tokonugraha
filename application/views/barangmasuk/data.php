
<section class="content">
        <div class="row">
        <div class="col-md-3">
        <a href="<?= site_url('barangmasuk/add');?>" class="btn btn-primary btn-block margin-bottom"> <i class="fa fa-plus-circle" ></i> Tambah Barang Masuk
       </a>
      <!-- <button type="button" class="btn btn-primary btn-block margin-bottom" href="<?= site_url('barangmasuk/add');?>"> -->
                
                <!-- </button> -->
            </div>
      <div class="col-md-12">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Riwayat Data Barang Masuk</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                    <th>No</th>
                    <th>No Transaksi</th>
                    <th>Tanggal Masuk</th>
                    <th>Supplier</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Masuk</th>
                    <th>User</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                    <?php
                     $no = 1;
                    if ($barangmasuk) :
                    foreach ($barangmasuk as $bm) :
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $bm['id_barang_masuk']; ?></td>
                            <td><?= $bm['tanggal_masuk']; ?></td>
                            <td><?= $bm['nama_supplier']; ?></td>
                            <td><?= $bm['nama_barang']; ?></td>
                            <td><?= $bm['jumlah_masuk'] . ' ' . $bm['nama_satuan']; ?></td>
                            <td><?= $bm['nama']; ?></td>

                            <td align="center">
                                <a onclick="return confirm('Yakin ingin hapus?')" href="<?= site_url('barangmasuk/delete/') . $bm['id_barang_masuk'] ?>" class="btn btn-danger btn-circle btn-sm"><i class="fa fa-trash"></i></a>
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