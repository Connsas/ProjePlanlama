<?php
include 'header.php'
?>
<?php
$check_contact = $db->prepare("SELECT * FROM contact");
$check_contact->execute();

$control_contact = $check_contact->rowCount();
?>
<?php
$fetch_contact = $db->prepare("SELECT * FROM contact WHERE contact_id=1");
$fetch_contact->execute();

$fetch = $fetch_contact->fetch(PDO::FETCH_ASSOC);
?>

<div class="right_col" role="main">
<div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">İletişim Sayfası</span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">Adres</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" class='optional' value="<?php echo $fetch['adress'] ?>" name="adress" data-validate-length-range="5,15" type="text" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Telefon NO 1</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" class='optional' value=<?php echo $fetch['tel_no1'] ?> name="tel_no1" data-validate-length-range="5,15" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/></div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Telefon NO 2</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value=<?php echo $fetch['tel_no2'] ?> name="tel_no2" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>
                    </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">İnternet Adresi 1</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value=<?php echo $fetch['web_adress1'] ?> name="web_adress1"  required="" />
                    </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">İnternet Adresi 2</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value=<?php echo $fetch['web_adress2'] ?> name="web_adress2"  required="" />
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                    if($control_contact == 1){?>
                        <button type='submit' class="btn btn-primary" name="change_contact">Değiştir</button>
                    <?php }else{ ?>
                        <button type='submit' class="btn btn-warning" name="insert_contact">Ekle</button>
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