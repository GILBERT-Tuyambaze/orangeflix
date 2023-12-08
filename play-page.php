<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  MovieVel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="files/img/computer.jpg" type="image/x-icon">
</head>
<body>
   <header>
    <div class="nav container">

    <a href="movievel-home.php" class="logo">
        Movie<span>Vel</span>
    </a>
    <a href="#top" >
    <div class="search-box" >
      <input type="search" name="search" id="search-input" placeholder="search movie">  
      <svg class="bx bx-search" id="searchbuttom" width="20" height="16" viewBox="0 0 16 16"><g fill="none" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"><path d="m11.25 11.25l3 3"/><circle cx="7.5" cy="7.5" r="4.75"/></g></svg>
    </div>  </a>

    <a href="#" class="user">
        <img src="files/img/user.jpg" class="user-img" alt="">
    </a>
    <div class="navbar">
        <a href="movievel-home.php" class="nav-link nav-active">
        <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586l6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/></svg>
        <div class="nav-link-title">Home</div>
    </a>
    <a href="#home" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M16.5 8c0 1.5-.5 3.5-2.9 4.3c.7-1.7.8-3.4.3-5c-.7-2.1-3-3.7-4.6-4.6c-.4-.3-1.1.1-1 .7c0 1.1-.3 2.7-2 4.4C4.1 10 3 12.3 3 14.5C3 17.4 5 21 9 21c-4-4-1-7.5-1-7.5c.8 5.9 5 7.5 7 7.5c1.7 0 5-1.2 5-6.4c0-3.1-1.3-5.5-2.4-6.9c-.3-.5-1-.2-1.1.3"/></svg>
        <div class="nav-link-title">trending</div>
    </a>
    <a href="#home" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 10.9c-.61 0-1.1.49-1.1 1.1s.49 1.1 1.1 1.1c.61 0 1.1-.49 1.1-1.1s-.49-1.1-1.1-1.1zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2zm2.19 12.19L6 18l3.81-8.19L18 6l-3.81 8.19z"><animateTransform id="eosIconsCompass0" attributeName="transform" attributeType="XML" begin="0;eosIconsCompass2.end" dur="1s" from="-90 12 12" to="0 12 12" type="rotate"/><animateTransform id="eosIconsCompass1" attributeName="transform" attributeType="XML" begin="eosIconsCompass0.end" dur="1s" from="0 12 12" to="-90 12 12" type="rotate"/><animateTransform id="eosIconsCompass2" attributeName="transform" attributeType="XML" begin="eosIconsCompass1.end" dur="1s" from="-90 12 12" to="270 12 12" type="rotate"/></path></svg>
        <div class="nav-link-title">explore</div>
    </a>
    <a href="#home" class="nav-link">
    <svg   width="24" height="24" viewBox="0 0 500 500"><path fill="currentColor" d="m132.992 48.756l-9.984 14.976l77.287 51.524c4.32-4.192 9.542-8.012 15.703-11.162l-83.006-55.338zm246.016 0l-83.006 55.338c6.16 3.15 11.383 6.97 15.703 11.162l77.287-51.524l-9.984-14.976zM256 113.244c-22 0-35.334 7.06-43.637 15.363c-4.703 4.704-7.58 9.97-9.316 14.637h105.906c-1.736-4.668-4.613-9.933-9.316-14.637c-8.303-8.303-21.637-15.363-43.637-15.363zm-191.936 48c-5.044 0-11.106 2.784-15.697 7.37c-4.59 4.584-7.367 10.63-7.367 15.63v279h430V184.2c.026-5.457-2.764-11.393-7.227-15.87c-4.463-4.477-10.346-7.086-14.826-7.086H64.064zm30.295 23h257.745c10.374 0 20.79 6.818 26.776 16H112c-16 0-32 16-32 32v160c25.924-162.54 145.877-185.697 299.016-191.795c3.106 4.836 4.984 10.315 4.984 15.794v192c0 16-16 32-33.88 32H95.35c-15.35 0-31.35-16-31.35-32v-192c0-16 16-32 30.36-32zm328.663 7c13.7 0 25 11.3 25 25s-11.3 25-25 25s-25-11.3-25-25s11.3-25 25-25zm-23.023 144h48v18h-48v-18zm0 32h48v18h-48v-18zm0 32h48v18h-48v-18z"/></svg>
        <div class="nav-link-title">movies</div>
    </a>
    <a href="#home" class="nav-link">
    <svg  width="24" height="24" viewBox="0 0 14 14"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" d="m7 12.45l-5.52-5c-3-3 1.41-8.76 5.52-4.1c4.11-4.66 8.5 1.12 5.52 4.1Z"/></svg>
        <div class="nav-link-title">favourite</div>
    </a>
    </div>
    </div>
   </header>
   <section class="search container" id="search">
    <div class="top"></div>
    <div id="outp"></div>
    
   </section>
 <!-- play movie container -->
 <div class="play-container container">
    <!-- play image -->
    <img src="files/movie/blue beetle.jfif" alt="" class="play-img">
     <!-- play text -->
     <div class="play-text">
        <h2> blue beetle </h2>
         <!-- rating -->
        <div class="rating">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512"><path fill="yellow" d="M496 203.3H312.36L256 32l-56.36 171.3H16l150.21 105.4l-58.5 171.3L256 373.84L404.29 480l-58.61-171.3Z"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path d="M0 0h24v24H0z"/><path fill="yellow" d="M12 1a.993.993 0 0 1 .823.443l.067.116l2.852 5.781l6.38.925c.741.108 1.08.94.703 1.526l-.07.095l-.078.086l-4.624 4.499l1.09 6.355a1.001 1.001 0 0 1-1.249 1.135l-.101-.035l-.101-.046l-5.693-3l-5.706 3c-.105.055-.212.09-.32.106l-.106.01a1.003 1.003 0 0 1-1.038-1.06l.013-.11l1.09-6.355l-4.623-4.5a1.001 1.001 0 0 1 .328-1.647l.113-.036l.114-.023l6.379-.925l2.853-5.78A.968.968 0 0 1 12 1zm0 3.274V16.75a1 1 0 0 1 .239.029l.115.036l.112.05l4.363 2.299l-.836-4.873a1 1 0 0 1 .136-.696l.07-.099l.082-.09l3.546-3.453l-4.891-.708a1 1 0 0 1-.62-.344l-.073-.097l-.06-.106L12 4.274z"/></g></svg>
        </div>
         <!-- tags -->
         <div class="tags">
            <span>Action/Adventure</span>
            <span>4k hD</span>
         </div>  
     </div>
      <!-- play btn -->
      <svg class="play-movie" id="play-movie" width="24" height="24" viewBox="0 0 16 16"><path fill="currentColor" d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0ZM1.5 8a6.5 6.5 0 1 0 13 0a6.5 6.5 0 0 0-13 0Zm4.879-2.773l4.264 2.559a.25.25 0 0 1 0 .428l-4.264 2.559A.25.25 0 0 1 6 10.559V5.442a.25.25 0 0 1 .379-.215Z"/></svg>
  <!-- video container -->
  <div class="video-container" id="video-container">
        <!-- video-box -->
        <div class="video-box" >
        <video id="myvideo" class="myvideo" src="css/Watch Blue Beetle (2023).mp4"  controls></video>
        </div>
        <h1 class="close-video" id="close">x</h1>
      </div>
    </div>
  <div class="about-movie container">
    <h2>blue beetle</h2>
    <p>Blue Beetle is one of the oldest comic characters. The first Blue Beetle was Dan Garrett, who premiered in 1940. Fox Comics published the character before he was acquired by Charlton Comics, who relaunched the character as an archeologist who received powers from a magical Scarab </p>
   <!-- movie cast --> 
   <h2 class="cast-heading">movie cast</h2>
   <div class="cast">
    <div class="cast-box">
        <img src="files/cast/blue/Belissa Escobedo.jfif" alt="" class="cast-img">
        <span class="cast-title">milagro reyes</span>
    </div>
   
    <div class="cast-box">
        <img src="files/cast/blue/Raoul Trujillo.jfif" alt="" class="cast-img">
        <span class="cast-title">conrapax</span>
    </div>
    <div class="cast-box">
        <img src="files/cast/blue/Xolo Maridueña.jfif" alt="" class="cast-img">
        <span class="cast-title">blue beetle</span>
    </div>
   </div>
</div>
<div class="download">
    <div class="download-title">download movie</div>
    <div class="download-links">
        <a href="play-page/y2mate.com - BLUE BEETLE  OFFICIAL FINAL TRAILER_720p.mp4" download>480p</a>
        <a href="play-page/y2mate.com - BLUE BEETLE  OFFICIAL FINAL TRAILER_720p.mp4" download>7200p</a>
        <a href="play-page/y2mate.com - BLUE BEETLE  OFFICIAL FINAL TRAILER_720p.mp4" download>1080p</a>
    </div>
</div>
   <div class="copyright">
   <p>&#169; gilsupertuyambaze all right reserved</p>
</div>







  <script src="js/play.js"></script>
  <script src="js/search.js"></script>
  <script src="js/close.js"></script>
 <script src="js/main.js"></script>

</body>
</html>