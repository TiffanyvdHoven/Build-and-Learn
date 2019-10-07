
function myFunction() {
    var nav = document.getElementById("mobile-nav");
    if (nav.style.display === "none") {
        nav.style.display = "block";
    } else {
        nav.style.display = "none";
    }
}

document.getElementById("mobile-nav").style.display = 'none';


function sendForm(){
  if(document.getElementById('name').value == ''){
    Swal.fire( 'Error','Please fill in your name','error')
  }
  else if(document.getElementById('email').value == ''){
    Swal.fire( 'Error','Please fill in your e-mail adress','error')
  }
  else if (/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/.test(document.getElementById('email').value) == false ){
    Swal.fire( 'Error','Please fill in a correct e-mail adress','error')
  }
  else if( document.getElementById('track').value == ''){
    Swal.fire( 'Error','Please choose a track','error')
  }
  else{
    Swal.fire('Thank you!','Your registration has been submitted sucessfully','success').then(function(){
      location.reload();
    });
  }
}
