<?php 
$ano=$_GET["ano"];
$nome_arquivo="violencia-domestica-df.csv";
$arquivo=fopen($nome_arquivo,"r");
$fgc=fgetcsv($arquivo);
echo "Esses são os dados do ano de $ano<br>"; 
echo"das seguintes localidades:<br>
RASILIA
<br>
GAMA
<br>
TAGUATINGA
<br>
BRAZLANDIA
<br>
SOBRADINHO
<br>
PLANALTINA
<br>
PARANOA
<br>
NUCLEO BANDEIRANTE
<br>
CEILANDIA
<br>
GUARA
<br>
CRUZEIRO
<br>
SAMAMBAIA
<br>
SANTA MARIA
<br>
SAO SEBASTIAO
<br>
RECANTO DAS EMAS
<br>
LAGO SUL
<br>
RIACHO FUNDO
<br>
LAGO NORTE
<br>
CANDANGOLANDIA
<br>
AGUAS CLARAS
<br>
RIACHO FUNDO 2
<br>
SUDOESTE
<br>
VARJAO DO TORTO
<br>
PARK WAY
<br>
ESTRUTURAL
<br>
SOBRADINHO 2
<br>
JARDIM BOTANICO
<br>
ITAPOA
<br>
SIA
<br>
VICENTE PIRES<br>
<br>E respectivamente suas ocorrências no ano de $ano<br>";
while (($linha = fgetcsv($arquivo,10000,",")) !==FALSE){
        if($ano== "2011"){
          echo"<pre>";
          print_r ($linha[1]);
          echo"<pre>";
         }else
         if($ano== "2012"){
            echo"<pre>";
            print_r ($linha[2]);
            echo"<pre>";
           }else
           if($ano== "2013"){
            echo"<pre>";
            print_r ($linha[3]);
            echo"<pre>";
           }else
           if($ano== "2014"){
            echo"<pre>";
            print_r ($linha[4]);
            echo"<pre>";
           }else
           if($ano== "2015"){
            echo"<pre>";
            print_r ($linha[5]);
            echo"<pre>";
           }else
           if($ano== "2016"){
            echo"<pre>";
            print_r ($linha[6]);
            echo"<pre>";
           }else
           echo "Não há esse ano";
}
fclose($arquivo);

?>