
var PicNum=5;
var num = getRandomInt(0,PicNum);
function next() {
    var slider = document.getElementById('slider');
    var phototext=document.getElementById('phototext');
	num++;
    if(num >= PicNum) {
        num = 0;
    }
    slider.src = "pic/" + num + ".jpg";
	var nnum=num+1;
	phototext.innerHTML="Фото "+nnum+" из "+PicNum;
}
function prev() {
    var slider = document.getElementById('slider');
    var phototext=document.getElementById('phototext');
	num--;
    if(num < 0) {
        num = PicNum-1;
    }
    
	slider.src = "pic/" + num + ".jpg";
	var nnum=num+1;
	phototext.innerHTML="Фото "+nnum+" из "+PicNum;
	
}
function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min)) + min;
}