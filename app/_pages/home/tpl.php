<?php
overlay('login');
overlay('dialog');

snippet('topbar');
?>

<!--
<div class="bubble">
  <div class="container">
    <div class="bubble-head">Notification</div>
    <div class="bubble-text">Peter replied to your topic: <a href="#">"My Hardware Setup"</a></div>
  </div><!-- .container -->
<!--</div><!-- .bubble -->


<div class="globalContainer">

  <header class="header">
    <div class="header-overlay"></div>
    <div class="container">

      <div class="hero">
        <h1 class="hero-head">Header</h1>
        <p class="hero-lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, architecto!</p>
      </div><!-- .hero -->

    </div><!-- .container -->
  </header><!-- .header -->


  <div class="subNav">
    <div class="container">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Teams</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Topics</a></li>
      </ul>
    </div><!-- .container -->
  </div><!-- .subNav -->


  <div class="filterBar">
    <div class="container">
      <ul>
        <li><span><i class="fa fa-filter"></i> Filter:</span></li>
        <li><a href="#" class="active">A-Z </a></li>
        <li><a href="#">Teams</a></li>
        <li><a href="#">Players</a></li>
        <li><a href="#">Ranking</a></li>
        <li><a href="#"><i class="fa fa-caret-up"></i></a></li>
        <li><a href="#"><i class="fa fa-caret-down"></i></a></li>
      </ul>
    </div><!-- .container -->
  </div><!-- .filterBar -->

  <div class="mainContent">
    <div class="container">

      <div class="fullSize box box--white">
        <h2>Modals</h2>
        <p>
          <a href="#dialog" class="btn btn-primary js-open-overlay">Dialog</a>
        </p>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt ipsam, veritatis suscipit necessitatibus aliquid quis, doloribus quisquam esse distinctio, asperiores at magni sed unde earum vero dolore, debitis neque ratione.</p>
        <h2>Buttons</h2>
        <p>
          <a href="#" class="btn btn-primary">Primary</a>
          <a href="#" class="btn">Default</a>
          <a href="#" class="btn btn-danger">Danger/Error</a>
          <a href="#" class="btn btn-success">Success</a>
        </p>
      </div><!-- .fullBox -->

      <div class="fullBox box">
        <h2>Grid</h2>
      </div>

      <div class="halfSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis facilis aspernatur asperiores maiores, ipsum dolorum atque eum animi, recusandae ex!</p>
      </div>

      <div class="halfSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis facilis aspernatur asperiores maiores, ipsum dolorum atque eum animi, recusandae ex!</p>
      </div>

      <div class="quarterSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="quarterSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="quarterSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

      <div class="quarterSize box box--white">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      </div>

    </div><!-- .container -->
  </div><!-- .mainContent -->

</div><!-- .globalContainer -->

<?php
snippet('statusbar');
snippet('footer');
