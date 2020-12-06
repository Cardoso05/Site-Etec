function validar(){
  var nome = form.nome.value;
  var texto = form.texto.value;
  var email = form.email.value 

  if(nome == "" && texto == ""){
    alert('Preencha todos os campos.');
    form.nome.focus();
    return false;
  }
  if(nome == ""){
    alert('Preencha o campo nome.');
    form.nome.focus();
    return false;
  }
  if(texto == ""){
    alert('Preencha o campo mensagem.');
    form.texto.focus();
    return false;
  }
  if(email == ""){
    alert('Preencha o campo e-mail.');
    form.email.focus();
    return false;
  }
  if(email.indexOf('@') == -1 ){
    alert('Preencha o campo e-mail corretamente.');
    form.email.focus();
    return false;
  }
 
}
