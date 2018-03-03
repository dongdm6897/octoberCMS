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
        
  
    
    

      
    </head>
    
    
    
    
    <body>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '408330072951583',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
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
        
  
    
    

      
    </head>
    
    
    
    
    <body>
        <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '408330072951583',
      cookie     : true,
      xfbml      : true,
      version    : 'v2.8'
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
