<?php
#Verificar possibilidades de algoritmos de criptografia
if(CRYPT_STD_DES == 1){
	echo "Standar DES: ". crypt('ZEC','ZP')."<br>";
}
if(CRYPT_EXT_DES == 1){
	echo "Extend DES: ".crypt('ZPEC','_J9..ZPEC')."<br>";
}
if(CRYPT_MD5 == 1){
	echo "md5: ".  crypt('PHP','$1$ZCPE$')."<br>";
}
if(CRYPT_BLOWFISH == 1){
	echo "". crypt('PDOPHP','$2a$07$ZCPE...........$');
}

print "<br>";

#Hash com API password_hash
#BCRYPT
$senha = password_hash('senha123',PASSWORD_BCRYPT);

echo $senha;

//verificar se senha bate com o hash
//bem simples
if(password_verify('senha123',$senha)){
	echo '<br>Tudo OK!';
}
echo "<pre>";