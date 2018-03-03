<?php

/* C:\xampp\htdocs\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/login.htm */
class __TwigTemplate_68dbf00854f4cfc1d6b50a2f26881f3aa2f1bfa4b7db115411bfd6907e538962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCUTYE html>

<html>
    <head>
        <meta name=\"google-signin-client_id\" content=\"99613043205-6fen8km2e2b77ft7erj7t68m2emijmfg.apps.googleusercontent.com\">
        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script> 
    <link rel=\"stylesheet\" href=\"/themes/zanor-zanor-mdb-loaded/assets/css/login.css\" />

     <style type=\"text/css\">
            
    
        * { box-sizing:border-box; }

body {
\tfont-family: Helvetica;
\tbackground: #eee;
  -webkit-font-smoothing: antialiased;
}

hgroup { 
\ttext-align:center;
\tmargin-top: 4em;
}

h1, h3 { font-weight: 300; }

h1 { color: #636363; }

h3 { color: #4a89dc; }

form {
\twidth: 380px;
\tmargin: 4em auto;
\tpadding: 3em 2em 2em 2em;
\tbackground: #fafafa;
\tborder: 1px solid #ebebeb;
\tbox-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
\tposition: relative; 
\tmargin-bottom: 45px; 
}

input {
\tfont-size: 18px;
\tpadding: 10px 10px 10px 5px;
\t-webkit-appearance: none;
\tdisplay: block;
\tbackground: #fafafa;
\tcolor: #636363;
\twidth: 100%;
\tborder: none;
\tborder-radius: 0;
\tborder-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
\tcolor: #999; 
\tfont-size: 18px;
\tfont-weight: normal;
\tposition: absolute;
\tpointer-events: none;
\tleft: 5px;
\ttop: 10px;
\ttransition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
\ttop: -20px;
  transform: scale(.75); left: -2px;
\t/* font-size: 14px; */
\tcolor: #4a89dc;
}


/* Underline */

.bar {
\tposition: relative;
\tdisplay: block;
\twidth: 100%;
}

.bar:before, .bar:after {
\tcontent: '';
\theight: 2px; 
\twidth: 0;
\tbottom: 1px; 
\tposition: absolute;
\tbackground: #4a89dc; 
\ttransition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
\tposition: absolute;
\theight: 60%; 
\twidth: 100px; 
\ttop: 25%; 
\tleft: 0;
\tpointer-events: none;
\topacity: 0.5;
}


/* active */

input:focus ~ .highlight {
\tanimation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
\tfrom { background: #4a89dc; }
\tto \t{ width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }


/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}


/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}

footer { text-align: center; }

footer p {
\tcolor: #888;
\tfont-size: 13px;
\tletter-spacing: .4px;
}

footer a {
\tcolor: #4a89dc;
\ttext-decoration: none;
\ttransition: all .2s ease;
}

footer a:hover {
\tcolor: #666;
\ttext-decoration: underline;
}

footer img {
\twidth: 80px;
\ttransition: all .2s ease;
}

footer img:hover { opacity: .83; }

footer img:focus , footer a:focus { outline: none; }

        </style>

      
    </head>
    
    
    
    
    <body>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '408330072951583',
      cookie     : true,
      xfbml      : true,
      version    : ''
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"https://connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
           
        
        <hgroup>
              <h1>Farm Up</h1>
              <h3>Login</h3>
        </hgroup>
        <form>
            <div class=\"group\">
                <input type=\"text\"><span class=\"highlight\"></span><span class=\"bar\"></span>
                <label>Name</label>
            </div>
            <div class=\"group\">
                <input type=\"email\"><span class=\"highlight\"></span><span class=\"bar\"></span>
                <label>Email</label>
            </div>
            <button type=\"button\" class=\"button buttonBlue\">Subscribe
                <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
            </button>
            
            <div class=\"g-signin2\" data-onsuccess=\"onSignIn\" ></div>
            <fb:login-button 
  scope=\"public_profile,email\"
  onlogin=\"checkLoginState();\">
</fb:login-button>
        </form>
        
       
     
        <footer><a href=\"http://www.polymer-project.org/\" target=\"_blank\"><img src=\"https://www.polymer-project.org/images/logos/p-logo.svg\"></a>
          <p>You Gotta Love <a href=\"http://www.polymer-project.org/\" target=\"_blank\">Google</a></p>
        </footer>
       
        
        
        
        
        
        
        
    
    
    </body>
</html>
<script>
    \$(window, document, undefined).ready(function() {

  \$('input').blur(function() {
    var \$this = \$(this);
    if (\$this.val())
      \$this.addClass('used');
    else
      \$this.removeClass('used');
  });

  var \$ripples = \$('.ripples');

  \$ripples.on('click.Ripples', function(e) {

    var \$this = \$(this);
    var \$offset = \$this.parent().offset();
    var \$circle = \$this.find('.ripplesCircle');

    var x = e.pageX - \$offset.left;
    var y = e.pageY - \$offset.top;

    \$circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    \$this.addClass('is-active');

  });

  \$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  \t\$(this).removeClass('is-active');
  });

});
</script>

