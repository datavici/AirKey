	<body>
		<div class='container'>
			<div id='logo'>
			<img src="<?php echo site_url('static/images/AirKey_Logo_Grdnt.png'); ?>" width=279 height=87 alt="AirKey Logo">
			</div>
			<div id='networkStats'>
				<h3>Network at a Glance</h3>
				<p>
					<span class="caps">Total Access Points: </span><?php echo $total_AP; ?><br/>
					<span class="caps">Pending Commands: </span><?php echo $pending; ?><br />
					<span class="caps">Network Status: </span><?php echo $network_status; ?>
				</p>
			</div>
			<hr />
		</div>
		<div class='container'>
			<div id='statusBar'>
				<div id="search">
					<form method="post" action="<?php echo site_url('search'); //TODO?>">
						<label for="search_term">Search: </label>
						<input type="text" size="50" name="search_term" />
						<input type="submit" value="Search">
					</form>
				</div>
			</div>
		</div>
		<div class='container'>
			<hr />
			<div id='navigationBar'>
			<ul class='tabs'>
				<li class='label'><span class="caps">Navigation:</span></li>
				<?php // Build Menu class selected
					$manage = ($page_name === 'manage'?"selected":"");
					$group = ($page_name === 'group'?"selected":"");
					$modules = ($page_name === 'modules'?"selected":"");
				?>
				<li>
					<a href="<?php echo site_url('manage'); ?>" class="<?php echo $manage; ?>">Dashboard</a>
				</li>
				<li>
					<a href="<?php echo site_url('group'); ?>" class="<?php echo $group; ?>">Groups</a>
				</li>
				<li>
					<a href="<?php echo site_url('modules'); ?>" class="<?php echo $modules; ?>">Modules</a>
				</li>
			</ul>
			</div>
		</div>
