<div class="row text-center">
    <h1 style="color:#656565;font-size:30px;"><b>Plan of study</b></h1>
</div>


<div class="row">
    <?php if ($us['0']['major'] == '1') { ?>
        <div class="col-sm-6">
            <div>
            <h1 data-toggle="collapse" data-target="#is" style="font-size:25px;"><a>Information system</a></h1>
            <div id="is" class="collapse">
                <?php
                foreach ($coursescecsis as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
            <h1 data-toggle="collapse" data-target="#cs" style="font-size:25px;"><a>Computer science</a></h1>
            <div id="cs" class="collapse">
                <?php
                foreach ($coursescecs as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div >
            <br>
            <h1 data-toggle="collapse" data-target="#ne" style="font-size:25px;"><a>Computer Network</a></h1>
            <div id="ne" class="collapse">
                <?php
                foreach ($coursesnet as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
            <br>
            <h1 data-toggle="collapse" data-target="#bi" style="font-size:25px;"><a>Bioinformatics</a></h1>
            <div id="bi" class="collapse">
                <?php
                foreach ($coursesbio as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($us['0']['major'] == '2') { ?>
        <div class="col-sm-6">
            <div>
            <h1 data-toggle="collapse" data-target="#ch" style="font-size:25px;"><a>Chemical Engineering</a></h1>
            <div id="ch" class="collapse">
                <?php
                foreach ($courseschem as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
            <h1 data-toggle="collapse" data-target="#ar" style="font-size:25px;"><a>Architectural Engineering</a></h1>
            <div id="ar" class="collapse">
                <?php
                foreach ($coursesarch as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div >
            <br>
            <h1 data-toggle="collapse" data-target="#ci" style="font-size:25px;"><a>Civil engineering</a></h1>
            <div id="ci" class="collapse">
                <?php
                foreach ($coursesciv as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div>
            <br>
            <h1 data-toggle="collapse" data-target="#el" style="font-size:25px;"><a>Electrical Engineering</a></h1>
            <div id="el" class="collapse">
                <?php
                foreach ($coursesele as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php if ($us['0']['major'] == '3') { ?>
        <div class="col-sm-6">
            <div>
            <h1 data-toggle="collapse" data-target="#bs" style="font-size:25px;"><a>Business</a></h1>
            <div id="bs" class="collapse">
                <?php
                foreach ($coursesBusiness as $item) {
                    echo '<span style="margin-right:5px;" class="glyphicon glyphicon-chevron-right"></span>';
                    echo '<a href="courses/' . $item['id'] . '">' . $item['name'] . '</a>';
                    echo '<br>';
                }
                ?>
                </div>
            </div>
        </div>
        
    <?php } ?>

    

</div>