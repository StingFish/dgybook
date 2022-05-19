<?php
 session_start();
if(isset($_SESSION['User'])) {
     header("Location: storage.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User2'])) {
     header("Location: admin.php"); // redirects them to homepage
     exit; // for good measure
}
if(isset($_SESSION['User3'])) {
     header("Location: template/menu.php"); // redirects them to homepage
     exit; // for good measure
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dr. Filemon C. Aguilar Memorial College of Las Piñas, ModernYearbook!">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Home</title>
    <link rel="shortcut icon" href="CvSU/logo-removebg.png">
    <link rel="stylesheet" href="npage.css" media="screen">
<link rel="stylesheet" href="Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="page.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.22, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo-removebg.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
    <style>
      video {
  max-width: 100%;
  height: auto;
}
    </style>
  </head>
  <body class="u-body" style="overflow-x:hidden"><header class="u-clearfix u-header u-palette-1-dark-2 u-header" id="sec-f6c8" style="background-color:#0276d8"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="328" data-image-height="336">
          <img src="images/logo-removebg.png" class="u-logo-image u-logo-image-1">
        </a>
        <a href="LC.php" class="u-btn u-button-style u-btn-1">SIGN IN<br>
        </a>
        <h1 class="u-text u-text-default u-text-1">DFCAMCLP-IT Campus</h1>
        <p class="u-text u-text-default u-text-2">DIGITAL&nbsp;YEARBOOK</p>
      </div></header>
    <section class="u-clearfix u-section-1" id="carousel_25e8">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-size-22">
                  <div class="u-layout-col">
                    <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-white u-layout-cell-1">
                      <div class="u-container-layout u-container-layout-1">
                        <h3 class="u-text u-text-1">about<br>
                        </h3>
                        <h1 class="u-heading-font u-text u-title u-text-2">Modern<br>Yearbook!
                        </h1>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="u-size-38">
                  <div class="u-layout-col">
                    <div class="u-container-style u-image u-layout-cell u-right-cell u-size-60 u-image-1" data-image-width="1020" data-image-height="559">
                      <div class="u-container-layout u-container-layout-2"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-15 u-size-30-md u-image-2" data-image-width="1619" data-image-height="1080">
                  <div class="u-container-layout u-container-layout-3"></div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-size-15 u-size-30-md u-image-3" data-image-width="393" data-image-height="320">
                  <div class="u-container-layout u-container-layout-4"></div>
                </div>
                <div class="u-container-style u-layout-cell u-size-15 u-size-30-md u-layout-cell-5">
                  <div class="u-container-layout u-container-layout-5">
                    <h4 class="u-text u-text-3">Access ANYWHERE<br>
                    </h4>
                    <p class="u-text u-text-4">Enjoy every shared moments with your friends and classmate, reminisce&nbsp; and be valued.<br>
                    </p>
                    <p class="u-text u-text-5">We offered free yearbook to view on your mobile phone. online and portable yearbook in a modern world!<br>
                    </p>
                  </div>
                </div>
                <div class="u-container-style u-image u-layout-cell u-right-cell u-size-15 u-size-30-md u-image-4" data-image-width="416" data-image-height="500">
                  <div class="u-container-layout u-container-layout-6"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-palette-1-dark-1 u-valign-top-lg u-valign-top-xl u-section-2" id="carousel_7d09" style="background-color:#0276d8">
      <div class="u-expanded-width u-shape u-shape-rectangle u-white u-shape-1"></div>
      <div class="u-list u-list-1">
        <div class="u-repeater u-repeater-1">
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-1">
            <div class="u-container-layout u-similar-container u-container-layout-1"><span class="u-align-left u-file-icon u-icon u-icon-rectangle u-palette-1-light-2 u-spacing-22 u-icon-1"><img src="images/1579643.png" alt=""></span>
              <h5 class="u-custom-font u-text u-text-default u-text-font u-text-1"> modern</h5>
              <p class="u-text u-text-palette-5-dark-2 u-text-2">It is related to the new generation that will help the campus.</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-2">
            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-align-left u-file-icon u-icon u-icon-rectangle u-palette-1-light-2 u-spacing-22 u-icon-2"><img src="images/4963638.png" alt=""></span>
              <h5 class="u-custom-font u-text u-text-default u-text-font u-text-3"> portable</h5>
              <p class="u-text u-text-palette-5-dark-2 u-text-4">You can access it everywhere you are by just opening it to your browser in smart phones, Laptop, Personal Computer, etc. </p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-3">
            <div class="u-container-layout u-similar-container u-container-layout-3"><span class="u-align-left u-file-icon u-icon u-icon-rectangle u-palette-1-light-2 u-spacing-22 u-icon-3"><img src="images/3596080.png" alt=""></span>
              <h5 class="u-custom-font u-text u-text-default u-text-font u-text-5"> eASY aCCESS</h5>
              <p class="u-text u-text-palette-5-dark-2 u-text-6">No long procedure to access your digital yearbook. Just sign-in and youre good to go.</p>
            </div>
          </div>
          <div class="u-align-center u-container-style u-list-item u-repeater-item u-white u-list-item-4">
            <div class="u-container-layout u-similar-container u-container-layout-4"><span class="u-align-left u-file-icon u-icon u-icon-rectangle u-palette-1-light-2 u-spacing-22 u-icon-4"><img src="images/3898786.png" alt=""></span>
              <h5 class="u-custom-font u-text u-text-default u-text-font u-text-7"> free</h5>
              <p class="u-text u-text-palette-5-dark-2 u-text-8">It is because it has no paper to print and you don't need to wait long time to have it.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="carousel_9e96">
      <div class="u-expanded-width u-palette-1-dark-2 u-shape u-shape-rectangle u-shape-1" style="background-color:#0276d8"></div>
      <div class="u-clearfix u-gutter-20 u-layout-wrap u-layout-wrap-1">
        <div class="u-gutter-0 u-layout">
          <div class="u-layout-row">
            <div class="u-align-center u-container-style u-layout-cell u-shape-rectangle u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <p class="u-text u-text-body-alt-color u-text-1">Rest assured of steadfast commitment to provide every Las Pinas free and
 quality education to prepare you become more productive and responsible
 citizens.&nbsp;</p>
                <p class="u-text u-text-palette-2-light-2 u-text-2">Mayor Vergel "Nene" Aguilar </p>
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-30 u-image-1" data-image-width="415" data-image-height="260">
              <div class="u-container-layout u-container-layout-2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-c0f6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h5 class="u-align-justify u-text u-text-1" style="word-wrap: break-word;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DFCAMCLP started as a special project of&nbsp;former Mayor Vergel "Nene" A. Aguilar&nbsp;backed up and supported by his wife, the incumbient&nbsp;City Mayor Imelda T. Aguilar.&nbsp;City Ordinance&nbsp;No. 352-97 Series of 1997&nbsp;was enacted on&nbsp;August 13, 1997&nbsp;establishing DFCAMCLP.<br>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The school was named in honor of his father namely,&nbsp;Dr. Filemon C. Aguilar. In&nbsp;March 12, 1998, the inauguration of a campus is also the birthdate of DFCAMCLP Founder Former Mayor&nbsp;Imelda "Nene" Aguilar. DFCAMC began to offer courses of&nbsp;Bachelor of Science in Business Administration Major in Management, Marketing, Entrepreneurship, Economics and Banking and Finance&nbsp;in&nbsp;March 12, 1998&nbsp;with a total of&nbsp;1,083&nbsp;enrolled from various secondary schools. In&nbsp;October 7, 1998, the issuance of&nbsp;<b>City Accordance No. 417-A-98</b>&nbsp;correct the spelling of Felimon to Filemon.&nbsp;<br>
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The College Offered a new program, the&nbsp;<b>Bachelor of Science in Accountancy</b>. It is complimented it's other program, the&nbsp;<b>Bachelor of Science in Business Accountancy</b>&nbsp;strengthening DFCAMC’s mandate to become a full-blown school of business. In a year&nbsp;<b>2000</b>, the school affiliated with&nbsp;<b>American Civil Liberties Union</b>&nbsp;making its presence felt across the region. The college disproved the elitist notion that quality education is the monopoly with expensive private colleges and universities. The first commencement exercises was held at Aguilar Sports Complex in Pilar Village, Las Pinas City in&nbsp;<b>April 5, 2002</b>&nbsp;with&nbsp;<b>558</b>&nbsp;graduates. In October 2003, DFCAMCLP produced its first three CPA passers with 50% passing rate. In April 2009, the City Ordinance No. 887-09 Series of 2009 changed the name of the school to&nbsp;<b>Dr. Filemon C. Aguilar Memorial College of Las Pinas (DFCAMCLP)<b>.</b></b>
          <br>
        </h5>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-c0f6">
      <div class="u-clearfix u-sheet u-sheet-1">

        <center><h2 class="u-text u-text-default u-text-5"> DFCAMCLP Hymn</h2><video controls>
  <source src="asa.mp4" type="video/mp4">
  Your browser does not support HTML video.
</video></center>
      </div>
    </section>
    <section class="u-clearfix u-grey-5 u-section-5" id="carousel_e927">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-size-30 u-size-60-md">
                <div class="u-layout-col">
                  <div class="u-size-20">
                    <div class="u-layout-row">
                      <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1">
                        <div class="u-container-layout u-valign-bottom-md u-valign-bottom-sm u-valign-bottom-xs u-valign-top-lg u-container-layout-1"><span class="u-icon u-icon-circle u-text-grey-30 u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-2d08"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-2d08" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="u-svg-content"><g><g><path d="M256,0C153.755,0,70.573,83.182,70.573,185.426c0,126.888,165.939,313.167,173.004,321.035    c6.636,7.391,18.222,7.378,24.846,0c7.065-7.868,173.004-194.147,173.004-321.035C441.425,83.182,358.244,0,256,0z M256,278.719    c-51.442,0-93.292-41.851-93.292-93.293S204.559,92.134,256,92.134s93.291,41.851,93.291,93.293S307.441,278.719,256,278.719z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                          <p class="u-text u-text-1">Dandelion Street, Doña Manuela Subd., Pamplona III, Las Piñas City</p><span class="u-icon u-icon-circle u-text-grey-30 u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-fd2b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-fd2b" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="u-svg-content"><g><g><path d="M467,61H45c-6.927,0-13.412,1.703-19.279,4.51L255,294.789l51.389-49.387c0,0,0.004-0.005,0.005-0.007    c0.001-0.002,0.005-0.004,0.005-0.004L486.286,65.514C480.418,62.705,473.929,61,467,61z"></path>
</g>
</g><g><g><path d="M507.496,86.728L338.213,256.002L507.49,425.279c2.807-5.867,4.51-12.352,4.51-19.279V106    C512,99.077,510.301,92.593,507.496,86.728z"></path>
</g>
</g><g><g><path d="M4.51,86.721C1.703,92.588,0,99.073,0,106v300c0,6.923,1.701,13.409,4.506,19.274L173.789,256L4.51,86.721z"></path>
</g>
</g><g><g><path d="M317.002,277.213l-51.396,49.393c-2.93,2.93-6.768,4.395-10.605,4.395s-7.676-1.465-10.605-4.395L195,277.211    L25.714,446.486C31.582,449.295,38.071,451,45,451h422c6.927,0,13.412-1.703,19.279-4.51L317.002,277.213z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                          <p class="u-text u-text-default u-text-2">
                            <a class="a8nywdso cxmmr5t8 e9989ue4 esr5mh6w esuyzwwr f1sip0of g5ia77u1 gpro0wi8 hcukyx3x i1ao9s8h jb3vyjys kvgmc6g5 lzcic4wl nc684nl6 nhd2j8a9 oajrlxb2 oygrvhab p7hjln8o py34i1dx qt6c0cv9 qu0x051f r7d6kgcz rq0escxv rz4wbd8a u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-black u-btn-1" href="mailto:dfcamclp.sc@gmail.com" role="link" tabindex="0" target="_blank" waprocessedanchor="true">dfcamclpit .sc@gmail.com</a>
                          </p>
                        </div>
                      </div>
                      <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                        <div class="u-container-layout u-valign-top-lg u-valign-top-md u-valign-top-sm u-valign-top-xs u-container-layout-2"><span class="u-icon u-icon-circle u-text-grey-30 u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 384 384" style=""><use xlink:href="#svg-ec0a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-ec0a" x="0px" y="0px" viewBox="0 0 384 384" style="enable-background:new 0 0 384 384;" xml:space="preserve" class="u-svg-content"><g><g><path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594    c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448    c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813    C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                          <p class="u-text u-text-default u-text-3">831-36-81</p><span class="u-icon u-icon-circle u-text-grey-30 u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xlink:href="#svg-759b"></use></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="svg-759b" class="u-svg-content"><path d="m437 0h-362c-41.351562 0-75 33.648438-75 75v362c0 41.351562 33.648438 75 75 75h151v-181h-60v-90h60v-61c0-49.628906 40.371094-90 90-90h91v90h-91v61h91l-15 90h-76v181h121c41.351562 0 75-33.648438 75-75v-362c0-41.351562-33.648438-75-75-75zm0 0"></path></svg></span>
                          <p class="u-text u-text-default u-text-4">@dfcamclpitcampus</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-size-40">
                    <div class="u-layout-row">
                      <div class="u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-3">
                        <div class="u-container-layout u-container-layout-3">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-20">
                <div class="u-layout-col">
                  <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-4">
                    <div class="u-container-layout u-valign-top u-container-layout-4">
                      <h3 class="u-text u-text-default u-text-5">Where are we located?</h3>
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3863.4027351751192!2d120.97595805259947!3d14.461548604989556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397cde60d559419%3A0xe6bc9468dea5b8ab!2sDr.%20Filemon%20C.%20Aguilar%20Information%20Technology%20Training%20Institute!5e0!3m2!1sen!2sph!4v1642131417389!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-649c"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">© 2022. Dr Felimon C Aguilar Memorial College Las Pinas - IT Campus.<br> All rights reserved.</p>
        <a href="about.php">About the developers</a>
      </div></footer>
  </body>
</html>
