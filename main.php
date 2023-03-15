<?php
require_once 'FamilleProduit.php';
require_once 'Produit.php';
require_once 'Promotion.php';
require_once 'LignePromotion.php';

//le jeu d'essai ne porte que sur des produits alimentaires

//familles
$ali=new FamilleProduit('ALI','alimentaire');
//produits
$p1=new Produit('p1', 'tarama bio pot 100g', 3.00, $ali);
$p2=new Produit('p2', 'brebis bio lot 4 yaourts', 2.00, $ali);
$p3=new Produit('p3', 'margarine bio 250g', 3.00, $ali);
//lignes de promotion
$desLignes[0]=new LignePromotion('01mars2021','31mars2021', 2.00,$p1);//le tarama
$desLignes[1]=new LignePromotion('01mars2021','31mars2021', 1.00,$p2);//la brebis
$desLignes[2]=new LignePromotion('01mars2021','31mars2021', 2.00,$p3);//la margarine
//promotions : les 3 produits alimentaires bio sont en promotion
$promo=new Promotion('promo', 'bio', 'mars', 2021, $ali, $desLignes);

//traitements

//qu2.1
var_dump($desLignes[0]->getPourcentageReduction());
//le produit p1 passe pour cette promotion de 3 à 2 euros
//resultat attendu float(33.333333333333) soit 33,3% de réduction

var_dump($desLignes[1]->getPourcentageReduction());
//le produit p2 passe pour cette promotion de 2 à 1 euros
//resultat attendu float(50) soit 50% de réduction

//qu2.2
foreach($promo->getLesLignes() as $uneLigneDePromotion){
    echo $uneLigneDePromotion->getLeProduit()->getDesignation();
    echo " prix normal:",$uneLigneDePromotion->getLeProduit()->getTarif();
    echo " prix promotion:",$uneLigneDePromotion->getTarif(),PHP_EOL;
}
/*resultat attendu
tarama bio pot 100g prix normal:3 prix promotion:2
brebis bio lot 4 yaourts prix normal:2 prix promotion:1
margarine bio 250g prix normal:3 prix promotion:2
*/

//qu2.3
var_dump($promo->getLesLignesPromoRed(30)); 
//resultat attendu : un tableau avec un seul produit dont la promotion est sup à 40%
?>