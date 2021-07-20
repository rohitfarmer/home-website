<!DOCTYPE html>
<html>

<head>
  <title>Rohit Farmer's Homepage on his Home Server</title>
  <meta name="google-site-verification" content="8XsWp5OjeblkMk2I9QLqXIFEnc5PkqCgAQs4eg7zMuk" />
  <meta name="keywords" content="Rohit Farmer, Rohit, Farmer, Homepage, Website, Personal">
  <meta name="description" content="Rohit Farmer's personal homepage on his home server.">
  <meta name="author" content="Rohit Farmer">
  <link href="main_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div ID="main_title">Rohit Farmer</div>
  <div ID="tag_line">
    <p>mostly text based personal site served on my home server</p>
  </div>
  <div ID="main_menue">
    <a href="https://rohitfarmer.ddns.net">Home</a> |
    <a href="https://rohitfarmer.github.io">Official Website</a> |
    <a href="https://linktr.ee/rohitfarmer">Social</a> |
    <a href="https://rohitfarmer.ddns.net/library">Library</a> |
    <a href="http://rohitfarmer.ddns.net:890" target="_blank" rel="noopener noreferrer">Photography</a> |
    <a href="pages/CV.html">CV</a>
  </div>
  <div ID="intro">
    <p><img ID="mypic" src="images/myphoto.jpg" alt="Rohit Farmer's Photograph" />
      Thank you for visiting my website that is running on my home server (<a href="#homeserver">A Raspberry Pi 3 B
        Plus</a>). This is more of an informal website, mostly for testing and temporary projects. Although I keep my
      home server running 24/7 and so far I had no issues with electricity or internet connectivity this website may go
      down occasionally during updates or on occasions when I am trying something, and things went wrong. My official
      website is <a href="https://rohitfarmer.github.io">https://rohitfarmer.github.io</a>. I have intentionally made
      this website mostly text to be compatible with terminal-based web browsers like <a
        href="http://lynx.browser.org/">Lynx.</a></p>

    <p>I am a computational biologist by training; however, as part of my hobby, I am also interested in topics like
      data science/machine learning, privacy/security/anonymity, encryption, networking, IoTs, and projects on Raspberry
      Pi. I also like to read, write, and travel. I often have fun projects in mind where I want to collaborate with
      other like-minded people, and I also like to network with people with similar interests.</p>

    <p>None of the content on this website reflects the views of any of my past or present employers.</p>

    Contact<br>
    Rohit Farmer, PhD<br>
    E-mail: <a href="mailto:rohit.farmer@gmail.com" target="_top">rohit.farmer@gmail.com</a><br>
    PS: I am also very active on IRC especially on DalNet. Therefore, let me know if you want to chat with me there.
  </div>
  <hr>
  <div ID="homeserver">
    <h2>Home Server Specifications</h2>
    <p> This website is running on A Raspberry Pi 3 B Plus with Raspbian OS. In addition to this website, it's also hosting Calibre e-book server and Plex media server. </p>


    <?php echo 'Hello World'; ?> 

    <?php 
      $load = sys_getloadavg();
      echo "<b>Average server load in the last minute: ", ($load[0]/8)*100, "%</b><br/>";
      $time_zone = date_default_timezone_get();
      $timestamp = time();
      $date_time = date("d-m-Y (D) H:i:s", $timestamp);
      echo "<b>Current date and local time on the server: $date_time $time_zone</b>";
    ?>
    <br clear="left">
  </div>

  <div>
    <hr>
    <p style="text-align: center;"> &copy; 2020 Rohit Farmer</p>
  </div>

</body>

</html>