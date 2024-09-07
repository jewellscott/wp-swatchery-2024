<pigment-detail>
	
	<h1 class="color-index-name"><?php the_field('color_index_name'); ?></h1>

	<h2 class="common-name"><?php the_field('common_name'); ?></h1>

	<table>
	  <!--  <tr>
	      <th>Color Family</th>
	      <td><?php // the_field('color_family'); ?></td>
	   </tr>
	   <tr>
	      <th>Pigment Family</th>
	      <td><?php // the_field('pigment_family'); ?></td>
	   </tr> -->
	   <tr>
	   	<th>Common Name</th>
	      <td><?php the_field('common_name'); ?></td>
	   </tr>
	 <!--   <tr>
	      <th>Marketing Names</th>
	      <td><?php //the_field('marketing_names'); ?></td>
	   </tr> -->
	   <tr>
	      <th>Chemical Composition</th>
	      <td><?php the_field('chemical_composition'); ?></td>
	   </tr>
	   <!-- <tr>
	      <th>Color Description</th>
	      <td><?php //the_field('color_family'); ?></td>
	   </tr> -->
	   <tr>
	      <th>Opacity</th>
	      <td><?php the_field('opacity'); ?><?php the_field('opacity'); ?></td>
	   </tr>
	   <tr>
	      <th>Lightfastness</th>
	      <td><?php the_field('lightfastness'); ?></td>
	   </tr>
	   <tr>
	      <th>Toxicity</th>
	      <td><?php the_field('toxicity'); ?></td>
	   </tr>
	   <tr>
	      <th>Notes</th>
	      <td><?php the_field('notes'); ?></td>
	   </tr>
	</table>


</pigment-detail>	
	

<style>

	table {
		table-layout: auto;
		width: 100%;
	}

	th {
		background-color: #111111;
		color: white;

	}
	td {
		background-color: #f1f1f1;
	}


</style>