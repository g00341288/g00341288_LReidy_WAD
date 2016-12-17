<?php
  /** Turn on output buffering - output buffering is off by default
  Without it, HTML is sent over the wire piecemeal. With it, HTML
  is stored in a variable and sent to the browser all in one chunk
  at the end of the script. This improves performance and reduces the
  number of request necessary. */
	ob_start();

    /**
   * Create a session or resume the current one based on a session identifier passed via GET or POST request or passed via cookie. 
   */
	session_start();

  /** Like include, require, and require_once include and evaluate a given file.
  require_once, however, checks first if the file has been included and if not 
  attempts to do so. dbconnect.php opens a connection to the MySQL server.*/
	require_once 'dbconnect.php';
	
	/** If session is not set, redirect to the login page (index.php) */
	if( !isset($_SESSION['user']) ) {
    /** Send a raw HTTP header with the given location */
		header("Location: index.php");
		exit;
	}
	
  /** @var Get logged in users details from MySQL user table  */
	$res=mysql_query("SELECT * FROM user WHERE user_id=".$_SESSION['user']);

  /** @var Fetch the result row */
	$userRow=mysql_fetch_array($res);
?>

  <!-- Include the main site head template -->
  <?php include('templates/head.php') ?>

  <body ng-app="phoMart">
  
  <!-- Include the main site nav template -->
  <?php include('templates/nav.php') ?>

  	<div id="wrapper">

    	<div class="container">
        
      	<div class="page-header">

      	 <h3>Welcome to my store!</h3>

      	</div>
          
        <div class="row">

          <!-- Wire up Angular phoMart module -->
          <div class="col-lg-12" ng-controller="HomeController" >
            <h1>Templates should go here.</h1>
          </div>

        </div>
        
      </div>
      
    </div>
    
    <!-- Include the main site scripts template (script sources)-->
    <?php include('templates/scripts.php') ?>
    
     <!-- Include the main site footer template -->
    <?php include('templates/footer.php') ?>
      
  </body>
</html>
<?php ob_end_flush(); ?>