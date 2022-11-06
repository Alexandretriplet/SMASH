<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php'); 
    require('actions/questions/postAnswerAction.php');
    require('actions/questions/showAllAnswersOfQuestionAction.php');
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


            if(isset($question_publication_date)){
                ?>
                <section class="show-content">
                    <h3 style="font: italic small-caps bold 16px/2 cursive;"><?= $question_title; ?></h3>
                    <hr>
                    <p  ><?= $question_content; ?></p>
                    <hr>
                    <small>Par <?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_publication_date; ?></small>
                </section>
                <br>
                <section class="show-answers">

                    <form class="form-group" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label" style="font: italic small-caps bold 16px/2 cursive;">Réponse :</label>
                            <textarea name="answer" class="form-control"></textarea>
                            <br>
                            <button class="btn btn-primary" type="submit" name="validate" style="background-color: #339bce;">Répondre</button>
                        </div>
                    </form>

                    <?php 
                        while($answer = $getAllAnswersOfThisQuestion->fetch()){
                            ?>
                            <div class="card">
                                <div class="card-header">
                                    <a href="profile.php?id=<?= $answer['id_auteur']; ?>">
                                        <?= $answer['pseudo_auteur']; ?>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <?= $answer['contenu']; ?>
                                </div>
                            </div>
                            <br>
                            <?php
                        }
                    ?>

                </section>
                
                <?php
            }
        ?>

    </div>

</body>
</html>