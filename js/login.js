


$("#login-submit").click(function(e)
{
  

    e.preventDefault();
    $.ajax({

        url : '/clientlogin',
        type : 'POST',
        data : {
            'email' : $("#login-email").val(),
            'password' : $("#login-password").val()
        },
        success : function(data) {   
            var status = jQuery.parseJSON(data);

            if(status.status == 'fail')
            {
                console.log(data);
            }

            else
            {
                window.location.href = '/client-dashboard';
            }
            
        },
        error : function(error)
        {
           

            
            
        }
    });

})