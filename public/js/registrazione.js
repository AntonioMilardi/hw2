function checkPassword(event)
{
  //seleziono nuovamente la label "username"
  const password = document.forms['form'].elements['password'];
  let value = password.value;
  //verifico che il valore della label rispetti un certo pattern
  if(!/^[a-zA-Z0-9àòùè]{4,15}$/.test(password.value))
  {
    password.style.border = 'solid red';
    password.value='';
  }
  else
  {
    password.style.border = 'solid green';
  }
}



 function checkUsername(event)
{
  const username = document.forms['form'].elements['username'];
  let value = username.value;
  console.log(value);
  if(!/^[ a-z A-Z 0-9  àòùè]{4,15}$/.test(username.value))
  {
    username.style.border = 'solid red';
    username.value='';
  }
  else
  {
    username.style.border = 'solid green';

  }
}

function checknome(event)
{
  const nome = document.forms['form'].elements['nome'];
  let value = nome.value;
  console.log(value);
  if(!/^[ a-z A-Z 0-9  àòùè]{4,15}$/.test(nome.value))
  {
    nome.style.border = 'solid red';
    nome.value='';
  }
  else
  {
    nome.style.border = 'solid green';

  }
}

function checkcognome(event)
{
  const cognome = document.forms['form'].elements['cognome'];
  let value = cognome.value;
  console.log(value);
  if(!/^[ a-z A-Z 0-9  àòùè]{4,15}$/.test(cognome.value))
  {
    cognome.style.border = 'solid red';
    cognome.value='';
  }
  else
  {
    cognome.style.border = 'solid green';

  }
}


const nome = document.forms['form'].elements['nome'];
nome.addEventListener('blur', checknome);

const cognome = document.forms['form'].elements['cognome'];
cognome.addEventListener('blur', checkcognome);

const user = document.forms['form'].elements['username'];
user.addEventListener('blur', checkUsername);

const pass = document.forms['form'].elements['password'];
pass.addEventListener('blur', checkPassword);