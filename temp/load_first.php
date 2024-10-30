<div class="group" id="1">
	<h3>Column 1</h3>
	<div>
		<table style="padding: 5px;">
			<tr>
				<td><?php _e( 'Paste URL or use from Media', 'image-hover-gallery' ); ?>
				<td>
					<input name="wcpop[1][imageurl]" type="text" value="" class="image-url">
					<button class="button-secondary upload_image_button"
						data-title="<?php _e( 'Select Image', 'image-hover-gallery' ); ?>"
						data-btntext="<?php _e( 'Select', 'image-hover-gallery' ); ?>"><?php _e( 'Media', 'image-hover-gallery' ); ?></button>
				</td>
				<td>
					<p class="description"><?php _e( 'Use media to upload image', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Title', 'image-hover-gallery' ); ?></td>
				<td>
					<input name="wcpop[1][imagetitle]" type="text" value="" class="widefat image-title" class="widefat">
				</td>
				<td>
					<p class="description"><?php _e( 'It will be used as title attribute of image tag', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Alternate Text', 'image-hover-gallery' ); ?></td>
				<td>
					<input name="wcpop[1][imagealt]" type="text" value="" class="widefat alt-text">
				</td>
				<td>
					<p class="description"><?php _e( 'It will be used as alt attribute of image tag', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Caption Text', 'image-hover-gallery' ); ?></td>
				<td><textarea class="widefat" name="wcpop[1][captiontext]"></textarea></td>
				<td>
					<p class="description"><?php _e( 'HTML tags can be used when caption wrapper is none', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Caption Wrapper', 'image-hover-gallery' ); ?></td>
				<td>
					<select class="widefat" name="wcpop[1][captionwrap]">
						<option value="h1">Heading 1</option>
						<option value="h2">Heading 2</option>
						<option value="h3">Heading 3</option>
						<option value="h4">Heading 4</option>
						<option value="h5">Heading 5</option>
						<option value="h6">Heading 6</option>
						<option value="div" selected>None</option>
					</select>
				</td>
				<td>
					<p class="description"><?php _e( 'Wrap caption in markup', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Caption Alignment', 'image-hover-gallery' ); ?></td>
				<td>
					<select name="wcpop[1][captionalignment]" class="widefat">
						<option value="auto"><?php _e( 'Auto', 'image-hover-gallery' ); ?></option>
						<option value="center"><?php _e( 'Center', 'image-hover-gallery' ); ?></option>
						<option value="right"><?php _e( 'Right', 'image-hover-gallery' ); ?></option>
						<option value="left"><?php _e( 'Left', 'image-hover-gallery' ); ?></option>
						<option value="justify"><?php _e( 'Justify', 'image-hover-gallery' ); ?></option>
					</select>
				</td>
				<td>
					<p class="description"><?php _e( 'How you want to align caption', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Caption Background Color', 'image-hover-gallery' ); ?></td>
				<td><input name="wcpop[1][captionbg]" type="text" value="" class="widefat"></td>
				<td>
					<p class="description"><?php _e( 'Use Color Picker from right sidebar', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Caption Text Color', 'image-hover-gallery' ); ?></td>
				<td><input name="wcpop[1][captioncolor]" type="text" value="" class="widefat"></td>
				<td>
					<p class="description"><?php _e( 'Use Color Picker from right sidebar', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Background Opacity', 'image-hover-gallery' ); ?></td>
				<td><input name="wcpop[1][captionopacity]" type="number" max="1" min="0" step="0.1" value="" class="widefat"></td>
				<td>
					<p class="description"><?php _e( 'Use from 0.1 to 1.0', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Link To', 'image-hover-gallery' ); ?></td>
				<td><input name="wcpop[1][captionlink]" type="text" class="widefat" value=""></td>
				<td>
					<p class="description"><?php _e( 'Paste URL here or leave blank', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Enable LightBox', 'image-hover-gallery' ); ?> (<b>Pro Feature</b>)</td>
				<td><input name="wcpop[1][lightbox]" type="checkbox"></td>
				<td>
					<p class="description"><?php _e( 'It will open images in popup on clicking', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Link Target', 'image-hover-gallery' ); ?></td>
				<td>
					<select name="wcpop[1][captiontarget]" class="widefat">
						<option value="_blank">New window</option>
						<option value="_self">Same frame as it was clicked</option>
						<option value="_parent">Parent frameset</option>
						<option value="_top">Full body of the window</option>
					</select>
				</td>
				<td>
					<p class="description"><?php _e( 'Open link in new tab or same', 'image-hover-gallery' ); ?>.</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Hover Style', 'image-hover-gallery' ); ?></td>
				<td>
					<select name="wcpop[1][hoverstyle]" class="widefat">
						<?php foreach ($all_styles as $stylename) { ?>
							<option value="<?php echo $stylename; ?>"><?php echo ucwords(preg_replace('/(?<=\\w)(?=[A-Z])/'," $1", $stylename)); ?></option>
						<?php } ?>
					</select>
				</td>
				<td>
					<p class="description"><?php _e( 'Choose hover style', 'image-hover-gallery' ); ?> (<b>31 more effects in Pro Version</b>)</p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Border Width', 'image-hover-gallery' ); ?> (<b>Pro Feature</b>)</td>
				<td>
					<input type="text" class="widefat" name="wcpop[1][borderwidth]">
				</td>
				<td>
					<p class="description"><?php _e( 'Width of border. Leaving blank will disable border.', 'image-hover-gallery' ); ?></p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Border Type', 'image-hover-gallery' ); ?> (<b>Pro Feature</b>)</td>
				<td>
					<select name="wcpop[1][bordertype]" class="widefat">
						<option value="dotted">Dotted</option>
						<option value="dashed">Dashed</option>
						<option value="solid">Solid</option>
						<option value="double">Double</option>
						<option value="groove">Groove</option>
						<option value="ridge">Ridge</option>
						<option value="inset">Inset</option>
						<option value="outset">Outset</option>
					</select>
				<td>
					<p class="description"><?php _e( 'Some styles may depend on border color.', 'image-hover-gallery' ); ?></p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Border Color', 'image-hover-gallery' ); ?> (<b>Pro Feature</b>)</td>
				<td>
					<input type="text" class="widefat" name="wcpop[1][bordercolor]">
				</td>
				<td>
					<p class="description"><?php _e( 'Name of color or color code.', 'image-hover-gallery' ); ?></p>
				</td>
			</tr>
			<tr>
				<td><?php _e( 'Border Radius', 'image-hover-gallery' ); ?> (<b>Pro Feature</b>)</td>
				<td>
					<input type="text" class="widefat" name="wcpop[1][borderradius]">
				</td>
				<td>
					<p class="description"><?php _e( 'Radius of border eg: 5px or 50%.', 'image-hover-gallery' ); ?></p>
				</td>
			</tr>
		</table>
		<button class="button button-delete">Remove</button>
		<br style="clear: both;">
		<br>		
	</div>
</div>