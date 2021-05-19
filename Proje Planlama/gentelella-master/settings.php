<?php
include 'header.php'
?>
<?php
$check_settings = $db->prepare("SELECT * FROM user");
$check_settings->execute();

$control_settings = $check_settings->rowCount();
?>
<?php
$fetch_settings = $db->prepare("SELECT * FROM user WHERE user_id=1");
$fetch_settings->execute();

$fetch = $fetch_settings->fetch(PDO::FETCH_ASSOC);
?>

<div class="right_col" role="main">
<div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">Kullanıcı Ayarları Sayfası</span>
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
            <?php if (@$_GET['register']  == 'no'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Bir Hata Meydana Geldi
                </div>                          
                <?php } 
                 if (@$_GET['change']  == 'lowchar'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Şifre En Az 6 Karakterli Olmalı
                </div>                         
                <?php } ?>
                <?php  
                 if (@$_GET['status']  == 'same_password'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Eski Şifre ile Yeni Şifre Aynı Olamaz
                </div>                         
                <?php } ?>
                <?php  
                 if (@$_GET['status']  == 'wrong_password'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Eski Şifre Yanlış
                </div>                         
                <?php } ?>
                <?php  
                 if (@$_GET['status']  == 'wrong_repeat'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Yeni Şifre ile Yeni Şifre Tekrarı Aynı Değil
                </div>                         
                <?php } ?>
                <?php if (@$_GET['field']  == 'blank'){ ?>
                <div class="alert alert-danger alert-dismissible " role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    Aşşağıdaki Alanların Doldurulması Zorunludur
                </div>                         
                <?php } ?>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">E-mail<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" required='required'  class='optional' name="email" data-validate-length-range="5,15" type="email" /></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Kullanıcı Adı<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" required='required' class='optional' name="user_name" data-validate-length-range="5,15" type="text" /></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Eski Şifre<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" required='required' class='optional' name="password" data-validate-length-range="5,15" type="password" /></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yeni Şifre<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" required='required' class='optional' name="new_password" data-validate-length-range="5,15" type="password" /></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yeni Şifre Tekrarı<span class="required">*</span></label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" required='required' class='optional' name="new_password_repeat" data-validate-length-range="5,15" type="password" /></div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                    if($control_settings == 1){?>
                        <button type='submit' class="btn btn-primary" name="change_settings">Değiştir</button>
                    <?php }else{ ?>
                        <button type='submit' class="btn btn-warning" name="insert_settings">Ekle</button>
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