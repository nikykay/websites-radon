<?php
$content = get_sub_field('content');
$image = get_sub_field('image');
$picture = $image['sizes']['large'];
$side = get_sub_field('image_side');
?>
<div class="row">
    <?php if($side == 'left'):?>
        <div class="col-lg-6">
            <img src="<?php echo $picture?>" alt="rame" class="img-fluid"/>
        </div>

        <div class="col-lg-6">
            <h4><?php echo $content?></h4>
        </div>

        <?php else:?>



        <div class="col-lg-6">
            <h4><?php echo $content?></h4>
        </div>

        <div class="col-lg-6">
            <img src="<?php echo $picture?>" alt="rame" class="img-fluid" style="float:right"/>
        </div>

    <?php endif;?>
</div>
