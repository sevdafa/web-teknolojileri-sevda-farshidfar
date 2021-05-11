<?php

   $kadi = $_POST['kadi'];
   $sifre = $_POST['sifre'];

	if ($kadi=="" or $sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";
	}
	else
	{
    if ($kadi=="B201210602@sakarya.edu.tr" && $sifre=="B201210602")
		{
			echo "Hoşgeldiniz \"". $sifre ."\"";
		}
		else
		{
			echo "Kullanıcı adı veya şifre yanlış.";
		}
	}
?>
