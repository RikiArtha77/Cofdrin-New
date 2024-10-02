<div class="row">
    <div class="pull-left">
        <h4>Daftar Minuman</h4>
    </div>
    <div class="pull-right">
        <a href="index.php?mod=dokter&page=add">
            <button class="btn btn-primary">Add</button>
        </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>Nama Minuman</td><td>Nomor Minuman</td><td>Jenis Minuman</td><th>Ukuran</th><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($minuman != NULL){ 
                $no=1;
                foreach($minuman as $row){?>
                    <tr>
                        <td><?=$no;?></td><td><?=$row['nama_minuman']?></td><td><?=$row['nomor_minuman'];?></td><td><?=$row['jenis_minuman']?></td><td><?=$row['ukuran']?></td>            
                        <td>
                            <a href="index.php?mod=toko&page=edit&id=<?=md5($row['id_minuman'])?>"><i class="fa fa-pencil"></i> </a>
                            <a href="index.php?mod=toko&page=delete&id=<?=md5($row['id_minuman'])?>"><i class="fa fa-trash"></i> </a>
                        </td>
                    </tr>
               <?php $no++; }
            }?>
        </tbody>
    </table>
</div>