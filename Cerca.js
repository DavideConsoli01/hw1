const btnRicerca = document.getElementById("btn-ricerca");
const barraRicerca = document.getElementById("barra-ricerca");
const risultatiDiv = document.getElementById("risultati");

btnRicerca.addEventListener("click", function() {
  const searchTerm = barraRicerca.value;
  searchItem(searchTerm);
});

function onResponse(response) {
  console.log(response);
  return response.json();
}

function searchItem(searchTerm) {
  risultatiDiv.innerHTML = "";

  if (searchTerm.trim() === "") {
    const noCerca = document.createElement("p");
    noCerca.setAttribute("id", "nessun_risultato");
    noCerca.textContent = "Cerca un personaggio";
    risultatiDiv.appendChild(noCerca);
    return;
  }

  fetch("ApiHomePagephp.php")
    .then(function(response) {
      return response.json();
    })
    .then(function(data) {
      const results = data.filter(function(item) {
        return (
          item.nome.toLowerCase().includes(searchTerm.toLowerCase()) ||
          item.gioco.toLowerCase().includes(searchTerm.toLowerCase()) ||
          item.classe.toLowerCase().includes(searchTerm.toLowerCase())
        );
      });

      if (results.length > 0) {
        for (let i = 0; i < results.length; i++) {
          const personaggi = results[i];

          const itemDiv = document.createElement("div");
          itemDiv.classList.add("risultati");

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


          
      
          risultatiDiv.appendChild(container);
        }
      } else {
        const noResultsElement = document.createElement("p");
        noResultsElement.setAttribute("id", "nessun_risultato");
        noResultsElement.textContent = "Nessun risultato trovato.";
        risultatiDiv.appendChild(noResultsElement);
      }
    })
    .catch(function(error) {
      console.log("Si è verificato un errore nella fetch del Final_fantasy.json:", error);
    });
}

  
