<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <?php
        require_once 'materialize.html';
        ?>
    </head>
    <body>
        <?php
        require_once 'admin_header.php';
        require_once 'admin_fab.php';
        
        if(isset($_GET['fab']))
        {
            if($_GET['fab']==md5(1))
            {
                
            }
            elseif($_GET['fab']==md5(2))
            {
                
            }
            elseif($_GET['fab']==md5(3))
            {
                require_once 'add_faculty.php';
            }
            elseif($_GET['fab']==md5(4))
            {
                
            }
        }
        
        ?>
        
        
    </body>
</html>
