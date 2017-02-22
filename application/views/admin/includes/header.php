<html>

<head>

<title>SRS</title>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/admin/admin.css">


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body  style="margin-bottom:10px;margin-top:20px;">
<div class="container">
<div  class="row" >



  

<?php 
if($this->session->userdata('is_logged_in'))
   {

echo'

<div  class="col-sm-4 text-left">
<a href="'.base_url().'index.php">
<img src="'.base_url().'assets/img/logo.png" >
</a>
</div>

<div class="col-sm-8" style="margin-top:25px;font-size:16px;">


     <nav class="navbar navbar-default" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">

    

      <ul dir="ltr"  class="nav navbar-nav">

        <li><a href="'.base_url().'sprofile">Profile</a></li>
        <li><a href="'.base_url().'plan">Plan</a></li>
        <li><a href="'.base_url().'transcript">Transcript</a></li>
        <li><a href="'.base_url().'courseload">Course Load</a></li>
        <li><a href="'.base_url().'contact">Contact</a></li>
        <li><a href="'.base_url().'logout">Logout</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
';

   }elseif($this->session->userdata('logged_in'))
   {

echo'

<div  class="col-sm-5 text-left">
<img src="'.base_url().'assets/img/logo.png" >
</div>

<div class="col-sm-7" style="margin-top:25px;">


     <nav class="navbar navbar-default" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">

    

      <ul dir="ltr"  class="nav navbar-nav">

        <li><a href="'.base_url().'index.php">Home</a></li>
        <li><a href="'.base_url().'drprofile">Profile</a></li>
        <li><a href="'.base_url().'drcourses">Courses</a></li>
        <li><a href="'.base_url().'drcourses/add">Add Course</a></li>
        <li><a href="'.base_url().'logout">Logout</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
';

   }
   else
   {
    echo'

<div  class="col-sm-9 text-left">
<img src="'.base_url().'assets/img/logo.png" >
</div>

<div class="col-sm-3" style="margin-top:25px;">

     <nav class="navbar navbar-default" role="navigation">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse" id="bs-example-navbar-collapse-1">

    

      <ul dir="ltr"  class="nav navbar-nav">

        <li><a href="'.base_url().'index.php">Home</a></li>
        <li><a href="'.base_url().'login">Login</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
';
   }

?>






    
  </div>
</div>

