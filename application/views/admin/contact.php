   <div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>CONTACT FORM</b></h1>
</div>


<?php
      //form data
      $attributes = array('class' => 'form-horizontal', 'id' => '', 'role' => 'form');      

      //form validation
      
      
      echo form_open('contact', $attributes);
      ?>

            <?php
echo validation_errors();

      //flash messages
      if(isset($flash_message)){
        if($flash_message == TRUE)
        {
          echo '<div class="alert alert-success">';
            echo '<strong>Your message sent  successfuly</strong>';
          echo '</div>';       
        }else{
          echo '<div class="alert alert-danger">';
            echo '<strong>Error</strong> try submitting again';
          echo '</div>';          
        }
      }
      ?>


<section>
  <div>
    <div class="row">
      <div class="col-sm-12">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form method="post" data-form-title="CONTACT US">
              <input type="hidden" data-form-email="true">
              <div class="form-group">
                <input name="name" type="hidden" value="<?php echo $userxx[0]['name']; ?>" />
              </div>
              <div class="form-group">
              <input name="email" value="<?php echo $userxx[0]['email_addres']; ?>" type="hidden" />
              </div>
             
              <div class="form-group">

                <textarea name="messege" value="<?php echo set_value('messege'); ?>" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>


              </div>
              <div>
                <button type="submit" class="btn btn-lg btn-danger">SEND</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>