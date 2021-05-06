<?php
include 'header.php'
?>
<?php
$fetch_skill = $db->prepare("SELECT * FROM skills WHERE skills_id=1");
$fetch_skill->execute();

$fetch = $fetch_skill->fetch(PDO::FETCH_ASSOC)
?>
<?php
$check_skill = $db->prepare("SELECT * FROM skills");
$check_skill->execute();

$control_skill = $check_skill->rowCount();
?>

<div class="right_col" role="main">
<div class="x_panel">
    <div class="x_content">
        <form class="" action="process.php" method="POST" novalidate>
            <span class="section">Hakkımda Sayfası <small>Yeteneklerim</small></span>
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
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 1</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill1'] ?>" name="skill1"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill1_counter'] ?>" name="skill1_counter"  required="" tpye="number" />
                </div>
            </div>    
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 2</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill2'] ?>" name="skill2"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill2_counter'] ?>" name="skill2_counter"  required="" tpye="number" />
                </div>
            </div> 
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 3</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill3'] ?>" name="skill3"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill3_counter'] ?>" name="skill3_counter"  required="" tpye="number" />
                </div>
            </div> 
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 4</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill4'] ?>" name="skill4"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill4_counter'] ?>" name="skill4_counter"  required="" tpye="number" />
                </div>
            </div> 
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 5</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill5'] ?>" name="skill5"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill5_counter'] ?>" name="skill5_counter"  required="" tpye="number" />
                </div>
            </div> 
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Yetenek 6</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill6'] ?>" name="skill6"  required="" />
                </div>
            </div>
            <div class="field item form-group">
                <label class="col-form-label col-md-3 col-sm-3  label-align">Uzmanlık %'si</label>
                <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" value="<?php echo $fetch['skill6_counter'] ?>" name="skill6_counter"  required="" tpye="number" />
                </div>
            </div> 

            <div class="ln_solid">
                <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                        <?php
                            if($control_skill == 1){?>
                                <button type='submit' class="btn btn-primary" name="change_skills">Değiştir</button>
                            <?php }else{ ?>
                                <button type='submit' class="btn btn-warning" name="insert_skills">Ekle</button>
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