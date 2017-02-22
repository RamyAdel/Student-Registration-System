<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Courses</b></h1>
</div>

<div class="row">
<div class="col-sm-3 text-right">
Course Name :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['name']; ?>

</div>


<div class="col-sm-3 text-right">
Course No. :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['number']; ?>

</div>


<div class="col-sm-3 text-right">
Duration :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['duration']; ?>

</div>

<div class="col-sm-3 text-right">
Credit :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['credit']; ?>

</div>

<div class="col-sm-3 text-right">
Professor :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['professor']; ?>

</div>


<div class="col-sm-3 text-right">
Prerequeste :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['prerequeste']; ?>

</div>

<div class="col-sm-3 text-right">
Metrial :

</div>
<div class="col-sm-9 text-left">
<a href="<?php echo base_url(); ?>assets/matrial/<?php echo $courses[0]['matrial']; ?>">
<button style="margin-top:5px;" class="btn btn-sm btn-primary" type="submit">Download</button></a>



</div>

<div class="col-sm-3 text-right">
Schedule :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['scheduleday']; ?> <?php echo $courses[0]['scheduledate']; ?> <?php echo $courses[0]['scheduletime']; ?>

</div>

<div class="col-sm-3 text-right">
Advisor :

</div>
<div class="col-sm-9 text-left">

<select style="width:200px;" class="form-control" name="patient">
<option value="0"></option>
<option value="1"><?php echo $courses[0]['advisor']; ?></option>
</select>



</div>

<div class="col-sm-3 text-right">
Enrolled Student :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['enrolled']; ?>

</div>

<div class="col-sm-3 text-right">
Seat Left :

</div>
<div class="col-sm-9 text-left">
<?php echo $courses[0]['seatleft']; ?>

</div>

<div class="col-sm-3 text-right">

</div>
<div class="col-sm-9 text-left">
<button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Enroll</button>



</div>


</div>