
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php 
      require 'meta.html';
      $pageID = 1;
    ?>
    <meta name="description" content="">
    <title>Grey Patterson</title>
  </head>

  <body>
    <?php include 'navbar.php' ;?>
    <header>
      <div class="header-content">
          <div class="header-content-inner">
              <h1><span>Hello!</span></h1>
              <hr>
              <p><span>I am a sophomore <strong>Computer Science</strong> and <strong>Music</strong> double-major at <strong>Linfield College</strong> in Oregon.</span></p>
              <p><span>I've got the beginnings of a focus on <strong>Human-Computer Interaction</strong> and <strong>composition</strong> in those fields, respectively.</span></p>
              <a href="#about" class="btn btn-primary btn-xl page-scroll">More About Me</a>
            </div>
        </div>
    </header>
    </div>

    <div class="container">
      <div id="about" class="row"><div class="col-md-12"><h1>About</h1></div></div>
      <div class="row">
        <div class="col-md-3"><img style="max-width:265px" src="images/face.jpg" alt="A picture of me, looking slightly confused." class="img-responsive img-circle hidden-xs"></div>
        <div class="col-md-9">
          <p>I was born and raised in Portland, Oregon, and I really do love the state. There's a delightful amount of rain, which means I don't at all feel bad about staying inside reading all the time.</p>
          <p>I've basically always wanted to do stuff with computers - when I was little, it seemed like a kind of magic. And, after all, isn't programming magic? Sure, you're trying strange words instead of saying them, but the end result is still the same: knowing some weird words made something happen. It's incredible.</p>
        </div>
      </div>
      <div class="row" id="timeline">
        <div class="col-md-12">
          <h1>Timeline</h1>
        </div>
      </div>
      <div id="fall2016" class="row">
        <div class="col-md-3"><img style="margin-top:25px" src="images/austria.png" class="img-responsive hidden-xs" alt="Austrian flag"></div>
        <div class="col-md-9">
          <h2>Fall 2016</h2>
          <p>In the fall of 2016, I will be studying abroad at the <a href="http://www.amerika-institut.at/j/index.php?Itemid=59" target="_blank">Austro-American Institute of Education</a> in Vienna, Austria.</p>
          <p>The program is funded in part thanks to the <a href="http://www.nationalald.org/index.cfm/scholarships/stemler-study-abroad-scholarships/" target="_blank">Stemler scholarship from Alpha Lambda Delta.</a></p>
          <p>While abroad, I plan to do a bit of photo-blogging, so if that's something that interests you, check out <a href="http://grey280.net">my blog</a>.
        </div>
      </div>
      <hr>
      <div class="row" id="summer2016">
        <div class="col-md-9">
          <h2>Summer 2016</h2>
          <p>In the summer of 2016, I will be working at the <a href="http://cct.lsu.edu" target="_blank">Center for Computation &amp; Technology</a> at Louisiana State University, participating in a National Science Foundation-funded research program.</p>
          <p>While I don't know <em>precisely</em> which program I'll be participating in, I'll be sure to update this page as soon as I know.</p>
        </div>
        <div class="col-md-3"><img src="images/LSU.jpg" class="img-responsive hidden-xs" alt="Louisiana State University logo"></div>
      </div>
      <hr>
      <div class="row" id="fall2015">
        <div class="col-md-3"><img src="images/linfield.gif" class="img-responsive hidden-xs" alt="Linfield College seal"></div>
        <div class="col-md-9">
          <h2>Fall 2015</h2>
          <p>In the fall of 2015, I started at <a href="http://linfield.edu" target="_blank">Linfield College</a>, working on a double-major in both computer science and music.</p>
          <p>While attending Linfield, I have had the opportunity to work with an incredible variety of faculty and students, in activities ranging from software design to music technology to student government. I'm enjoying every minute of it.</p>
          <p>For more about my academics, check out my <a href="work.php">Academic Work</a>.
        </div>
      </div>
      <hr>
      <div class="row" id="spring2015">
        <div class="col-md-9">
          <h2>Spring 2015</h2>
          <p>In the spring of 2015, I graduated from <a href="http://tuhs.ttsdschools.org/pages/Tualatin_High_School" target="_blank">Tualatin High School</a> with an International Baccalaureate Diploma.</p>
          <p>I'd like to say something about how high school was nothing like the movies, but high school was when I joined choir and really started to enjoy music, and there may or may not have been a couple musical numbers that looked like something out of <em>High School Musical</em>.</p>
          <p>While there, I got my first job, as a lifeguard. If you'd like to see more of my work experience, head on over to <a href="resume.php">my résumé</a>.
        </div>
        <div class="col-md-3"><img src="images/tuhs.jpg" class="img-responsive hidden-xs" alt="Tualatin High School logo"></div>
      </div>

      <?php include 'footer.php' ?>
  </body>
</html>
