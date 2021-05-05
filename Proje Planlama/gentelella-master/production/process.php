<?php
include  'connect.php';
ob_start();
session_start();

// Admin kayıt
if(isset($_POST['signup'])){
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password_confirm = $_POST['password_confirm'];

    if($password === $password_confirm){

      if(strlen($password)>5){
        $admin_control = $db ->prepare("SELECT * FROM user");
        $admin_control->execute();

        $has_admin = $admin_control->rowCount();

        if($has_admin == 0){

          $pass = base64_encode($password);
          
          $admin_signup = $db->prepare("INSERT INTO user SET user_name='$user_name', email='$email', password='$pass'");
          $insert = $admin_signup->execute();

          if($insert){
            header("Location: login_signup.php?status=ok");
          }else{header("Location: login_signup.php?register=no#toregister");
          }
          
        }else{
          header("Location: login_signup.php?register=hasadmin#toregister");
        }
        
      }else{
        header("Location: login_signup.php?register=lowchar#toregister");
      }
     
    }else{
      header("Location: login_signup.php?register=inequal#toregister");
      
    }
}

// Admin Giriş 
if(isset($_POST['log_in'])){

  $user_name = $_POST['username'];
  $password = base64_encode($_POST['login_password']);

  $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$password'");
  $login->execute();

  $count = $login->rowCount();
  
  if($count == 1){
    $_SESSION['user_name'] = $user_name;
    header("Location: index.php");
  }else{
    header("Location: login_signup.php?info=false");
  }
} 

// Update && Insert

