$( document ).ready(function() {
    var myCircles = { 
      "karate": "Каратэ"
     ,"skalolaz": "Скалолазание"
	 ,"basket": "Баскетбол"}
     
  $.each(myCircles, function( index, value ) {
  $("<a class='side-nav-but' href='/text/"+index+".htm'>"+value+"</a>").appendTo("#CircleLeftMenu")
	})   

  })