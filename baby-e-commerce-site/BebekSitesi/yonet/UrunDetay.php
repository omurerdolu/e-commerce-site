<?php 
include"Ust.php";

if(!isset($_GET['id']))
  $_GET['id']=0;

$Urun=$db->prepare("SELECT * FROM urun WHERE urun_id=?");
$Urun->execute(array(intval($_GET['id'])));

$Urun=$Urun->fetch();
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
            <h2>Ürün Detayı</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <?php 
            if(isset($_GET['Durum']))
            {
              if($_GET['Durum'])
              {
                ?>
                <div class="alert alert-success alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Güncelleme Yapıldı</strong>
                </div>
                <?php
              }
              else
              {
                ?>
                <div class="alert alert-danger alert-dismissible fade in" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                  </button>
                  <strong>Güncelleme YAPILAMADI !!!</strong>
                </div>
                <?php
              }
            }

              ?>


            <form action="urun_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>
							<span class="section"><?php echo("Ürün bilgilerini giriniz") ?></span>

              <input type="hidden" name="urun_id" value="<?php echo $Urun['urun_id'] ?>">

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_adi">Ürünün Adı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
                  id="urun_adi" name="urun_adi" value="<?php echo("Buraya eklenecek ürünün adını giriniz") ?>" 
                  placeholder="Ürünün Adını Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_aciklama">Açıklması</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_aciklama" name="urun_aciklama" value="<?php  echo("Buraya eklenecek ürünün açıklamasını giriniz") ?>" 
                  placeholder="Ürünün Açıklamasını Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_fiyat">Fiyat</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_fiyat" name="urun_fiyat" value="<?php  echo("Buraya eklenecek ürünün fiyatını giriniz") ?>" 
                  placeholder="Ürünün Fiyatını Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_indirim">İndirim Oranı(%)</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_indirim" name="urun_indirim" value="<?php  echo("Buraya eklenecek ürünün indirim tutarını giriniz") ?>" 
                  placeholder="Ürünün İndirim Oranını Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_stok">Stok Miktarı</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_stok" name="urun_stok" value="<?php  echo("Buraya eklenecek ürünün stok durumunu giriniz giriniz") ?>" 
                  placeholder="Ürünün Stok Miktarını Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_vitrin">Vitrin Durumu</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_vitrin" name="urun_vitrin" value="<?php  echo("Buraya eklenecek ürünün vitrin durumunu giriniz") ?>" 
                  placeholder="Ürünün Vitrin Durumunu Seçiniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_kategori_id">Kategorisi</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_kategori_id" name="urun_kategori_id" value="<?php echo("Buraya eklenecek ürünün kategori id sini durumunu giriniz") ?>" 
                  placeholder="Ürünün Kategorisini Seçiniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_renk">Renk</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_renk" name="urun_renk" value="<?php echo("Buraya eklenecek ürünün rengini giriniz") ?>" 
                  placeholder="Ürünün Renklerini Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_beden">Beden</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_beden" name="urun_beden" value="<?php echo("Buraya eklenecek ürünün beden durumunu giriniz") ?>" 
                  placeholder="Ürünün Bedenlerini Giriniz" type="text">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="urun_marka">Marka</label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input class="form-control col-md-7 col-xs-12"
									id="urun_marka" name="urun_marka" value="<?php echo("Buraya eklenecek ürünün markasını giriniz") ?>" 
                  placeholder="Ürünün Markasını Giriniz" type="text">
                </div>
              </div>


              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <button id="send" type="submit" class="btn btn-success"><?php echo ($_GET['id']>0?'Güncelle':'Ekle') ?></button>
                </div>
              </div>
            </form>
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