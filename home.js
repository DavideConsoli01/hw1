function onResponse(response) {
  console.log(response);
  return response.json();
}

fetch("ApiHomePagephp.php")
  .then(onResponse)
  .then(onjson);

function onjson(json) {
  console.log(json);
  const elenco_personaggi = document.querySelector('#pers');
  elenco_personaggi.innerHTML = "";

  // Genera un array casuale di 9 indici univoci
  const randomIndexes = generateRandomIndexes(json.length, 9);

  // Mostra solo i personaggi con gli indici casuali generati
  for (let index of randomIndexes) {
    const personaggi = json[index];
    const container = document.createElement('div');
    const containerTesto = document.createElement('div');
    
    const img = document.createElement('img');
    const nome = document.createElement('h1');
    const descrizione = document.createElement('p');
    const classe = document.createElement('h1');
    const arma = document.createElement('h1');
    const abilità = document.createElement('h1');
    const gioco = document.createElement('h1');

    nome.textContent = personaggi.nome;
    img.src = personaggi.immagine;
    classe.textContent = personaggi.classe;
    arma.textContent = personaggi.arma;
    abilità.textContent = personaggi.abilità;
    descrizione.textContent = personaggi.descrizione;
    gioco.textContent = personaggi.gioco;

    container.appendChild(nome);
    container.appendChild(gioco);
    container.appendChild(img);
    containerTesto.appendChild(classe);
    containerTesto.appendChild(arma);
    containerTesto.appendChild(abilità);
    containerTesto.appendChild(descrizione);
    container.appendChild(containerTesto);

    const preferiti = document.createElement("button");
    preferiti.classList.add("preferiti");

    if (personaggi.preferiti == true) {
      preferiti.textContent = "Rimuovi dai preferiti";
      preferiti.addEventListener('click', rimuoviPreferiti);

    } else {
      preferiti.textContent = "Aggiungi ai preferiti";
      preferiti.addEventListener('click', aggiungiPreferiti);
    }

    container.appendChild(preferiti);

    elenco_personaggi.appendChild(container);
  }
};

function generateRandomIndexes(max, count) {
  const indexes = [];
  while (indexes.length < count) {
    const randomIndex = Math.floor(Math.random() * max);
    if (!indexes.includes(randomIndex)) {
      indexes.push(randomIndex);
    }
  }
  return indexes;
}
