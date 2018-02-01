<?php 
/*
*Template Name: testing mobile sidebar
*/




?>


<!DOCTYPE html>
<html>
<title><?php wp_title(''); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<link rel="stylesheet" href="http://demos.jquerymobile.com/1.3.2/_assets/css/jqm-demos.css">
<link rel="stylesheet" href="http://demos.jquerymobile.com/1.3.2/css/themes/default/jquery.mobile-1.3.2.min.css"> 


    <script src="http://demos.jquerymobile.com/1.3.2/js/jquery.mobile-1.3.2.min.js"></script>
    <script src="http://demos.jquerymobile.com/1.3.2/js/jquery.js"></script>
     <script src="<?php echo JS; ?>/jquery.min.js"></script>
    <script src="<?php echo JS; ?>/respond.min.js"></script>
    <script src="<?php echo JS; ?>/custom-michael.js"></script>
    <script src="<?php echo JS; ?>/bootstrap.min.js"></script>
    <?php wp_head(); ?>



    <script type="text/javascript">
    	$( document ).on( "pageinit", "#demo-page", function() {
		    $( document ).on( "swipeleft swiperight", "#demo-page", function( e ) {
		        // We check if there is no open panel on the page because otherwise
		        // a swipe to close the left panel would also open the right panel (and v.v.).
		        // We do this by checking the data that the framework stores on the page element (panel: open).
		        if ( $.mobile.activePage.jqmData( "panel" ) !== "open" ) {
		            if ( e.type === "swipeleft"  ) {
		                $( "#right-panel" ).panel( "open" );
		            }
		        }
		    });
		});
    </script>
</head>
<body>
  	
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
 <div data-role="page" id="demo-page" data-theme="d" data-url="demo-page">  
	  <div class="navbar-header"  data-theme="b">
	      <a type="button" class="navbar-toggle collapsed"  data-shadow="false" data-iconshadow="false" data-theme="d"  href='#right-panel' data-toggle="collapse" >
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </a>
	      <a class="navbar-brand" href="#">Brand</a>
	    </div>

	    <div  data-role="panel" id="right-panel" data-display="push" data-position="right" data-theme="c">
		   
		    <div class=" navbar-collapse"  >
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		
		      </ul> 
		    </div><!-- /.navbar-collapse -->

		</div>
	</div>

  

    <!-- Collect the nav links, forms, and other content for toggling -->

  </div><!-- /.container-fluid -->
</nav>







</body>
</html> 
 	<!-- 
<div data-role="page" id="demo-page" data-theme="d" data-url="demo-page">

    <div data-role="header" data-theme="b">
        <h1>Swipe left or right</h1>
    
        <a href="#right-panel" data-theme="d" data-icon="arrow-l" data-iconpos="notext" data-shadow="false" data-iconshadow="false" class="ui-icon-nodisc">Open right panel</a>
    </div> 


    <div data-role="content">
        <dl>
            <dt>Swipe <span>verb</span></dt>
            <dd><b>1.</b> to strike or move with a sweeping motion</dd>
        </dl>
        <a href="#demo-intro" data-rel="back" class="back-btn" data-role="button" data-mini="true" data-inline="true" data-icon="back" data-iconpos="right">Back to demo intro</a>
	</div> 

 

	    <div data-role="panel" id="right-panel" data-display="push" data-position="right" data-theme="c">
	        <p>Right push panel.</p>
	        <a href="#" data-rel="close" data-role="button" data-mini="true" data-inline="true" data-icon="delete" data-iconpos="right">Close</a>
	    </div> 


	
	</div> -->


<!--  	
<nav class="navbar navbar-default">
  <div class="container-fluid"> 
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div> 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>

 
    </div> 
  </div> 
</nav>


 -->