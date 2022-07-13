
<section class="content">
        <div class="row justify-content-center">
       
      <div class="col-md-8">
      <div class="box">
              <div class="box-header">
                <h3 class="box-title">Form Input Barang Masuk</h3>
              </div>
              <!-- /.box-header -->
              <form action="<?= site_url('barangmasuk/simpan_data')?>" method="post">
              <div class="box-body">
              <?= form_open('', [], ['id_barang_masuk' => $id_barang_masuk, 'user_id' => $this->session->userdata('login_session')['users']]); ?>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-4 control-label">ID Transaksi Barang Masuk</label>
                  <div class="col-sm-7">
                  <input value="<?= $id_barang_masuk; ?>" type="text" name="id_barang_masuk" id="id_barang_masuk" readonly="readonly" class="form-control">
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Tanggal Masuk</label>
                  <div class="col-sm-7">
                  <input value="<?= set_value('tanggal_masuk', date('Y-m-d')); ?>" name="tanggal_masuk" id="tanggal_masuk" type="text" class="form-control date" placeholder="Tanggal Masuk...">
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Supplier</label>
                  <div class="col-sm-7">
                  <select name="supplier_id" id="supplier_id" class="form-control">
                                <option value="" selected disabled>Pilih Supplier</option>
                                <?php foreach ($supplier as $s) : ?>
                                    <option <?= set_select('supplier_id', $s['id_supplier']) ?> value="<?= $s['id_supplier'] ?>"><?= $s['nama_supplier'] ?></option>
                                <?php endforeach; ?>
                            </select>
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-4 control-label">Barang</label>
                  <div class="col-sm-7">
                  <select name="barang_id" id="barang_id" class="form-control">
                                <option value="" selected disabled>Pilih Barang</option>
                                <?php foreach ($barang as $b) : ?>
                                    <option <?= $this->uri->segment(3) == $b['id_barang'] ? 'selected' : '';  ?> <?= set_select('barang_id', $b['id_barang']) ?> value="<?= $b['id_barang'] ?>"><?= $b['id_barang'] . ' | ' . $b['nama_barang'] ?></option>
                                <?php endforeach; ?>
                            </select>
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="stok" class="col-sm-4 control-label">Stok</label>
                  <div class="col-sm-7">
                  <input  id="stok" name="stok" type="number" class="form-control">
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="jumlah_masuk" class="col-sm-4 control-label">Jumlah Masuk</label>
                  <div class="col-sm-7">
                  <input value="<?= set_value('jumlah_masuk'); ?>" name="jumlah_masuk" id="jumlah_masuk" type="number" class="form-control" placeholder="Jumlah Masuk...">
                  </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                  <label for="total_stok" class="col-sm-4 control-label">Total Stok</label>
                  <div class="col-sm-7">
                  <input readonly="readonly" id="total_stok" name="total_stok" type="number" class="form-control">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!-- <button type="button" class="btn btn-default">Cancel</button> -->
                <input type="submit" class="btn btn-info pull-left" value="simpan">
              </div>
              <!-- /.box-footer -->
              <!-- /.box-body -->
            </div>
            </form>
            <!-- /.box -->
          </div>

        </section>
       