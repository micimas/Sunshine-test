const textarea = document.querySelector(".f-text");
textarea.addEventListener("keyup", e=>{
textarea.style.height="auto";
let scHeight = e.target.scrollHeight;
// console.log(scHeight);
textarea.style.height=scHeight+"px";
});