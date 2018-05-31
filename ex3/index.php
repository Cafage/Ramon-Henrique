<?php
$arquivos = array('music.mp4','video.mov',' imagem.jpeg','imagem.gif', 'executavel.exe');

$extensao = array();
foreach ($arquivos as $value) {
	$explode = explode('.', $value);
	$extensao[] = $explode[1]; 
}
//->ordena array 
sort($extensao);

//->necessaria para numerar as linhas.
$aux = 1;
foreach ($extensao as $value) {
	echo $aux." .".$value."<br/>"; 
	$aux ++;
}
