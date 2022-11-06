<?php 
    require('actions/users/securityAction.php'); 
    require('actions/questions/publishQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body style="background-image:url(assets/SPU.png); background-size: cover;">
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <form class="container" method="POST" style="background-color: white; padding-bottom: 50px; border-radius: 10px 90px / 90px;">

        <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Titre de l'article ou de la question</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Description de l'article ou de la question</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Contenu de l'article ou de la question</label>
            <textarea type="text" class="form-control" name="content"></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="validate" style="background-color: #33ce33">Publier l'article</button>
   </form>
</body>
</html>