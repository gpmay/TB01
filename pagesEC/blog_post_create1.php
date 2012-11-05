<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jeff Risberg">
  
    <link href="../css/bootstrap.css" rel="stylesheet">   
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">
    
    <script src="../js/jquery-1.8.2.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/less-1.3.0.min.js"></script>
    
    <link href="../css/stylesEC.less" rel="stylesheet">
    
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 10px;
      }  
      hr { 
        height: 3px; color: #888 !important; background-color: #888 !important;
      }   
      .post {  
        padding-bottom: 4px; 
        border-bottom: 1px solid #888;    
        margin-bottom: 15px;
      }
      .post .title a {
        font-size: 17px;
        font-weight: bold;
        color: #333;        
        text-decoration: none;
      }
      .post .metadata {
        font-size: 14px;
        font-style: italic;
        font-family:  "Times New Roman", serif;
      }
      .post .excerpt {
        color: #333;
      }
      .post .categories {
        margin-top: 6px;
        font-size: 14px;
      }
      .widget > div {       
        padding: 3px 5px 3px 5px;             
        background-color: #f9f9f9;  
        border-bottom: 1px solid #ddd;      
      }
      .widget > div.title {       
        font-weight: bold;       
        margin-top: 5px;
        background-color: #33a9c8;
        color: white;
        border-radius: 5px 5px 0px 0px; 
      }      
      .widget > div:nth-child(2n+0) {       
        background-color: #f0f0f0; 
      }
      .widget > div:last-child {              
        border-radius: 0px 0px 5px 5px;
        margin-bottom: 5px;   
      }
      .widget.w1 div.title {
        background-color: #0088cc;
      }
      .widget.w2 div.title {
        background-color: orange;
      }
      .widget.w3 div.title {
        background-color: green;
      }
      .widget.w4 div.title {
        background-color: #33a9c8;
      }
    </style>    

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  
    <link rel="shortcut icon" href="../ico/favicon.ico">
  </head>

  <body>
  
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">         
          <a class="brand" href="../index.html">TB01</a>
          <div class="nav-collapse collapse">            
            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>        
    
    <div class="container">
    
      <div style="margin-bottom: 10px">
        <img width="900" height="100" src="../img/ecocloud_header.png" />      
      </div>
    
      <div class="row-fluid">
        <div class="span12">     
	        <div class="navbar">
			      <div class="navbar-inner">
			        <a class="brand" href="#"></a>
			        <ul class="nav">
			          <li><a href="#">Home</a></li>
			          <li class="divider-vertical"></li>
			          <li><a href="#">Roadmap</a></li>
			          <li class="divider-vertical"></li>
			          <li><a href="#">Marketplace</a></li>
			          <li class="divider-vertical"></li>
			          <li class="active dropdown">
		               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Collaboration <b class="caret"></b></a>
		               <ul class="dropdown-menu">
		                 <li><a href="#">Action</a></li>
		                 <li><a href="#">Another action</a></li>
		                 <li class="divider"></li>
		                 <li class="nav-header">Nav header</li>
		                 <li><a href="#">Separated link</a></li>
		                 <li><a href="#">One more separated link</a></li>
		               </ul>
			          </li>
			          <li class="divider-vertical"></li>
			          <li class="dropdown">
			            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Solutions <b class="caret"></b></a>
			            <ul class="dropdown-menu">
			              <li><a href="#">Contribute</a></li>
			              <li><a href="#">Find</a></li>
			            </ul>
			          </li>
			          <li class="divider-vertical"></li>
			          <form class="navbar-search pull-left">
			            <input type="text" class="search-query" placeholder="Search">
			          </form> 
			        </ul>
			      </div>
			    </div>
			  </div>
			</div>	       
      
      <div class="row-fluid">
	      <div class="span9">      		    
		    <form action="../pagesEC/blog_post_create2.php">
		      <table>
		       <tr>
		        <td>Title *</td>
		        <td><input name="title" size="50" style="width: 590px" /></td>		       
		       </tr>
		       <tr>
		        <td>Body *</td>
		        <td><textarea name="body" style="width: 590px; height: 250px"></textarea></td>	       
		       </tr>
		       <tr>
		        <td>Excerpt<br/>(optional)</td>
		        <td><textarea name="excerpt" style="width: 590px; height: 100px"></textarea></td>
		       </tr>
		       <tr>
		        <td>&nbsp;</td>
		        <td><input type="submit" value="Next"></td>
		       </tr>
		      </table>		      
		    </form>  	              	       
        </div><!--/span-->
        
        <div class="span3">       
			    <div class="widget w1">
			      <div class="title">Resources</div>	          
			      <div class="category">Energy (3)</div>
		        <div class="category">Information (5)</div>
		        <div class="category">Materials (3)</div> 
		        <div class="category">Water (12)</div>  	                    
			    </div>
			        
			    <div class="widget w2">
			      <div class="title">Industry</div>	         
			      <div class="category">Education (7)</div>	     
			      <div class="category">Finance/Insurance/Investment (11)</div>   
		        <div class="category">Food/Agriculture (3)</div>    	            
			    </div>
			       
			    <div class="widget w3">
		        <div class="title">Planetary System</div>            
		        <div class="category">Air Quality Regulation (2)</div>
		        <div class="category">Soil Vitality, Erosion & Chemical Pollution Control (1)</div>
		        <div class="category">Energy Capture, Transport, Storage (6)</div>
		        <div class="category">Radiation Protection (4)</div>                      
		      </div>		           	       	    
		    </div><!--/span3-->       
	    </div><!-- /row -->  

      <hr/>

      <footer>      
       <div class="row">
         <div class="span12">
           <div class="pull-left">
             &copy; 2010 - 2012 by Sustainable Silicon Valley. All Rights Reserved.
           </div>
           <div class="pull-right">        
             About Us | Sign Up for Newsletter | Donate | Contact Us | Help | Terms of Service
           </div>
         </div>
       </div>    
      </footer>

    </div><!--/.container-->
    
  </body>
</html>
 