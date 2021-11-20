<?php
function rasgele($uzunluk){
  $karakterler = "1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPGRSTUVWXYZ!'^#+$&{/([)]=}?\*-|<>@~";
  
  for($i=0;$i<$uzunluk;$i++){
    $keys .= $karakterler{rand(0,86)};
  }
  return $keys;
}

$data = rasgele(8);
echo $data."<br>";
header("Refresh:0");
$dosya = fwrite(fopen("wordlist.txt","a+"),"".$data."\n");
fclose($dosya);

?>
