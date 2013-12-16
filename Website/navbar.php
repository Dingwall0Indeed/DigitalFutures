<div id="header"  data-type="_header">
  <div> <a href="../index.html" class="logo"><img src="images/logo.jpg" alt=""></a>

  </div>
  <div id="nav_bar_bg" class="navigation_bg"> </div>
  <div id="nav_bar" class="navigation">
    <ul>
      <li class="selected"> <a href="../index.php" -webki>home</a> </li>
      <li> <a href="sell.html">sell</a>
        <ul>
          <li> <a href="team.html">quick sell</a> </li>
          <li> <a href="testimonials.html">full guide</a> </li>
          <li> <a href="gallery.html">item 3</a> </li>
        </ul>
      </li>
      <li> <a href="services.html">open homes</a>
        <ul>
          <li> <a href="services.html">full guide</a> </li>
          <li> <a href="services.html">preparation</a> </li>
          <li> <a href="services.html">schedule</a> </li>
          <li> <a href="services.html">item 4</a> </li>
          <li> <a href="promo.html">item 5</a> </li>
        </ul>
      </li>
      <li> <a href="blog.html">legal</a> 
        <ul>
          <li> <a href="services.html">contracts</a> </li>
          <li> <a href="services.html">insurance</a> </li>
          <li> <a href="services.html">find a lawyer</a> </li>
          <li> <a href="services.html">item 4</a> </li>
        </ul>
      </li>
      <li> <a href="login/login.php">Log In</a> </li>
      <li class="booking"> <a href="booking.html">contact us</a> </li>
      <li class="search">
          <form action="index.html">
      <input type="text" name="search" id="search" value="">
      <input type="submit" name="searchBtn" id="searchBtn" value="">
    </form>
      </li>
    </ul>
  </div>
</div>

<!--

This is my intentions with this php:
Instead of copy+pasting this code into every page, every page has a < ?php include("header.php") ?> in the header section
With this system, the site can only be tested on a server running PHP (bad for now)
But, the header only has to be changed in a single location to update across the entire website (good for later)

TODO:
Update all the links in here with hard coded ones once the website is up and running, so there is no relative links going on (that may break)

-->