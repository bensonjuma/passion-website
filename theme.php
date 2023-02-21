<?php

include 'config.php';
include 'functions.php';


?>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title><?php echo $title;?></title>

<!-- Bootstrap Core CSS -->
<link href="<?php echo web_root; ?>admin/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="<?php echo web_root; ?>admin/css/metisMenu.min.css" rel="stylesheet">

<!-- Timeline CSS -->
<link href="<?php echo web_root; ?>admin/css/timeline.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="<?php echo web_root; ?>admin/css/sb-admin-2.css" rel="stylesheet">
 

<!-- Custom Fonts -->
<link href="<?php echo web_root; ?>admin/font/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link href="<?php echo web_root; ?>admin/font/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- DataTables CSS -->
<link href="<?php echo web_root; ?>admin/css/dataTables.bootstrap.css" rel="stylesheet">

<!-- datetime picker CSS -->
<link href="<?php echo web_root; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<link href="<?php echo web_root; ?>css/datepicker.css" rel="stylesheet" media="screen">

<link href="<?php echo web_root; ?>admin/css/costum.css" rel="stylesheet">

<link href="<?php echo web_root; ?>admin/css/ekko-lightbox.css" rel="stylesheet">
</head>


<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        Welcome, <?php echo $_POST['name']; ?> <img title="profile image" width="23px" height="17px" src="<?php echo web_root.'admin/user/'.$image?>">  
                            
                    </a>
<ul class="dropdown-menu dropdown-acnt">

      <div class="divpic"> 
        <a href="" data-target="#usermodal"  data-toggle="modal" > 
            <img title="profile image" width="70" height="80" src="<?php echo web_root.'user'.$_SESSION['email']?>">  
        </a>
      </div> 


  <div class="divtxt">
     <li><a title="Edit" href="profile.php"  > My Profile</a>
                
    </li>
      </li>
       <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
    </li> 
</div>