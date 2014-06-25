<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ghost Plugins</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="padding-top:4px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="logo.png" width="65px"> Plugin Repo</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="browse.php?search=All">All</a></li>
			<li><a href="browse.php?search=Books">Books</a></li>
            <li><a href="browse.php?search=Bikes">Bikes</a></li>
            <li><a href="browse.php?search=Electronics">Electronics</a></li>
            <li><a href="browse.php?search=Tickets">Tickets</a></li>
            <li><a href="browse.php?search=Video Games">Video Games</a></li>
            <li class="divider"></li>
            <li><a href="browse.php?search=Other">Other</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search" action="search.php" method="post">
        <div class="form-group">
          <input type="text" name="input" class="form-control" placeholder="Search all plugins">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
            <ul class="nav navbar-nav navbar-right">
             <li><a href="register.php"><span style="vertical-align:text-top" class="glyphicon glyphicon-pencil"></span> Register</a></li>
             <li class="divider"></li>
         <li class="dropdown">
             <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span style="vertical-align:text-top" class="glyphicon glyphicon-off"></span> Sign In <strong class="caret"></strong></a>
               <div class="dropdown-menu" style="padding: 15px; padding-bottom: 15px">
                 <form action="login.php" method="post" accept-charset="UTF-8">
                   <input id="user_username" style="margin-bottom: 15px" type="text" name="username" placeholder="username" size="30" />
                   <input id="user_password" style="margin-bottom: 15px" type="password" name="password" placeholder="password" size="30" />
                   <input class="btn btn-primary" style="clear: left width: 100% height: 32px font-size: 13px" type="submit" name="commit" value="Sign In" />
                 </form>
               </ul>
             </li>
           </ul>
         </li>
       </ul>
     </div><!-- /.navbar-collapse -->
   </div><!-- /.container-fluid -->
 </nav>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


<div class="col-md-6 column"  style="height: 100%; padding-left:20px; border-left: 1px solid #ccc;">
	<table border="0" style="height: 100%">
		<tr>
			<tc><td>Test</td></tc>
		</tr>
		<tr>
			<tc><td>Test</td></tc>
		</tr>
		<tr>
			<tc><td>Test</td></tc>
		</tr>
		<tr>
			<tc><td>Test</td></tc>
		</tr>
	</table>
</div>
<div class="col-md-6 column" style="padding-left:20px; border-left: 1px solid #ccc;">
WU
<html>
		</div>
	</div>
</div>
</div>

 <div id="footer">
      <div class="container"><BR><center>
        <p class="text-muted">All material property of its respective owners</p></center>
      </div>
    </div>
  </body>
</html>
