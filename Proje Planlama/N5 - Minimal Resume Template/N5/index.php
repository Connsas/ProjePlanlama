<?php
include 'C:/xampp/htdocs/Proje Planlama/gentelella-master/production/connect.php';

$sorgu = $db->prepare("SELECT * FROM main_page");
$sorgu->execute();

$bilgiyi_cek = $sorgu->fetch(PDO :: FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title><?php echo $bilgiyi_cek['site_title']; ?></title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		
	</head>
	<body>
		
		
		<!--=====================================================
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#' class='section-toggle' data-section='intro' >
								Başlangıç
							</a>
						</li>
						
						<li>
							<a href='#about' class='section-toggle' data-section='about' >
								Hakkımda
							</a>
						</li>
						
						<li>
							<a href='#resume' class='section-toggle' data-section='resume' >
								CV
							</a>
						</li>
						
						<li>
							<a href='#contact' class='section-toggle' data-section='contact' >
								İletişim
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section style="background-image: url('img/<?php echo $bilgiyi_cek['image']?>')" id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
					
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1><?php echo $bilgiyi_cek['title']; ?></h1>
									
									<p>
									<?php echo $bilgiyi_cek['description']; ?>
									</p>
									
									<div class='intro-btns' >
										
										<a href='#about' class='btn-custom section-toggle' data-section='about' >
											Keşfet
										</a>
										
										<a href='#contact' class='btn-custom section-toggle' data-section='contact' >
											İletişim
										</a>
										
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				
				<!--=====================================================
					About Section
				=====================================================-->
				<?php
					$fetch_information = $db->prepare("SELECT * FROM informations WHERE informations_id=1");
					$fetch_information->execute();

					$fetch = $fetch_information->fetch(PDO::FETCH_ASSOC)
				?>


				<section id='about' class='section about-section border-d' >
					
					<div class='section-block about-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>
									Bilgisayar <strong class='color' >Mühendisi</strong>
								</h2>
							</div>
							
							<div class='row' >
								
								<div class='col-md-4' >
									
									<ul class='info-list' >
										
										<li>
											<strong>İsim:</strong>
											<span><?php echo $fetch['name'] ?></span>
										</li>
										
										<li>
											<strong>İş:</strong>
											<span><?php echo $fetch['job'] ?></span>
										</li>
										
										<li>
											<strong>Yaş:</strong>
											<span><?php echo $fetch['age'] ?></span>
										</li>
										
										<li>
											<strong>Ülke:</strong>
											<span><?php echo $fetch['country'] ?></span>
										</li>
										
										<li>
											<strong>İl:</strong>
											<span><?php echo $fetch['city'] ?></span>
										</li>
										
										
										
									</ul>
									<?php
										$fetch_social = $db->prepare("SELECT * FROM social_media WHERE social_media_id=1");
										$fetch_social->execute();

										$fetch_social_executed = $fetch_social->fetch(PDO::FETCH_ASSOC)
									?>

									<div class="social-icon">

										<a href = '<?php echo $fetch_social_executed['social_media_adress1'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon1'] ?>" alt=""/></a>

										<a href = '<?php echo $fetch_social_executed['social_media_adress2'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon2'] ?>" alt=""/></a>
										
										<a href = '<?php echo $fetch_social_executed['social_media_adress3'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon3'] ?>" alt=""/></a>
	
										<a href = '<?php echo $fetch_social_executed['social_media_adress4'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon4'] ?>" alt=""/></a>
										
										<a href = '<?php echo $fetch_social_executed['social_media_adress5'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon5'] ?>" alt=""/></a>
	
										<a href = '<?php echo $fetch_social_executed['social_media_adress6'] ?>' target="blank">
											<img  src="img/<?php echo $fetch_social_executed['social_media_icon6'] ?>" alt=""/></a>
											
												
									</div>
									
								</div>

								<?php
									$fetch_information = $db->prepare("SELECT * FROM informations WHERE informations_id=1");
									$fetch_information->execute();

									$fetch = $fetch_information->fetch(PDO::FETCH_ASSOC)
								?>
								
								<div class='col-md-8' >
								
									<div class='about-text' >
										<p>
											<?php echo $fetch['biography'] ?>
										</p>
										
									</div>
									
									<div class='about-btns' >
										
										<a href='<?php echo $fetch['cv_adress'] ?>' class='btn-custom btn-color' >
											CV İndir
										</a>
										
										<a href='#contact'  class='btn-custom btn-color section-toggle' data-section='contact' >
											İletişim
										</a>
										
									</div>
									
								</div>
								
							</div>
							
						</div>
					</div>
					
					<?php
						$fetch_skill = $db->prepare("SELECT * FROM skills WHERE skills_id=1");
						$fetch_skill->execute();

						$fetch = $fetch_skill->fetch(PDO::FETCH_ASSOC)
