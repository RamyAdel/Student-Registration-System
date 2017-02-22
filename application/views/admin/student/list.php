 <div class="col-sm-12 text-center">
<h1 style="color:#656565;"><b>Courses</b></h1>
</div>

      <div class="row">

<div class="col-sm-4">
<img style="width:300px;"  class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p1.jpg" >
<br><br>
<div style="padding-left:15px;">
<?php 
        foreach ($coursescs as $item) {
          echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                echo '<a href="courses/'.$item['id'].'">'.$item['name'].'</a>';
                echo '<br>';
        }
         ?>
</div>

</div>

<div class="col-sm-4">
<img style="width:300px;"  class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p2.jpg" >
<br><br>
<div style="padding-left:15px;">
<?php 
        foreach ($coursesit as $item) {
          echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                echo '<a href="courses/'.$item['id'].'">'.$item['name'].'</a>';
                echo '<br>';
        }
         ?>
</div>
</div>

<div class="col-sm-4">
<img style="width:300px;"  class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p3.jpg" >
<br><br>
<div style="padding-left:15px;">
<?php 
        foreach ($coursesba as $item) {
          echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                echo '<a href="courses/'.$item['id'].'">'.$item['name'].'</a>';
                echo '<br>';
        }
         ?>
</div>

</div>





    </div>