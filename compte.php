<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>getMeAnswers : Compte perso</title>
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
                  <h5>  </h5>
                  <p></p>
                </div>
                <div class="col-md-12">
                  <div class="well white">
                    <form class="form-floating form">
                      <fieldset>
                        <legend>Vos informations personelles </legend>
                          <div class="form-group col-md-6">
                              <label  class="control-label">Nom </label>
                              <input type="text" class="form-control" id="nom" name="nom" <?php echo 'value="'.$_SESSION['nom'].'"';  ?>>
                          </div>

                          <div class="form-group col-md-6">
                              <label  class="control-label">Prenom </label>
                              <input type="text" class="form-control" id="prenom" name="prenom" <?php echo 'value="'.$_SESSION['prenom'].'"';  ?>>
                          </div>

                          <div class="form-group col-md-6">
                              <label  class="control-label">Localisation</label>
                              <input type="text" class="form-control" id="loginSub" name="local" <?php echo 'value="'.$_SESSION['lieux'].'"';  ?>>
                          </div>

                          <div class="form-group col-md-6">
                              <label  class="control-label">Mot de passe</label>
                              <input type="password" class="form-control" id="mdpSub" name="mdpSub" <?php echo 'value="'.$_SESSION['mdp'].'"';  ?>>
                          </div>

                          <div class="form-group col-md-12">
                              <label  class="control-label">Date de naissance</label>
                              <input type="date" class="form-control" id="loginSub" name="ddn" >
                          </div>

                          <!-- <div class="form-group">
                                    <label for="inputPassword" class="control-label">Password</label>
                                    <input type="password" class="form-control" id="inputPassword">
                                  </div>

                                  <div class="form-group">
                                    <div class="checkbox">
                                      <label>
                                        <input type="checkbox"> Are you a winner?
                                      </label>
                                    </div>
                                  </div>-->

                          <!-- <div class="form-group">
                             <label for="textArea" class="control-label">Textarea</label>
                             <textarea class="form-control vertical" rows="3" id="textArea"></textarea>
                             <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                           </div> -->


                          <!--
                       <div class="form-group">
                         <label class="control-label normal">Radio buttons</label>
                         <div class="radio">
                           <label>
                             <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                             Option one is this
                           </label>
                         </div>
                         <div class="radio">
                           <label>
                             <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                             Option two can be something else
                           </label>
                         </div>
                       </div>

                      <div class="form-group">
                         <label class="control-label normal">Switches</label>
                         <div class="switch">
                           <label>
                             Off
                             <input type="checkbox">
                             <span class="lever"></span>
                             On
                           </label>
                         </div>
                       </div> -->


                          <div class="form-group">
                              <button type="submit" class="clikToEdit btn btn-primary">Modifier</button>
                              <button type="reset" class=" btn btn-default">Annuler</button>
                          </div>

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
                $(".clikToEdit").click(function() {

                    var id   = $("#ID").val();
                    var mdp  = $("#mdp").val();
                    var nom  = $("#nom").val();
                    var prenom  = $("#prenom").val();
                    var ddn  = $("#ddn").val();
                    var delay = ( function() {
                        var timer = 0;
                        return function(callback, ms) {
                            clearTimeout (timer);
                            timer = setTimeout(callback, ms);
                        };
                    })();

                   // console.log("id : " + id + " mdp : " +mdp )

                    $.ajax({
                        url: 'include/functions.php',
                        type:'POST',
                        data: {
                            fonction:'editUser',
                            params: {id: id, mdp: mdp, nom : nom, prenom : prenom, ddn : ddn}
                        },
                        success: function(data)
                        {
                            if (data !=  "") {
                                console.log("yes");
                                console.log(data);
                                //$("#problem").appendData(data)
                                window.location.href = "info.php";
                                //$("#form")[0].reset();
                                /*     $("#sucess").removeClass("hide");
                                 setTimeout(
                                 function()
                                 {
                                 $("#sucess").addClass("hide");
                                 }, 5000);
                                 $("#sucess").addClass("hide");*/
                            }
                            /*   else
                             {
                             $("#problem").removeClass("hide");
                             setTimeout(
                             function()
                             {
                             $("#problem").addClass("hide");
                             }, 5000);
                             } */
                        }
                    });

                })
            })


            $(".clikToSubscribe").click(function() {

                $("#subscribe").removeClass("hide"); //on révéle le bloc caché
                $("#connexion").addClass("hide"); //on cache le bloc de connexion
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
