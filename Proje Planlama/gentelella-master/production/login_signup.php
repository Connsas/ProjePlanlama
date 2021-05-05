<?php
include  'connect.php';
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Admin Paneli Giriş Sayfası</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
        
        
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <!--/ Codrops top bar -->
            <header>
                <h1></h1>	
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="POST" action="process.php"> 
                                <h1>giris yap</h1>
                                <?php if (@$_GET['status'] == 'ok'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Başarıyla Kayıt Oldunuz
                                    <br></br>
                                </div>                          
                                <?php } 
                                else if (@$_GET['logout'] == 'ok'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Başarıyla Çıkış Yapıldı
                                    <br></br>
                                </div>                          
                                <?php } ?>
                                <?php if (@$_GET['info'] == 'false'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Kullanıcı Adı veya Şifre Hatalı
                                    <br></br>
                                </div>                          
                                <?php }
                                else if (@$_GET['change']  == 'ok'){ ?>
                                    <div class="alert alert-success alert-dismissible " role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        Kullanıcı Ayarları Başarıyla Değiştirildi
                                        <br></br>
                                    </div>                          
                                    <?php } ?>
                                <p> 
                                    <label for="username" class="uname" data-icon="u" >Kullanıcı Adı </label>
                                    <input name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Şifre </label>
                                    <input name="login_password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" /> 
									<label for="loginkeeping">Oturum Açık Kalsın</label>
								</p>
                                <p class="login button"> 
                                    <input type="submit" value="Giris" name="log_in"/> 
								</p>
                                <?php
                                $control = $db -> prepare('SELECT * FROM user');
                                $control -> execute();

                                $has_admin = $control -> rowCount();

                                ?>

                                <?php if($has_admin == 0){ ?>
                                    <p class="change_link">
									Hala Kayıt Olmadınmı ?
									<a href="#toregister" class="to_register">Bize Katil</a>
								</p>
                                <?php } ?>
                                
                            </form>
                        </div>
                        <?php
                                $control = $db -> prepare('SELECT * FROM user');
                                $control -> execute();

                                $has_admin = $control -> rowCount();

                                ?>

                                <?php if($has_admin == 0){ ?>
                                    <div id="register" class="animate form">
                            <form method="POST" action="process.php"> 
                                <h1> uye ol </h1>
                                <?php if (@$_GET['register']  == 'no'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Bir Hata Meydana Geldi
                                    <br></br>
                                </div>                          
                                <?php } 
                                else if (@$_GET['register']  == 'hasadmin'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Kayıtlı Bir Admin Mevcut
                                    <br></br>
                                </div>                          
                                <?php }
                                else if (@$_GET['register']  == 'lowchar'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Şifre En Az 6 Karakterden Oluşmalı
                                    <br></br>
                                </div>                          
                                <?php }
                                else if (@$_GET['register']  == 'inequal'){ ?>
                                <div class="alert alert-success alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    Şifreler Uyuşmuyor
                                    <br></br>
                                </div>                          
                                <?php } ?>
                                <p> 
                                    <label for="usernamesignup" class="uname" data-icon="u"> Kullanıcı Adı</label>
                                    <input  name="user_name" required="required" type="text" placeholder="mysuperusername690" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" >  Email</label>
                                    <input  name="email" required="required" type="email" placeholder="mysupermail@mail.com"/> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p"> Şifre </label>
                                    <input  name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p"> Şifre Tekrarı </label>
                                    <input  name="password_confirm" required="required" type="password" placeholder="eg. X8df!90EO"/>
                                </p>
                                <p class="signin button"> 
									<input type="submit" name="signup" value="uye ol"/> 
								</p>
                                <p class="change_link">  
									Zaten Üyemisin ?
									<a href="#tologin" class="to_register"> Giris Yap </a>
								</p>
                            </form>
                        </div>
                        <?php } ?>
                        
						
                    </div>
                </div>  
            </section>
        </div>

        <!-- jQuery -->
        <script src="../vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>