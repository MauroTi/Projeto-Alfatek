<?php

	session_start();

	session_destroy();

	header('Location: entrar.php?msg=Logout efetuado com sucesso');