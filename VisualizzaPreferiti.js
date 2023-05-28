

fetch("RitornaPreferiti.php").then(onResponse).then(onJson);

function onResponse(response){
    return response.json();
}

function onJson(json){
    console.log(json);
    const personaggi_preferiti=document.querySelector('#pers_preferiti');
    personaggi_preferiti.innerHTML="";
    

    for(let result of json){
        const Container=document.createElement('div');
        const nome=document.createElement('h1');
        const immagine=document.createElement('img');
        const bottone=document.createElement("button");
        
        bottone.textContent="Rimuovi dai preferiti";
        bottone.classList.add("preferiti");
        bottone.addEventListener("click",rimuoviPreferiti);

        immagine.src=result.copertina;
        nome.textContent=result.titolo;

        Container.appendChild(nome);
        Container.appendChild(immagine);
        Container.appendChild(bottone);
        personaggi_preferiti.appendChild(Container);
    }
    
}

function rimuoviPreferiti(event){

    const titolo=event.currentTarget.parentNode.querySelector("h1");
    fetch("rimuoviPreferiti.php?title="+encodeURIComponent(titolo.textContent)).then(onResponse).then(json); 

}

function onResponse(response){
    return response.json();
}

function json(json){
    fetch("RitornaPreferiti.php").then(onResponse).then(onJson);
    
}