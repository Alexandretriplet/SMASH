<?php
    require('actions/users/securityAction.php');
    require('actions/questions/getInfosOfEditedQuestionAction.php');
    require('actions/questions/editQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body style="background-image:url(assets/SPU.png); background-size: cover;">
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="container" style="background-color: white; padding-bottom: 50px; border-radius: 10px 90px / 90px;">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        
        <?php 
            if(isset($question_content)){ 
                ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Titre de l'article ou de la question</label>
                        <input type="text" class="form-control" name="title" value="<?= $question_title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Description de l'article ou de la question</label>
                        <textarea class="form-control" name="description"><?= $question_description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" style="font-family: sans-serif; color:#cc2600; font: italic small-caps bold 16px/2 cursive;">Contenu de l'article ou de la question</label>
                        <textarea type="text" class="form-control" name="content"><?= $question_content; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="validate" style="background-color: #f9cd79">Modifier l'article</button>
                </form>
                <?php
            }
        ?>
        

    </div>
    

</body>
</html>