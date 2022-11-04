<?php
    require('actions/users/securityAction.php');
    require('actions/questions/getInfosOfEditedQuestionAction.php');
    require('actions/questions/editQuestionAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>

    <br><br>
    <div class="container">
        <?php if(isset($errorMsg)){ echo '<p>'.$errorMsg.'</p>'; } ?>
        
        <?php 
            if(isset($question_content)){ 
                ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titre de l'article ou de la question</label>
                        <input type="text" class="form-control" name="title" value="<?= $question_title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description de l'article ou de la question</label>
                        <textarea class="form-control" name="description"><?= $question_description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Contenu de l'article ou de la question</label>
                        <textarea type="text" class="form-control" name="content"><?= $question_content; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="validate">Modifier l'article</button>
                </form>
                <?php
            }
        ?>
        

    </div>
    

</body>
</html>