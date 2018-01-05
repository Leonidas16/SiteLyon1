/*
  Menu glissant
*/
(function() {
  var $body = document.body;
  var $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];

  if ( typeof $menu_trigger !== 'undefined' ) 
  {
    $menu_trigger.addEventListener('click', function() 
      {
          $body.className = ( $body.className == 'menu-active' )? '' : 'menu-active';
      });
  }

}).call(this);




/*logo menu*/
$('.menu-trigger').on('click', function(){
    var iSelecteur = $(this).find('i');
    if(iSelecteur.hasClass('fa fa-chevron-right')) 
    {
      iSelecteur.toggleClass('fa fa-chevron-right')
      iSelecteur.toggleClass('fa fa-chevron-left')
    }

    else if(iSelecteur.hasClass('fa fa-chevron-left'))
    {
    	iSelecteur.toggleClass('fa fa-chevron-left')
      iSelecteur.toggleClass('fa fa-chevron-right')
    }
});

/*barre de recherche*/


$(document).ready(function(){


    $("#croix").click(function(){
    $('input').val('');
    });

    $("#modal-advert").click(function(){
        $('#exampleModalLong').appendTo("body").modal('show');
    });


});

$(document).ready(function(){
    $("#alert_notificatoin_bar").click(function(){
    $('#alert_notificatoin_bar > a:nth-child(1) > span:nth-child(2)').hide();
    });
});

/*Clique menu*/
$(document).ready(function(){
    $("#content").click(function(){

    });
});


/*Search bar*/
$(document).ready(function(){
    var submitIcon = $('.searchbox-icon');
    var inputBox = $('.searchbox-input');
    var searchBox = $('.searchbox');
    var isOpen = false;
    submitIcon.click(function(){
        if(isOpen == false){
            searchBox.addClass('searchbox-open');
            inputBox.focus();
            isOpen = true;
        } else {
            searchBox.removeClass('searchbox-open');
            inputBox.focusout();
            isOpen = false;
        }
    });
    submitIcon.mouseup(function(){
        return false;
    });
    searchBox.mouseup(function(){
        return false;
    });
    $(document).mouseup(function(){
        if(isOpen == true){
            $('.searchbox-icon').css('display','block');
            submitIcon.click();
        }
    });
});
function buttonUp(){
    var inputVal = $('.searchbox-input').val();
    inputVal = $.trim(inputVal).length;
    if( inputVal !== 0){
        $('.searchbox-icon').css('display','none');
    } else {
        $('.searchbox-input').val('');
        $('.searchbox-icon').css('display','block');
    }
}