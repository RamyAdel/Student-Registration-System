    <div style="padding:75px;background:url(<?php echo base_url(); ?>assets/img/login.jpg) 50% 50%;" class="container login">


      <?php 

      $attributes = array('class' => 'form-signin');

      $link = ucfirst($this->uri->segment(3));

      echo form_open("reset_password/$link", $attributes);

      echo '<h2 style="color:#666;" class="form-signin-heading">Reset Password</h2>';

      echo validation_errors();



      //flash messages

      if(isset($flash_message)){

        if($flash_message == TRUE)

        {

          echo '<div class="alert alert-success">';

            echo '<strong>Your password changed successful. </strong>';

          echo '</div>';       

        }else{

          echo '<div class="alert alert-danger">';

            echo '<strong>Wrong username, please try again.</strong>';

          echo '</div>';          

        }

      }

      echo form_input('username', '', 'placeholder="Username"');

      echo form_input('password', '', 'placeholder="Password"');

      echo form_input('password2', '', 'placeholder="Password Confirmation"');

      if(isset($message_error) && $message_error){

          echo '<div class="alert alert-error">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';

          echo '</div>';             

      }

      echo "<br />";

      echo form_submit('submit', 'Change password', 'class="btn btn-large btn-success"');

      echo form_close();

      ?>      

      </div>