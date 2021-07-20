<?php
require_once 'projects/QuizUrs/config.php';
require_once 'projects/QuizUrs/headerX.php';
//require_once "src/include/header.php";
unset($_SESSION);
session_destroy();
?>






  <div class="introBox"div>

    <h1>Welcome to Quiz +Edition!</h1>
    <br>

    <p>Wasup! Click Start and have fun with a lot of tricky questions, <br> and please dont cheat,<br> if you cant solve the questions, no biggie, its just a game!

      <br>

      <br>
      <div style="text-align: center;">
        <a class="nextPage" href="projects/QuizUrs/questions.php">Start Quiz</a>
      </div>
        
      
  </div>

<?php include 'projects/QuizUrs/footerX.php'; ?>




