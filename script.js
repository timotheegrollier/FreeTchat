
let chat = document.getElementById("tchatbox");
let wasSubmitted = false;
let btn = document.getElementById("subBtn");









// Faire redescendre le scroll au rechargement de la page

window.addEventListener("load", () => {
  getMessages();
  setTimeout(()=>{
    chat.scroll(0, chat.scrollHeight);
  },300)
  setInterval(()=>{
    getMessages();
    chat.scroll(0, chat.scrollHeight);
  },500)
});


// Empecher


function checkBeforeSubmit() {
  btn.setAttribute("disabled","");
  setInterval(()=>{
    btn.removeAttribute("disabled")
  },1500)
   
}


