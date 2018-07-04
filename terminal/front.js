$( document ).ready(function() {
  $("#topmenu").load("http://site/topmenu.htm"); 
  $("#leftmenu_ob").load("http://site/leftmenu_ob.htm"); 
});

$(".MenuBut").on("click", function(){
//$(".MainTable").css({"height":"20%"});

});

$("#main").on("click", function(){
$(location).attr("href","http://site/index.htm");
});

$("#important").on("click", function(){
$(location).attr("href","http://site/ob.htm");
});

$("#circle").on("click", function(){
$(location).attr("href","http://site/circle.htm");
});

$("#site").on("click", function(){
$(location).attr("href","http://site/site.htm");
});

$("#photo").on("click", function(){
$(location).attr("href","http://site/photos.htm");
});


function getHash(){
 if(location.hash)
  return location.hash ;
 else
  return NULL;	 
}