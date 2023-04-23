const loading = document.querySelector('.loading');
const img = loading.querySelector('img');
const ring = loading.querySelector('.ring');
const  header = document.querySelector('.menu');
const  main = document.querySelector('main');
const  footer = document.querySelector('footer');

window.addEventListener("load", () =>{
  setTimeout(function(){
    ring.classList.toggle("transicion");
    img.classList.toggle("transicion");
    setTimeout(function(){
      loading.style.display="none";
      header.style.display="flex";
      main.style.display="block";
      footer.style.display="flex";
    },200)
  },400)
})