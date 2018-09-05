<div class="content-wrapper container-fluid px-5 pt-5 mb-4 trans-03-in-out">

    <div class="row">
        <div class="col-lg-12 mb-3">
          <section class="widget shadow-01 mb-4" id="widget-08">
            <div class="widget-block">
                <?php
                 if($type == "insert"){
                ?>
                    <form action="<?=site_url('item/insert')?>" method="POST">
                <?php
                 }else if($type == "edit"){
                ?>
                    <form action="<?=site_url('item/update/'.$record->id)?>" method="POST">
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
                            <label for="itemCode" class="col-form-label">Kode Barang</label>
                            <input type="text" class="form-control" id="itemCode" placeholder="Kode Barang" name="code" value="<?= $type=='edit'?$record->code:''?>">
                        </div>
                        <div class="form-group">
                            <label for="itemName" class="col-form-label">Nama Barang</label>
                            <input type="text" class="form-control" id="itemName" placeholder="Nama Barang" name="name" value="<?= $type=='edit'?$record->name:''?>">
                        </div>
                        <div class="form-group">
                          <label for="uom" class="col-form-label">Satuan</label>
                          <input type="text" class="form-control" id="uom" placeholder="Satuan Barang" name="uom"
                          value="<?= $type=='edit'?$record->uom:''?>">
                        </div>
                        <div class="form-group">
                          <label for="itemSellPrice" class="col-form-label">Harga Beli</label>
                          <input type="number" min=0 class="form-control" id="itemSellPrice" placeholder="Harga Barang" name="capital" value="<?= $type=='edit'?$record->capital:''?>">
                        </div>
                        <div class="form-group">
                          <label for="itemPrice" class="col-form-label">Harga Jual</label>
                          <input type="number" min=0 class="form-control" id="itemPrice" placeholder="Harga Barang" name="price" value="<?= $type=='edit'?$record->price:''?>">
                        </div>
                    </div>
                </form>
            </div>
          </section>
        </div>
    </div>
</div>