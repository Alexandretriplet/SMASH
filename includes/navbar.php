<nav class="navbar">
  <a href="#" class="logo">SC</a>
  <div class="nav-links">
    <ul>
        <a href="index.php" style="font: italic small-caps bold 16px/2 cursive; color: red;">Les articles</a>

        <a href="publish-question.php" style="font: italic small-caps bold 16px/2 cursive; color: #bf5e2e ;">Publier un article</a>

        <a href="my-questions.php" style="font: italic small-caps bold 16px/2 cursive; color: #bf5e2e ;">Mes articles</a>

        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <a href="profile.php?id=<?= $_SESSION['id']; ?>" style="font: italic small-caps bold 16px/2 cursive; color: #2ebfbf;">Mon profil</a>

            <a href="actions/users/logoutAction.php" style="font: italic small-caps bold 16px/2 cursive; color: #2ebfbf;">Déconnexion</a>

            <?php
            }
            ?>
    </ul>
  </div>
  <img src="assets/menu-btn.png" alt="menu" class="menu">

  <script>
        const menu = document.querySelector(".menu")
        const navLinks = document.querySelector(".nav-links")
 
        menu.addEventListener('click',()=>{
        navLinks.classList.toggle('mobile-menu')
        })
</script>
</nav>
