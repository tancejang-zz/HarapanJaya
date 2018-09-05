

<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
            <section class="widget shadow-01 mb-4" id="widget-06">
                <div class="widget-block">
                    <header>
                        <h3>Daftar Pegawai</h3>
                        <a class="btn btn-sm btn-primary float-right" href="<?= site_url('employee/add') ?>"><i class="fa fa-plus"></i> Tambah Pegawai</a>
                        <div class="clearfix"></div>
                    </header>
                    <div class="widget-content py-3">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Tanggal Lahir</th>
                                    <th class="text-center">Nomor Telepon</th>
                                    <th class="text-center">Jenis Kelamin</th>
                                    <th class="text-center">Role</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $no = 1;
                                  foreach($records as $row){
                                    ?>
                                      <tr>
                                        <td scope="row" class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?=$row->name?></td>
                                        <td class="text-center"><?=$row->username?></td>
                                        <td class="text-center"><?=$row->birthdate?></td>
                                        <td class="text-center" class="text-center"><?=$row->phone?></td>
                                        <td class="text-center"><?=($row->gender == "M"?"Laki-Laki":"Perempuan")?></td>
                                        <td class="text-center"><?=$row->role?></td>
                                        <td class="text-center">
                                          <a href="<?= site_url('employee/edit/'.$row->id) ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil"></i></a>&nbsp;
                                          <?php
                                            if(($this->session->userdata('user')->role == "superadmin" and $row->role == "admin") || ($row->role =="pegawai")){
                                          ?>
                                          <a href="<?= site_url('employee/delete/'.$row->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus <?= $row->name ?> dengan ID# <?= $row->id ?>')"><i class="fa fa-trash"></i></a></td>
                                          <?php
                                            }
                                        ?>

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