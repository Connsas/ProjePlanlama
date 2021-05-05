<?php
include 'header.php'
?>
<?php
$check_information = $db->prepare("SELECT * FROM informations");
$check_information->execute();

$control_information = $check_information->rowCount();
?>
<?php
$fetch_information = $db->prepare("SELECT * FROM informations WHERE informations_id=1");
$fetch_information->execute();

$fetch = $fetch_information->fetch(PDO::FETCH_ASSOC)
?>

<div class="right_col" role="main">
<div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">Hakkımda Sayfası <small>Bilgiler</small></span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">İsim</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['name'] ?>" name="name"  required="" />
                </div>
            </div>     
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">İş</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['job'] ?>" name="job"  required="" />
                </div>
            </div>  
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yaş</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['age'] ?>" name="age"  required="" tpye="number" />
                </div>
            </div>  
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Ülke</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['country'] ?>" name="country"  required="" />
                </div>
            </div>  
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">İl</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['city'] ?>" name="city"  required="" />
                </div>
            </div>  
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Biyografi</label>
                <div class="col-md-6 col-sm-6">
                    <textarea required="required" rows=4 name='biography'></textarea>
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">CV Adresi</label>
                <div class="col-md-6 col-sm-6">
                <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['cv_adress'] ?>" name="cv_adress"  required="" type="file" />
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <?php
                            if($control_information == 1){?>
                                <button type='submit' class="btn btn-primary" name="change_information">Değiştir</button>
                            <?php }else{ ?>
                                <button type='submit' class="btn btn-warning" name="insert_information">Ekle</button>
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