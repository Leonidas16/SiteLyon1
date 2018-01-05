$(document).ready(function(){

    var div=$("div").not(".form, .form-group, .navbar-header, .test")
    $( div ).addClass( "field-wrap" );

    var saisie=$("input").not(".btn, #username, #password, #remember_me ")
    $( saisie ).addClass( "saisie" );

    var li=$("li")
    $( li ).css("color", "white");

    var titre=$('li').not(".tab active")
    titre.each(function(){

        var dum=$(this);

        dum.replaceWith('<label id="error">'+dum.html()+'</label>');

    });

    if ($( "ul" ).find( "label#error" ).length==0) {

            $(".form").css( "height", "575px" )
    }


});





/*Effets du formulaire*/
$('.form').find('input, textarea').on('keyup blur focus', function (e) {

  var $this = $(this),
      label = $this.prev('label');

	  if (e.type === 'keyup') {
			if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
    	if( $this.val() === '' ) {
    		label.removeClass('active highlight');
			} else {
		    label.removeClass('highlight');
			}
    } else if (e.type === 'focus') {

      if( $this.val() === '' ) {
    		label.removeClass('highlight');
			}
      else if( $this.val() !== '' ) {
		    label.addClass('highlight');
			}
    }

});


$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});

 
/*Verification du formulaire*/

$(document).ready(function(){

var result=true;
  

function validateEmail(email){
  var emailReg = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
  var valid = emailReg.test(email);

  if(!valid) {
        return false;
    } else {
      return true;
    }
}


$("#mail").keyup(function(){

  if(!validateEmail($("#mail").val()))
  {
    $("#mail").css("border-color", "#ff0000");

    result=false;

  }
  else
  {
    $("#mail").css("border-color", "#00ff00");
    $("#mail").next(".error").fadeOut();
    result=true;
  }

  return result;

                });



});

$(document).ready(function(){
    
    var $mail = $('#mail'),
        $envoi = $('#envoi'),
        $erreur = $('#erreur'),
        $champ = $('.champ');

    $champ.keyup(function(){
        if($(this).val().length < 5){ // si la chaîne de caractères est inférieure à 5
            $(this).css({ // on rend le champ rouge
                borderColor : 'red',
            color : 'red'
            });
         }
         else{
             $(this).css({ // si tout est bon, on le rend vert
             borderColor : 'green',
             color : 'green'
         });
         }
    });

    $envoi.click(function(e){
        e.preventDefault(); // on annule la fonction par défaut du bouton d'envoi

        // puis on lance la fonction de vérification sur tous les champs :
        verifier($mail);
    });

    function verifier(champ){
        if(champ.val() == ""){ // si le champ est vide
            $erreur.css('display', 'block'); // on affiche le message d'erreur
            champ.css({ // on rend le champ rouge
                borderColor : 'red',
                color : 'red'
            });
        }
    }




});

$("#formCheckPassword").validate({
           rules: {
               password: { 
                 required: true,
                    minlength: 6,
                    maxlength: 10,

               } , 

                   cfmPassword: { 
                    equalTo: "#password",
                     minlength: 6,
                     maxlength: 10
               }


           },
     messages:{
         password: { 
                 required:"the password is required"

               }
     }

});