<?php
include 'header.php'
?>
<?php
$check_experience = $db->prepare("SELECT * FROM experience");
$check_experience->execute();

$control_experience = $check_experience->rowCount();
?>
<?php
$fetch_experience = $db->prepare("SELECT * FROM experience WHERE experience_id=1");
$fetch_experience->execute();

$fetch = $fetch_experience->fetch(PDO::FETCH_ASSOC)
?>


<div class="right_col" role="main">
<div class="x_panel">    
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">CV Sayfası <small>Deneyimler</small></span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 1 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience1_title'] ?>' name="experience1_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 1 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience1_date'] ?>' name="experience1_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 1 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['experience1_description'] ?>' name='experience1_description'></textarea></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 2 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience2_title'] ?>' name="experience2_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 2 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience2_date'] ?>' name="experience2_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 2 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['experience2_description'] ?>' name='experience2_description'></textarea></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 3 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience3_title'] ?>' name="experience3_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 3 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['experience3_date'] ?>' name="experience3_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Deneyim 3 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['experience3_description'] ?>' name='experience3_description'></textarea></div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                            if($control_experience == 1){?>
                                <button type='submit' class="btn btn-primary" name="change_experience">Değiştir</button>
                            <?php }else{ ?>
                                <button type='submit' class="btn btn-warning" name="insert_experience">Ekle</button>
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