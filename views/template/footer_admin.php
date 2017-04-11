	
	</div>
<?php foreach ($assets['js'] as $key => $value): ?>
	<script type="text/javascript" src="<?= baseurl('assets/js/'. $value) ?>"></script>
<?php endforeach; ?>
</body>
</html>