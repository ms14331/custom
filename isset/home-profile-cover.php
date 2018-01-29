
<style type="text/css">
     
	.profile {
	  width: 100%;
	  position: relative;
	  background: #FFF;
	  border: 1px solid #D5D5D5;
	  padding-bottom: 5px;
	  margin-bottom: 20px;
	}

	.profile .image {
	  display: block;
	  position: relative;
	  z-index: 1;
	  overflow: hidden;
	  text-align: center;
	  border: 5px solid #FFF;
	}

	.profile .user {
	  position: relative;
	  padding: 0px 5px 5px;
	}

	.profile .user .avatar {
	  position: absolute;
	  left: 20px;
	  top: -85px;
	  z-index: 2;
	}

	.profile .user h2 {
	  font-size: 16px;
	  line-height: 20px;
	  display: block;
	  float: left;
	  margin: 4px 0px 0px 135px;
	  font-weight: bold;
	}

	.profile .user .actions {
	  float: right;
	}

	.profile .user .actions .btn {
	  margin-bottom: 0px;
	}
 

	.img-profile{ 
	    width:50%;
	}

	.img-cover{
	   width:100%; 
	}

	@media (max-width: 768px) {
	  .btn-responsive {
	    padding:2px 4px;
	    font-size:80%;
	    line-height: 1;
	    border-radius:3px;
	  }
	}

	@media (min-width: 769px) and (max-width: 992px) {
	  .btn-responsive {
	    padding:4px 9px;
	    font-size:90%;
	    line-height: 1.2;
	  }
	}

	 .navbar-nav {
	    width: 100%;
	    text-align: center;
	    > li {
	      float: none;
	      display: inline-block;
	    }
	}

	                  
</style>


<div class="col-md-12" style="padding-left:0px ">
    <div class="profile clearfix">                            
        <div class="image">
            <img src="<?php echo get_bloginfo ( 'template_url'); ?>/img/gaukukh-nandanban-logo.jpg" class="img-cover">
        </div>                            
        <div class="user clearfix">





            <div class="avatar">
                <img src="<?php echo get_bloginfo ( 'template_url'); ?>/img/avatar/profile.png" class="img-thumbnail img-profile">
            </div>                  





            <!--              
            <h2>Martin maoth</h2>                                
            <div class="actions">
                <div class="btn-group">
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Add to friends"><span class="glyphicon glyphicon-plus glyphicon glyphicon-white"></span> Friends</button>
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Send message"><span class="glyphicon glyphicon-envelope glyphicon glyphicon-white"></span> Message</button>
                    <button class="btn btn-default btn-sm tip btn-responsive" title="" data-original-title="Recommend"><span class="glyphicon glyphicon-share-alt glyphicon glyphicon-white"></span> Recommend</button>
                </div>
            </div>
            -->    





        </div>                                     
    </div>
</div>


<div class="col-md-12" style="padding-left:0px ">
	

	<nav class="navbar navbar-default" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Brand Logo</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="pull-left"><a href="#">Dashboard</a></li>
	        <li class="active"><a href="#">Stories</a></li>
	        <li><a href="#">Videos</a></li>
	        <li><a href="#">Photos</a></li>
	        <li class="social pull-right"><a href="#">Social Links</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>



</div>