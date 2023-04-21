
const main = document.getElementById('main'); 

  main.addEventListener('click', ()=> {
  document.querySelector('.drop-down').style.marginTop = "0";
  document.querySelector('.drop-down').style.transition="all 0.3s ease-in-out";
});

const Close = document.getElementById('close');

Close.addEventListener('click', () => {
    document.querySelector('.drop-down').style.marginTop="-200%";
    document.querySelector('.drop-down').style.transition="all 0.3s ease-in-out";
})


document.querySelectorAll('.drop-down a').forEach(a => {
  a.onclick = () => {
    document.querySelector('.drop-down').style.marginTop="-200%";
    document.querySelector('.drop-down').style.transition="all ease-in-out 0.5s";
  }
})



// popup images
document.querySelectorAll('.main img').forEach(image => {
  image.onclick = () => {
       document.querySelector('.popup').style.display="flex";
       document.getElementById('image-pop').src = image.getAttribute('src');
     }
})
   
document.querySelector('.popup span').onclick = () => {
  document.querySelector('.popup').style.display="none";
}



// profile view
const profile = document.querySelector('.profile');
const profileDisplay = document.querySelector('.profileDrop');
  
profile.addEventListener('mouseenter', () => {
  profileDisplay.style.display = "flex";
  profileDisplay.style.transition="all 0.3s ease-in-out";
});

profileDisplay.addEventListener('mouseleave', () => {
  profileDisplay.style.display="none";
  profileDisplay.style.transition="all 0.3s ease-in-out";
})
