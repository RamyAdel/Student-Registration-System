
<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b><?php echo $cour[0]['name']; ?> - Grades</b></h1>
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



      echo form_open('drcourses/grades/'.$this->uri->segment(3).'', $attributes);

      ?>

<input style="margin-bottom:5px;width:250px;" class="form-control" type="hidden" name="course" value="<?php echo $this->uri->segment(3); ?>" >


        
<div class="row">
<?php
foreach ($stu as $item) { ?>
<div class="col-sm-3 text-right">
<?php
                    $uuco = $this->dr_model->get_user($item['student']);
                    
                    echo $uuco->name;
               ?> :

</div>
<div class="col-sm-9 text-left">
<input style="margin-bottom:5px;width:250px;" class="form-control" type="text" name="grade<?php echo $item['student']; ?>" value="" >
<input style="margin-bottom:5px;width:250px;" class="form-control" type="hidden" name="student<?php echo $item['student']; ?>" value="<?php echo $item['student']; ?>" >

</div>

<?php }
                ?>

<div class="col-sm-3 text-right">

</div>
<div class="col-sm-9 text-left">
<button style="margin-top:5px;" class="btn btn-sm btn-danger" type="submit">Update</button>



</div>


</div>






      <?php echo form_close(); ?>