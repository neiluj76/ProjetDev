$(window).load(function(){
    $(".deconnexion").click(function() {


        $.ajax({
            url: 'include/functions.php',
            type:'POST',
            data: {
                fonction:'deconnexionUser',
            },
            success: function(data)
            {
                if (data !=  false) {
                    console.log(" deconnexion 1 ");
                    window.location.href = "index.php";
                    console.log(" deconnexion 2 ");
                }
                   else
                 {
                     console.log("pb deconnexion");
                 }
            }
        });

    })
})
