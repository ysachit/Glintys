<?php
include('profile_show.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>Profile Pic</title>
<style>
	  #picu
	  {
		  margin-left:300px;
		  margin-top:20px;

		  } 
</style>
<script>
  function checkFile(fieldObj)
    {
        var FileName  = fieldObj.value;
        var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
   
       if ( (FileExt != "jpg" && FileExt != "png" && FileExt != "jpeg"))
        {
            var error = "File type : "+ FileExt+"\n\n";
            error += "Please dont upload PNG file or Invalid File";
            alert(error);
			$("#submit").hide();
            return false;
        }
		$("#submit").show();
        return true;
    }
</script>
</head>
<body>
<div class="cbp-spmenu">
<div class="cbp-spmenu-middle">
<p>Update Profile Pic</p>
<hr />
<p style="color:#F00">Please dont't upload PNG file.We only accept .jpg or .jpeg file</p>
<div id="picu">
<form action="php/update_pic.php" method="post" enctype="multipart/form-data">
<input type="file" name="abc" onchange="checkFile(this)" /><br />
<input type="submit" name="submit" id="submit"/>
</form>
</div>
</body>