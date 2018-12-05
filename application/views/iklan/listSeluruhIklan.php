<div class="container">
  <div class="alert alert-success">
    <strong>Cari <?php echo $statusPencarian; ?>!</strong> Anda Sedang berada pada halaman iklan pencarian <?php echo $statusPencarian; ?>.
  </div>
    <div class="jumbotron">

        <?php
        if(is_array($iklan)){
            foreach ($iklan as $iklan_item) {?>
              <div class="panel-group">
              <div class="panel panel-info">
                <div class="panel-heading"><a href="<?php echo site_url('iklan/'.$iklan_item['statusPencarian'].'/'.$iklan_item['id_iklan']); ?>">  <h3><?php echo $iklan_item['judul']; ?></h3></a></div>
                <div class="panel-body">
                  <font size='2'>Oleh : <a href="<?php echo site_url('profil/'.$iklan_item['id_pembuatIklan']); ?>"><?php echo $iklan_item['nama'] ?></a></font><br>
                  <font size='2'>Kategori : Pencarian <?php echo $iklan_item['statusPencarian']; ?></font><br>
                  <font size='2'>Jenjang : <?php echo $iklan_item['jenjang']; ?></font>
                </div>
              </div>

              <br>
          <?php
          }
        }else{
          echo "Iklan Belum Tersedia";
        }
         ?>


       </div>
     </div>
     </div>
     </div>
     </div>
