let chat = document.getElementById("tchatbox");
let wasSubmitted = false;
let btn = document.getElementById("subBtn");

// Faire redescendre le scroll au rechargement de la page

window.addEventListener("load", () => {
    chat.scroll(0, chat.scrollHeight);
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

