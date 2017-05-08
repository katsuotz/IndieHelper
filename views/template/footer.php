	
	<footer>
		<div class="container">
			<div class="row m0">
				
				<div class="col s8">
		    		<p class="left">&copy; 2017 Indie<span style="color: #3949ab;">Helper</span>. All rights reserved </p>
				</div>
	    		<div class="col s4 social-icons right right-align">
		            <ul class="font17">
		                <li class="ml1"><a href="" style="color: #446CB3"><i class="fa fa-facebook"></i></a></li>
		                <li class="ml1"><a href="" style="color: #59ABE3"><i class="fa fa-twitter"></i></a></li>
		                <li class="ml1"><a href="" style="color: #C0392B"><i class="fa fa-google-plus"></i></a></li>
		            </ul>
				</div>
	    	</div>
		</div>
	</footer>
<?php foreach ($assets['js'] as $key => $value): ?>
	<script type="text/javascript" src="<?= baseurl('assets/js/'. $value) ?>"></script>
<?php endforeach; ?>
</body>
</html>