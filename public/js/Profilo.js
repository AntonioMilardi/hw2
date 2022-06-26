const form = document.querySelector("#cambio");
form.addEventListener("submit",search);

fetch('/Profilo/mostracredenziali').then(onResponse1).then(onJson)

function onResponse1(response){

        return response.json();

}

function onJson(json) {

    console.log(json);
    const Padre = document.querySelector('.display-user-style');

    const Nome= document.createElement('h1');
    const Cognome = document.createElement('h1'); 
    const Username =document.createElement('h1') ;

    Nome.textContent = 'Nome: ' + json['Nome'];
    Cognome.textContent = 'Cognome: ' + json['Cognome'];
    Username.textContent = 'Username: ' +json['Username'];

    Padre.appendChild(Nome);
    Padre.appendChild(Cognome);
    Padre.appendChild(Username);

}

function search(event){
   
    event.preventDefault();
    fetch('elimina').then(onResponse).then(ontext);
    
}

function onResponse(response)
{
    console.log(response);
  return response.text();
}


function ontext(text)
{
    
    var result = text.localeCompare('1');
    if (result){
    alert("Account eliminato con successo");
    window.location="login";
    }
   
    
}