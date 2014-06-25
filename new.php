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

  <center>
<div class="alert alert-danger" style="width:95%;visibility:hidden;margin:-35px;" id="warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> Please correct the form 
</div>
<h1>Add A Plugin</h1>
<form name="package" enctype="multipart/form-data" role="form" data-toggle="validator" action="insert.php" method="post">
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon" style="width:100px;">Name</span>
    <input required type="text" data-minlength="5" data-error="Please enter an item name (at least 5 characters)" class="form-control" name="name" placeholder="Plugin Name" style="width:217px;">
  </div>
      <div class="help-block with-errors" style="margin:0px">
    </div>
  </div>
</div>
<div class="form-group">
  <div class="input-group" id="descriptioncontrol">
    <span class="input-group-addon" style="width:100px;">Version</span>
    <input required type="text" data-minlength="5" data-error="Please enter an item description (at least 5 characters)" class="form-control" name="version" placeholder="Plugin Version" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
</div>
  <div class="input-group" id="categorycontrol">
    <span class="input-group-addon" style="width:100px;z-index:5;position:relative;border-right: 1px solid #ccc">License</span>
    <select required data-minlength="1" data-error="Please enter an item description (at least 5 characters)" class="form-control" name="license" onchange="ticketChange()" style="width:227px;margin-left:-10px;">
      <option value="">&nbsp;&nbsp;&nbsp;</option>
      <option value="L1">&nbsp;&nbsp;&nbsp;License 1</option>
      <option value="L2">&nbsp;&nbsp;&nbsp;License 2</option>
      <option value="L3">&nbsp;&nbsp;&nbsp;License 3</option>
      <option value="Other">&nbsp;&nbsp;&nbsp;Other (see summary)</option>
    </select>
  </div>
</div>
<BR>
<div class="form-group">
  <div class="input-group" id="pricecontrol">
    <span class="input-group-addon" style="width:100px;">Website</span>
    <input required type="text" data-error="Please enter an item price (as a number)" class="form-control" name="website" placeholder="Plugin Website" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
<BR>
<div class="form-group">
  <div class="input-group" id="pricecontrol">
    <span class="input-group-addon" style="width:100px;">Summary</span>
    <input required type="text" data-error="Please enter an item price (as a number)" class="form-control" name="summary" placeholder="Plugin Summary" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
  <BR>
<div class="form-group">
  <div class="input-group" id="pricecontrol">
    <span class="input-group-addon" style="width:100px;">Tags</span>
    <input required type="text" data-error="Please enter an item price (as a number)" class="form-control" name="tags" placeholder="Plugin Tags" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="input-group" id="dropdown" style="visibility:hidden;margin:-25px;">
  <span class="input-group-addon" style="width:100px;background-color:#5cb85c;color:#fff;">Event Date</span>
  <input type="datetime-local" class="form-control" name="eventdate" placeholder="" style="width:217px;">
</div><BR>
<input type="file" name="userfile" required="required" style="padding-right:45px">
  <BR>
  <?php $user = "Hunter275" ?>
<input type=hidden name="user" value="<? echo $user ?>">
<input type=hidden name="photonumber" value="<? echo $photonum . '.jpg' ?>">
<button type="submit" name="upload" style="width:217px;" class="btn btn-primary">Submit</button>
</form>




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
