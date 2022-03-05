<!DOCTYPE html>
<html lang="en">


<head> 

    <!-- Basic Page Needs
    ================================================== -->
    <title>Courseplus Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Courseplus is - Professional A unique and beautiful collection of UI elements">

    <!-- Favicon -->
    <link href="public/assets/images/favicon.png" rel="icon" type="image/png">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="public/assets/css/icons.css">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="public/assets/css/uikit.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <link href="public/assets/unpkg/tailwind.min.css" rel="stylesheet">

    <style>
      html,
      body {
        background: white !important
      }
    
      .container {
        max-width: 1000px;
      }
       
      @media (min-width: 960px) {
        .view-on-mobile{  display: none; }
      }
      @media (max-width: 960px) {
        .hide-on-mobile{  display: none; }
      }



      .demo-card {
            color: #4a4a4a;
            text-transform: capitalize;
            position: relative;
        }

        .demo-card img {
            border-radius: 8px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            margin-right: 1px;
        }

        .demo-card:hover.demo-card img,
        .demo-card:hover span.new {
            transition: 0.4s ease all;
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .demo-card span.new {
            color: white;
            padding: 2px 9px;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            right: -12px;
            top: -13px;
            box-shadow: 2px 2px 3px 0px #cecece;
        }

        .demo-card p {
            margin-top: 15px;
            font-size: 16px;
        }

        .bg {
          backdrop-filter: saturate(50%) blur(6px);
          background: #ffffffd1;
         
        }
        .bg .text-3xl{
          font-size: 1.5rem;
          transition: 0.2s all, 0.2s
        }
        .bg .mb-2 {
          margin-bottom: 0.3rem;
          transition: 0.2s all, 0.2s
        }
    </style>

</head>
<body>


  <div class="hero">

    <!--  Header -->
    <div class="container mx-auto">
      <div class="flex items-center justify-between mx-auto py-5">
        <a href="#" class="flex font-semibold items-center lg:text-2xl text-xl text-black">
          <ion-icon name="book" class="mr-2 lg:text-3xl text-xl"></ion-icon>
          Courseplus
        </a>
       <div class="flex items-center space-x-4">
        <nav>
          <ul class="md:flex items-center space-x-3 hidden">
            <li> <a href="#overview" uk-scroll> Overview</a></li>
            <li> <a href="#demo" uk-scroll> Demo</a></li>
            <li> <a href="#features" uk-scroll> Features</a></li>
            <li> <a href="#"></a></li>
          </ul>
        </nav>
        <a href="#" class="bg-black font-medium px-4 py-1.5 rounded-full text-sm text-white"> Buy Now</a>
       </div>
      </div>
    </div>
   
  </div>
  
  <div class="py-4 mb-6 z-50 delimiter-top pt-12" uk-sticky="cls-active: bg delimiter-bottom ; cls-inactive: delimiter-top pt-12">
    <div class="container">

      <a href="http://demo.foxthemes.net/courseplus-v4.3.1/index.html" class="flex items-center mb-2 text-blue-500 text-sm">
        <ion-icon name="chevron-back-outline" class="text-lg md hydrated" role="img" aria-label="chevron back outline"></ion-icon> back
      </a> 
      <div class="lg:text-3xl text-xl leading-snug font-bold text-black">Default Layout</div>
 
    </div>
  </div>

  <div class="pb-12">
    <div class="container">
  
      <div class="uk-child-width-1-3@m uk-child-width-1-2@s uk-flex-center"
        uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 100" uk-grid>
      
        <div>
          <a target="_blank" href="explore.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/explore.png" alt="">
              <p>explore </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="categories.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/category.png" alt="">
              <p>categories </p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="courses.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/courses.png" alt="">
              <p> courses </p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="courses-list.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/courses-list.png" alt="">
              <p> courses list </p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="course-intro.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/courses-intro.png" alt="">
              <p> course intro </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="course-intro-2.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/courses-intro-2.png" alt="">
              <p> course intro 2</p>
            </div>
          </a>
        </div>

        <div>
          <a target="_blank" href="course-watch.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/course-watch.png" alt="">
              <p> Course video</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="course-watch-2.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/course-watch-2.png" alt="">
              <p> Course video 2</p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="episodes.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/episcodes.png" alt="">
              <p> episodes </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="episodes-watch.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/episcodes-watch.png" alt="">
              <p> episode details </p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="books.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/book.png" alt="">
              <p> Book</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="book-description.html">
            <div class="demo-card">
              
              <img src="public/assets/images/demos/default/book-description.png" alt="">
              <p> Book description</p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="blogs.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/blog.png" alt="">
              <p> blog </p>
            </div>
          </a>
        </div> 
        <div>
          <a target="_blank" href="blog-read.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/blog-read.png" alt="">
              <p>blog read </p>
            </div>
          </a>
        </div>
      
        <div>
          <a target="_blank" href="page-forum.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-forum.png" alt="">
              <p> page forum</p>
              <span class="new bg-red-500">New</span>
            </div>
          </a>
        </div>

        <div>
          <a target="_blank" href="page-pricing.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-pricing.png" alt="">
              <p> page pricing </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="page-help.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-help.png" alt="">
              <p> page help</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="page-faq.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-faq.png" alt="">
              <p> page faq</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="page-setting.html">
            <div class="demo-card"> 
              <img src="public/assets/images/demos/default/pages-setting.png" alt="">
              <p> page setting</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="page-privacy.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-privacy.png" alt="">
              <p> page privecy </p>
              <span class="new bg-green-500">Updated</span>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="page-term.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-term.png" alt="">
              <p> page term</p>
            </div>
          </a>
        </div>

        <div>
          <a target="_blank" href="pages-cart.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-carts.png" alt="">
              <p> carts</p>
              <span class="new bg-red-500">New</span>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="pages-account-info.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-account-info.png" alt="">
              <p>  account billing</p>
              <span class="new bg-red-500">New</span>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="pages-payment-info.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/pages-payments.html" alt="">
              <p>   payments</p>
              <span class="new bg-red-500">New</span>
            </div>
          </a>
        </div>

        <div>
          <a target="_blank" href="development-elements.html">
            <div class="demo-card">
                <img src="public/assets/images/demos/default/development-elements.png" alt="">
                <p> elements </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="development-components.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/development-components.png" alt="">
              <p>  components</p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="development-plugins.html">
            <div class="demo-card">
                <img src="public/assets/images/demos/default/development-plugins.png" alt="">
                <p> Plugins </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="development-icons.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/default/development-icons.png" alt="">
              <p> Icons </p>
            </div>
          </a>
        </div>

        <div>
          <a target="_blank" href="form-login.html">
            <div class="demo-card">
                <img src="public/assets/images/demos/form-login.png" alt="">
                <p> login </p>
            </div>
          </a>
        </div>
        <div>
          <a target="_blank" href="form-register.html">
            <div class="demo-card">
              <img src="public/assets/images/demos/form-register.png" alt="">
              <p> register </p>
            </div>
          </a>
        </div>
   
      
      </div>
     
      <br><br><br>

    </div>
  </div>
 

    <!-- Javascript
        ================================================== -->
    <script src="public/assets/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/assets/uikit.min.js"></script>
    <script src="public/assets/js/uikit.js"></script>
    <script src="public/assets/js/tippy.all.min.js"></script>
    <script src="public/assets/js/simplebar.js"></script>
    <script src="public/assets/js/custom.js"></script>
    <script src="public/assets/js/bootstrap-select.min.js"></script>
    <script src="public/assets/unpkg/ionicons%405.2.3/dist/ionicons.js"></script>

</body>

</html>