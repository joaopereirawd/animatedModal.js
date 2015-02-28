<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>animatedModal.js</title>
        <meta name="description" content="animatedModal.js is a jQuery plugin to create a fullscreen modal with CSS3 transitions. you can use the transitions by animate.css or create yourself their transitions.">
       
        <!--twitter-->
        <meta name="twitter:site" content="http://joaopereirawd.github.io/animatedModal.js">
        <meta name="twitter:title" content="animatedModal.js">
        <meta name="twitter:description" content="animatedModal.js is a jQuery plugin to create a fullscreen modal with CSS3 transitions. you can use the transitions by animate.css or create yourself their transitions.">
        <meta name="twitter:image:src" content="http://joaopereirawd.github.io/animatedModal.js/img/social-thumb.jpg">
        <!--og api-->
        <meta property="og:title" content="animatedModal.js" />
        <meta property="og:url" content="http://joaopereirawd.github.io/animatedModal.js"/>
        <meta property="og:image" content="http://joaopereirawd.github.io/animatedModal.js/img/social-thumb.jpg" />
        <meta property="og:description" content="animatedModal.js is a jQuery plugin to create a fullscreen modal with CSS3 transitions. you can use the transitions by animate.css or create yourself their transitions." />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/animate.css">

        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <section id="section-top">
            <h1 class="project-title">animatedModal.js</h1>
            <div class="container">
                <div id="animation-container">
                    <?php include ('includes/browser.html') ?>
                </div>
            </div>
        </section>


        <section id="section-default">
            <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 text-center">
                <div class="col-sm-8 col-md-8 col-lg-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                    <p style="font-size:20px;">
                        <b>animatedModal.js</b> is a jQuery plugin to create a fullscreen modal with CSS3 transitions. you can use the transitions by <a href="http://daneden.github.io/animate.css/" target="_blank">animate.css</a> or create yourself their transitions.
                    </p>
                    <button class="btn-black">DOWNLOAD VERSION 1.0</button>
                </div>
            </div>
        </section>

        <section id="section-default" bgColor="whitesmoke">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h3>Demos</h3>

                <div id="item" class="clearfix col-sm-4 col-md-4 col-lg-4 mt mb">
                    <a id="demo01" class="btn" href="#animatedModal">01</a>
                    <p><b>animatedIn</b>: 'zoomIn',</p>
                    <p><b>animatedOut</b>: 'bounceOut'</p>
                </div>

                <div id="item" class="clearfix col-sm-4 col-md-4 col-lg-4 mt mb">
                    <a id="demo02" class="btn" href="#lightSpeedIn">02</a>
                    <p><b>animatedIn</b>: lightSpeedIn</p>
                    <p><b>animatedOut</b>: bounceOutDown</p>
                </div> 

                <div id="item" class="clearfix col-sm-4 col-md-4 col-lg-4 mt mb">
                    <a id="demo03" class="btn" href="#teste">03</a>
                    <p><b>animatedIn</b>: lightSpeedIn</p>
                    <p><b>animatedOut</b>: bounceOutDown</p>
                </div> 

            </div>
        </section>

        <section id="section-default">
            <div class="col-lg-8 col-lg-offset-2 text-left">
                <span class="text-center">
                    <h4 class="title"><span class="number">1</span> Include Animate.css inside &lt;head&gt; tag</h4>
                </span>
                <script src="https://gist.github.com/joaopereirawd/d64c54b943e9e7469c59.js"></script>
            </div>      
        </section>


        <section id="section-default">
            <div class="col-lg-8 col-lg-offset-2 text-left">
                <span class="text-center">
                    <h4 class="title"><span class="number">2</span> Include inside &lt;body&gt; tag</h4>
                </span>
                <script src="https://gist.github.com/joaopereirawd/1d458515e2a8eec54b3b.js"></script>
            </div>      
        </section>

        <section id="section-default">
            <div class="col-lg-8 col-lg-offset-2 text-left">
                <span class="text-center">
                    <h4 class="title"><span class="number">3</span> Include Folowing Libraries on bottom of your &lt;/body&gt; tag </h4>
                </span>
                <script src="https://gist.github.com/joaopereirawd/115ce3f21d505e81568e.js"></script>
            </div>      
        </section>

        <section id="section-default">
            <div class="col-lg-8 col-lg-offset-2 text-left">
                <span class="text-center">
                    <h4 class="title">
                        <span class="number">4</span> Basic Initialize
                    </h4>
                </span>
                    <script src="https://gist.github.com/joaopereirawd/238d4b09ef4b3a729d66.js"></script>
                </div>      
        </section>

        <section id="section-default">
            <h3>Options</h3>
            <div class="col-lg-8 col-lg-offset-2 text-left mt">
                <table id="am-table" class="table table-striped">
                  <thead>
                    <tr>
                      <th>Variable</th>
                      <th>Default Value</th>
                      <th>Options</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>modalTarget</td>
                      <td>animatedModal</td>
                      <td></td>
                      <td>Costumize your target</td>
                    </tr>
                    <tr>
                      <td>color</td>
                      <td>#39BEB9</td>
                      <td>HEX, HSL, RGB, RBA</td>
                      <td>Define background bolor</td>
                    </tr>
                    <tr>
                      <td>animatedIn</td>
                      <td>zoomIn</td>
                      <td>Choose <a href="http://daneden.github.io/animate.css/" target="_blank">Here</a></td>
                      <td>Transition when the modal goes in </td>
                    </tr>
                    <tr>
                      <td>animatedOut</td>
                      <td>zoomOut</td>
                      <td>Choose <a href="http://daneden.github.io/animate.css/" target="_blank">Here</a></td>
                      <td>Transition when the modal goes out</td>
                    </tr>
                    <tr>
                      <td>animationDuration</td>
                      <td>.6s</td>
                      <td>seconds</td>
                      <td>Animation duration</td>
                    </tr>
                    <tr>
                      <td>overflow</td>
                      <td>auto</td>
                      <td>scroll; hidden; auto;</td>
                      <td>This makes your modal scrollable or not</td>
                    </tr>
                  </tbody>
                </table>
            </div>      
        </section>

   
        <section id="section-default" bgColor="whitesmoke" style="color:#BCBCBC;">
            <h3>CROSS BROWSER SUPPORT</h3>

            <div id="b-icons" class="text-center mt mb">

                <div id="col-icons" class="col-sm-3 col-md-4 col-lg-3">
                    <img src="img/icon_ie.svg">
                </div>

                <div id="col-icons" class="col-sm-3 col-md-4 col-lg-3">
                    <img src="img/icon_firefox.svg">
                </div>

                <div id="col-icons" class="col-sm-3 col-md-4 col-lg-3">
                    <img src="img/icon_chrome.svg">
                </div>

                <div id="col-icons" class="col-sm-3 col-md-4 col-lg-3">
                    <img src="img/icon_safari.svg">
                </div>

                <div id="col-icons" class="col-sm-3 col-md-4 col-lg-3">
                    <img src="img/icon_opera.svg">
                </div>

            </div>
      
        </section> 

        <section id="section-default" bgColor="emerald" style="color:#fff;">
            <h3>let's help the world together!</h3>
            <div  class="col-lg-10 col-lg-offset-1">
                <div id="icon-share" class="col-sm-2 col-md-2 col-lg-2 mt text-center">
                    <a href="javascript:window.open('https://www.facebook.com/sharer/sharer.php?u=http://joaopereirawd.github.io/animatedModal.js', '_blank', 'width=600,height=500');void(0);">
                        <img class="wow animated zoomIn" data-wow-delay="300ms" src="img/icon_facebook.svg" onmouseover="this.src='img/icon_facebook_hover.svg'" onmouseout="this.src='img/icon_facebook.svg'">
                    </a>
                </div>

                <div id="icon-share" class="col-sm-2 col-md-2 col-lg-2 mt text-center">
                    <a href="javascript:window.open('https://twitter.com/home?status=http://joaopereirawd.github.io/animatedModal.js', 'Share animatedModal.js on Twitter', 'width=640, height=480, resizable, status, scrollbars=1, location');">
                        <img class="wow animated zoomIn" data-wow-delay="400ms" src="img/icon_twitter.svg" onmouseover="this.src='img/icon_twitter_hover.svg'" onmouseout="this.src='img/icon_twitter.svg'">
                    </a>
                </div>

                <div id="icon-share" class="col-sm-4 col-md-4 col-lg-4 mt text-center">
                    <img class="img-responsive" src="img/world.svg">
                </div>

                <div id="icon-share" class="col-sm-2 col-md-2 col-lg-2 mt text-center">
                    <a href="javascript:window.open('https://plus.google.com/share?url=http://joaopereirawd.github.io/animatedModal.js', 'Share animatedModal.js on Google+', 'width=640, height=480, resizable, status, scrollbars=1, location');">
                        <img class="wow animated zoomIn" data-wow-delay="500ms" src="img/icon_google.svg" onmouseover="this.src='img/icon_google_hover.svg'" onmouseout="this.src='img/icon_google.svg'">
                    </a>
                </div>
                <div id="icon-share" class="col-sm-2 col-md-2 col-lg-2 mt text-center">
                    <a href="javascript:window.open('https://www.linkedin.com/shareArticle?mini=true&url=http://joaopereirawd.github.io/animatedModal.js&title=animatedModal.js&summary=&source=')">
                        <img class="wow animated zoomIn" data-wow-delay="600ms" src="img/icon_linkedin.svg" onmouseover="this.src='img/icon_linkedin_hover.svg'" onmouseout="this.src='img/icon_linkedin.svg'">
                    </a>
                </div>
            </div>
        </section>

        <section id="section-button" bgColor="alazarin" style="color:#fff;">
            <button class="btn btn-lg btn-white">FORK ON GITHUB <i class="fa fa-github"></i></button>
        </section>

        <footer id="footer" bgColor="white" >
            <div class="container text-center mt mb">
                <div id="footer-col" class="col-sm-4 col-md-4 col-lg-4">
                    <h5>LICENSE</h5>
                    <p><a href="http://opensource.org/licenses/mit-license.html" target="_blank">MIT License</a></p>
                </div>
                <div id="footer-col" class="col-sm-4 col-md-4 col-lg-4">
                    <h5>MANY THANKS TO</h5>
                    <p><a href="http://daneden.me/" target="_blank">Daniel Eden</a></p>
                </div>
                <div id="footer-col" class="col-sm-4 col-md-4 col-lg-4">
                    <h5>DONATE A JOB</h5>
                    <a href="mailto:joaopereirawd@gmail.com?Subject=Job%20Opportunity" target="_top">
                        <button class="btn-black">HIRE ME <i class="fa fa-envelope"></i></button>
                    </a>

                </div>
            </div>

            <div id="footer-sign" class="container text-center">
                <small>created with <i class="fa fa-heart" style="color:#39BEB9"></i> by <a href="https://www.linkedin.com/in/joaopereirawd" target="_blank">joaopereira</a></small>
            </div>

        </footer>


        <!--All Modals-->
        <div id="animatedModal">
            <div id="closebt-container" class="close-animatedModal">
                <img class="closebt" src="img/closebt.svg">
            </div>

            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">

                <div class="thumb col-lg-4" style="display:none;" >
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4"  style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>
           </div>

        </div>

        <div id="lightSpeedIn">
            <div id="closebt-container" class="close-lightSpeedIn">
                <img class="closebt" src="img/closebt.svg">
            </div>
            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>
           </div>
        </div>

        <div id="teste">
            <div id="closebt-container" class="close-teste">
                <img class="closebt" src="img/closebt.svg">
            </div>
            <div id="modal-container" class="col-sm-8 col-md-8 col-lg-8 col-lg-offset-2">

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>

                <div class="thumb col-lg-4" style="display:none;">
                    <img  src="img/thumbnail.svg">
                </div>
           </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/animatedModal.min.js"></script>
        <script src="js/main.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
    </body>
</html>
