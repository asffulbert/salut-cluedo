<?php   
echo "vous ete dans le hall";
echo $_GET["hall"];
$arme = "chandelier";

    $arme = $_GET["arme"];

if ($arme == "chandelier") {
    echo "vous avez choisi le chandelier";
} elseif ($arme == "couteau") {
    echo "vous avez choisi le couteau";
} elseif ($arme == "revolver") {
    echo "vous avez choisi le pistolet";
} else {
    echo "vous n'avez pas choisi d'arme";
}   
$arme = "couteau";
$arme = $_GET["arme"];

if ($arme == "couteau") {
    echo "vous avez choisi le couteau";
} elseif ($arme == "corde") {
    echo "vous avez choisi la corde";
} else {
    echo "vous n'avez pas choisi d'arme";
} 
$arme2 = "cle anglaise";
$arme2 = $_GET["arme2"];
if($arme2 == "cle anglaise"){
    echo "la cle anglaise est votre arme";  
}else{
    echo "vous n ' avez pas choisit d'arme";

}
$arme3 = "bar de fer";
$arme3 = $_GET["arme3"];
if($arme3 == "bar de fer"){
    echo "bar fer est pris ";
}
else{
    echo " bar de fer est pas saisir";
}
if (isset($_GET["index "])) {
 echo $_GET["hall"];

}
if ($_GET["page"]="hall"){
    include "?php.php";
}