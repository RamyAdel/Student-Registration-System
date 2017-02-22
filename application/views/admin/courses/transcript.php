<iframe src="transcriptprint" style="display:none;" name="printframe"></iframe>

<div class="row text-center">
    <h1 style="color:#656565;font-size:30px;"><b>Transcript</b> <a onclick="frames['printframe'].print()">
            <button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Print</button>
        </a>
    </h1>
</div>

<div class="row">

<div  class="col-sm-2 text-right">
<b>
Name:
</b>
</div>
<div class="col-sm-10 text-left">
<?php echo $userxx[0]['name']; ?>
</div>
<div  class="col-sm-2 text-right">
<b>
ID:
</b>
</div>
<div class="col-sm-10 text-left">
<?php echo $userxx[0]['user_name']; ?>
</div>

<div  class="col-sm-2 text-right">
<b>
Major:
</b>
</div>
<div class="col-sm-10 text-left">


<?php if ($userxx[0]['major'] == '1'){echo 'Computer Science' ;} ?>
<?php if ($userxx[0]['major'] == '2'){echo 'Engineering' ;} ?>
<?php if ($userxx[0]['major'] == '3'){echo 'Business' ;} ?>



</div>


</div>


<div class="row features_table">

<div class="col-sm-6 col-6 col-xs-6 no-padding">
<div class="features-table">
            <ul>
                <h1>Course Name</h1>
            </ul>
        </div>
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
            <ul>
                <h1>Credit</h1>
            </ul>
        </div>

    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
            <ul>
                <h1>Grade</h1>
            </ul>
        </div>
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
            <ul>
                <h1>GPA</h1>
            </ul>
        </div>
    </div>
    




<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button type="button" data-toggle="collapse" data-target="#trans11tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 1 - 2011</button>

</div>

<div id="trans11tc" class="collapse">
<?php $trans11t = 0; ?> 
<?php $trans11te = 0; ?> 
<?php foreach ($trans11 as $item) { ?>



<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>

  <?php $trans11t += $pname['0']['duration']; ?> 
  <?php $trans11te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans11t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans11te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;margin-top:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button type="button" data-toggle="collapse" data-target="#trans12tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 2 - 2011</button>

</div>
<div id="trans12tc" class="collapse">
<?php $trans12t = 0; ?> 
<?php $trans12te = 0; ?> 
<?php foreach ($trans12 as $item) { ?>


<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>

  <?php $trans12t += $pname['0']['duration']; ?> 
  <?php $trans12te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans12t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans12te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
2011 Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans11t+$trans12t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans11te+$trans12te; ?>
    </div>



</button>

</div>



<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans21tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 1 - 2012</button>

</div>

<div id="trans21tc" class="collapse">
<?php $trans21t = 0; ?> 
<?php $trans21te = 0; ?> 
<?php foreach ($trans21 as $item) { ?>



<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>

  <?php $trans21t += $pname['0']['duration']; ?> 
  <?php $trans21te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans21t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans21te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;margin-top:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans22tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 2 - 2012</button>

</div>
<div id="trans22tc" class="collapse">
<?php $trans22t = 0; ?> 
<?php $trans22te = 0; ?> 
<?php foreach ($trans22 as $item) { ?>


<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>

<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>


  <?php $trans22t += $pname['0']['duration']; ?> 
  <?php $trans22te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans22t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans22te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
2012 Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans21t+$trans22t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans21te+$trans22te; ?>
    </div>



</button>

</div>



<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans31tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 1 - 2013</button>

</div>

<div id="trans31tc" class="collapse">
<?php $trans31t = 0; ?> 
<?php $trans31te = 0; ?> 
<?php foreach ($trans31 as $item) { ?>



<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>
  <?php $trans31t += $pname['0']['duration']; ?> 
  <?php $trans31te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans31t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans31te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;margin-top:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans32tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 2 - 2013</button>

</div>
<div id="trans32tc" class="collapse">
<?php $trans32t = 0; ?> 
<?php $trans32te = 0; ?> 
<?php foreach ($trans32 as $item) { ?>


<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>
  <?php $trans32t += $pname['0']['duration']; ?> 
  <?php $trans32te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans32t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans32te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
2013 Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans31t+$trans32t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans31te+$trans32te; ?>
    </div>



</button>

</div>



<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans41tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 1 - 2014</button>

</div>

<div id="trans41tc" class="collapse">
<?php $trans41t = 0; ?> 
<?php $trans41te = 0; ?> 
<?php foreach ($trans41 as $item) { ?>



<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>
  <?php $trans41t += $pname['0']['duration']; ?> 
  <?php $trans41te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans41t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans41te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;margin-top:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button data-toggle="collapse" data-target="#trans42tc" class="btn btn-block btn-lg btn-danger ribbon" style="color:#fff;font-size:15px;">Semester 2 - 2014</button>

</div>
<div id="trans42tc" class="collapse">
<?php $trans42t = 0; ?> 
<?php $trans42te = 0; ?> 
<?php foreach ($trans42 as $item) { ?>


<div class="col-sm-6 col-6 col-xs-6 no-padding">
        <div class="features-table">
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></li>
                
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-free">
                    <li><?php echo $pname['0']['duration']; ?></li>
        </div>

    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li><?php echo $item['grade']; ?></li>
        </div>
    </div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
        <div class="features-table-paid">
                    <li>
                    <?php 
                    if ($item['grade'] < '50'){echo 'Faild';}elseif ($item['grade'] >= '50' && $item['grade'] <= '64'){
                            echo 'Pass';
                    }elseif($item['grade'] >= '65' && $item['grade'] <= '74'){
                            echo 'Good';
                    }elseif($item['grade'] >= '75' && $item['grade'] <= '84'){
                            echo 'V. Good';
                    }
                    elseif($item['grade'] >= '85' && $item['grade'] <= '100'){
                            echo 'Excellent';
                    }
                    ?>
                    </li>
        </div>
    </div>
  <?php $trans42t += $pname['0']['duration']; ?> 
  <?php $trans42te += $item['grade']; ?>  



<?php } ?>


<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry ribbon" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans42t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans42te; ?>
    </div>



</button>

</div>
</div>

<div style="margin-bottom:5px;" class="col-sm-12 col-12 col-xs-12 no-padding">
<button class="btn btn-block btn-lg btn-priamry" style="color:#4d4d4d;font-size:15px;">
<div class="col-sm-6 col-6 col-xs-6 no-padding">
2014 Total
</div>
<div class="col-sm-2 col-2 col-xs-2 no-padding">
<?php echo $trans41t+$trans42t; ?> 
    </div>

    <div class="col-sm-2 col-2 col-xs-2 no-padding">

    <?php echo $trans41te+$trans42te; ?>
    </div>



</button>

</div>







</div>



