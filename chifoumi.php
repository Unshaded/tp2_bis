<html>
  <head>
    <meta charset='UTF-8'/>
    <title>Chifoumi</title>
  </head>
  <body>
    <legend>
      Pierre,Feuille,Ciseau
    </legend>
    <p>
      Choisissez votre coup:
      <a href="?coup=0"><img src="ciseaux.png" width="50"></a>
      <a href="?coup=1"><img src="feuille.png" width="50"></a>
      <a href="?coup=2"><img src="pierre.png" width="50"></a>
    </p>
    <h3>
      Votre Coup ______________________________________ Celui de l'ordinateur
    </h3>
    <?php
      extract($_GET);
          
      if(isset($coup)){
        
        if($coup=='0')
          echo"<img src='ciseaux.png' width='150'>";

        if($coup=='1')
          echo"<img src='feuille.png' width='150'>";

        if($coup=='2')
          echo"<img src='pierre.png' width='150'>";

        $coupOrdi=rand(0,2);
        
        if($coupOrdi=='0')
          echo"<img src='ciseaux.png' width='150'>";

        if($coupOrdi=='1')
          echo"<img src='feuille.png' width='150'>";

        if($coupOrdi=='2')
          echo"<img src='pierre.png' width='150'>";
       
        $tableau =array(
          "0"=>array("0"=>"Egalité","1"=>"Victoire","2"=>"Défaite"),
          "1"=>array("1"=>"Egalité","0"=>"Défaite","2"=>"Victoire"),
          "2"=>array("2"=>"Egalité","0"=>"Victoire","1"=>"Defaite"),
        );
        
        $result= $tableau[$coup][$coupOrdi];
        echo $result;
       }
    ?>
    
  </body>
</html>