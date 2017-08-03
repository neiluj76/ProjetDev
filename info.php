<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>getMeAnswers : informations</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body ng-app>
    <div class="container-fluid">
        
        <div class="container">
            <?php

            include_once 'include/navbar.php';
            ?>

            <div class="row  m-b-40">
                <div class="col-md-3 col-md-push-9">
                  <h5> . </h5>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="well white">
                    <form class="form-floating form">
                      <fieldset>
                        <legend>Acceuil</legend>
                        <span class="help-block">A compléter.</span>



                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>
            
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>
        <script>
            $(window).load(function(){
                $(".clikToConnect").click(function() {

                    var id   = $("#ID").val();
                    var mdp  = $("#mdp").val();
                    var delay = ( function() {
                        var timer = 0;
                        return function(callback, ms) {
                            clearTimeout (timer);
                            timer = setTimeout(callback, ms);
                        };
                    })();

                    console.log("id : " + id + " mdp : " +mdp )

                    $.ajax({
                        url: 'include/functions.php',
                        type:'POST',
                        data: {
                            fonction:'connexionUser',
                            params: {id: id, mdp: mdp}
                        },
                        success: function(data)
                        {
                            if (data !=  false) {
                                console.log("yes");
                                console.log(data);
                                //$("#problem").appendData(data)
                                $("#form")[0].reset();
                                $("#sucess").removeClass("hide");
                                setTimeout(
                                    function()
                                    {
                                        $("#sucess").addClass("hide");
                                    }, 5000);
                                $("#sucess").addClass("hide");
                            }
                            else
                            {
                                $("#problem").removeClass("hide");
                                setTimeout(
                                    function()
                                    {
                                        $("#problem").addClass("hide");
                                    }, 5000);
                            }
                        }
                    });

                })
            })

            function wait(ms){
                var start = new Date().getTime();
                var end = start;
                while(end < start + ms) {
                    end = new Date().getTime();
                }
            }

        </script>
    </div> <!-- container-fluid-->
</body>
</html>
