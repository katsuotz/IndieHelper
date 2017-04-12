<div class="content">
	
	<?php 

		$value = array(
			'nama' => 'gg',
			'kelas' => 'wp',
			'username' => 'ez'
			);

		$row = array();
		$col = array();

		foreach ($value as $key => $values) {
			array_push($row, $key);
			array_push($col, $values);
		}

		$result = array();

		for ($i = 0; $i < count($row); $i++) {
			array_push($result, ($row[$i] . " = '" . $col[$i]) . "'");
		}

		print_r($result);
		echo '<br>WHERE ' . implode(" AND ", $result);

	?>
	<div id="dashboard" class="col s12">Test 1</div>
	<div id="user" class="col s12">Test 2</div>
	<div id="project" class="col s12">Test 3</div>
	<div id="bank" class="col s12">Test 4</div>
	<div id="donasi" class="col s12">Test 5</div>

	<!-- Modal Structure -->
	    <div id="modal-setting" class="modal">
	    	<div class="modal-content">
	    		<h4>Modal Header</h4>
	    		<p>A bunch of text</p>
	    	</div>
	    	<div class="modal-footer">
	    		<a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Agree</a>
	    	</div>
	    </div>

</div>