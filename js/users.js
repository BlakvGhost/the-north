function form(action,msg) {
  let pan = document.querySelector('.sign .pa');
  let mail = document.querySelector('.sign .email');
  let sign = document.querySelector('.sign .create');
  if (action == 1){
    pan.innerHTML = msg;
    pan.classList.add('err');
    sign.disabled = true;
    mail.classList.add('dis');
  }else if (action == 2) {
    pan.innerHTML = msg;
    pan.classList.remove('err');
    sign.disabled = false;
    mail.classList.remove('dis');
  }
}
function verify(send,ou) {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = (ev)=>{
    if ((ajax.readyState == 4) && (ajax.status == 200) ) {
      if (ou == 'ins') {
        if (ajax.responseText == ''){
          form(2,'');
        }else{
          form(1,"Email déjà utilisé,veillez le changer ou <a href='#' classe='white'>Reiniialisez votre mot de passe</a>");
        }
      }else if (ou == 'conn') {
        if (ajax.responseText == ''){
          form(1,'Email Incorrect ou Compte inexistant');
        }else{
          form(2,"");
        }
      }

    }
  }
  ajax.open('POST',`controle/form.php?s=${send}`);
  ajax.send();
}