?>
					
					<div class='section-block skills-block' >
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2>
									 <strong class='color' >Yeteneklerim</strong>
								</h2>
								
							</div>
							
							<div class='row' >
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill1'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill1_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill2'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill2_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill3'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill3_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
								</div>
								
								<div class='col-md-6' >
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill4'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill4_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill5'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill5_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
									
									<div class='skill' >
										
										<h4><?php echo $fetch['skill6'] ?></h4>
										
										<div class='bar' >
											<div class='percent' style='width:<?php echo $fetch['skill6_counter'] ?>%;' ></div>
										</div>
										
									</div>
									
								</div>
								
							</div>
							
							
						</div>
					</div>
					
				</section>
				
				
				<!--=====================================================
					CV Section
				=====================================================-->
				<?php
					$fetch_education = $db->prepare("SELECT * FROM education WHERE education_id=1");
					$fetch_education->execute();

					$fetch_education_executed = $fetch_education->fetch(PDO::FETCH_ASSOC)
				?>
				<?php
					$fetch_experience = $db->prepare("SELECT * FROM experience WHERE experience_id=1");
					$fetch_experience->execute();

					$fetch_experience_executed = $fetch_experience->fetch(PDO::FETCH_ASSOC)
				?>
				<section id='resume' class='section resume-section border-d' >
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2><strong class='color' >Eğitim</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_education_executed['education1_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_education_executed['education1_date'] ?></span>
										</em>
										
										<p>
											<?php echo $fetch_education_executed['education1_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_education_executed['education2_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_education_executed['education2_date'] ?></span>
										</em>
										
										<p>
										<?php echo $fetch_education_executed['education2_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_education_executed['education3_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_education_executed['education3_date'] ?></span>
										</em>
										
										<p>
											<?php echo $fetch_education_executed['education3_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
					<div class='section-block timeline-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								
								<h2><strong class='color' >Deneyimlerim</strong></h2>
								
							</div>
							
							<ul class='timeline' >
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_experience_executed['experience1_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_experience_executed['experience1_date'] ?></span>
										</em>
										
										<p>
										<?php echo $fetch_experience_executed['experience1_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_experience_executed['experience2_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_experience_executed['experience2_date'] ?></span>
										</em>
										
										<p>
										<?php echo $fetch_experience_executed['experience2_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								<li>
									
									<div class='timeline-content' >
										
										<h4><?php echo $fetch_experience_executed['experience3_title'] ?></h4>
										
										<em>
											
											<span><?php echo $fetch_experience_executed['experience3_date'] ?></span>
										</em>
										
										<p>
										<?php echo $fetch_experience_executed['experience3_description'] ?>
										</p>
										
									</div>
									
								</li>
								
								
								
							</ul>
							
						</div>
						
					</div>
					
				</section>
				
				
				
				
				
				<!--=====================================================
					Contact Section
				=====================================================-->
				<?php
					$fetch_contact = $db->prepare("SELECT * FROM contact WHERE contact_id=1");
					$fetch_contact->execute();

					$fetch_contact_executed = $fetch_contact->fetch(PDO::FETCH_ASSOC)
				?>
				<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						
						<div class='container-fluid' >
							
							<div class='section-header' >
								<h2>Bana <strong class='color' >Ulaş</strong></h2>
							</div>
							
							
							<div class='row' >
							
								<div class='col-md-8' >
									
									<div class='contact-form' >
									
										<form id='contact-form' data-toggle='validator' method='post' action='mail.php' >
										
											<div id='contact-form-result' ></div>
										
											<div class='row' >
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='text' class='form-control' placeholder='İsim' name='name' required>
														<div class='help-block with-errors' ></div>
														
													</div>												
												</div>
												
												<div class='col-md-6' >
													<div class='form-group' >
														
														<input type='email' class='form-control' placeholder='Email' name='email' required>
														<div class='help-block with-errors' ></div>
													
													</div>
												</div>
												
											</div>
											
											<div class='form-group' >
												
												<input type='text' class='form-control' placeholder='Konu' name='subject' required>
												<div class='help-block with-errors' ></div>
											
											</div>
											
											<div class='form-group' >
												
												<textarea class='form-control' placeholder='Mesaj' name='message' rows='5' required></textarea>
												<div class='help-block with-errors' ></div>
												
											</div>
											
											<div class='form-group text-center' >
												<button type='submit' class='btn-custom btn-color' >
													Gönder
												</button>
											</div>
											
										</form>
										
									</div>
									
									
								</div>
								
								<div class='col-md-4' >
									
									<div class='contact-info-icons' >
										
										<div class='contact-info' >
											
											<i class='ion-ios-location-outline' ></i>
											
											<adress>
											<?php echo $fetch_contact_executed['adress'] ?>
											</adress>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-ios-telephone-outline' ></i>
											
											<p>
											<?php echo $fetch_contact_executed['tel_no1'] ?><br>
											<?php echo $fetch_contact_executed['tel_no2'] ?>
											</p>
											
										</div>
										
										
										<div class='contact-info' >
											
											<i class='ion-android-globe' ></i>
											
											<p>
											<?php echo $fetch_contact_executed['web_adress1'] ?><br>
											<?php echo $fetch_contact_executed['web_adress2'] ?>
											</p>
											
										</div>
										
										
										
										
									</div>
									
									
									
								</div>
								
								
							</div>
							
							
							
						</div>
					
					</div>
					
				</section>
				
			</div>
			
		</div>
		
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		
	</body>
</html>