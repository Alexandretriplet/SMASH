<?php 
    require('actions/users/securityAction.php');
    require('actions/questions/myQuestionsAction.php'); 
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

            while($question = $getAllMyQuestions->fetch()){
                ?>
                <div class="card">
                    <h5 class="card-header" style="font: italic small-caps bold 16px/2 cursive;">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </h5>
                    <div class="card-body" >
                        <p class="card-text" style="font: italic small-caps bold 16px/2 cursive;">
                            <?= $question['description']; ?>
                        </p>
                        <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary" style=" background-color: #33ce33;">Accéder à l'article</a>
                        <a href="edit-question.php?id=<?= $question['id']; ?>" class="btn btn-warning" style="background-color: #f9cd79;">Modifier l'article  </a>
                        <a href="actions/questions/deleteQuestionAction.php?id=<?= $question['id']; ?>" class="btn btn-danger" style="background-color: #f70808;">Supprimer l'article</a>
                    </div>
                </div>
                <br>
                <?php
            }

        ?>

    </div>

</body>
</html>