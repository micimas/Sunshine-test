window.addEventListener('scroll',function(){
  var header=document.querySelector("header");
  header.classList.toggle("abajo",window.scrollY>50)
})

window.addEventListener('scroll',function(){
  var navProduct=document.querySelector(".nav-product");
  navProduct.classList.toggle("abajo",window.scrollY>50);
})
