<?php
ini_set("session.save_path", "/home/unn_w18015597/sessionData");
session_start();
?>

<!DOCTYPE html> 
<html>
    <?php
    include '../src/views/components/header.php';
    ?>
    <body>
    <div data-role="page">
        <div data-role="header">
        <?php
        include '../src/views/components/nav.php';
        ?>
        </div>

        
            <?php
                $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : 'index';
                include '../src/views/'.$page.'.php';
                
            ?>
        
        
        <div data-role="footer" data-id="foot">
        <?php
        include '../src/views/components/footer.php';
        ?>    
        </div>
    </div>
    </body>    
</html>