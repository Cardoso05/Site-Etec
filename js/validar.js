function validar(){
  var nome = form.nome.value;
  var texto = form.texto.value;
  var email = form.email.value;

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
function validarLogin(){
  var login = form.login.value;
  var senha = form.senha.value;

  if(login == "" && senha == ""){
    alert('Preencha todos os campos.');
    return false;
  }
  if(login == ""){
    alert('Preencha o login.')
    return false;
  }
  if(senha == ""){
    alert('Preencha a senha.')
    return false;
  }
}





function validarCadastro(){
  var nome = form.nome.value;
  var login = form.login.value;
  var email = form.email.value;
  var senha = form.senha.value;
  var confirmarsenha = form.confirmarsenha.value;

  if(senha == "" && login == "" && email == "" && nome == ""){
    alert('Preencha todos os campos.')
    return false;
  }
  if(nome == ""){
    alert('Preencha o campo nome')
    return false;
  }
  if(email == ""){
    alert('Preencha o campo e-mail.');
    return false;
  }
  if(email.indexOf('@') == -1 ){
    alert('Preencha o campo e-mail corretamente.');
    return false;
  }
  if(senha == "" || senha.length <= 5){
    alert('A senha precisa ter no minímo 6 caracteres')
    return false;
  }
  if(login == ""){
    alert('Preencha o login')
    return false;
  }
  if(confirmarsenha == ""){
    alert('Confirme sua senha')
    return false;
  }
  if(senha != confirmarsenha){
    alert ('Preencha senhas iguais')
    return false;
  }
  
}
