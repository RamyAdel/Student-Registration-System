<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Courses</b></h1>
</div>
  
  <section class="features_table">
          <div class="col-sm-6 col-6 col-xs-12 no-padding">
              <div class="features-table">
                  <ul>
                      <h1>Course Name</h1>
                      <?php foreach ($courses as $item) { ?>
                      <li><?php echo $item['name']; ?></li>
                      <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-3 col-xs-12 no-padding">
            <div class="features-table-free">
                  <ul>
                      <h1>Enrolled Students</h1>
                      <?php foreach ($courses as $item) { ?>
                        <li><?php echo $item['enrolled']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            
            </div>
             <div class="col-sm-3 col-3 col-xs-12 no-padding">
               <div class="features-table-paid">
                  <ul>
                      <h1>Edit</h1>
                      <?php foreach ($courses as $item) { ?>
                        <li style="padding:11px;"><a href="<?php echo base_url(); ?>drcourses/update/<?php echo $item['id']; ?>"><button style="margin-right:15px;" class="btn btn-sm btn-danger">Edit</button></a><a href="<?php echo base_url(); ?>drcourses/grades/<?php echo $item['id']; ?>"><button class="btn btn-sm btn-danger">Grades</button></a></li>
                        <?php } ?>
                    </ul>
                </div>
             </div>
    
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>