
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


