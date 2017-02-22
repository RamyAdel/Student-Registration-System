<div class="row text-center">
    <h1 style="color:#656565;font-size:30px;"><b>Courses</b></h1>


</div>

<?php

//flash messages

if ($this->session->flashdata('flash_message')) {

    if ($this->session->flashdata('flash_message') == 'updated') {

        echo '<div class="alert alert-success">';

        echo '<a class="close" data-dismiss="alert">&times;</a>';

        echo '<strong>Course Enrolled</strong>';

        echo '</div>';

    } else {

        echo '<div class="alert alert-error">';

        echo '<a class="close" data-dismiss="alert">&times;</a>';

        echo '<strong>Error</strong>';

        echo '</div>';

    }

}

?>



<?php

//form data

$attributes = array('class' => 'form-horizontal', 'id' => '');


//form validation

echo validation_errors();


echo form_open('courses/' . $this->uri->segment(2), $attributes);

?>



<div class="row">
    <div class="col-sm-3 text-right">
        Course Name :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['name']; ?>

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Course No. :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['number']; ?>

    </div>
</div>
<div class="row">

    <div class="col-sm-3 text-right">
        Duration :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['duration']; ?>

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Credit :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['credit']; ?>

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Professor :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['professor']; ?>

    </div>
</div>
    <?php if ($courses[0]['pre1'] != ''){ ?> 
    <div class="row">
    <div class="col-sm-3 text-right">
        prerequisite :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['pre1']; ?>
        <?php if ($courses[0]['pre2'] != ''){echo ' / '.$courses[0]['pre2'];} ?>
        <?php if ($courses[0]['pre3'] != ''){echo ' / '.$courses[0]['pre3'];} ?>

    </div>
</div>
    <?php } ?> 
<div class="row">
    <div class="col-sm-3 text-right">
        material :

    </div>
    <div class="col-sm-9 text-left">
        <a target="_blank"  style="margin-top:5px;" class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>assets/mat/<?php echo $courses[0]['matrial']; ?>">Download
        </a>


    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Schedule :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['scheduleday']; ?> <?php echo $courses[0]['scheduledate']; ?> <?php echo $courses[0]['scheduletime']; ?>

    </div>
</div>
<div class="row">

    <div class="col-sm-3 text-right">
        Enrolled Student :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['enrolled']; ?>
        <input type="hidden" name="enrolled" value="<?php echo $courses[0]['enrolled']; ?>">

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Seat Left :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['seatleft']; ?>
        <input type="hidden" name="seatleft" value="<?php echo $courses[0]['seatleft']; ?>">

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">
        Description :

    </div>
    <div class="col-sm-9 text-left">
        <?php echo $courses[0]['description']; ?>
        <input type="hidden" name="description" value="<?php echo $courses[0]['description']; ?>">

    </div>
</div>
<div class="row">
    <div class="col-sm-3 text-right">

    </div>

<?php 
$uuui = $this->session->userdata('user_name');
$pprr1 = 0;
$pprr2 = 0;
$pprr3 = 0;
if ($courses[0]['pre1'] != '') {
$prr1 = $this->courses_model->get_course_by_name($courses[0]['pre1']);
$pprr1 = $this->courses_model->transvalidate($prr1['0']['id'], $uuui);
}
if ($courses[0]['pre2'] != '') {
$prr2 = $this->courses_model->get_course_by_name($courses[0]['pre2']);
$pprr2 = $this->courses_model->transvalidate($prr2['0']['id'], $uuui);
}
if ($courses[0]['pre3'] != '' ) {
$prr3 = $this->courses_model->get_course_by_name($courses[0]['pre3']);
$pprr3 = $this->courses_model->transvalidate($prr3['0']['id'], $uuui);
}
?>

<?php if ($courses[0]['pre1'] == ''){ ?> 
 <?php if ($courses[0]['seatleft'] >= '1') { ?>
        <?php if ($val != '1') { ?>
        <?php if ($trans != '1') { ?>



            <div class="col-sm-9 text-left">
                <button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Enroll</button>


            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>


<?php if ($courses[0]['pre1'] != '' && $courses[0]['pre2'] == '' && $courses[0]['pre3'] == ''){ ?> 
<?php if ($pprr1 == '1'){ ?>
 <?php if ($courses[0]['seatleft'] >= '1') { ?>
        <?php if ($val != '1') { ?>
        <?php if ($trans != '1') { ?>
        
         


            <div class="col-sm-9 text-left">
                <button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Enroll</button>


            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>



<?php if ($courses[0]['pre1'] != '' && $courses[0]['pre2'] != '' && $courses[0]['pre3'] == ''){ ?> 
<?php if ($pprr1 == '1'){ ?>
<?php if ($pprr2 == '1'){ ?>
 <?php if ($courses[0]['seatleft'] >= '1') { ?>
        <?php if ($val != '1') { ?>
        <?php if ($trans != '1') { ?>
        
         


            <div class="col-sm-9 text-left">
                <button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Enroll</button>


            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>


<?php if ($courses[0]['pre1'] != '' && $courses[0]['pre2'] != ''&& $courses[0]['pre3'] != ''){ ?> 
<?php if ($pprr1 == '1'){ ?>
<?php if ($pprr2 == '1'){ ?>
<?php if ($pprr3 == '1'){ ?>
 <?php if ($courses[0]['seatleft'] >= '1') { ?>
        <?php if ($val != '1') { ?>
        <?php if ($trans != '1') { ?>
        
         


            <div class="col-sm-9 text-left">
                <button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Enroll</button>


            </div>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>
            <?php } ?>


</div>




<?php echo form_close(); ?>