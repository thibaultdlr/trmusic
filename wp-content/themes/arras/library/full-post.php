	<?php $cover_image = get_field('cover_img');

		if( !empty($cover_image) ): 

			// vars
			$url = $cover_image['url'];
			$title = $cover_image['title'];
			$alt = $cover_image['alt'];
			$caption = $cover_image['caption']; ?>


			<div class="cover_img">
				<img title="<?php echo $title; ?>" src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" />
			</div>

		<?php endif; ?>

		<?php if(get_field('subtitle')): ?>
                            <div id="subtitle"><?php echo get_field('subtitle'); ?></div>
        	<?php endif; ?>

		<?php if(get_field('release_date')): ?>
                            <div id="release_date"><?php echo get_field('release_date'); ?></div>
                <?php endif; ?>

		<?php if(get_field('descr')): ?>
        	<div id="descr"><?php echo get_field('descr'); ?></div>
        <?php endif; ?>

		<?php $rows=get_field('rel_audio'); 
        if ($rows) { ?>

		<div class="rel_audio">
		<?php foreach ($rows as $row) { ?>
				<a href="<?php echo $row[sc_link]; ?>" class="sc-player"></a>
		<?php } ?>
		</div>
		<?php } ?>
		


		<?php if(get_field('credit')): ?>
                            <div id="credit"><?php echo get_field('credit'); ?></div>
                <?php endif; ?>