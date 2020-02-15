let form = document.querySelector("#formulaire");
console.log(form);
let nom_form = document.querySelector("#nom");
let mail = document.querySelector("#email");
let message = document.querySelector("#message");
let failed_message = document.querySelectorAll(".failed");
let keydown_reload = document.querySelectorAll(".keydown-reload");
console.log(failed_message);
console.log(mail.value.match());
function validate_form(){
  if (!nom_form.value.match(/^[a-zA-Z]+$/) && !mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) && !message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" rien ne match pas");
    failed_message[0].innerHTML='veuillez renseigner un nom correct';
    failed_message[1].innerHTML='veuillez renseigner un mail correct';
    failed_message[2].innerHTML='veuillez renseigner un message correct';
  }else if (!nom_form.value.match(/^[a-zA-Z]+$/) && !mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) && message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" email+nom ne match pas");
    failed_message[0].innerHTML='veuillez renseigner un nom correct';
    failed_message[1].innerHTML='veuillez renseigner un mail correct';
  }else if (!nom_form.value.match(/^[a-zA-Z]+$/) && mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)&& !message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" nom+message ne match pas");
    failed_message[0].innerHTML='veuillez renseigner un nom correct';
    failed_message[2].innerHTML='veuillez renseigner un message correct';
  }else if (nom_form.value.match(/^[a-zA-Z]+$/) && !mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)&& !message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" mail+message ne match pas");
    failed_message[1].innerHTML='veuillez renseigner un mail correct';
    failed_message[2].innerHTML='veuillez renseigner un message correct';
  }else if (!nom_form.value.match(/^[a-zA-Z]+$/)) {
    console.log("nom ne match pas");
    failed_message[0].innerHTML='veuillez renseigner un nom correct';
  }else if(!mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
    console.log(" mail ne match pas");
    failed_message[1].innerHTML='veuillez renseigner un mail correct';
  }else if (!message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" message ne match pas");
    failed_message[2].innerHTML='veuillez renseigner un message correct';
  }else {
    console.log(" cest envoyer");
    form.submit();
  }
};

form.addEventListener("submit", function(e){
  e.preventDefault();
  validate_form();
});

keydown_reload[0].addEventListener('keydown',function(){
  console.log('hello');
  if (nom_form.value.match(/^[a-zA-Z]+$/)) {
    console.log(" keydown nom");
    failed_message[0].innerHTML = "";
  };

});
keydown_reload[1].addEventListener('keydown',function(){
  if (mail.value.match(/^[a-zA-Z]+$/)) {
    console.log(" keydown mail");
    failed_message[1].innerHTML = "";
  }
  if (mail.value.match(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
    console.log(" keydown mail2");
    failed_message[1].innerHTML = "";
  }
});
keydown_reload[2].addEventListener('keydown',function(){
  if (message.value.match(/^[a-zA-Z]+$/)) {
    console.log(" keydown message");
    failed_message[2].innerHTML = "";
  }
});





// if(!nom_form.value.match(/^[a-zA-Z]+$/)){
//   console.log("nom ne match pas");
//   failed_message[0].innerHTML('veuillez renseigner un nom correct');
// }else if (!mail.value.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/)) {
//   console.log("mail ne match pas");
//   failed_message[1].innerHTML('veuillez renseigner un mail correct');
//
// }else if (!message.value.match(/^[a-zA-Z]+$/)) {
//   console.log("message ne match pas");
//   failed_message[2].innerHTML('veuillez renseigner un message correct');
// }else{
//   form.submit();
//   console.log("form submitted");
// };
