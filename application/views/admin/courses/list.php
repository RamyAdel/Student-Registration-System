<div class="row text-center">
    <h1 style="color:#656565;font-size:30px;"><b>Courses</b></h1>
</div>


<div class="row">
    <?php if ($us['0']['major'] == '1') { ?>
        <div class="col-sm-8 col-sm-offset-4">
            <img style="width:300px;" class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p1.jpg">
            <br><br>

            <div style="padding-left:15px;">
                <?php
                foreach ($coursescs as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
            </div>

        </div>
    <?php } ?>
    <?php if ($us['0']['major'] == '2') { ?>
        <div class="col-sm-8 col-sm-offset-4">
            <img style="width:300px;" class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p2.jpg">
            <br><br>

            <div style="padding-left:15px;">
                <?php
                foreach ($coursesit as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
            </div>
        </div>
    <?php } ?>
    <?php if ($us['0']['major'] == '3') { ?>
        <div class="col-sm-8 col-sm-offset-4">
            <img style="width:300px;" class="img-thumbnail" src="<?php echo base_url(); ?>assets/img/p3.jpg">
            <br><br>

            <div style="padding-left:15px;">
                <?php
                foreach ($coursesba as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
            </div>

        </div>
    <?php } ?>
    <?php if ($us['0']['major'] == '' || $us['0']['major'] == '0') { ?>
        <div class="col-sm-12">
            Please Select Your Major First from your profile.
        </div>
    <?php } ?>


</div>