<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
         //console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
       //console.log('Name: ' + profile.getName());
       //console.log('Image URL: ' + profile.getImageUrl());
       //console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
       //\$(\".g-signin2\").css(\"display\",\"none\")
       \$(\"#pic\").attr('src',profile.getImageUrl());
       \$(\".data\").css(\"display\",\"block\")

       \$(\"#email\").text(profile.getEmail());
       }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
        console.log('User signed out.');
        alert(\"ban da dang xuat\");
        });
      }
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/login.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCUTYE html>

<html>
    <head>
        <meta name=\"google-signin-client_id\" content=\"99613043205-6fen8km2e2b77ft7erj7t68m2emijmfg.apps.googleusercontent.com\">
        <script src=\"https://apis.google.com/js/platform.js\" async defer></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script> 
    <link rel=\"stylesheet\" href=\"/themes/zanor-zanor-mdb-loaded/assets/css/login.css\" />

     <style type=\"text/css\">
            
    
        * { box-sizing:border-box; }

body {
\tfont-family: Helvetica;
\tbackground: #eee;
  -webkit-font-smoothing: antialiased;
}

hgroup { 
\ttext-align:center;
\tmargin-top: 4em;
}

h1, h3 { font-weight: 300; }

h1 { color: #636363; }

h3 { color: #4a89dc; }

form {
\twidth: 380px;
\tmargin: 4em auto;
\tpadding: 3em 2em 2em 2em;
\tbackground: #fafafa;
\tborder: 1px solid #ebebeb;
\tbox-shadow: rgba(0,0,0,0.14902) 0px 1px 1px 0px,rgba(0,0,0,0.09804) 0px 1px 2px 0px;
}

.group { 
\tposition: relative; 
\tmargin-bottom: 45px; 
}

input {
\tfont-size: 18px;
\tpadding: 10px 10px 10px 5px;
\t-webkit-appearance: none;
\tdisplay: block;
\tbackground: #fafafa;
\tcolor: #636363;
\twidth: 100%;
\tborder: none;
\tborder-radius: 0;
\tborder-bottom: 1px solid #757575;
}

input:focus { outline: none; }


/* Label */

label {
\tcolor: #999; 
\tfont-size: 18px;
\tfont-weight: normal;
\tposition: absolute;
\tpointer-events: none;
\tleft: 5px;
\ttop: 10px;
\ttransition: all 0.2s ease;
}


/* active */

input:focus ~ label, input.used ~ label {
\ttop: -20px;
  transform: scale(.75); left: -2px;
\t/* font-size: 14px; */
\tcolor: #4a89dc;
}


/* Underline */

.bar {
\tposition: relative;
\tdisplay: block;
\twidth: 100%;
}

.bar:before, .bar:after {
\tcontent: '';
\theight: 2px; 
\twidth: 0;
\tbottom: 1px; 
\tposition: absolute;
\tbackground: #4a89dc; 
\ttransition: all 0.2s ease;
}

.bar:before { left: 50%; }

.bar:after { right: 50%; }


/* active */

input:focus ~ .bar:before, input:focus ~ .bar:after { width: 50%; }


/* Highlight */

.highlight {
\tposition: absolute;
\theight: 60%; 
\twidth: 100px; 
\ttop: 25%; 
\tleft: 0;
\tpointer-events: none;
\topacity: 0.5;
}


/* active */

input:focus ~ .highlight {
\tanimation: inputHighlighter 0.3s ease;
}


/* Animations */

@keyframes inputHighlighter {
\tfrom { background: #4a89dc; }
\tto \t{ width: 0; background: transparent; }
}


/* Button */

.button {
  position: relative;
  display: inline-block;
  padding: 12px 24px;
  margin: .3em 0 1em 0;
  width: 100%;
  vertical-align: middle;
  color: #fff;
  font-size: 16px;
  line-height: 20px;
  -webkit-font-smoothing: antialiased;
  text-align: center;
  letter-spacing: 1px;
  background: transparent;
  border: 0;
  border-bottom: 2px solid #3160B6;
  cursor: pointer;
  transition: all 0.15s ease;
}
.button:focus { outline: 0; }


/* Button modifiers */

.buttonBlue {
  background: #4a89dc;
  text-shadow: 1px 1px 0 rgba(39, 110, 204, .5);
}

.buttonBlue:hover { background: #357bd8; }


/* Ripples container */

.ripples {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  background: transparent;
}


/* Ripples circle */

.ripplesCircle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  width: 0;
  height: 0;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.25);
}

.ripples.is-active .ripplesCircle {
  animation: ripples .4s ease-in;
}


/* Ripples animation */

@keyframes ripples {
  0% { opacity: 0; }

  25% { opacity: 1; }

  100% {
    width: 200%;
    padding-bottom: 200%;
    opacity: 0;
  }
}

footer { text-align: center; }

footer p {
\tcolor: #888;
\tfont-size: 13px;
\tletter-spacing: .4px;
}

footer a {
\tcolor: #4a89dc;
\ttext-decoration: none;
\ttransition: all .2s ease;
}

footer a:hover {
\tcolor: #666;
\ttext-decoration: underline;
}

footer img {
\twidth: 80px;
\ttransition: all .2s ease;
}

footer img:hover { opacity: .83; }

footer img:focus , footer a:focus { outline: none; }

        </style>

      
    </head>
    
    
    
    
    <body>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '408330072951583',
      cookie     : true,
      xfbml      : true,
      version    : ''
    });
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = \"https://connect.facebook.net/en_US/sdk.js\";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
           
        
        <hgroup>
              <h1>Farm Up</h1>
              <h3>Login</h3>
        </hgroup>
        <form>
            <div class=\"group\">
                <input type=\"text\"><span class=\"highlight\"></span><span class=\"bar\"></span>
                <label>Name</label>
            </div>
            <div class=\"group\">
                <input type=\"email\"><span class=\"highlight\"></span><span class=\"bar\"></span>
                <label>Email</label>
            </div>
            <button type=\"button\" class=\"button buttonBlue\">Subscribe
                <div class=\"ripples buttonRipples\"><span class=\"ripplesCircle\"></span></div>
            </button>
            
            <div class=\"g-signin2\" data-onsuccess=\"onSignIn\" ></div>
            <fb:login-button 
  scope=\"public_profile,email\"
  onlogin=\"checkLoginState();\">
