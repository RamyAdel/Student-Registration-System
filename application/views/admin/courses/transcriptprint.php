<div sstyle="text-center">
<b style="align:center;">Transcript</b>
</div>
Name:<?php echo $userxx[0]['name']; ?><br>
ID: <?php echo $userxx[0]['user_name']; ?><br>
Major: <?php if ($userxx[0]['major'] == '1'){echo 'Computer Science' ;} ?>
<?php if ($userxx[0]['major'] == '2'){echo 'Engineering' ;} ?>
<?php if ($userxx[0]['major'] == '3'){echo 'Business' ;} ?>

<br>
Semester 1 - 2011
<table style="width:100%">
<tr>
<td style="border:2px solid black;padding:5px;width:55%" >COURSE NAME</td>
<td style="border:2px solid black;padding:5px;width:15%">CREDIT</td>
<td style="border:2px solid black;padding:5px;width:15%">GRADE</td>
<td style="border:2px solid black;padding:5px;width:15%">GPA</td>
</tr>

<?php $trans11t = 0; ?> 
<?php $trans11te = 0; ?> 
<?php foreach ($trans11 as $item) { ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <li><?php echo $pname['0']['name']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%">
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
                    </td>
</tr>
  <?php $trans11t += $pname['0']['duration']; ?> 
  <?php $trans11te += $item['grade']; ?>  



<?php } ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans11t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans11te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>

Semester 2 - 2011


<table style="width:100%">

<?php $trans12t = 0; ?> 
<?php $trans12te = 0; ?> 
<?php foreach ($trans12 as $item) { ?>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <?php echo $pname['0']['name']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%" ><?php echo $pname['0']['duration']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%" ><?php echo $item['grade']; ?></td>




<td style="border:2px solid black;padding:5px;width:15%" >
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
                    </td>
</tr>
                    
  <?php $trans12t += $pname['0']['duration']; ?> 
  <?php $trans12te += $item['grade']; ?>  



<?php } ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans12t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans12te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >2011 Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans11t+$trans12t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans11te+$trans12te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>




<br>
Semester 1 - 2012
<table style="width:100%">
<tr>
<td style="border:2px solid black;padding:5px;width:55%" >COURSE NAME</td>
<td style="border:2px solid black;padding:5px;width:15%">CREDIT</td>
<td style="border:2px solid black;padding:5px;width:15%">GRADE</td>
<td style="border:2px solid black;padding:5px;width:15%">GPA</td>
</tr>



<?php $trans21t = 0; ?> 
<?php $trans21te = 0; ?> 
<?php foreach ($trans21 as $item) { ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <?php echo $pname['0']['name']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%">

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
                    </td>

</tr>
  <?php $trans21t += $pname['0']['duration']; ?> 
  <?php $trans21te += $item['grade']; ?>  



<?php } ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans21t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans21te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>


Semester 2 - 2012

<table style="width:100%">

<?php $trans22t = 0; ?> 
<?php $trans22te = 0; ?> 
<?php foreach ($trans22 as $item) { ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >

<?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                   <?php echo $pname['0']['name']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%">
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
                    </td>
</tr>

  <?php $trans22t += $pname['0']['duration']; ?> 
  <?php $trans22te += $item['grade']; ?>  



<?php } ?>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans22t; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans22te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >2012 Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans21t+$trans22t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans21te+$trans22te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>

    
<br>
Semester 1 - 2013
<table style="width:100%">
<tr>
<td style="border:2px solid black;padding:5px;width:55%" >COURSE NAME</td>
<td style="border:2px solid black;padding:5px;width:15%">CREDIT</td>
<td style="border:2px solid black;padding:5px;width:15%">GRADE</td>
<td style="border:2px solid black;padding:5px;width:15%">GPA</td>
</tr>


<?php $trans31t = 0; ?> 
<?php $trans31te = 0; ?> 
<?php foreach ($trans31 as $item) { ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <?php echo $pname['0']['name']; ?></td>

                    <td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>
                    <td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%">
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
                    </td>
</tr>
  <?php $trans31t += $pname['0']['duration']; ?> 
  <?php $trans31te += $item['grade']; ?>  



<?php } ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans31t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans31te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>
Semester 2 - 2013
<table style="width:100%">


<?php $trans32t = 0; ?> 
<?php $trans32te = 0; ?> 
<?php foreach ($trans32 as $item) { ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <?php echo $pname['0']['name']; ?></td>
                
        
        <td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>
        <td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>
<td style="border:2px solid black;padding:5px;width:15%">

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
                    ?></td>
</tr>

  <?php $trans32t += $pname['0']['duration']; ?> 
  <?php $trans32te += $item['grade']; ?>  



<?php } ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans32t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans32te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >2013 Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans31t+$trans32t; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans31te+$trans32te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>


<br>
Semester 1 - 2014
<table style="width:100%">
<tr>
<td style="border:2px solid black;padding:5px;width:55%" >COURSE NAME</td>
<td style="border:2px solid black;padding:5px;width:15%">CREDIT</td>
<td style="border:2px solid black;padding:5px;width:15%">GRADE</td>
<td style="border:2px solid black;padding:5px;width:15%">GPA</td>
</tr>


<?php $trans41t = 0; ?> 
<?php $trans41te = 0; ?> 
<?php foreach ($trans41 as $item) { ?>



<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                   <?php echo $pname['0']['name']; ?></td>

                   <td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>

                   <td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%">
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
                    </td> </tr>

  <?php $trans41t += $pname['0']['duration']; ?> 
  <?php $trans41te += $item['grade']; ?>  



<?php } ?>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans41t; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans41te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>
Semester 2 - 2014


<table style="width:100%">

<?php $trans42t = 0; ?> 
<?php $trans42te = 0; ?> 
<?php foreach ($trans42 as $item) { ?>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >
                    <?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    <?php echo $pname['0']['name']; ?></td>

                    <td style="border:2px solid black;padding:5px;width:15%"><?php echo $pname['0']['duration']; ?></td>

                    <td style="border:2px solid black;padding:5px;width:15%"><?php echo $item['grade']; ?></td>

<td style="border:2px solid black;padding:5px;width:15%">
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
                    </td>
</tr>

  <?php $trans42t += $pname['0']['duration']; ?> 
  <?php $trans42te += $item['grade']; ?>  



<?php } ?>


<tr>
<td style="border:2px solid black;padding:5px;width:55%" >Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans42t; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans42te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>

<tr>
<td style="border:2px solid black;padding:5px;width:55%" >2014 Total</td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans41t+$trans42t; ?> </td>
<td style="border:2px solid black;padding:5px;width:15%"><?php echo $trans41te+$trans42te; ?></td>
<td style="border:2px solid black;padding:5px;width:15%"></td>
</tr>
</table>

