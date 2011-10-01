<form name="settings_update" id="settings_update" method="post" action="<?= base_url() ?>api/settings/modify" enctype="multipart/form-data">
<div class="content_wrap_inner">

	<div class="content_inner_top_right">
		<h3>App</h3>
		<p><?= form_dropdown('enabled', config_item('enable_disable'), $settings['foursquare']['enabled']) ?></p>
		<p><a href="<?= base_url() ?>api/<?= $this_module ?>/uninstall" id="app_uninstall" class="button_delete">Uninstall</a></p>
	</div>
	
	<h3>Application Keys</h3>

	<p>Foursquare requires <a href="https://twitter.com/apps" target="_blank">registering your application</a></p>
				
	<p><input type="text" name="consumer_key" value="<?= $settings['foursquare']['consumer_key'] ?>"> Consumer Key </p> 
	<p><input type="text" name="consumer_key_secret" value="<?= $settings['foursquare']['consumer_key_secret'] ?>"> Consumer Key Secret</p>

</div>

<span class="item_separator"></span>

<div class="content_wrap_inner">

	<h3>Setup</h3>

	<p>Sign In
	<?= form_dropdown('social_login', config_item('yes_or_no'), $settings['foursquare']['social_login']) ?>
	</p>
	
	<p>Connections 
	<?= form_dropdown('social_connection', config_item('yes_or_no'), $settings['foursquare']['social_connection']) ?>
	</p>

	<p>Check Ins 
	<?= form_dropdown('social_checkin', config_item('yes_or_no'), $settings['foursquare']['social_checkin']) ?>
	</p>

	<p>Archive
	<?= form_dropdown('archive', config_item('yes_or_no'), $settings['foursquare']['archive']) ?>
	</p>

	<p>Auto Publish
	<?= form_dropdown('auto_publish', config_item('yes_or_no'), $settings['foursquare']['auto_publish']) ?>
	</p>

	<input type="hidden" name="module" value="<?= $this_module ?>">

	<p><input type="submit" name="save" value="Save" /></p>

</div>

</form>

<?= $shared_ajax ?>
