<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AJAX</title>
    <link rel="stylesheet" href="css/foundation.css" />
     <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
   
    <div class="row">
        <div class="large-6 columns">
            <h1>AJAX</h1>
        </div>
        <div class="large-6 columns">
            <a class="add_btn button right small" data-reveal-id="addModal">Add Contact</a>
            <div id="addModal" class="reveal-modal" data-reveal>
            <h2>Add Contact</h2>
            <?php include("form.php"); ?>
            </div>
        </div>
    </div>
    
   <!--Loading -->
   <div id="loaderImage">
    <img src="img/ajax-loader.gif" />
   </div>
   
   
    <!--main content -->
    <div id="pageContent"></div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
