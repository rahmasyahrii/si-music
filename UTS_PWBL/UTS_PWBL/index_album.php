<h2>SILAHKAN MELIHAT ALBUM SAYA </h2>

<?php

 require_once "app/album.php";

 $album = new album();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index_album.php");

 }

 ?>
 <a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <br>
 <a href="input_album.php">Tambah Album</a> |

 

 <table border= "1" >
 <tr>
 <td> ID</td>
 <td>NAME</td>
 <td>TEXT</td>
 <td>PHOTO_ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>