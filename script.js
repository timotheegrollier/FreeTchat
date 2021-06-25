
let chat = document.getElementById("tchatbox");
let btn = document.getElementById("subBtn");

document.querySelector('form').addEventListener('submit',checkBeforeSubmit);








// Faire redescendre le scroll au rechargement de la page

window.addEventListener("load", () => {
  getMessages();
  setInterval(()=>{
    getMessages();
  },1500)
});


// Empecher


function checkBeforeSubmit() {
  btn.disabled = true;
  setTimeout(()=>{
    btn.disabled = false;
  },800)
   
}


