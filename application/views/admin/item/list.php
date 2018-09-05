

<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
            <section class="widget shadow-01 mb-4" id="widget-06">
                <div class="widget-block">
                    <header>
                        <h3>Daftar Barang</h3>
                        <a class="btn btn-sm btn-primary float-right" href="<?= site_url('item/add') ?>"><i class="fa fa-plus"></i> Tambah Barang</a>
                        <div class="clearfix"></div>
                    </header>
                    <div class="widget-content py-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Barang</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Satuan</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $no = 1;
                                  foreach($records as $row){
                                    ?>
                                      <tr>
                                        <td  class="text-center" scope="row"><?= $no++ ?></td>
                                        <td class="text-center"><?=$row->code?></td>
                                        <td class="text-center"><?=$row->name?></td>
                                        <td class="text-center"><?=$row->uom?></td>
                                        <td><?= "Rp " . number_format($row->capital,2,',','.') ?></td>
                                        <td><?= "Rp " . number_format($row->price,2,',','.') ?></td>
                                        <td class="text-center">
                                          <a href="<?= site_url('item/edit/'.$row->id) ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>&nbsp;
                                          <a href="<?= site_url('item/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus <?= $row->name ?> dengan kode barang <?= $row->code ?>')"><i class="fa fa-trash"></i></a></td>
                                      </tr>
                                    <?php
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
        </div>
    </div>
</div>