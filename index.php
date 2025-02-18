<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label>Nombre de usuario:</label>
            <input type="text" name="usuario">
            <br>
            <label>Contraseña:</label>
            <input type="password" name="passwd">
            <input type="submit">
        </form>
        <?php
        echo "Bienvenido al Gestor de usuarios"
        
        ?>
    </body>
</html>
