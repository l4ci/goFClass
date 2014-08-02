<div class="topBar">
  <div class="container">
    <a href="/" class="logo">Logo</a>
  <?php
    // @TODO - replace with logged in function
   ?>
  <?php if (s::get('loggedin',false) == true): ?>


    <?php
      //@TODO - replace with real notifications for logged in user
    ?>

    <div class="notifications">
      <ul>
        <li class="dropdown">
          <a href="#"><i class="fa fa-users"></i> <span class="badge">3</span></a>
          <div class="dropdown-container">
            <div class="dropdown-title">
              Friendrequests
            </div>
            <div class="dropdown-inner">

            </div>
            <div class="dropdown-footer">
              <a href="#">Show all</a>
            </div>
          </div><!-- .dropdown-container -->
        </li>
        <li class="dropdown">
          <a href="#"><i class="fa fa-comments"></i></a>
          <div class="dropdown-container">
            <div class="dropdown-title">
              Messages <a href="#">New message</a>
            </div>
            <div class="dropdown-empty">
              No new messages.
            </div>
          </div><!-- .dropdown-container -->
        </li>
        <li class="dropdown">
          <a href="#"><i class="fa fa-bell"></i> <span class="badge">99+</span></a>
          <div class="dropdown-container">
            <div class="dropdown-title">
              Notifications <a href="#">Mark all as read</a>
            </div>
            <div class="dropdown-inner">

            </div>
            <div class="dropdown-footer">
              <a href="#">Show all</a>
            </div>
          </div><!-- .dropdown-container -->
        </li>
      </ul>
    </div><!-- .notifications -->

  <?php else: ?>

    <div class="topbar-buttons">
      <a href="#" class="btn">Register</a>
      <a href="#login" class="btn js-open-overlay">Login</a>
    </div><!-- .topbar-buttons -->

  <?php endif; ?>

  </div><!-- .container -->
</div><!-- .topbar -->
