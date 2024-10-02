<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=toko&page=save" method="POST">
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Nama Minuman</label>
            <input type="text" name="nama_minuman" required value="<?=(isset($_POST['nama_minuman']))?$_POST['nama_minuman']:'';?>" class="form-control">
            <input type="hidden" name="id_minuman" value="<?=(isset($_POST['id_minuman']))?$_POST['id_minuman']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nama_minuman']))?$err['nama_minuman']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">Nomor Minuman</label>
            <input type="number" name="nomor" value="<?=(isset($_POST['nomor']))?$_POST['nomor']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['nomor']))?$err['nomor']:'';?></span>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="">Jenis Minuman</label>
            <input type="text" name="jenis_minuman" required value="<?=(isset($_POST['jenis_minuman']))?$_POST['jenis_minuman']:'';?>" class="form-control">
            <span class="text-danger"><?=(isset($err['jenis_minuman']))?$err['jenis_minuman']:'';?></span>
        </div>
        <div class="form-group">
            <label for="">Ukuran</label>
            <select name="id_ukuran" class="form-control" required id="">
                <option value="">Pilih Ukuran</option>
                <?php if($ukuran != null){
                    foreach($ukuran as $row){?>
                        <option <?=(isset($_POST['id_ukuran']) && $_POST['id_ukuran']==$row['id_ukuran'] )?"selected":'';?> value="<?=$row['id_ukuran'];?>"> <?=$row['ukuran'];?></option>
                <?php  }
                }?>
            </select>
            <span class="text-danger"><?=(isset($err['ukuran']))?$err['ukuran']:'';?></span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default btn-primary">Save</button>
        </div>
    </div>
</form>