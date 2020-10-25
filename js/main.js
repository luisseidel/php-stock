$(document).ready(function(){
  
    $('.sidenav').sidenav();

    $(".dropdown-trigger").each(function() {
        $(this).dropdown();
    });

    $('input.char-count, textarea.char-count').characterCounter();

});
