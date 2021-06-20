<h2>SILAHKAN MELIHAT ALBUM SAYA </h2>

<?php
 require_once "app/post.php";

 $album = new album();
 $rows = $album->tampil();

 if  (isset($_GET['hapus'])){
     $id = $_GET['hapus'];
     $album->hapus($id);
     header("location:index_post.php");

 }

 ?>
 <a href="index_album.php">Album</a> |
 <a href="index_category.php">Category</a> |
 <a href="index_photos.php">Photos</a> |
 <a href="index_post.php">Post</a> |
 <br>
 <a href="input_post.php">Tambah KATEGORI</a> |

 

 <table border= "1" >
 <tr>
 <td> ID</td>
 <td>TANGGAL</td>
 <td>SLUG</td>
 <td>TITLE</td>
 <td>TEXT</td>
 <td>CAT_ID</td>
 <td>EDIT</td>
 <td>HAPUS</td>
 </tr>

<h1> LIHAT CATEGORY </h1>

<h1> SELAMAT DATANG DI FOLDER FOTO SAYA </h1>

<h1> LIHAT POSTINGAN SAYA! </h1>