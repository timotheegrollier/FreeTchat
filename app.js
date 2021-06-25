function getMessages() {

    const requeteAjax = new XMLHttpRequest();
    requeteAjax.open("GET", "get.php");


    requeteAjax.onload = () => {
        const resultat = JSON.parse(requeteAjax.responseText);
        const html = resultat.map((message) => {
            return `<li>${message.text}<span class='mark'>${message.heure}</span> </li><hr>`
        }).join("");
        
        const messages = document.querySelector(".result")
        
        messages.innerHTML = html;
        
    }
    requeteAjax.send();
}







function postMessages(e) {
e.preventDefault();

const message = document.querySelector("#message");
const heure =new Date().toLocaleTimeString();

const data = new FormData();
data.append('message',message.value);
data.append('time',heure);



const requeteAjax = new XMLHttpRequest();
requeteAjax.open("POST",'tchat_post.php');
requeteAjax.onload = function(){
    message.value = "";
    getMessages();
}
requeteAjax.send(data);


}


document.querySelector('form').addEventListener('submit',postMessages);