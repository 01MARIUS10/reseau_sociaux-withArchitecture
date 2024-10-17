export const PublicationInterface = {
    showCommentaire : (id,coms)=>{
        let div = document.querySelector(`#commentaire${id}`)
        div.innerHTML = "";

        console.log("hello",div,coms)
        coms.forEach((c,index) => {
            div.innerHTML += `<div class="com flex p-2 border-t border-b border-gray-800">
                <div class="user pr-3">${c.nom} ${c.prenom} :</div>
                <div class="contenu">${c.description}</div>
            </div>`;
        });
    }
}