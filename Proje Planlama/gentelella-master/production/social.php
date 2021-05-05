<?php
include 'header.php'
?>
<?php
$check_social = $db->prepare("SELECT * FROM social_media");
$check_social->execute();

$control_social = $check_social->rowCount();
?>
<?php
$fetch_social = $db->prepare("SELECT * FROM social_media WHERE social_media_id=1");
$fetch_social->execute();

$fetch = $fetch_social->fetch(PDO::FETCH_ASSOC)
?>

<div class="right_col" role="main">
<div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">Hakkımda Sayfası <small>Sosyal Medya</small></span>
            <?php if (@$_GET['insert'] == 'ok'){ ?>
            <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Ekleme Başarılı
            </div>                          
            <?php } 
            else if (@$_GET['insert'] == 'no'){ ?>
            <div class="alert alert-danger alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Ekleme Sırasında Bir Hata Meydana Geldi
            </div>                          
            <?php } ?>
            <?php if (@$_GET['change'] == 'ok'){ ?>
            <div class="alert alert-success alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Değiştirme Başarılı
            </div>                          
            <?php } 
            else if (@$_GET['change'] == 'no'){ ?>
            <div class="alert alert-danger alert-dismissible " role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                Değiştirme Sırasında Bir Hata Meydana Geldi
            </div>                          
            <?php } ?>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 1 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon1'] ?>' name="social_media_icon1"  required="" type="file" />
                    </div>
            </div>
            
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 1 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress1'] ?>' name="social_media_adress1"  required="" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 2 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon2'] ?>' name="social_media_icon2"  required="" type="file" />
                    </div>
            </div>
            
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 2 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress2'] ?>' name="social_media_adress2"  required="" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 3 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon3'] ?>' name="social_media_icon3"  required="" type="file" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 3 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress3'] ?>' name="social_media_adress3"  required="" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 4 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon4'] ?>' name="social_media_icon4"  required="" type="file" />
                    </div>
            </div>
            
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 4 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress4'] ?>' name="social_media_adress4"  required="" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 5 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon5'] ?>' name="social_media_icon5"  required="" type="file" />
                    </div>
            </div>
           
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 5 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress5'] ?>' name="social_media_adress5"  required="" />
                    </div>
            </div>

            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 6 İkonu</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_icon6'] ?>' name="social_media_icon6"  required="" type="file" />
                    </div>
            </div>
            
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Sosyal Medya 6 Adresi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['social_media_adress6'] ?>' name="social_media_adress6"  required="" />
                    </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                            if($control_social == 1){?>
                                <button type='submit' class="btn btn-primary" name="change_social">Değiştir</button>
                            <?php }else{ ?>
                                <button type='submit' class="btn btn-warning" name="insert_social">Ekle</button>
                            <?php } ?>
                        <button type='reset' class="btn btn-success">Sıfırla</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<?php
include 'footer.php'
?>