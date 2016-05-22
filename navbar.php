<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Grey Patterson</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($pageID == 1){ echo "active";}?>"><a href="http://asteroid.cs.linfield.edu/~gpatter/">Home</a></li>
            <li class="dropdown <?php if($pageID == 2 || $pageID == 5){ echo "active";}?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Academics <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class="<?php if($pageID == 2){ echo "active";}?>"><a href="http://asteroid.cs.linfield.edu/~gpatter/work.php">My Academic Work</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Linfield</li>
                  <li><a href="http://linfield.edu/">Home</a></li>
                  <li class="<?php if($pageID == 5){ echo "active";}?>"><a href="http://asteroid.cs.linfield.edu/~gpatter/linfieldImages.php">Images</a></li>
                </ul>
            </li>
            <li class="<?php if($pageID == 4){ echo "active";}?>"><a href="http://asteroid.cs.linfield.edu/~gpatter/resume.php">Résumé</a></li>
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>