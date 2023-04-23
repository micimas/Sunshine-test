const carousel = document.querySelector(".carousel");
const firstImg = carousel.querySelectorAll(".card")[0];
const arrowIcons = document.querySelectorAll(".wrapper i");
let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;
const showHideIcons = () =>{
  let scrollWidth = carousel.scrollWidth - carousel.clientWidth;
  arrowIcons[0].style.display = carousel.scrollLeft === 0 ? "none":"block";
  arrowIcons[1].style.display = carousel.scrollLeft - scrollWidth > -1 ? "none" : "block";
}
arrowIcons.forEach( icon => {
  let firstImgWidth = firstImg.clientWidth;
  icon.addEventListener("click", ()=> {
    carousel.scrollLeft += icon.id==="left" ? -firstImgWidth : firstImgWidth;
    setTimeout(() =>  showHideIcons(), 60);
    // console.log(firstImgWidth);
  });
});

const autoSlide=() =>{
  if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;
  positionDiff = Math.abs(positionDiff);
  let firstImgWidth = firstImg.clientWidth;
  let valDifference = firstImgWidth - positionDiff;
  if(carousel.scrollLeft > prevScrollLeft) {
    return carousel.scrollLeft += positionDiff > firstImgWidth / 5  ? valDifference : -positionDiff;
  }
  carousel.scrollLeft -= positionDiff > firstImgWidth/5 ? valDifference : -positionDiff;
  }
const dragStart = (e) =>{
  isDragStart = true;
  prevPageX = e.pageX || e.touches[0].pageX;
  prevScrollLeft=carousel.scrollLeft;
}
const dragging =(e) =>{
  if (!isDragStart) return;
  e.preventDefault();
  isDragging = true;
  carousel.classList.add("dragging");
  positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
  carousel.scrollLeft= prevScrollLeft- positionDiff;
  showHideIcons ();
}
const dragStop = () =>{
  isDragStart = false;
  carousel.classList.remove("dragging");
  if (!isDragging) return;
  isDragging = false;
  autoSlide ();
}
carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);
document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);
document.addEventListener("mouseup", dragStop);
document.addEventListener("mouseleave", dragStop);
carousel.addEventListener("touchend", dragStop);

// 
// 
const carouselPn = document.querySelector(".carrusel-pn");
const cardPn = carouselPn.querySelectorAll(".card-pn")[0];
const arrowIconsPn = document.querySelectorAll(".sl-product i");
let isDragStartPn = false, isDraggingPn= false, prevPageXPn, prevScrollLeftPn, positionDiffPn;

// const showHideIcons = () =>{
//   let scrollWidth = carouselPn.scrollWidth - carouselPn.clientWidth;
//   arrowIcons[0].style.display = carouselPn.scrollLeft === 0 ? "none":"block";
//   arrowIcons[1].style.display = carouselPn.scrollLeft - scrollWidth > -1 ? "none" : "block";
// }
arrowIconsPn.forEach( icon => {
  let cardPnWidth  = cardPn.clientWidth;
  icon.addEventListener("click", ()=> {
    carouselPn.scrollLeft += icon.id==="left-2" ? -cardPnWidth : cardPnWidth;
    // setTimeout(() =>  showHideIcons(), 60);
    console.log(cardPnWidth);
  });
});
// const autoSlidePn=() =>{
//   if(carouselPn.scrollLeft - (carouselPn.scrollWidth - carouselPn.clientWidth) > -1 || carouselPn.scrollLeft <= 0) return;
//   positionDiffPn = Math.abs(positionDiffPn);
//   let cardPnWidth = cardPn.clientWidth;
//   let valDifferencePn = cardPnWidth - positionDiffPn;
//   if(carouselPn.scrollLeft > prevScrollLeftPn) {
//     return carouselPn.scrollLeft += positionDiffPn > cardPnWidth / 1  ? valDifferencePn : -positionDiffPn;
//   }
//   carouselPn.scrollLeft -= positionDiffPn > cardPnWidth/1 ? valDifferencePn : -positionDiffPn;
//   }

const dragStartPn = (e) =>{
  isDragStartPn = true;
  prevPageXPn= e.pageX || e.touches[0].pageX;
  prevScrollLeftPn=cardPnWidth.scrollLeft;
}
// const draggingPn =(e) =>{
//   if (!isDragStartPn) return;
//   e.preventDefault();
//   isDraggingPn = true;
//   // carouselPn.classList.add("dragging");
//   positionDiffPn = (e.pageX || e.touches[0].pageX) - prevPageXPn;
//   carouselPn.scrollLeft= prevScrollLeftPn- positionDiffPn;
// }
// const dragStopPn = () =>{
//   isDragStartPn = false;
//   // carouselPn.classList.remove("dragging");
//   if (!isDraggingPn) return;
//   isDraggingPn = false;
//   autoSlide ();
// }
carouselPn.addEventListener("mousedown", dragStartPn);
carouselPn.addEventListener("touchstart", dragStartPn);
// document.addEventListener("mousemove", draggingPn);
// carouselPn.addEventListener("touchmove", draggingPn);
// document.addEventListener("mouseup", dragStopPn);
// document.addEventListener("mouseleave", dragStopPn);
// carouselPn.addEventListener("touchend", dragStopPn);

let cont=1;
let cardPnWidth=cardPn.clientWidth;
let inter=3000;

window.addEventListener("resize",function(){
  cardPnWidth = cardPn.clientWidth;
})

// setInterval(function(){
//   slidesLeft();
// },inter);   

if (cont<=carouselPn.length) {
  setInterval(function(){
    slidesLeft();
  },inter);
}
else if(cont>carouselPn.length){
  setInterval(function(){
    slidesLeft();
  },inter);
}

function slidesLeft(){
  carouselPn.scrollLeft=+(cardPnWidth*cont);
  // carouselPn.style.transition ="transform 0.8s";
  cont++;
}
function slidesRight(){
  carouselPn.scrollRight=+(cardPnWidth*cont);
  // carouselPn.style.transition ="transform 0.8s";
  cont--;
}
// if(cont == carouselPn.length){
//   setInterval(function(){
//     carouselPn.scrollRight=-(cardPnWidth*cont);
//     // slider.style.transition ="transform 0.8s";
//     contador=1;

//   },inter)
// }


