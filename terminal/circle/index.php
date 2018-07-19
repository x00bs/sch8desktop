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
  <td width=20% valign=top>
  <div id="CircleLeftMenu"></div>
 <!--  <a href="#" class="side-nav-but">Кружки, секции</a>
    <a href="#" class="side-nav-but">Сайт школы</a>
	-->
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
      "breakdance": "Брейк-данс"
     ,"football": "Футбол"
	 ,"basketball": "Баскетбол"
	 ,"pankration": "Панкратион"}

  $.each(myCircles, function( index, value ) {
   $("<a class='side-nav-but' href='?page="+index+"' id='"+index+"'>"+value+"</a>").appendTo("#CircleLeftMenu");
   }) 
       

   $( ".side-nav-but" ).click(function() {
//   alert( "/info/"+$(this).attr("id")+".htm");
  // $("<b>text</b>").appendTo("#MainText");
//	$(location).attr("href","#"+$(this).attr("id"));
	//	$( "#MainText" ).html("/info/"+$(this).attr("id")+".htm")
	//$( "#MainText" ).text("<b>LOL</b>");
   });

</script>
</html>