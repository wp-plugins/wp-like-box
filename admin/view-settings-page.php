
			
		
<div class="wrap">
<h2>Settings</h2>

<form method="post" action="" novalidate="novalidate">
<input type="hidden" name="wpfblb-options" value="general"><input type="hidden" name="action" value="update"><input type="hidden" id="_wpnonce" name="_wpnonce" value="c8ff0a7295"><input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/options-general.php">
<table class="form-table">
<tbody>

<tr>
<th scope="row"><label for="status">Activate</label></th>
<td><input type="checkbox" name="status" id="status" <?php checked( $options['status'], true ) ?>>Enabled</td>
</tr>

<tr>
<th scope="row"><label for="page_url">Facebook Page URL</label></th>
<td><input name="page_url" type="text" id="page_url" value="<?php echo $options['page_url'] ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="width">Width (px)</label></th>
<td><input name="width" type="number" id="width" value="<?php echo $options['width'] ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"><label for="page_url">Height (px)</label></th>
<td><input name="height" type="number" id="height" value="<?php echo $options['height'] ?>" class="regular-text"></td>
</tr>

<tr>
<th scope="row"></th>
<td><input type="checkbox" name="show_faces" id="show_faces" <?php checked( $options['show_faces'], true ) ?>><label for="show_faces">Show Friend's Faces</label></td>
</tr>

<tr>
<th scope="row"></th>
<td><input type="checkbox" name="hide_cover" id="hide_cover" <?php checked( $options['hide_cover'], true ) ?>><label for="hide_cover">Hide Cover Photo</label></td>
</tr>

<tr>
<th scope="row"></th>
<td><input type="checkbox" name="page_posts" id="page_posts" <?php checked( $options['page_posts'], true ) ?>><label for="page_posts">Show Page Posts</label></td>
</tr>

<tr>
<th scope="row"><label for="use_cookies">Activate</label></th>
<td><input type="checkbox" name="use_cookies" id="status" <?php checked( $options['use_cookies'], true ) ?>>Use cookies</td>
</tr>

<tr>
<th scope="row"><label for="cookies_expire">Cookies expiration time</label></th>
<td><input name="cookies_expire" type="text" id="cookies_expire" value="<?php echo $options['cookies_expiration_time'] ?>" class="regular-text"></td>
</tr>

</tbody></table>


<p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes"></p></form>

</div>

<div class="clear"></div>