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







function postMessages() {

}