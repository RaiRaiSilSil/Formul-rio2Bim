<?php
$local=$_POST["local"];
$nome_arquivo="violencia-domestica-df.csv";
$arquivo=fopen($nome_arquivo,"r");
$fgc=fgetcsv($arquivo);
$soma=0;
while ($fgc){
    $fgc=fgetcsv($arquivo);
    if($local==$fgc[0]){
          echo"<pre>";
          echo "A localidade escolhida foi: $fgc[0]. <br>E suas ocorrências: <br>";
          echo "$fgc[1] <br>";
          echo "$fgc[2] <br>";
          echo "$fgc[3] <br>";
          echo "$fgc[4] <br>";
          echo "$fgc[5] <br>";
          echo "$fgc[6] <br>";
          echo"<pre>";
          for($i=1;$i<=6;$i++){
              $soma+=$fgc[$i];
          }
    }
}
echo "A soma das ocorrências é : $soma";
fclose($arquivo);
?>