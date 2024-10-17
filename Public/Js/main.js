import { PublicationInterface } from "./publicationView.js";

function showError(message){
    let error = document.querySelector('#error .errorMssg');
    toast.classList.remove('hidden')
    error.textContent = message;

}

function toast(message){
    let toast = document.querySelector('#toast');
    console.log("TOAST",toast)
    
    toast.innerHTML = message;
    toast.classList.remove('hidden')
    setTimeout(() => {
        toast.classList.add('hidden')
    },3000)

}

function ajax(url,type, callback) {
    let xhr = new XMLHttpRequest();
    xhr.open(type, url, true);
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            callback(xhr.status, JSON.parse(xhr.responseText));
        } else if (xhr.readyState === 4) {
            callback(`Erreur: ${xhr.status}`);
        }
    };
    
    xhr.send();
}
function getCommentFor(id){
    let url = `/publication/${id}/commentaires/get`
    ajax(url,"GET",(status,response)=>{
        console.log(url,"RES",status,response)
        PublicationInterface.showCommentaire(id,response.commentaires)
    })
}

window.getCommentFor = getCommentFor
