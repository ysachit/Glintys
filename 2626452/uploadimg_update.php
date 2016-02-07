<link href="css/main.css" rel="stylesheet">
<?php
include("header.php");
 ?>
 <div align="center">
 <p>Upload A Image</p>
 </div>
 <div align="center">
 <form action="php/uploadimg.php" method="post" enctype="multipart/form-data">
 <input type="file" name="abc"><br>
 <input type="submit" name="submit" id="submit">
 </form>
 </div>