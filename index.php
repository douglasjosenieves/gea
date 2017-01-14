<?php session_start(); 


?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ERP | GEA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="framework/font-awesome/css/font-awesome.min.css">


  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/favicon.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<?php $img = mt_rand(1, 3); ?>
    <style type="text/css">
body{

 
  background: url('images/<?php echo $img ?>.jpg') no-repeat 0 0%;

    /* will also set the opacity of the link text */        
    

}




    </style>
  </head>
  <body  >
  <div class="container">  
 
  <center> <img src="images/logo-blanco.png" class="img-responsive"></center>  
        <div id="box_login" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Entrar   <?php echo  $_SESSION['usuario']['Nombre'].' '.$_SESSION['usuario']['Apellido'];  ?>  </div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Olvido su contraseña?  </a>
                </div>
            </div>

            <div style="padding-top:30px" class="panel-body">

                <!-- show any messages that come back with authentication -->
                <div id="div_alert" style="display: none"></div>

                <form id="loging" class="form-horizontal" role="form" action="j_spring_security_check"
                      method="post">

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="email" required type="text" class="form-control" name="email" value="super@gmail.com"
                               placeholder="username or email">
                    </div>

                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="clave" required type="password" class="form-control" name="clave" value="12345" 
                               placeholder="password">
                    </div>

                


                    <div style="margin-top:10px" class="form-group">
                        <div class="col-sm-12 controls">
                           

                           <button type="submit" id="boton" class="btn btn-success btn-lg btn-block" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Cargando...!  "> Entrar  </button>
                           
                           
                           
                            


                           
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12 control">
                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                                No tiene una cuenta!
                                <a id="link_signup"href="#" onClick="$('#box_login').hide(); $('#box_signup').show()">
                                    clic aquí
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="box_signup" style="display:none; margin-top:50px"
         class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px">
                    <a id="link_login" href="#" onclick="$('#box_signup').hide(); $('#box_login').show()">Log In
                    </a>
                </div>
            </div>
            <div class="panel-body">
                <form id="form_signup" class="form-horizontal" role="form">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>


                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Address">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" id="firstname" name="firstname"
                                   placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" id="lastname" name="lastname"
                                   placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>

                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="invitation_code" class="col-md-3 control-label">Invitation Code</label>

                        <div class="col-md-9">
                            <input type="text" class="form-control" id="invitation_code" name="invitation_code"
                                   placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- Button -->
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" type="button" class="btn btn-info btn-lg btn-block"><i
                                    class="icon-hand-right"></i>
                                &nbsp Sign Up
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<script type="text/javascript">
    
$(document).ready(function() {
    

$('#loging').on('submit', function(event) {
    event.preventDefault();
    /* Act on the event */

    $('#boton').button('loading');
 
 //$('#a_success, #a_failed ').hide();

    $.ajax({
        url: 'get_loging.php',
        type: 'POST',
        dataType: 'json',
        data: $('#loging').serialize(),
    })
    .done(function(data) {
        console.log("success");

        console.log(data.message);
        if (data.type=='success') {

      
        $('#boton').button('reset'); 
     
       document.location.href = 'interprise/index.php';
    
        } else {
        
        document.location.reload(true);
      
        $('#boton').button('reset');
         
console.log('Error de loging');
 alert('Error de loging');

        }
        
    })
    .fail(function(data) {
        console.log("error");

    })
    .always(function() {
        console.log("complete");
    });

 });


}); /* CIERRE DEL JQUERY */


</script>

  </body>
</html>