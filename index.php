<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>getMeAnswers : connexion</title>
	<meta charset="utf-8" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body ng-app>
    <div class="container-fluid">
        
        <div class="container">
          <!--  <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">getMeAnswers</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Articles <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">ToDo</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Click me! <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>

                        

                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Rechercher">
                            </div>
                            <button type="submit" class="btn btn-default">Rechercher</button>
                        </form>
                    </div>
                </div>
            </nav> -->
           <!-- <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div> -->

            <div class="row  m-b-40" id="connexion">

                <div class="col-md-12">
                  <div class="well white">
                    <form class="form-floating form">
                      <fieldset>
                        <legend>Connexion nécessaire</legend>
                          <div class="alert alert-danger hide" role="alert" id="problem">Identifiants/mot de passe invalide</div>
                        <span class="help-block">Merci de compléter les informations.</span>
                        <div class="form-group">
                          <label  class="control-label">Identifiants</label>
                          <input type="text" class="form-control" id="ID" name="ID">
                        </div>

                        <div class="form-group">
                            <label  class="control-label">Mot de passe</label>
                            <input type="password" class="form-control" id="mdp" name="mdp">
                        </div>

                        <div class="form-group">
                          <button type="submit" class="clikToConnect btn btn-primary">Connexion</button>
                          <button type="reset" class=" btn btn-default">Annuler</button>
                        </div>

                          <div class="form-group">
                              <button type="submit" class="clikToSubscribe btn btn-primary">Inscription</button>
                          </div>

                      </fieldset>
                    </form>
                  </div>
                </div>
              </div>

            <div class="row  m-b-40 hide" id="subscribe">
                <div class="col-md-3 col-md-push-9">
                    <h5> . </h5>
                    <p></p>
                </div>
                <div class="col-md-12">
                    <div class="well white">
                        <form class="form-floating form">
                            <fieldset>
                                <legend>Informations nécessaire</legend>
                                <span class="help-block">Merci de compléter les informations.</span>
                                <div class="form-group">
                                    <label  class="control-label">Nom </label>
                                    <input type="text" class="form-control" id="nom" name="nom">
                                </div>

                                <div class="form-group">
                                    <label  class="control-label">Prenom </label>
                                    <input type="text" class="form-control" id="prenom" name="prenom">
                                </div>

                                <div class="form-group">
                                    <label  class="control-label">login</label>
                                    <input type="text" class="form-control" id="loginSub" name="loginSub">
                                </div>

                                <div class="form-group">
                                    <label  class="control-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="mdpSub" name="mdpSub">
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
                                    <button type="submit" class="clikToSubscribe2 btn btn-primary">S'inscrire</button>
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
                            if (data == "true") {
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
                            else
                            {
                                $("#problem").removeClass("hide");
                                setTimeout(
                                    function()
                                    {
                                        $("#problem").addClass("hide");
                                    }, 10000);
                            }
                        }
                    });

                })
            })


            $(".clikToSubscribe").click(function() {

                $("#subscribe").removeClass("hide"); //on révéle le bloc caché
                $("#connexion").addClass("hide"); //on cache le bloc de connexion
            })


            $(".clikToSubscribe2").click(function() {
                var mdpSub   = $("#mdpSub").val();
                var nom  = $("#nom").val();
                var prenom  = $("#prenom").val();
                var login  = $("#loginSub").val();

                $.ajax({
                    url: 'include/functions.php',
                    type:'POST',
                    data: {
                        fonction:'inscriptionUser',
                        params: {mdpSub : mdpSub, nom : nom, prenom : prenom, login : login}
                    },
                    success: function(data)
                    {
                        if (data == "true") {
                            console.log("yes");
                            console.log(data);
                            //$("#problem").appendData(data)
                            window.location.href = "info.php";

                        }
                    }
                });

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
