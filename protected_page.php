<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
 
sec_session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Protected Page</title>
    </head>
    <body>
        <?php if (login_check($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['usuario']); ?>!</p>
            <p>
                This is an example protected page.  To access this page, users
                must be logged in.  At some stage, we'll also check the role of
                the user, so pages will be able to determine the type of user
                authorised to access the page.
            </p>
            <p>Return to <a href="index.php">login page</a></p>

            <form action="includes/file-uploads.php" method="post" enctype="multipart/form-data" style="border-color: black; border-width: 1px; border-style: solid;">
                <input type="file" name="foto" style="padding: 20px;"> <br>
                <input type="submit" name="btn" value="Enviar Foto" style="margin-left: 20px;">
            </form>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
        
    </body>
</html>