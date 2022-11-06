<?php 
    session_start(); 
    require('actions/users/showOneUsersProfileAction.php');   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body style="background-image:url(assets/SPU.png); background-size: cover;">
    <?php include 'includes/navbar.php'; ?>
    <br><br>

    <a href="#" class="remonter">
        <img src="assets/top.png" class="icone">
    </a>

    <div class="container" style="background-color: white; padding-bottom: 50px; padding-top: 10px ;border-radius: 30px;">
        <?php 
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($getHisQuestions)){

                ?>
                <div class="card">
                    <div class="card-body">
                        <h4 style="color: #1200ec; font: italic small-caps bold 16px/2 cursive;">Pseudo : @<?= $user_pseudo; ?></h4>
                        <hr>
                        <p style="color: #469cf7;font: italic small-caps bold 16px/2 cursive;">Identité : <?= $user_lastname . ' ' . $user_firstname; ?></p>
                    </div>
                </div>
                <br>
                <?php
                while($question = $getHisQuestions->fetch()){ 
                    ?>
                    <div class="card">
                        <div class="card-header" style="color:#cc2600; font: italic small-caps bold 16px/2 cursive;">
                            <?= $question['titre']; ?>
                        </div>
                        <div class="card-body" style="color:#000;font: italic small-caps bold 16px/2 cursive;">
                            <?= $question['description']; ?>
                        </div>
                        <div class="card-footer" style="color:#057912;">
                            Par <?= $question['pseudo_auteur']; ?> le <?= $question['date_publication'];  ?>
                        </div>
                    </div>
                    <br>
                    <?php
                }

            }
        ?>  
    </div>

</body>
</html>