<html>
<meta charset="utf-8">
<head>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<link rel="stylesheet" type="text/css" href="/site.css">
</head>

<body>
 <?php include_once ("../topmenu.htm")?>
<table width= 95% align=center cellpadding=10>
 <tr>
  <td width=35% valign=top>
  <div id="CircleLeftMenu"></div>
  </td>
  <td>
  <div id="MainText">
  <?php
  if(isset($_GET["page"]))
  {	
	$page=$_GET["page"];
	include_once("info/$page.htm");
  }
  else
  {
	include_once("info/main.htm");
  }
  ?>
  </div>
  </td>
 </tr>
</table>
</body>

<footer></footer>
<script>
    var myCircles = { 
      "first_class": "Расписание приема заявлений в первый класс"
     ,"pereclick": "Расписание перекличек"
	 }

  $.each(myCircles, function( index, value ) {
   $("<a class='side-nav-but-ob' href='?page="+index+"' id='"+index+"'>"+value+"</a>").appendTo("#CircleLeftMenu");
   }) 
       

</script>
</html>