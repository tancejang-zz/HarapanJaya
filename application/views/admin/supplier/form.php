<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
          <section class="widget shadow-01 mb-4" id="widget-08">
            <div class="widget-block">
                <?php
                 if($type == "insert"){
                ?>
                    <form action="<?=site_url('supplier/insert')?>" method="POST">
                <?php
                 }else if($type == "edit"){
                ?>
                    <form action="<?=site_url('supplier/update/'.$record->id)?>" method="POST">
                <?php
                 }
                 ?>
                    <header>
                        <h3><?= $page_title ?></h3>
                        <button type="submit" class="btn btn-sm btn-primary float-right">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <div class="clearfix"></div>
                    </header>
                    <div class="widget-content py-3">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama Supplier</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Supplier" name="name" value="<?= $type=='edit'?$record->name:''?>">
                        </div>
                        <div class="form-group">
                          <label for="address" class="col-form-label">Alamat</label>
                          <input type="text" class="form-control" id="address" placeholder="Masukkan Alamat" name="address"
                          value="<?= $type=='edit'?$record->address:''?>">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="phone" placeholder="Masukkan Nomor Telepon" name="phone" value="<?= $type=='edit'?$record->phone:''?>">
                        </div>
                        <div class="form-group">
                          <label for="city" class="col-form-label">Kota</label>
                          <?php
                            //ambil list kota dari cities.json
                            $cities = json_decode(file_get_contents(base_url('/assets/cities.json')));
                            //print_r($cities);
                          ?>
                          <select id="city" name="city" class="form-control hj-select">
                            <?php
                              foreach($cities as $city){
                                foreach($city as $key => $_city){
                            ?>
                              <optgroup label="<?= $key?>">
                                <?php
                                  foreach($_city as $__city){
                                    ?>
                                      <option value="<?=$__city?>" <?php
                                        if($type=="edit" and $__city == $record->city){
                                          echo 'selected="selected"';
                                        }
                                      ?>><?=$__city?></option>
                                    <?php
                                  }
                                ?>
                              </optgroup>
                            <?php
                                }
                              }
                            ?>
                          </select>
                        </div>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </div>
</div>