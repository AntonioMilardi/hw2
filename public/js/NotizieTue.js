fetch('/NotizieTue/stampapreferiti').then(onResponse).then(onJson);


function onResponse(response)
{
    return response.json();
}

function onJson(json)
{
    
    console.log(json);
    const Padre = document.querySelector('#informazioni');
    for(let i=0;  i<json.length; i++){
    const container= document.createElement('div');
    // Dati
    const autore= document.createElement('h1');
    const titolo = document.createElement('p'); 
    const immagine=document.createElement('img') ;
    const aggiungi= document.createElement("button")
    aggiungi.textContent="Rimuovi dalle tue notizie"
    aggiungi.addEventListener('click',rimuovipreferiti)

    autore.textContent=json[i]['autore'];
    titolo.textContent=json[i]['titolo'];  
    immagine.src=json[i]['immagine'];

    container.appendChild(titolo) 
    container.appendChild(immagine)
    container.appendChild(autore)
    container.appendChild(aggiungi)

    Padre.appendChild(container)

    }
}

function rimuovipreferiti(event)
{

  const bottone= event.currentTarget;
  const div= bottone.parentNode;
  const titolo= div.querySelector("p").textContent;
  var querytitolo = encodeURIComponent(titolo);
  fetch("/Home/rimuovi/"+querytitolo).then(onResponseText).then(onText);
  div.innerHTML='';
  div.style.backgroundColor = "bisque";
  bottone.classList.add("hidden");
}

function onResponseText(response)
{
  return response.text();
}
function onText(text)
{
  console.log(text);
}
