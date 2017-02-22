      <?php

      //flash messages

      if($this->session->flashdata('flash_message')){

        if($this->session->flashdata('flash_message') == 'updated')

        {

          echo '<div class="alert alert-success">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Saved</strong>';

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



      echo form_open('sprofile', $attributes);

      ?>

        <div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Profile</b></h1>
</div>
        <div class="row">
<div class="col-sm-3 text-center">
<img  width="175px;" class="img-thumbnail" src="<?php echo base_url(); ?>assets/uploads/<?php echo $userxx[0]['image']; ?>" >

<br>
<iframe style="border:0;height:auto;width:important;min-width:50px;min-height:50px;" src="<?php echo base_url(); ?>adminimg/addimg"></iframe>



</div>
<div class="col-sm-9 text-right">

<div  class="col-sm-2 text-right">
Name:
</div>
<div class="col-sm-10 text-left">
<?php echo $userxx[0]['name']; ?>
</div>

<div  class="col-sm-2 text-right">
ID:
</div>
<div class="col-sm-10 text-left">
<?php echo $userxx[0]['user_name']; ?>
</div>

<div  class="col-sm-2 text-right">
Birthday:
</div>
<div class="col-sm-10">
<input style="margin-bottom:5px;" class="form-control" type="text" name="birthday" value="<?php echo $userxx[0]['birthday']; ?>" >
</div>

<div  class="col-sm-2 text-right">
E-mail:
</div>
<div class="col-sm-10">
<input style="margin-bottom:5px;" class="form-control" type="text" name="email_addres" value="<?php echo $userxx[0]['email_addres']; ?>" >
</div>

<div  class="col-sm-2 text-right">
Address:
</div>
<div class="col-sm-10">
<input style="margin-bottom:5px;" class="form-control" type="text" name="address" value="<?php echo $userxx[0]['address']; ?>" >
</div>

<div  class="col-sm-2 text-right">
Major:
</div>
<div class="col-sm-10 text-left">

<select style="width:200px;" class="form-control" name="major">
<option value="0" <?php if ($userxx[0]['major'] == '0'){echo 'selected' ;} ?> ></option>
<option value="1" <?php if ($userxx[0]['major'] == '1'){echo 'selected' ;} ?> >Computer Science</option>
<option value="2" <?php if ($userxx[0]['major'] == '2'){echo 'selected' ;} ?> >Engineering </option>
<option value="3" <?php if ($userxx[0]['major'] == '3'){echo 'selected' ;} ?>>Business </option>
</select>


</div>

<div  class="col-sm-2 text-right">
Advisor:
</div>
<div class="col-sm-10 text-left">
<select style="width:200px;" class="form-control" name="advisor">
<option value="0" <?php if ($userxx[0]['advisor'] == ''){echo 'selected' ;} ?> ></option>

            <?php
            foreach ($advisorx as $item) {
              if ($userxx[0]['advisor'] == $item['name']){
echo '<option value="' . $item['name'] . '"selected >' . $item['name'] . '</option>';

              }else{

echo '<option value="' . $item['name'] . '">' . $item['name'] . '</option>';

              }
                
              
            }
            ?>

        </select>
<button style="margin-top:5px;" class="btn btn-sm btn-primary" type="submit">Save</button>
<a style="margin-top:5px;" class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>password">Change Password</a>


</div>






        </div>




</div>
      <?php echo form_close(); ?>


            
