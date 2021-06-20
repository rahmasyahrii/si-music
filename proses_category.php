<?php
        require_once "app/category.php";

        $album = new album();

        if (isset($_POST['btn_proses'])) {
            $album->input();
            header("location:index_category.php");
        }
        
            if (isset($_POST['btn_update'])){
            $album->update();
            header("location:index_category.php");
            }
            
        
        ?>