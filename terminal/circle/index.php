<html>
<meta charset="utf-8">
<head>
<script src="http://code.jquery.com/jquery-1.8.3.js"></script>

<link rel="stylesheet" type="text/css" href="/site.css">
</head>

<body>
 <?php include_once ("../topmenu.htm")?>
<table border=1 width= 95% align=center cellpadding=10>
 <tr>
  <td width=20%>
  <div id="CircleLeftMenu"></div>
 <!--  <a href="#" class="side-nav-but">Кружки, секции</a>
    <a href="#" class="side-nav-but">Сайт школы</a>
	-->
  </td>
  <td>
  <div class="MainText">Text</div>
  </td>
 </tr>
</table>
</body>

<footer></footer>
<script>

$( document ).ready(function() {
    var myCircles = { 
      "karate": "Каратэ"
     ,"skalolaz": "Скалолазание"
	 ,"basket": "Баскетбол"}
     
  $.each(myCircles, function( index, value ) {
   $("<a class='side-nav-but' href='' id='"+index+"'>"+value+"</a>").appendTo("#CircleLeftMenu");
   }) 
   
   $( ".side-nav-but" ).click(function() {
   alert( "Handler for .click() ");
   });
  });
  

// + $(this).prop("id") 
  function getHash(){
 if(location.hash)
  return location.hash ;
 else
  return NULL;	 
}
</script>
</html>