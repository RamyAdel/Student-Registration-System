
<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Course - <?php echo $cour[0]['name']; ?></b></h1>
</div>




 

      <?php

      //flash messages

      if($this->session->flashdata('flash_message')){

        if($this->session->flashdata('flash_message') == 'updated')

        {

          echo '<div class="alert alert-success">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Done</strong>';

          echo '</div>';       

        }else{

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



      echo form_open('drcourses/update/'.$this->uri->segment(3).'', $attributes);

      ?>

        
<div class="row">
<div class="col-sm-3 text-right">
Course Name :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="name" value="<?php echo $cour[0]['name']; ?>" >


</div>



<div class="col-sm-3 text-right">
Duration :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="duration" value="<?php echo $cour[0]['duration']; ?>" >

</div>

<div class="col-sm-3 text-right">
Credit :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="credit" value="<?php echo $cour[0]['credit']; ?>" >

</div>


<div class="col-sm-3 text-right">
Prerequeste 1 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre1">
<option value="" selected ></option>
            <?php
            foreach ($coursesss as $item) {
              if ($cour[0]['pre1'] == $item['name']){echo '<option value="'.$item['name'].'" selected>';}
      else { echo '<option value="'.$item['name'].'">';}
echo $item['name'] . '</option>';
              }
            ?>
        </select>
</div>

<div class="col-sm-3 text-right">
Prerequeste 2 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre2">
<option value="" selected ></option>

            <?php
            foreach ($coursesss as $item) {
              if ($cour[0]['pre2'] == $item['name']){echo '<option value="'.$item['name'].'" selected>';}
      else { echo '<option value="'.$item['name'].'">';}
echo $item['name'] . '</option>';
              }
            ?>

        </select>
</div>

<div class="col-sm-3 text-right">
Prerequeste 3 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre3">
<option value="" selected ></option>
<?php
            foreach ($coursesss as $item) {
              if ($cour[0]['pre3'] == $item['name']){echo '<option value="'.$item['name'].'" selected>';}
      else { echo '<option value="'.$item['name'].'">';}
echo $item['name'] . '</option>';
              }
            ?>

        </select>
</div>

<div class="col-sm-3 text-right">
Material :

</div>
<div class="col-sm-9 text-left">

<?php echo "<input type='file' name='userfile' size='20' />"; ?>
</div>

<div class="col-sm-3 text-right">
Schedule :

</div>
<div class="col-sm-9 text-left">
Day <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduleday" value="<?php echo $cour[0]['scheduleday']; ?>" >
Date <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduledate" value="<?php echo $cour[0]['scheduledate']; ?>" >
Time <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduletime" value="<?php echo $cour[0]['scheduletime']; ?>" >
</div>

<div class="col-sm-3 text-right">
Total Seats :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="totalstudent" value="<?php echo $cour[0]['totalstudent']; ?>" >

</div>

<div class="col-sm-3 text-right">
section :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="section">



<option value="CS" <?php if ($cour[0]['section'] == 'CS'){echo 'selected';}?> >CS</option>
<option value="IT" <?php if ($cour[0]['section'] == 'IT'){echo 'selected';}?> >IT</option>
<option value="BA" <?php if ($cour[0]['section'] == 'BA'){echo 'selected';}?> >BA</option>


        </select>
</div>

<div class="col-sm-3 text-right">
category :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="category">
<option value="computer engineering" <?php if ($cour[0]['category'] == 'computer engineering'){echo 'selected';}?> >computer engineering</option>
<option value="Computer science" <?php if ($cour[0]['category'] == 'Computer science'){echo 'selected';}?> >Computer science</option>
<option value="Information system" <?php if ($cour[0]['category'] == 'Information system'){echo 'selected';}?> >Information system</option>
<option value="Bioinformatics" <?php if ($cour[0]['category'] == 'Bioinformatics'){echo 'selected';}?> >Bioinformatics</option>


        </select>
</div>

<div class="col-sm-3 text-right">

</div>
<div class="col-sm-9 text-left">
<button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Update</button>



</div>


</div>






      <?php echo form_close(); ?>