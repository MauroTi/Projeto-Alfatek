<?php

	function msg() {
		if(isset($_GET['msg'])) {
			echo '<script>alert("'.$_GET['msg'].'")</script>';
		}
	}