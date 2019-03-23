
$("#client-click").on('click', function(event){ //Client Clicked

    //Add Class, Take Away other stuff
    $("#register-client-form").addClass('active-form');
    $('.register-button-group').css('display', 'none');
    $('.register-button-group').css('display', 'none');
    $('.login-header h1').text('You are a Client');
    
});



$("#partner-click").on('click', function(event){ //Client Clicked

    //Add Class, Take Away other stuff
    $("#register-partner-form").addClass('active-form');
    $('.register-button-group').css('display', 'none');
    $('.register-button-group').css('display', 'none');
    $('.login-header h1').text('You are a Partner');
    
});