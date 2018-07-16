<html>
<meta charset="utf-8">
<head>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>
<link rel="stylesheet" type="text/css" href="/site.css">
</head>

<body>
<?php include_once ("../topmenu.htm")?>
        <div align=center>
			<div id="phototext"></div>
            <p>
            <img id="slider" height="600"/>
			</p>
			<p>
			<button class="nav-item" onclick="prev()"> Назад </button>
            <button class="nav-item" onclick="next()"> Далее </button>
			</p>
        </div>
</body>

<footer></footer>
<script src="photos.js"></script>
<script>
$( document ).ready(function() {
  $("#slider").attr("src","pic/" + num + ".jpg"); 
	var nnum=num+1;
  $("#phototext").html("Фото "+nnum+" из "+PicNum);

});
</script>
</html>