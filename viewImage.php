
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require 'meta.html';
    $pageID = 5;
    $newVar = $_GET["id"];
    switch($newVar){
      case 1:
        $imageName = "The Observatory";
        $imageDescription = "The observatory was once the limit of campus; since the expansion, it has been converted into the office for the Sustainability organization on campus.";
        break;
      case 2:
        $imageName = "Miller Fine Arts Center";
        $imageDescription = "Part of the most recent expansion of campus, the Miller Fine Arts Center hosues the fine arts departments, including an expansion of the music department, and was donated by HP.";
        break;
      case 3:
        $imageName = "HP Park";
        $imageDescription = "The newest set of on-campus apartments, HP Park was built on a plot of land given to the school by Hewlett-Packard. The apartments are available to upperclassmen only.";
        break;
      case 4:
        $imageName = "Grover Hall";
        $imageDescription = "Grover Hall is one of the older residence halls on campus, and is used as housing for freshmen and sophomores, for the most part.";
        break;
      case 5:
        $imageName = "The Fountain";
        $imageDescription = "The fountain sits at the center of the plaza that's <em>roughly</em> the center of campus.";
        break;
      case 6:
        $imageName = "The Cupola";
        $imageDescription = "The cupola is perched atop one of the oldest buildings on campus. It is lit in different colors for certain holidays throughout the year.";
        break;

      default:
        $imageName = "Not found!";
        $imageDescription = "You're trying to find an invalid image ID.";
        break;

    }

    ?>
    <meta name="description" content="">
    <title>Linfield Images - Grey Patterson</title>
  </head>

  <body>
    <?php include 'navbar.php' ;?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <img class="img-responsive center-block" src="images/assgn1/<?php echo $newVar; ?>big.png">
        <h1><?php echo $imageName; ?></h1>
        <p><?php echo $imageDescription; ?></p>
        <a class="btn btn-primary" href="linfieldImages.php">&laquo; Back to images list</a>
      </div>
    </div>

    <div class="container">
      
    <?php include 'footer.php' ?>
  </body>
</html>
