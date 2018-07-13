/*
$( document ).ready(function() {
  $("#topmenu").load("./topmenu.htm"); 
  $("#leftmenu_ob").load("http://site/leftmenu_ob.htm"); 
});
*/
$(".MenuBut").on("click", function(){
//$(".MainTable").css({"height":"20%"});

});

$("#main").on("click", function(){
$(location).attr("href","http://site/index.htm");
});

$("#important").on("click", function(){
$(location).attr("href","/ob");
});

$("#circle").on("click", function(){
$(location).attr("href","/circle");
});

$("#site").on("click", function(){
$(location).attr("href","/school");
});

$("#photo").on("click", function(){
$(location).attr("href","/photos");
});

//получить значение сайта после #
function getHash(){
 if(location.hash)
  return location.hash ;
 else
  return NULL;	 
}