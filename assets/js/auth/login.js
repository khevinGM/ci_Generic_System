$(document).ready(function(){
    // if()
    $("#login_form").submit(function(ev){
        $("#usuario").click(function(){
            $("#alert").html("");
        });
        $("#password").click(function(){
            $("#alert").html("");
        });
            
        
        // $("#alert").html();
        $.ajax({
            url: 'Login/validate',
            method: 'POST',
            // dataType: "json",
            data: $(this).serialize(),
            success: function(err){
                var json = JSON.parse(err);
                // console.log (json);
                window.location.replace(json.url);
            },
            statusCode:{
                401: function(xhr){
                    var json = JSON.parse(xhr.responseText);
                    console.log(json)
                    $('#alert').html('<span class="red-text text-darken-2">'+ json.msg +'</span>');
                },
                
            }
        });
        ev.preventDefault();
    });
});