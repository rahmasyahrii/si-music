<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="UAS PWBL">
    <meta name="author" content="Muhammad Nurazman">
    <meta name="keywords" content="">
    <title>blog pribadi</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <table>
            <tr>
                <td>|<a href="index.php?page=i_login">LOGIN</a>|</td>
                <td>|<a href="index.php?page=i_album">ALBUM</a>|</td>
                <td>|<a href="index.php?page=i_photos">PHOTOS</a>|</td>
                <td>|<a href="index.php?page=i_cat">CATEGORY</a>|</td>
                <td>|<a href="index.php?page=i_post">POST</a>|</td>
            </tr>  
    </table>
                  
            <?php
            if (isset($_GET['page'])){
            include $_GET['page'].".php";
        }else{
        include "main_index.php";
    }
            ?>

        <footer>
            Copyright &copy; Muhammad Nurazman
        </footer>

</body>
</html>