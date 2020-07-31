<?php 
include"Ust.php";
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ürünler</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

          <div class="x_title">
            <h2>Ürünlerin Listesi</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              Web sayfanızda yer alan ürünlerin listesi aşağıdadır.
            </p>
            <?php 
            if(isset($_GET['Durum']))
            {
              if($_GET['Durum'])
              {
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Ürün Silinmiştir</strong>
                </div>
                <?php
              }
              else
              {
                ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Silme İşlemi YAPILAMADI !!!</strong>
                </div>
                <?php
              }
            }

            ?>
            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th></th>
                  <th>Ürün Adı</th>
                  <th>Fiyat</th>
                  <th>Stok</th>
                  <th>Vitrin</th>
                  <th>Kategori</th>
                  <th>Marka</th>
                  <th>Silme</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $Urunler=$db->query("SELECT * FROM urun ORDER BY urun_adi");

                while($Urun=$Urunler->fetch())
                {
                  $IndirimliFiyat="";
                  if($Urun['urun_indirim']>0)
                  {
                    $IndirimliFiyat=$Urun['urun_fiyat']-($Urun['urun_fiyat']*$Urun['urun_indirim']/100);
                    $IndirimliFiyat="<br>".number_format($IndirimliFiyat,2,",",".")." TL";
                  }
                  $Urun['urun_fiyat']=number_format($Urun['urun_fiyat'],2,",",".")." TL";

                  if($Urun['urun_indirim']>0)
                  {
                    $Urun['urun_fiyat']="<del>".$Urun['urun_fiyat']."</del>";
                  }
                  ?>
                  <tr>
                    <td><a href="UrunDetay.php?id=<?php echo $Urun['urun_id'] ?>"><i class="fa fa-edit"></i></a></td>
                    <td><?php echo $Urun['urun_adi'] ?></td>
                    <td style="text-align: right;"><?php echo $Urun['urun_fiyat'].$IndirimliFiyat ?></td>
                    <td><?php echo $Urun['urun_stok'] ?></td>
                    <td><input type="checkbox" name="" <?php echo ($Urun['urun_vitrin']?'checked="checked"':'') ?>></td>
                    <td><?php echo $Urun['urun_kategori_id'] ?></td>
                    <td><?php echo $Urun['urun_marka'] ?></td>
                
                    <td><a href="urun_sil.php?id=<?php echo $Urun['urun_id'] ?>"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  <?php 
                }
                ?>
              </tbody>
            </table>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<?php 
include"Alt.php";
?>