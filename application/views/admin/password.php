        <div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Change Password</b></h1>
</div>

 

<?php

echo validation_errors();



      //flash messages

      if(isset($flash_message)){

        if($flash_message == TRUE)

        {

          echo '<div class="alert alert-success">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>تم التعديل. </strong>';

          echo '</div>';       

        }else{

          echo '<div class="alert alert-error">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>خطأ</strong> أعد المحاولة مرة أخرى.';

          echo '</div>';           

        }

      }

      ?>





      <?php

      //form data

      $attributes = array('class' => 'form-horizontal', 'id' => '', 'role' => 'form');      



      //form validation

      

      $link = ucfirst($this->uri->segment(3));

      echo form_open("password", $attributes);

      ?>



      <div class="row">



 <div style="margin-bottom:10px;" class="col-md-3 text-right">

      Old Password

      </div>

      <div style="margin-bottom:10px;" class="col-md-9">

      <input style="width:300px;" class="form-control" type="password" name="oldpassword" >

      </div>



       <div style="margin-bottom:10px;" class="col-md-3  text-right">

      New Password

      </div>

      <div style="margin-bottom:10px;" class="col-md-9">

      <input style="width:300px;" class="form-control" type="password" name="password" >

      </div>



      <div style="margin-bottom:10px;" class="col-md-3  text-right">

      Retype New Password

      </div>

      <div style="margin-bottom:10px;" class="col-md-9">

      <input style="width:300px;" class="form-control" type="password" name="password2" >

      </div>



            </div>



<div class="row">

      <div class="col-md-3">

      </div>

      <div class="col-md-9">



            <button class="btn btn-sm btn-danger" type="submit">Confirm</button>

      </div>

          </div>



        </fieldset>



      <?php echo form_close(); ?>



     