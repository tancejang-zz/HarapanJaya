<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
          <section class="widget shadow-01 mb-4" id="widget-08">
            <div class="widget-block">
                <?php
                 if($type == "insert"){
                ?>
                    <form action="<?=site_url('employee/insert')?>" method="POST">
                <?php
                 }else if($type == "edit"){
                ?>
                    <form action="<?=site_url('employee/update/'.$record->id)?>" method="POST">
                <?php
                 }
                 ?>
                    <header>
                        <h3><?= $page_title ?></h3>
                        <button type="submit" class="btn btn-sm btn-primary float-right" onclick="return confirmpassword();">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                        <div class="clearfix"></div>
                    </header>
                    <div class="widget-content py-3">
                        <div class="form-group">
                            <label for="name" class="col-form-label">Nama Lengkap Pegawai</label>
                            <input type="text" class="form-control" id="name" placeholder="Masukkan Nama Lengkap Pegawai" name="name" value="<?= $type=='edit'?$record->name:''?>" required>
                        </div>
                        <div class="form-group">
                            <label for="username" class="col-form-label">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username" value="<?= $type=='edit'?$record->username:''?>" required>
                        </div>
                        <?php if($type == "insert"){ ?>
                        <div class="form-group">
                          <label for="password" class="col-form-label">Password</label>
                          <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required/>
                        </div>
                        <div class="form-group">
                          <label for="cpassword" class="col-form-label">Konfirmasi Password</label>
                          <input type="cpassword" class="form-control" id="cpassword" placeholder="Masukkan Ulang Password" name="cpassword" required/>
                        </div>
                      <?php } ?>
                        <div class="form-group">
                            <label for="birthdate" class="col-form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="birthdate" placeholder="Masukkan Tanggal Lahir" name="birthdate" value="<?= $type=='edit'?$record->birthdate:''?>" required>
                        </div>
                        <div class="form-group">
                          <label for="phone" class="col-form-label">Nomor Telepon</label>
                          <input type="text" class="form-control" id="phone" placeholder="Masukkan Nomor Telepon" name="phone"
                          value="<?= $type=='edit'?$record->phone:''?>" required>
                        </div>
                        <div class="form-group">
                          <label for="identity_number" class="col-form-label">Nomor Identitas</label>
                          <input type="text" class="form-control" id="identity_number" placeholder="Masukkan Nomor Identitas" name="identity_number"
                          value="<?= $type=='edit'?$record->identity_number:''?>" required>
                        </div>
                        <div class="form-group">
                          <label for="address" class="col-form-label">Alamat</label>
                          <input type="text" class="form-control" id="address" placeholder="Masukkan Alamat" name="address"
                          value="<?= $type=='edit'?$record->address:''?>" required>
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
                        <div class="form-group">
                          <label for="gender" class="col-form-label">Jenis Kelamin</label>
                          <select id="gender" name="gender" class="form-control hj-select">
                            <option value="M" <?= $record->gender=="M"?"selected='selected'":''?>>Laki-Laki</option>
                            <option value="F" <?= $record->gender=="F"?"selected='selected'":''?>>Perempuan</option>
                          </select>
                        </div>
                        <?php
                          if($record->role != "superadmin"){
                        ?>
                        <div class="form-group">
                          <label for="role" class="col-form-label">Role</label>
                          <select id="role" name="role" class="form-control hj-select">
                            <option value="admin" <?= $record->role=="admin"?"selected='selected'":''?>>Admin</option>
                            <option value="pegawai" <?= $record->role=="pegawai"?"selected='selected'":''?>>Pegawai</option>
                          </select>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </div>
</div>
<script>
  function confirmpassword(){
    var pw =$("#password").val();
    var cpw = $("#cpassword").val();
    if( pw != "" && pw == cpw){
      return true;
    }
    else{
      alert('Password dan Konfirmasi Password tidak sama');
      return false;
    }
  }
</script>