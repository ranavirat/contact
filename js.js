
let phone= document.getElementById('phone')
let send=document.getElementById('send')
phone.addEventListener('keyup',function(e){
    let len=phone.value.length
for(i=0;i<len;i++){
    if(i==9){
        error.innerHTML=' <div class="error1">perfect</div>';
        document.getElementById('send').disabled=false;
    }else{
    error.innerHTML=' <div class="error2">only 10 digit required</div>';
  
    console.log(len)
  }
}});

  send.addEventListener('click',function(button){
    var mailformat =/^(?:[a-z0-9!#$%&amp;'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&amp;'+/=?^_`{|}~-]+)|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]| \\[\x01-\x09\x0b\x0c\x0e-\x7f])")@(?:(?:[a-z0-9](?:[a-z0-9-][a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-][a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])$/ ;
    let e=email.value
    if(e.match(mailformat)){
    alert("Valid email address!");
    document.form.email.focus();
    document.getElementById('send').disabled=true;
    }
    else
    {
    alert("You have entered an invalid email address!");
    document.form1.text1.focus();
    document.getElementById('send').disabled=false;
    }  
});