</fb:login-button>
        </form>
        
       
     
        <footer><a href=\"http://www.polymer-project.org/\" target=\"_blank\"><img src=\"https://www.polymer-project.org/images/logos/p-logo.svg\"></a>
          <p>You Gotta Love <a href=\"http://www.polymer-project.org/\" target=\"_blank\">Google</a></p>
        </footer>
       
        
        
        
        
        
        
        
    
    
    </body>
</html>
<script>
    \$(window, document, undefined).ready(function() {

  \$('input').blur(function() {
    var \$this = \$(this);
    if (\$this.val())
      \$this.addClass('used');
    else
      \$this.removeClass('used');
  });

  var \$ripples = \$('.ripples');

  \$ripples.on('click.Ripples', function(e) {

    var \$this = \$(this);
    var \$offset = \$this.parent().offset();
    var \$circle = \$this.find('.ripplesCircle');

    var x = e.pageX - \$offset.left;
    var y = e.pageY - \$offset.top;

    \$circle.css({
      top: y + 'px',
      left: x + 'px'
    });

    \$this.addClass('is-active');

  });

  \$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
  \t\$(this).removeClass('is-active');
  });

});
</script>

<script>
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
         //console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
       //console.log('Name: ' + profile.getName());
       //console.log('Image URL: ' + profile.getImageUrl());
       //console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
       //\$(\".g-signin2\").css(\"display\",\"none\")
       \$(\"#pic\").attr('src',profile.getImageUrl());
       \$(\".data\").css(\"display\",\"block\")

       \$(\"#email\").text(profile.getEmail());
       }

    function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
        console.log('User signed out.');
        alert(\"ban da dang xuat\");
        });
      }
</script>", "C:\\xampp\\htdocs\\octoberCMS/themes/zanor-zanor-mdb-loaded/pages/login.htm", "");
    }
}
