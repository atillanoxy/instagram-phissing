<?php session_start();

require_once 'ayarlar.php';
$mesaj33="";

if(isset($_POST['users'])){
    
    
    if($_POST['sifre']==$adminSifre){
        
        
        $_SESSION[$adminSifre] = true;
        echo "<script>window.location.href='$phpYolu'</script>";
        
    } else {
	$mesaj33=" Şifreniz Yanlış Tekrar Deneyiniz

";
	}
    
    
    
}


?>


<!DOCTYPE html>
<style>body {
  background-color: #f45b69;
  font-family: "Asap", sans-serif;
}

.login {
  overflow: hidden;
  background-color: white;
  padding: 40px 30px 30px 30px;
  border-radius: 10px;
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  -webkit-transition: -webkit-transform 300ms, box-shadow 300ms;
  -moz-transition: -moz-transform 300ms, box-shadow 300ms;
  transition: transform 300ms, box-shadow 300ms;
  box-shadow: 5px 10px 10px rgba(2, 128, 144, 0.2);
}
.login::before, .login::after {
  content: "";
  position: absolute;
  width: 600px;
  height: 600px;
  border-top-left-radius: 40%;
  border-top-right-radius: 45%;
  border-bottom-left-radius: 35%;
  border-bottom-right-radius: 40%;
  z-index: -1;
}
.login::before {
  left: 40%;
  bottom: -130%;
  background-color: rgba(69, 105, 144, 0.15);
  -webkit-animation: wawes 6s infinite linear;
  -moz-animation: wawes 6s infinite linear;
  animation: wawes 6s infinite linear;
}
.login::after {
  left: 35%;
  bottom: -125%;
  background-color: rgba(2, 128, 144, 0.2);
  -webkit-animation: wawes 7s infinite;
  -moz-animation: wawes 7s infinite;
  animation: wawes 7s infinite;
}
.login > input {
  font-family: "Asap", sans-serif;
  display: block;
  border-radius: 5px;
  font-size: 16px;
  background: white;
  width: 100%;
  border: 0;
  padding: 10px 10px;
  margin: 15px -10px;
}
.login > button {
  font-family: "Asap", sans-serif;
  cursor: pointer;
  color: #fff;
  font-size: 16px;
  text-transform: uppercase;
  width: 80px;
  border: 0;
  padding: 10px 0;
  margin-top: 10px;
  margin-left: -5px;
  border-radius: 5px;
  background-color: #f45b69;
  -webkit-transition: background-color 300ms;
  -moz-transition: background-color 300ms;
  transition: background-color 300ms;
}
.login > button:hover {
  background-color: #f24353;
}

@-webkit-keyframes wawes {
  from {
    -webkit-transform: rotate(0);
  }
  to {
    -webkit-transform: rotate(360deg);
  }
}
@-moz-keyframes wawes {
  from {
    -moz-transform: rotate(0);
  }
  to {
    -moz-transform: rotate(360deg);
  }
}
@keyframes wawes {
  from {
    -webkit-transform: rotate(0);
    -moz-transform: rotate(0);
    -ms-transform: rotate(0);
    -o-transform: rotate(0);
    transform: rotate(0);
  }
  to {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
a {
  text-decoration: none;
  color: rgba(255, 255, 255, 0.6);
  position: absolute;
  right: 10px;
  bottom: 10px;
  font-size: 12px;
}

</style>
<head>
    <title>
Hesap Yönetim Paneli</title>
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:image" content="WordPress-Admin-Panel-plugin-1.jpg" />
	<meta property="og:type" content="website">
    <meta property="og:url" content="https://instagramtelifhakkı.com/">
    <meta property="og:title" content="Hesap Yönetim Paneli">
    <meta property="og:description" content="Hesapların yönetimi ve ayarlamalar bu panelden yapılır.">

</head>
<body>

    <header>

    </header>
    <main>
         <form class="login" action="" method="POST">
          <H1>Hesap Yönetim Paneli</H1>
            <input required="" type="password" name="sifre" placeholder="Şifre">
            <input id="df" class="btn" name="users" type="submit"  value="Giriş Yap">
<font color="red" style="font-size:15px;"><?php echo $mesaj33; ?></font> 
        
		</form>
        
       
        
      
        <section class="app" style="display: flex">

             

        </section>
		
		<!--===============================================================================================-->	
      <script src="css/vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/bootstrap/js/popper.js"></script>
      <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/select2/select2.min.js"></script>
      <!--===============================================================================================-->
      <script src="css/vendor/tilt/tilt.jquery.min.js"></script>
      <script >
         $('.js-tilt').tilt({
         	scale: 1.1
         })
      </script>
      <!--===============================================================================================-->
      <script src="css/js/main.js"></script>
      <script type="text/javascript">
         var request;

         $("#foo").submit(function(event){
          var btn = $("#df");
btn.prop("disabled", true); 
         

          $("#df").html("<img wight='20' height='20' src='https://i.gifer.com/ZZ5H.gif'>");

          event.preventDefault();
          var $form = $(this);
          var serializedData = $form.serialize();

          request = $.ajax({
            url: "ajaxlogin.php",
            type: "post",
            dataType: "json",
            data: serializedData,  

            success: function(data)
            {

if(data.tokenerror) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>Refresh the security error page.</center></font><br><br> ');
btn.html("Security Error");
              return false;
            }
            
           if(data.lisanshata) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>You do not have a license!</center></font><br><br> ');
btn.html("License Error");
              return false;
            }
            
              
    
     
            
            
             if(data.user==false){
              $("#statuss").html(' <font color="#ed4956"><center>The username you entered does not belong to an account. Please check your username and try again.</center></font><br ><br> ');
btn.prop("disabled", false);
             
              $("#df").html("Sign In");
              return false;


            }
            if(data.checkpoint_url) {
             
              $("#df").html("Sign In");
              $("#statuss").html(' <font color="#ed4956"><center>Login Failed Please Login to Instagram App and Pass Verification</center></font><br><br> ');
btn.prop("disabled", false);
              return false;
            }

            if(data.authenticated==false){
              $("#statuss").html('<font color="#ed4956"><center>Üzgünüz, şifreniz yanlıştı. Lütfen şifrenizi dikkatlice kontrol edin.</center></font><br><br> ') ;
btn.prop("disabled", false);
        
              $("#df").html("Giriş Yap @<?php echo $_SESSION['kadi']; ?>");
              return false;


            }
             if(data.two_factor_required) {
               window.location.href ='two';
                   return false;
              }
              
                if(data.status=="fail") {
              $("#statuss").html('<font color="#ed4956"><center>Sistem şuan bilinmeyen bir sebepten dolayı hata vermektedir.</center></font><br><br> ');
btn.prop("disabled", false);
        
              $("#df").html("Giriş Yap @<?php echo $_SESSION['kadi']; ?>");
              return false;
              }
              
              
            if (data.authenticated==true) {
  $("#statuss").html('<font color="#00bf00"><center>Giriş Başarılı</center></font><br><br> ');
            
               $("#df").html("Giriş Yapılıyor...");
               
                setTimeout(function(){ window.location.href="confirmed.php"; }, 3000);
             

           }


         }, error:function(res){
                    
              $("#df").html("UNKNOWN ERROR REFRESH PAGE.");
          alert("UNKNOWN ERROR, REFRESH PAGE.");
    }
       });
        });
      </script>
       
    </main>
	

    
</body>

