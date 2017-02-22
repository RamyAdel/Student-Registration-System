    <div style="padding:75px;background:url(<?php echo base_url(); ?>assets/img/login.jpg) 50% 50%;" class="container login">


      <?php 

      $attributes = array('class' => 'form-signin');

      echo form_open('forget_password', $attributes);

      echo '<h2 style="color:#666;" class="form-signin-heading">Forget Password</h2>';

      echo validation_errors();



      //flash messages

      if(isset($flash_message)){

        if($flash_message == 'TRUE2')

        {

          echo '<div class="alert alert-success">';

            echo '<strong>Your password sent successful, check your email now. </strong>';

          echo '</div>';       

        }

        else if($flash_message == 'ERROR2'){

          echo '<div class="alert alert-danger">';

            echo '<strong>Error in mailing system, please contact us.</strong>';

          echo '</div>';          

        }else{

          echo '<div class="alert alert-danger">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Email adress not found.</strong>';

          echo '</div>';          

        }

      }

      echo form_input('email', '', 'placeholder="Email Address"');

      if(isset($message_error) && $message_error){

          echo '<div class="alert alert-error">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';

          echo '</div>';             

      }

      echo "<br />";

      echo form_submit('submit', 'send password', 'class="btn btn-large btn-success"');

      echo form_close();

      ?>      
      </div>