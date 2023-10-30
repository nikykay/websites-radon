<div class="row">
    <?php $columns = get_sub_field('columns'); ?>
    <?php foreach ($columns as $column):?>
        <div class="col-lg-4">
            <h3><?php echo $column['title'];?></h3>
            <p><?php echo $column['content'];?></p>
            <a href="<?php echo $column['link']['url'];?>">Find out more</a>
        </div>
    <?php endforeach;?>
</div>


