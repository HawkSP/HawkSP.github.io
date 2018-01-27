(function(){
 
 var preload2 = document.getElementById("preload2");
 var loading2 = 0;
 var id2 = setInterval(frame2, 64);
 

 function frame2(){
  if(loading2 === 100) {
   clearInterval(id2);
   window.open("newelcome.html", "_self");
  }
  else {
   loading2 = loading2 + 1;
   if(loading2 === 90) {
    preload2.style.animation = "fadeout 1s ease";
   }
  }
 }
})();