// Skill Insert
if(isset($_POST['insert_skills'])){
  $skill1 = $_POST["skill1"];
  $skill2 = $_POST["skill2"];
  $skill3 = $_POST["skill3"];
  $skill4 = $_POST["skill4"];
  $skill5 = $_POST["skill5"];
  $skill6 = $_POST["skill6"];
  $skill1_counter =$_POST["skill1_counter"];
  $skill2_counter =$_POST["skill2_counter"];
  $skill3_counter =$_POST["skill3_counter"];
  $skill4_counter =$_POST["skill4_counter"];
  $skill5_counter =$_POST["skill5_counter"];
  $skill6_counter =$_POST["skill6_counter"];

  $insert_skill = $db->prepare("INSERT INTO skills SET
  skill1='$skill1',
  skill2='$skill2',
  skill3='$skill3',
  skill4='$skill4',
  skill5='$skill5',
  skill6='$skill6',
  skill1_counter='$skill1_counter',
  skill2_counter='$skill2_counter',
  skill3_counter='$skill3_counter',
  skill4_counter='$skill4_counter',
  skill5_counter='$skill5_counter',
  skill6_counter='$skill6_counter'
  ");

  $insert = $insert_skill ->execute();
  if($insert){
    header("Location: skills.php?insert=ok");
  }else{
    header("Location: skills.php?insert=no");
  }
}

// Skills Update

if(isset($_POST['change_skills'])){
  $skill1 = $_POST["skill1"];
  $skill2 = $_POST["skill2"];
  $skill3 = $_POST["skill3"];
  $skill4 = $_POST["skill4"];
  $skill5 = $_POST["skill5"];
  $skill6 = $_POST["skill6"];
  $skill1_counter =$_POST["skill1_counter"];
  $skill2_counter =$_POST["skill2_counter"];
  $skill3_counter =$_POST["skill3_counter"];
  $skill4_counter =$_POST["skill4_counter"];
  $skill5_counter =$_POST["skill5_counter"];
  $skill6_counter =$_POST["skill6_counter"];

  $change_skill = $db->prepare("UPDATE skills SET
  skill1='$skill1',
  skill2='$skill2',
  skill3='$skill3',
  skill4='$skill4',
  skill5='$skill5',
  skill6='$skill6',
  skill1_counter='$skill1_counter',
  skill2_counter='$skill2_counter',
  skill3_counter='$skill3_counter',
  skill4_counter='$skill4_counter',
  skill5_counter='$skill5_counter',
  skill6_counter='$skill6_counter'
  ");
  $change = $change_skill ->execute();
  if($change){
    header("Location: skills.php?change=ok");
  }else{
    header("Location: skills.php?change=no");
  }
}

// Information Insert

if(isset($_POST['insert_information'])){
  $name = $_POST['name'];
  $job = $_POST['job'];
  $age = $_POST['age'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $biography = $_POST['biography'];
  $cv_adress = $_POST['cv_adress'];

  $insert_information = $db->prepare("INSERT INTO informations SET
  name='$name',
  job='$job',
  age='$age',
  country='$country',
  city='$city',
  biography='$biography',
  cv_adress='$cv_adress'
  ");

  $insert = $insert_information ->execute();
  if($insert){
    header("Location: information.php?insert=ok");
  }else{
    header("Location: information.php?insert=no");
  }
}

// Information Update

if(isset($_POST['change_information'])){
  $name = $_POST['name'];
  $job = $_POST['job'];
  $age = $_POST['age'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $biography = $_POST['biography'];
  $cv_adress = $_POST['cv_adress'];

  $change_information = $db->prepare("UPDATE informations SET
  name='$name',
  job='$job',
  age='$age',
  country='$country',
  city='$city'
  ");

  if(strlen($biography)>0){
    $change_information = $db->prepare("UPDATE informations SET
    biography='$biography'
    ");
  }
  if(strlen($cv_adress)>0){
    $change_information = $db->prepare("UPDATE informations SET
    cv_adress='$cv_adress'
    ");
  }

  $change = $change_information ->execute();
  if($change){
    header("Location: information.php?change=ok");
  }else{
    header("Location: information.php?change=no");
  }
}

// Social-Media Insert

if(isset($_POST['insert_socail'])){
  $social_media_adress1 = $_POST['social_media_adress1'];
  $social_media_adress2 = $_POST['social_media_adress2'];
  $social_media_adress3 = $_POST['social_media_adress3'];
  $social_media_adress4 = $_POST['social_media_adress4'];
  $social_media_adress5 = $_POST['social_media_adress5'];
  $social_media_adress6 = $_POST['social_media_adress6'];
  $social_media_icon1 = $_POST['social_media_icon1'];
  $social_media_icon2 = $_POST['social_media_icon2'];
  $social_media_icon3 = $_POST['social_media_icon3'];
  $social_media_icon4 = $_POST['social_media_icon4'];
  $social_media_icon5 = $_POST['social_media_icon5'];
  $social_media_icon6 = $_POST['social_media_icon6'];

  $insert_social_media = $db->prepare("INSERT INTO social_media SET
  social_media_adress1='$social_media_adress1',
  social_media_adress2='$social_media_adress2',
  social_media_adress3='$social_media_adress3',
  social_media_adress4='$social_media_adress4',
  social_media_adress5='$social_media_adress5',
  social_media_adress6='$social_media_adress6',
  social_media_icon1='$social_media_icon1',
  social_media_icon2='$social_media_icon2',
  social_media_icon3='$social_media_icon3',
  social_media_icon4='$social_media_icon4',
  social_media_icon5='$social_media_icon5',
  social_media_icon6='$social_media_icon6'
  ");

  $insert = $insert_social_media ->execute();
  if($insert){
    header("Location: social.php?insert=ok");
  }else{
    header("Location: social.php?insert=no");
  }
}

// Social-Media Update

if(isset($_POST['change_social'])){
  $social_media_adress1 = $_POST['social_media_adress1'];
  $social_media_adress2 = $_POST['social_media_adress2'];
  $social_media_adress3 = $_POST['social_media_adress3'];
  $social_media_adress4 = $_POST['social_media_adress4'];
  $social_media_adress5 = $_POST['social_media_adress5'];
  $social_media_adress6 = $_POST['social_media_adress6'];
  $social_media_icon1 = $_POST['social_media_icon1'];
  $social_media_icon2 = $_POST['social_media_icon2'];
  $social_media_icon3 = $_POST['social_media_icon3'];
  $social_media_icon4 = $_POST['social_media_icon4'];
  $social_media_icon5 = $_POST['social_media_icon5'];
  $social_media_icon6 = $_POST['social_media_icon6'];

  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_adress1='$social_media_adress1',
  social_media_adress2='$social_media_adress2',
  social_media_adress3='$social_media_adress3',
  social_media_adress4='$social_media_adress4',
  social_media_adress5='$social_media_adress5',
  social_media_adress6='$social_media_adress6'
  ");

 if(strlen($social_media_icon1)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon1'
  ");
  $change_social_media->execute();
 }
 if(strlen($social_media_icon2)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon2'
  ");
  $change_social_media->execute();
 }
 if(strlen($social_media_icon3)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon3'
  ");
  $change_social_media->execute();
 }
 if(strlen($social_media_icon4)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon4'
  ");
  $change_social_media->execute();
 }
 if(strlen($social_media_icon5)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon5'
  ");
  $change_social_media->execute();
 }
 if(strlen($social_media_icon6)>0){
  $change_social_media = $db->prepare("UPDATE social_media SET
  social_media_icon1='$social_media_icon6'
  ");
  $change_social_media->execute();
 }

  $change = $change_social_media ->execute();
  if($change){
    header("Location: social.php?change=ok");
  }else{
    header("Location: social.php?change=no");
  }
}

// Education Insert

if(isset($_POST['insert_education'])){
  $education1_title = $_POST['education1_title'];
  $education1_date = $_POST['education1_date'];
  $education1_description = $_POST['education1_description'];
  $education2_title = $_POST['education2_title'];
  $education2_date = $_POST['education2_date'];
  $education2_description = $_POST['education2_description'];
  $education3_title = $_POST['education3_title'];
  $education3_date = $_POST['education3_date'];
  $education3_description = $_POST['education3_description'];

  $insert_education = $db->prepare("INSERT INTO education SET
  education1_title ='$education1_title',
  education1_date ='$education1_date',
  education1_description ='$education1_description',
  education2_title ='$education2_title',
  education2_date ='$education2_date',
  education2_description ='$education2_description',
  education3_title ='$education3_title',
  education3_date ='$education3_date',
  education3_description ='$education3_description'
  ");

  $insert = $insert_education ->execute();
  if($insert){
    header("Location: education.php?insert=ok");
  }else{
    header("Location: education.php?insert=no");
  }
}

// Education Update

if(isset($_POST['change_education'])){
  $education1_title = $_POST['education1_title'];
  $education1_date = $_POST['education1_date'];
  $education1_description = $_POST['education1_description'];
  $education2_title = $_POST['education2_title'];
  $education2_date = $_POST['education2_date'];
  $education2_description = $_POST['education2_description'];
  $education3_title = $_POST['education3_title'];
  $education3_date = $_POST['education3_date'];
  $education3_description = $_POST['education3_description'];

  $change_education = $db->prepare("UPDATE education SET
  education1_title ='$education1_title',
  education1_date ='$education1_date',
  education2_title ='$education2_title',
  education2_date ='$education2_date',
  education3_title ='$education3_title',
  education3_date ='$education3_date'
  ");

 if(strlen($education1_description)>0){
  $change_education = $db->prepare("UPDATE education SET
   education1_description ='$education1_description'
  ");
  $change_education->execute();
 }
 if(strlen($education2_description)>0){
  $change_education = $db->prepare("UPDATE education SET
  education2_description ='$education2_description'
  ");
  $change_education->execute();
 }
 if(strlen($education3_description)>0){
  $change_education = $db->prepare("UPDATE education SET
  education3_description ='$education3_description'
  ");
  $change_education->execute();
 }

  $change = $change_education ->execute();
  if($change){
    header("Location: education.php?change=ok");
  }else{
    header("Location: education.php?change=no");
  }
}

// Experience Insert

if(isset($_POST['insert_experience'])){
  $experience1_title = $_POST['experience1_title'];
  $experience1_date = $_POST['experience1_date'];
  $experience1_description = $_POST['experience1_description'];
  $experience2_title = $_POST['experience2_title'];
  $experience2_date = $_POST['experience2_date'];
  $experience2_description = $_POST['experience2_description'];
  $experience3_title = $_POST['experience3_title'];
  $experience3_date = $_POST['experience3_date'];
  $experience3_description = $_POST['experience3_description'];

  $insert_experience = $db->prepare("INSERT INTO experience SET
  experience1_title ='$experience1_title',
  experience1_date ='$experience1_date',
  experience1_description ='$experience1_description',
  experience2_title ='$experience2_title',
  experience2_date ='$experience2_date',
  experience2_description ='$experience2_description',
  experience3_title ='$experience3_title',
  experience3_date ='$experience3_date',
  experience3_description ='$experience3_description'
  ");

  $insert = $insert_experience ->execute();
  if($insert){
    header("Location: experience.php?insert=ok");
  }else{
    header("Location: experience.php?insert=no");
  }
}

// Experience Update

if(isset($_POST['change_experience'])){
  $experience1_title = $_POST['experience1_title'];
  $experience1_date = $_POST['experience1_date'];
  $experience1_description = $_POST['experience1_description'];
  $experience2_title = $_POST['experience2_title'];
  $experience2_date = $_POST['experience2_date'];
  $experience2_description = $_POST['experience2_description'];
  $experience3_title = $_POST['experience3_title'];
  $experience3_date = $_POST['experience3_date'];
  $experience3_description = $_POST['experience3_description'];

  $change_experience = $db->prepare("UPDATE experience SET
  experience1_title ='$experience1_title',
  experience1_date ='$experience1_date',
  experience2_title ='$experience2_title',
  experience2_date ='$experience2_date',
  experience3_title ='$experience3_title',
  experience3_date ='$experience3_date'
  ");

 if(strlen($experience1_description)>0){
  $change_experience = $db->prepare("UPDATE experience SET
   experience1_description ='$experience1_description'
  ");
  $change_experience->execute();
 }
 if(strlen($experience2_description)>0){
  $change_experience = $db->prepare("UPDATE experience SET
   experience2_description ='$experience2_description'
  ");
  $change_experience->execute();
 }
 if(strlen($experience3_description)>0){
  $change_experience = $db->prepare("UPDATE experience SET
   experience3_description ='$experience3_description'
  ");
  $change_experience->execute();
 }

  $change = $change_experience ->execute();
  if($change){
    header("Location: experience.php?change=ok");
  }else{
    header("Location: experience.php?change=no");
  }
}

// Contact Insert

if(isset($_POST['insert_contact'])){
  $adress = $_POST['adress'];
  $tel_no1 = $_POST['tel_no1'];
  $tel_no2 = $_POST['tel_no2'];
  $web_adress1 = $_POST['web_adress1'];
  $web_adress2 = $_POST['web_adress2'];
  

  $insert_contact = $db->prepare("INSERT INTO contact SET
  adress='$adress',
  tel_no1='$tel_no1',
  tel_no2='$tel_no2',
  web_adress1='$web_adress1',
  web_adress2='$web_adress2'
  ");

  $insert = $insert_contact ->execute();
  if($insert){
    header("Location: contact.php?insert=ok");
  }else{
    header("Location: contact.php?insert=no");
  }
}

// Contact Update

if(isset($_POST['change_contact'])){
  $adress = $_POST['adress'];
  $tel_no1 = $_POST['tel_no1'];
  $tel_no2 = $_POST['tel_no2'];
  $web_adress1 = $_POST['web_adress1'];
  $web_adress2 = $_POST['web_adress2'];

  $change_contact = $db->prepare("UPDATE contact SET
  adress='$adress',
  tel_no1='$tel_no1',
  tel_no2='$tel_no2',
  web_adress1='$web_adress1',
  web_adress2='$web_adress2'
  ");

  $change = $change_contact ->execute();
  if($change){
    header("Location: contact.php?change=ok");
  }else{
    header("Location: contact.php?change=no");
  }
}

// Settings Insert

if(isset($_POST['insert_settings'])){
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  $insert_settings = $db->prepare("INSERT INTO user SET
  user_name='$user_name',
  email='$email',
  password='$password'
  ");

  $insert = $insert_settings ->execute();
  if($insert){
    header("Location: settings.php?insert=ok");
  }else{
    header("Location: settings.php?insert=no");
  }
}

// Settings Update

if(isset($_POST['change_settings'])){
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $pass = base64_encode($password);

 if(strlen($email)>0||strlen($user_name)>0||strlen($password)>0){
  if(strlen($password)<5){
    header("Location: settings.php?change=lowchar");
  }
  else{
  $change_settings = $db->prepare("UPDATE user SET
  user_name='$user_name',
  email='$email',
  password='$pass'
  ");

  $change = $change_settings ->execute();
  if($change){
    header("Location: settings_logout.php");
  }else{
    header("Location: settings.php?change=no");
  }
  }
 }else{
  header("Location: settings.php?field=blank");
 }
}

// Main-Page Insert

if(isset($_POST['insert_main_page'])){
  $site_title = $_POST['site_title'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image = $_POST['image'];
  
  $insert_main_page = $db->prepare("INSERT INTO main_page SET
  site_title='$site_title',
  title='$title',
  description='$description',
  image='$image'
  ");

  $insert = $insert_main_page ->execute();
  if($insert){
    header("Location: main_page.php?insert=ok");
  }else{
    header("Location: main_page.php?insert=no");
  }
}

// Main-Page Update

if(isset($_POST['change_main_page'])){
  $site_title = $_POST['site_title'];
  $title = $_POST['title'];
  $description = $_POST['description'];
  $image = $_POST['image'];

  $change_main_page = $db->prepare("UPDATE main_page SET
  site_title='$site_title',
  title='$title',
  description='$description'
  ");

  if(strlen($image)>0){
  $change_main_page = $db->prepare("UPDATE main_page SET
   image='$image'
  ");
  $change_main_page ->execute();
  }

  $change = $change_main_page ->execute();
  if($change){
    header("Location: main_page.php?change=ok");
  }else{
    header("Location: main_page.php?change=no");
  }
}

?>
