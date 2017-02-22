<div class="row text-center">
<h1 style="color:#656565;font-size:30px;"><b>Course Load</b></h1>
</div>
  
  <section class="features_table">
        	<div class="col-sm-4 col-4 col-xs-12 no-padding">
            	<div class="features-table">
                	<ul>
                    	<h1>Course Name</h1>
                    	<?php foreach ($courses as $item) { ?>
                    	<?php $pname = $this->courses_model->get_course_by_id($item['course']); ?>
                    	<li><?php echo $pname['0']['name']; ?></li>
                    	<?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 col-4 col-xs-12 no-padding">
            <div class="features-table-free">
                	<ul>
                    	<h1>Professor</h1>
                    	<?php foreach ($courses as $item) { ?>
                        <?php $pname2 = $this->courses_model->get_course_by_id($item['course']); ?>
                        <li><?php echo $pname2['0']['professor']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            
            </div>
            <div class="col-sm-2 col-2 col-xs-12 no-padding">
            <div class="features-table-free">
                    <ul>
                        <h1>Duration</h1>
                        <?php foreach ($courses as $item) { ?>
                        <?php $pname3 = $this->courses_model->get_course_by_id($item['course']); ?>
                        <li><?php echo $pname3['0']['duration']; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            
            </div>
             <div class="col-sm-2 col-2 col-xs-12 no-padding">
             	 <div class="features-table-paid">
                	<ul>
                    	<h1>Drop</h1>
                    	<?php foreach ($courses as $item) { ?>
                        <li style="padding:11px;"><a href="<?php echo base_url(); ?>courseload/<?php echo $item['id']; ?>/<?php echo $item['course']; ?>"><button class="btn btn-sm btn-danger">Drop</button></a></li>
                        <?php } ?>
                    </ul>
                </div>
             </div>
    
    </section>

    <br><br><br><br><br><br><br><br><br><br><br><br><br>