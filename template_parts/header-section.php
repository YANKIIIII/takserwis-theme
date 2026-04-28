<?php $group_section = $args; ?>
<div class="header_section">

    <?php if (!empty($group_section['title'])) : ?>
    <h2 class="title">
        <?php echo $group_section['title']; ?>
    </h2>
    <?php endif; ?>
    <?php if (!empty($group_section['text'])) : ?>
    <p class="description ">
        <?php echo $group_section['text']; ?>
    </p>
    <?php endif; ?>

</div>