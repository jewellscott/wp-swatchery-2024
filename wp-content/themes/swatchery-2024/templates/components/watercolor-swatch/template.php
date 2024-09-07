<watercolor-swatch>
	<picture>
		<img src="https://peprojects.dev/images/square.jpg" alt="" width="200">
	</picture>
	<h2 class="name"><?php the_field('name'); ?></h2>
	<h3 class="brand"><?php the_field('brand'); ?></h2>


	<!--                Pigment                -->
	<?php
		$pigments = get_field('pigment');
		if( $pigments ): ?>
    <ul class="pigments">
    <?php foreach( $pigments as $pigment ): 
        $permalink = get_permalink( $pigment->ID );
        $color_index_name = get_field('color_index_name', $pigment->ID );
        ?>
        <li>
            <a href="<?php echo esc_url( $permalink ); ?>"><?php echo esc_html( $color_index_name ); ?></a>
        </li>
    <?php endforeach; ?>
    </ul>
	<?php endif; ?>

	<!--                Properties                -->

	<?php
		$properties = get_field( 'properties' );
	?>
    <ul>
        <li><?=$properties['lightfastness'];?></li>
        <li><?=$properties['transparency'];?></li>
        <li><?=$properties['staining'];?></li>
        <li><?=$properties['granulation']?></li>
    </ul>
	<a href="<?php the_permalink(); ?>">Detail</a>
</watercolor-swatch>

<style>
	
	watercolor-swatch {
		display: block;
		padding: 10px;
		max-width: 250px;
		background-color: #f7f7f7;
		padding: 1em;

		picture {
			background-color: blue;
			margin-inline: auto;
		}

		.name, .brand {
			text-align: center;
		}
	}

</style>