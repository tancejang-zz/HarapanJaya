

<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
            <section class="widget shadow-01 mb-4" id="widget-06">
                <div class="widget-block">
                    <header>
                        <h3>Stok Barang</h3>
                        <div class="clearfix"></div>
                    </header>
                    <div class="widget-content py-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Kode Barang</th>
                                    <th class="text-center">Nama Barang</th>
                                    <th class="text-center">Stok</th>
                                    <th class="text-center">Kota</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $no = 1;
                                  foreach($records as $row){
                                    print_r($row);
                                    ?>
                                      <tr>
                                        <td scope="row" class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?=$row->name?></td>
                                        <td class="text-center"><?=$row->address?></td>
                                        <td class="text-center"><?=$row->phone?></td>
                                        <td class="text-center" class="text-center"><?=$row->city?></td>
                                        <td class="text-center">
                                          <a href="<?= site_url('supplier/edit/'.$row->id) ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>&nbsp;
                                          <a href="<?= site_url('supplier/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus <?= $row->name ?> dengan ID# <?= $row->id ?>')"><i class="fa fa-trash"></i></a></td>
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