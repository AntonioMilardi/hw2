
const csrfToken = document.head.querySelector("[name=csrf-token][content]").content;

const form = document.querySelector("#ricerca")
form.addEventListener("submit",search)

function search(event){
    event.preventDefault() //previene dal comportamento di default, ovvero il refresh della pagina
  
    const info = document.querySelector('#informazioni');
    info.innerHTML=''
    info.classList.remove('hidden')
    const content = document.querySelector("#content").value
    console.log(content)
    var text = encodeURIComponent(content)

    if(!content ){
        alert("Inserisci un argomento valido")
        info.classList.add('hidden')   
    }
        
    else{
        fetch('/Home/cerca/'+text).then(onResponse).then(onJson)
    }

function onResponse(response)
{
  return response.json();
}


function onJson(json)
{
  console.log(json);
  

    for(let i=0; i<10; i++) {

    const container = document.createElement('div')

    const titolo = json[i]['title'];
    const Autore = json[i]['author'];
    const image = json[i]['image']
    const contenuto = json[i]['summary']


    const informazioni = document.querySelector('#informazioni');

    const title = document.createElement('h1');
    title.textContent= '' +titolo;
    container.appendChild(title);

    const author = document.createElement('p');
   author.textContent= 'Autore: ' +Autore;
    container.appendChild(author);

    const img = document.createElement('img');
    img.src= image;
    container.appendChild(img);

    const content = document.createElement('h1');
    content.textContent= '' +contenuto;
     container.appendChild(content);

    const bottone = document. createElement("button");
   bottone.textContent= 'Aggiungi alle tue notizie';
    bottone.addEventListener('click',aggiungipreferiti);

    container.appendChild(bottone);

     informazioni.appendChild(container)
 
      }
    } 
 
    function aggiungipreferiti(event)
{

  const bottone= event.currentTarget;
  bottone.textContent="Rimuovi dalle tue notizie";
  const div= bottone.parentNode;
  const immagine=div.querySelector("img").src;
  const titolo= div.querySelector("h1").textContent;
  const autore= div.querySelector("p").textContent;
  const formData = new FormData();
  formData.append('queryautore', autore);
  formData.append('querytitolo', titolo);
  formData.append('queryimg', immagine);
  formData.append("_token", csrfToken);
  fetch("/Home/aggiungi",{
    method: 'POST',
    body: formData
}).then(onResponseText).then(onText);
   bottone.removeEventListener('click', aggiungipreferiti);
  bottone.addEventListener('click',rimuovipreferiti)
}

function rimuovipreferiti(event)
{

  const bottone= event.currentTarget;
  bottone.textContent="Aggiungi alle tue notizie";
  const div= bottone.parentNode;
  const titolo= div.querySelector("h1").textContent;
  var querytitolo = encodeURIComponent(titolo);
  fetch("/Home/rimuovi/"+querytitolo).then(onResponseText).then(onText);
  bottone.removeEventListener('click',rimuovipreferiti);
  bottone.addEventListener('click',aggiungipreferiti)
}

function onResponseText(response)
{
  return response.text();
}
function onText(text)
{
  console.log(text);
}


}




