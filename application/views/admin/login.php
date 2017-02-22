    <div style="padding:75px;background:url(<?php echo base_url(); ?>assets/img/login.jpg) 50% 50%;" class="container login">

      <?php 

      $attributes = array('class' => 'form-signin');

      echo form_open('login/validate_credentials', $attributes);

      echo '<h2 style="color:#666;" class="form-signin-heading">Login</h2>';

      echo form_input('user_name', '', 'placeholder="Username"');

      echo form_password('password', '', 'placeholder="Password"');

      if(isset($message_error) && $message_error){

          echo '<div class="alert alert-error">';

            echo '<a class="close" data-dismiss="alert">&times;</a>';

            echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';

          echo '</div>';             

      }

      echo "<br />";

      echo form_submit('submit', 'Login', 'class="btn btn-large btn-danger"');
      echo '	<a class="btn btn-large btn-danger" href="'.base_url().'forget_password">Forget Password</a>';
      echo form_close();

      ?>      

      </div>