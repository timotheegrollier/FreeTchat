
let chat = document.getElementById("tchatbox");
let wasSubmitted = false;
let btn = document.getElementById("subBtn");

setInterval(()=>{
  chat.scroll(0, chat.scrollHeight);
  getMessages();
},1000)







// Faire redescendre le scroll au rechargement de la page

window.addEventListener("load", () => {
  getMessages();
  setTimeout(()=>{
    chat.scroll(0, chat.scrollHeight);
  },600)
});


// Empecher


function checkBeforeSubmit() {
    btn.setAttribute("disabled","")
  if (!wasSubmitted) {
    wasSubmitted = true;
    return wasSubmitted;
  }
  return false;
}

