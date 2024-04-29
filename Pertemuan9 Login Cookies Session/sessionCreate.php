<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
            $_SESSION["favcolor"] = "green";
            $_SESSION["favanimal"] = "cat";
            echo "Session variables are set.";
            // Pengisian nilai green di variabel sesi favcolor dan cat di variabel sesi favanimal
        ?>
    </body>
</html>