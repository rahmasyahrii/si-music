<h2>SILAHKAN MELIHAT ALBUM SAYA </h2>

<?php
 require_once "app/photos.php";

 $album = new album();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index_photos.php");

 }

 ?>
 <a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <br>
 <a href="input_photos.php">Tambah KATEGORI</a> |

 

 <table border= "1" >
 <tr>
 <td> ID</td>
 <td>TANGGAL</td>
 <td>TITLE</td>
 <td>TEXT</td>
 <td>POST_ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>

<h1> LIHAT CATEGORY </h1>

<h1> SELAMAT DATANG DI FOLDER FOTO SAYA </h1>