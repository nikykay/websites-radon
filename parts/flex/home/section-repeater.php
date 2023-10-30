<?php
$card_repeater = get_sub_field('card_repeater');

?>

<section class="second-section">
    <div class="yellow-box-container">
        <?php if($card_repeater):?>
            <?php foreach ($card_repeater as $cr):
                $link_text = $cr['link_text'];
                $description = $cr['description']
                ?>
                <div class="yellow-box">
                    <div class="inner-box">
                        <?php if($link_text):?>
                            <a class="secondary-btn" href="<?php echo $link_text['url']; ?>"><?php echo $link_text['title']; ?></a>
                        <?php endif;?>
                        <?php if($description):?>
                            <p class="secondary-description"><?php echo $description; ?></p>
                        <?php endif;?>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif;?>
    </div>

</section>
