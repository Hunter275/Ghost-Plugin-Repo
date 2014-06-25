<?PHP
error_reporting(E_ERROR);
$user_name = "root";
$password = "password";
$database = "ghost";
$server = "192.168.1.94";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL2 = "SELECT * FROM mail WHERE reciever = '$user2'";
$result2 = mysql_query($SQL2);

while ( $db_field2 = mysql_fetch_assoc($result2) ) {

}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}


    require("common.php"); 
    if(empty($_SESSION['user'])) 
    { 
        $text = '<a href="browse.php"><font color="white">Browse</font></a> | <a href="login.php"><font color="white">Login</font></a>';
    } 
    else
      $text = '<a href="browse.php"><font color="white">Browse</font></a> | <a href="submit.php"><font color="white">Sell</font></a> | ' . $inboxtext .'| <a href="private.php"><font color="white">Account</font></a> | <a href="logout.php"><font color="white">Logout</font></a>'
//$term = document.getElementById("search").value;


// THIS PHP MUST STAY LIKE THIS
?>
<?php
$user2 = htmlentities($_SESSION['user']['username']);
?><?php
// THIS PHP MUST STAY LIKE THIS

error_reporting(E_ERROR);
$user_name = "root";
$password = "password";
$database = "ghost";
$server = "192.168.1.94";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

if ($db_found) {

$SQL2 = "SELECT * FROM mail WHERE reciever = '$user2'";
$result2 = mysql_query($SQL2);

$SQL3 = "SELECT * FROM mail WHERE reciever = '$user2' AND readstatus != 1";
$result3 = mysql_query($SQL3);

while ( $db_field2 = mysql_fetch_assoc($result2) ) {
if ($db_field2['readstatus'] != 1) {
  
  $color = "#d9534f";
}
else {
  
  $color = "#777777";
}

}

mysql_close($db_handle);

}
else {

print "Database NOT Found ";
mysql_close($db_handle);

}

error_reporting(E_ERROR);
    require("common.php"); 
    if(empty($_SESSION['user'])) 
    { 
        $text = "NOT LOGGED IN!";
        //$text = '<a href="browse.php"><font color="white">Browse</font></a> | <a href="login.php"><font color="white">Login</font></a>';
    } 
    else
      $text = "LOGGED IN!";
      
?> 
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
<script type="text/javascript">
function checkInput()
{
  if (document.getElementById("username").value == "")
  {
    var d = document.getElementById("usernamecontrol");
    d.className = d.className + " has-error";
    return false;
  }
  else if (document.getElementById("email").value == "")
  {
    var d = document.getElementById("emailcontrol");
    d.className = d.className + " has-error";
    return false;
  }
    else if (document.getElementById("email2").value != document.getElementById("email").value)
  {
    var d = document.getElementById("emailcontrol");
    d.className = d.className + " has-error";
    var c = document.getElementById("email2control");
    c.className = c.className + " has-error";
    return false;
  }
    else if (document.getElementById("password").value == "")
  {
    var d = document.getElementById("passwordcontrol");
    d.className = d.className + " has-error";
    return false;
  }
 else if (document.getElementById("password").value != document.getElementById("password2").value)
  {
    var d = document.getElementById("passwordcontrol");
    d.className = d.className + " has-error";
    var c = document.getElementById("password2control");
    c.className = c.className + " has-error";
    return false;
  }
  else
  {
    return true;
  }

}

</script>


<script type="text/javascript">
function loginFailed()
{
    var term = "<?php Print($failed); ?>";
    if (term == "Yes")
    {
      document.getElementById("warning").style.margin = "0px";
      document.getElementById("warning").style.visibility = "visible";
    }
}


</script>


<center>
  <div class="alert alert-danger" style="width:95%;visibility:hidden;margin:-35px;" id="warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> A user with that username/email already exist!
</div>
  <h1>Register</h1>
<form role="form" data-toggle="validator" action="newregister.php" method="post">
<div class="form-group">
 <div class="input-group">
    <span class="input-group-addon" style="width:100px;"><span class="glyphicon glyphicon-user"></span> Username</span>
    <input required type="text" data-minlength="5" data-error="Please enter a username (at least 5 characters)"class="form-control" placeholder="Enter a username" id="username" name="username" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
</div>
<div class="form-group">
  <div class="input-group">
    <span class="input-group-addon" style="width:110px;"><span class="glyphicon glyphicon-envelope"></span> Email</span>
    <input required type="email" class="form-control" placeholder="Enter your email" id="email" name="email" style="width:217px;">
  </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
</div>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" style="width:110px;"><span class="glyphicon glyphicon-envelope"></span> Email</span>
        <input required type="email" data-match="#email" class="form-control" placeholder="Re-enter your email" id="email2" name="email2" style="width:217px;">
      </div>
    <div class="help-block with-errors" style="margin:0px">
  </div>
</div>
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon" style="width:110px;"><span class="glyphicon glyphicon-asterisk"></span> Password</span>
      <input required type="password" data-minlength="5" class="form-control" placeholder="Enter a password" id="password" name="password" style="width:217px;">
    </div>
      <div class="help-block with-errors" style="margin:0px">
    </div>
  </div>
    <div class="form-group">
      <div class="input-group">
        <span class="input-group-addon" style="width:110px;"><span class="glyphicon glyphicon-asterisk"></span> Password</span>
          <input required type="password" data-match="#password" class="form-control" placeholder="Re-enter a password" id="password2" name="password2" style="width:217px;">
        </div>
          <div class="help-block with-errors" style="margin:0px">
        </div>
      </div>
    <button type="submit" style="width:327px;" class="btn btn-primary" disabled="disabled">Register</button>
  </div>
</div>
</form>
</div>
</center>
</table>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.js"></script>




 <div id="footer">
      <div class="container"><BR><center>
        <p class="text-muted">Copyright 1994 Hunter Thornsberry!</p></center>
      </div>
    </div>



  </body>
</html>
