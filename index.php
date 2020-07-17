<!DOCTYPE html>
<html lang="
" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  </head>
  <body class="pt-4">

    <?php
    //si le formulaire de nom "submit" a été validé

      	if(isset($_POST['submit']) && $_POST['firstname'] && $_POST['lastname'] && $_POST['email'] && $_POST['message']){
          $firstName = htmlspecialchars($_POST['firstname']);
          $lastName = htmlspecialchars($_POST['lastname']);
          $email = htmlspecialchars($_POST['email']);
          $message = htmlspecialchars($_POST['message']);
          $isSend = false;
            }

      		if(empty($firstName)){
      			echo 'Le champ Prénom est vide !<br>';
            $isSend;
      		}

      		if(empty($lastName)){
      			echo 'Le champ Nom est vide !<br>';
            $isSend;
      		}

          if(empty($email)){
            echo 'Le champ Email est vide !<br>';
            $isSend;
          }

          if(empty($message)){
            echo 'Le champ Message est vide !<br>';
            $isSend;
          }


      		else{
      			$msg  = "Nom : ".$lastName."<br/>Prénom : ".$firstName ."<br/>Message : " . $message;
            $to = 'l.elyacoubi@codeur.online';

      			//entête du mail

      			$mailheaders = "From: $email\n";

      			$mailheaders .= "MIME-version: 1.0\n";

      			$mailheaders .= "Content-type: text/html; charset= utf-8\n";
            $subject = "Coucou, ça maaarche !";

      			//on envoi l'email

      			//si le mail est envoyé

      			if(mail($to, $subject, $msg, $mailheaders)){
              $isSend = true;
      				echo 'Email envoyé.';

      			}

      			//si il y a une erreur lors de l'envoi

      			else{
      				echo 'Erreur, email non envoyé.';

      			}

      		}


     ?>

    <div class="container">
      <h2 class="pb-4 text-center">Mon super formulaire en php</h2>
      <form action="index.php" method="post">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Prénom</label>
          <input type="text" class="form-control" name="firstname" placeholder="First name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Nom</label>
          <input type="text" class="form-control"  name="lastname" placeholder="Last name">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-outline-primary" name="submit">Envoyer</button>
        </div>
      </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


  </body>
</html>
