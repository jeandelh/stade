<!DOCTYPE html>

<html lang="fr">

    <?php include_once './view/head.html'; ?>    

    <body>

        <?php include_once './view/header.html'; ?>
    
      </body>   
            
<?php







if(isset($_POST["form-add"]))
{

    $numberPlace=$_POST['numberPlace'];

    $entryStadium=$_POST['entryStadium'];
    
    function valid_donnees($donnees){

        $donnees = trim($donnees);
        $donnees = stripslashes($donnees);
        $donnees = htmlspecialchars($donnees);
        return $donnees;

    }

    $numberPlace=valid_donnees($_POST['numberPlace']);

    $entryStadium=valid_donnees($_POST['entryStadium']);

    if(filter_var($numberPlace, FILTER_VALIDATE_INT) === 0 ||
    !filter_var($numberPlace, FILTER_VALIDATE_INT) === false)

    {
        
        $filter= 1;


    }

    else
    {
        $filter= 2;
    }

        $entryMaxA= 10;

        $entryMaxB = 20;

        $entryMaxC = 30;

        $entryMaxD= 40;

        $entryA="a";

        $entryB="b";

        $entryC="c";
        
        $entryD="D";

 



    if($entryA == $entryStadium && $numberPlace<=$entryMaxA && !empty($numberPlace) && !empty($entryStadium) && $filter==1)
    {
    ?>
       <p class="positionOrientation">vous êtes à la bonne entrée</p>
    <?php

    }

        elseif( $entryA == $entryStadium && $numberPlace > $entryMaxA && $numberPlace <=$entryMaxB)
        {

    ?> 
     <div class="positionOrientation">

        <p>gauche</p>

        <img id="imgArrow" src="./img/arrowLeft.svg">

     </div>
<?php
    }
    elseif( $entryA == $entryStadium && $numberPlace > $entryMaxB && $numberPlace<=$entryMaxC)
    {
?>
    <div class="positionOrientation">

        <p>droite</p>

        <img id="imgArrow" src="./img/arrowRight.svg">

    </div>
<?php
    }
    elseif( $entryA == $entryStadium && $numberPlace > $entryMaxC && $numberPlace<=$entryMaxD)
    {
?>      
      <div class="positionOrientation">

        <p>droite</p>

        

        <img id="imgArrow" src="./img/arrowRight.svg">

        <p>ou</p>

        <p>gauche</p>

        <img id="imgArrow" src="./img/arrowLeft.svg">

      </div>
<?php 
    }
    elseif($entryB == $entryStadium && $numberPlace > $entryMaxA && $numberPlace <= $entryMaxB)
    {
?>

      <p class="positionOrientation">vous êtes à la bonne entrée</p>


<?php
    }

    elseif($entryB == $entryStadium && $numberPlace > $entryMaxC && $numberPlace<=$entryMaxD)
    {
?>
    <div class="positionOrientation">

      <p>gauche</p>

      <img id="imgArrow" src="./img/arrowLeft.svg">

    </div>
    
<?php
    }     
    elseif($entryB == $entryStadium && $numberPlace <= $entryMaxA) 
    {
?>
      <div class="positionOrientation">

        <p>droite</p>

        <img id="imgArrow" src="./img/arrowRight.svg">

    </div>
<?php
    }
    elseif($entryB == $entryStadium && $numberPlace > $entryMaxB && $numberPlace <= $entryMaxC) 
    {
?>

      <div class="positionOrientation">

          <p>droite</p>



          <img id="imgArrow" src="./img/arrowRight.svg">

          <p>ou</p>

          <p>gauche</p>

          <img id="imgArrow" src="./img/arrowLeft.svg">

      </div>

<?php
    }
    elseif($entryD == $entryStadium && $numberPlace > $entryMaxA && $numberPlace <= $entryMaxB) 
    {
?>
        <div class="positionOrientation">

            <p>droite</p>

            <img id="imgArrow" src="./img/arrowRight.svg">

        </div>

<?php
    }
    elseif($entryD == $entryStadium && $numberPlace > $entryMaxC && $numberPlace <= $entryMaxD)
    {
?>        
        <p class="positionOrientation">vous êtes à la bonne entrée</p>
<?php

    }
    elseif($entryD == $entryStadium && $numberPlace <= $entryMaxA)
    {

?>       
     <div class="positionOrientation">

          <p>droite</p>



          <img id="imgArrow" src="./img/arrowRight.svg">

          <p>ou</p>

          <p>gauche</p>

          <img id="imgArrow" src="./img/arrowLeft.svg">

      </div>
<?php
    }

    elseif($entryD == $entryStadium && $numberPlace > $entryMaxB && $numberPlace <= $entryMaxC)
    {
?>
     <div class="positionOrientation">

        <p>gauche</p>

        <img id="imgArrow" src="./img/arrowLeft.svg">

     </div>
<?php
    }
}
else
{
  echo "erreur veuillez remplir tous les champs et vérifier que vous mettez les bonnes valeurs dans les champs";
    
 
}