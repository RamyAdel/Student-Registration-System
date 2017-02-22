<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Add Course</b></h1>
</div>


<?php

      //flash messages

      if(isset($flash_message)){

        if($flash_message == false)

        {

          echo '<div class="alert alert-error">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>ERROR</strong> Please try again later';

          echo '</div>';          

        }

      }

      ?>

      

      <?php

      //form data

      $attributes = array('class' => 'form-horizontal', 'id' => '');      



      //form validation

      echo validation_errors();

      

      echo form_open_multipart('drcourses/add', $attributes);
      ?>



<div class="row">
<div class="col-sm-3 text-right">
Course Name :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="name" value="" >


</div>
<div class="col-sm-3 text-right">
Course No :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="number" value="" >

</div>
<div class="col-sm-3 text-right">
Description :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="textarea" name="description" value="" >

</div>



<div class="col-sm-3 text-right">
Duration :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="duration" value="" >

</div>

<div class="col-sm-3 text-right">
Credit :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="credit" value="" >

</div>


<div class="col-sm-3 text-right">
prerequisite 1 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre1">
<option value="" selected ></option>

            <?php
            foreach ($coursesss as $item) {
echo '<option value="' . $item['name'] . '" >' . $item['name'] . '</option>';


              }
                
              
           
            ?>

        </select>
</div>

<div class="col-sm-3 text-right">
prerequisite 2 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre2">
<option value="" selected ></option>

            <?php
            foreach ($coursesss as $item) {
echo '<option value="' . $item['name'] . '" >' . $item['name'] . '</option>';


              }
                
              
           
            ?>

        </select>
</div>

<div class="col-sm-3 text-right">
prerequisite 3 :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="pre3">
<option value="" selected ></option>

            <?php
            foreach ($coursesss as $item) {
echo '<option value="' . $item['name'] . '" >' . $item['name'] . '</option>';


              }
                
              
           
            ?>

        </select>
</div>

<div class="col-sm-3 text-right">
Material :

</div>
<div class="col-sm-9 text-left">
<input name="matrial" size="20" type="file" />

</div>

<div class="col-sm-3 text-right">
Schedule :

</div>
<div class="col-sm-9 text-left">
Day <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduleday" value="" >
Date <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduledate" value="" >
Time <input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="scheduletime" value="" >
</div>

<div class="col-sm-3 text-right">
Total Seats :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="totalstudent" value="" >

</div>

<div class="col-sm-3 text-right">
Department :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="section">
<option value="Computer Science" >Computer Science</option>
<option value="Engineering" >Engineering </option>
<option value="Business" >Business </option>


        </select>
</div>

<div class="col-sm-3 text-right">
category :

</div>
<div class="col-sm-9 text-left">
<select style="width:200px;" class="form-control" name="category">
<option value="Computer Network" >computer Network</option>
<option value="Computer science" >Computer science</option>
<option value="Information system" >Information system</option>
<option value="Bioinformatics" >Bioinformatics</option>


        </select>
</div>

<div class="col-sm-3 text-right">

</div>
<div class="col-sm-9 text-left">
<button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Add</button>



</div>


</div>






      <?php echo form_close(); ?>