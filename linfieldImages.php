
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      require 'meta.html';
      $pageID = 5;
    ?>
    <meta name="description" content="">
    <title>Linfield Images - Grey Patterson</title>
  </head>

  <body>
    <?php include 'navbar.php' ;?>
    <div class="jumbotron">
      <div class="container">
        <h1>Linfield Images</h1>
        <p>Linfield has a beautiful campus; it's a bit famous for that. Here's some pictures.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">        
        <div class="col-md-12">
          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=1">
                <img class="media-object img-thumbnail" src="images/assgn1/1thumb.png" alt="The Observatory">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">The Observatory</h4>
              <p>The observatory was once the limit of campus; since the expansion, it has been converted into the office for the Sustainability organization on campus.</p>
              <a class="btn btn-primary" href="viewImage.php?id=1">View full size &raquo;</a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=2">
                <img class="media-object img-thumbnail" src="images/assgn1/2thumb.png" alt="Miller Fine Arts Center">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Miller Fine Arts Center</h4>
              <p>Part of the most recent expansion of campus, the Miller Fine Arts Center hosues the fine arts departments, including an expansion of the music department, and was donated by HP.</p>
              <a class="btn btn-primary" href="viewImage.php?id=2">View full size &raquo;</a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=3">
                <img class="media-object img-thumbnail" src="images/assgn1/3thumb.png" alt="HP Park">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">HP Park</h4>
              <p>The newest set of on-campus apartments, HP Park was built on a plot of land given to the school by Hewlett-Packard. The apartments are available to upperclassmen only.</p>
              <a class="btn btn-primary" href="viewImage.php?id=3">View full size &raquo;</a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=4">
                <img class="media-object img-thumbnail" src="images/assgn1/4thumb.png" alt="Grover Hall">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Grover Hall</h4>
              <p>Grover Hall is one of the older residence halls on campus, and is used as housing for freshmen and sophomores, for the most part.</p>
              <a class="btn btn-primary" href="viewImage.php?id=4">View full size &raquo;</a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=5">
                <img class="media-object img-thumbnail" src="images/assgn1/5thumb.png" alt="The Fountain">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">The Fountain</h4>
              <p>The fountain sits at the center of the plaza that's <em>roughly</em> the center of campus.</p>
              <a class="btn btn-primary" href="viewImage.php?id=5">View full size &raquo;</a>
            </div>
          </div>

          <div class="media">
            <div class="media-left">
              <a href="viewImage.php?id=6">
                <img class="media-object img-thumbnail" src="images/assgn1/6thumb.png" alt="The Cupola">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">The Cupola</h4>
              <p>The cupola is perched atop one of the oldest buildings on campus. It is lit in different colors for certain holidays throughout the year.</p>
              <a class="btn btn-primary" href="viewImage.php?id=6">View full size &raquo;</a>
            </div>
          </div>
        </div>
      </div>

      <?php include 'footer.php' ?>
  </body>
</html>
