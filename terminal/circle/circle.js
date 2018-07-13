$( document ).ready(function() {
    var myCircles = { 
      "karate": "Каратэ"
     ,"skalolaz": "Скалолазание"}
     
  $.each(myCircles, function( index, value ) {
  $("<ul class='CircleLeftUl'><a href='/text/"+index+".htm'</a>"+value+"</ul>").appendTo("#CircleLeftMenu")
	})   

  })