<?php
include 'config.php'; 
require_once 'headerX.php';


?>
<?php $EndErgebnis = 100 / 10 * $_SESSION['score'];
?> 

<main>



    <div id="resultBox">

        <h1>Congratulations! Here are your results.</h1>
        <p> Dein Ergebnis: <?php 
            if($EndErgebnis <= 10) {
            echo "UUF... ist wohl was schief gelaufen...";
            }
                else if($EndErgebnis ==20) {
                    echo "Wirklich eher schlecht";define('DB_NAME', getenv('DB_NAME'));
                    }
                    else if($EndErgebnis == 30) {
                        echo "Nun, 3 sind besser als 1";
                        }
                        else if($EndErgebnis == 40) {
                            echo "Fast 5 Richtige";
                            }
                            else if($EndErgebnis == 50) {
                                echo "Die Hälfte, richtig ok";
                                }
                                else if($EndErgebnis == 60) {
                                    echo "Mega Hot";
                                    }
                                    else if($EndErgebnis == 70) {
                                        echo "Senior Web-Dev am Start";
                                        }
                                        else if($EndErgebnis == 80) {
                                            echo "Nur 2 falsch, noch ein Versuch?";
                                            }
                                            else if($EndErgebnis == 90) {
                                                echo "Damn, fast alle, GG";
                                                }
                                                else if($EndErgebnis == 100) {
                                                    echo "Definitiv gecheatet";
                                                    }
            

?> !!! </p>
        <a href="questions.php" class="start">Try again!</a>
    
    </div>

</main>

</html>

<?php 
unset($_SESSION);
session_destroy();
require_once 'footerX.php'; ?>