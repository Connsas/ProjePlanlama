<?php
include 'header.php'
?>
<?php
$check_education = $db->prepare("SELECT * FROM education");
$check_education->execute();

$control_education = $check_education->rowCount();
?>
<?php
$fetch_education = $db->prepare("SELECT * FROM education WHERE education_id=1");
$fetch_education->execute();

$fetch = $fetch_education->fetch(PDO::FETCH_ASSOC)
?>

<div class="right_col" role="main">
<div class="x_panel">    
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">CV Sayfası <small> Eğitim </small> </span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 1 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['education1_title'] ?>' name="education1_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 1 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2"value='<?php echo $fetch['education1_date'] ?>' name="education1_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 1 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['education1_description'] ?>' name='education1_description'></textarea></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 2 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['education2_title'] ?>' name="education2_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 2 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['education2_date'] ?>' name="education2_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 2 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['education2_description'] ?>' name='education2_description'></textarea></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 3 Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['education3_title'] ?>' name="education3_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 3 Süre</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value='<?php echo $fetch['education3_date'] ?>' name="education3_date"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eğitim 3 Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="" value='<?php echo $fetch['education3_description'] ?>' name='education3_description'></textarea></div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                            if($control_education == 1){?>
                                <button type='submit' class="btn btn-primary" name="change_education">Değiştir</button>
                            <?php }else{ ?>
                                <button type='submit' class="btn btn-warning" name="insert_education">Ekle</button>
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