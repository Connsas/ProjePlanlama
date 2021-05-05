<?php
include 'header.php'
?>
<?php
$check_main_page = $db->prepare("SELECT * FROM main_page");
$check_main_page->execute();

$control_main_page = $check_main_page->rowCount();
?>
<?php
$fetch_main_page = $db->prepare("SELECT * FROM main_page WHERE main_page_id=1");
$fetch_main_page->execute();

$fetch = $fetch_main_page->fetch(PDO::FETCH_ASSOC);
?>

<div class="right_col" role="main">
    <div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">Başlangıç Sayfası</span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">Site Başlığı</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['site_title'] ?>" name="site_title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Başlık</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['title'] ?>" name="title"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Açıklama</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" class='optional' value="<?php echo $fetch['description'] ?>" name="description" data-validate-length-range="5,15" type="text" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Arka Plan Resmi</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['image'] ?>" name="image" type="file"  required="" />
                </div>
            </div>
            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                    <?php
                    if($control_main_page == 1){?>
                        <button type='submit' class="btn btn-primary" name="change_main_page">Değiştir</button>
                    <?php }else{ ?>
                        <button type='submit' class="btn btn-warning" name="insert_main_page">Ekle</button>
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