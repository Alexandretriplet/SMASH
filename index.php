<?php 
    session_start();
    require('actions/questions/showAllQuestionsAction.php');
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
    
        <form method="GET">

            <div class="form-group row">

                <div class="col-8">
                    <input type="search" name="search" class="form-control">
                </div>
                <div class="col-4">
                    <button class="btn btn-primary" type="submit" style="background-color: #339bce; margin-top: 10px;">Rechercher</button>
                </div>

            </div>
        </form>

        <br>

        <?php 
            while($question = $getAllQuestions->fetch()){
                ?>
                <div class="card">
                    <div class="card-header" style="font: italic small-caps bold 16px/2 cursive;">
                        <a href="article.php?id=<?= $question['id']; ?>">
                            <?= $question['titre']; ?>
                        </a>
                    </div>
                    <div class="card-body" style="font: italic small-caps bold 16px/2 cursive;">
                        <?= $question['description']; ?>
                    </div>
                    <div class="card-footer">
                        Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>"><?= $question['pseudo_auteur']; ?></a> le <?= $question['date_publication']; ?>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>

    </div>

</body>
</html>