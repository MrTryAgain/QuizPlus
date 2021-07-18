<?php
include 'database.php';
 



$_SESSION['score'] = $_SESSION['score'] + $_POST['answer'];
$_SESSION['counter']++;
if($_SESSION['TotalQuestions'] == $_SESSION['counter'] ){
    header('Location: final.php');
    } else {
        header('Location: questions.php');
    }






    


require_once 'headerX.php';
?>
<?php require_once 'footerX.php' ?>