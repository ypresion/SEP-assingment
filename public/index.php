<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();
?>

<!DOCTYPE html> 
<html>
    <?php
    include '../src/views/header.php';
    ?>
    <body>
    <div data-role="page">
        <div data-role="header">
        <?php
        include '../src/views/nav.php';
        ?>
        </div>

        
            <?php
                include '../src/views/'.$_GET['page'].'.php';
            ?>
        
        
        <div data-role="footer" data-id="foot">
        <?php
        include '../src/views/footer.php';
        ?>    
        </div>
    </div>
    </body>    
</html>