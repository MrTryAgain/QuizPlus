<?php
include 'database.php'; 
require_once 'headerX.php';



?>



<main>



    <div id="resultBox">

        <h1>Congratulations! Here are your results.</h1>
        <p> Dein Ergebnis: <?php echo $_SESSION['score']; ?></p>
        <a href="questions.php" class="start">Try again!</a>
    
    </div>

</main>

</html>

<?php 
unset($_SESSION);
session_destroy();
require_once 'footerX.php'; ?>