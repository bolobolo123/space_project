<?php

	$error_messages = array();
	$succes_messages = array();

		// DELETE FORM
	// CHECK POST & SEC
	if(!empty($_GET['delete_id'])) {

		// HISTORIC
        $prepare = $pdo->prepare('INSERT INTO historic (object, user, modification) VALUES (:object, :user, :modification)');
        $prepare->bindValue('object', 'something');
        $prepare->bindValue('user', $_SESSION['login']);
        $prepare->bindValue('modification', 'deleted');
        $prepare->execute();

        //DELETE
		$prepare = $pdo->prepare('DELETE FROM products WHERE id=:id');
		$prepare->bindValue('id', $_GET['delete_id']);
		$prepare->execute();
	}

		// EDIT FORM
	// CHECK POST & SEC
	if (!empty($_GET['edit'])) {

		// EDIT
		if (!empty($_GET['edit']['name'])) {
			$prepare = $pdo->prepare('UPDATE products SET name=:name WHERE id=:id');
			$prepare->bindValue('id', $_GET['edit']['id']);
			$prepare->bindValue('name', $_GET['edit']['name']);
			$prepare->execute();
			$succes_messages['edit'] = 'Success editing !';
		} 

		// HISTORIC
		if (!empty($succes_messages['edit'])) {
			$prepare = $pdo->prepare('INSERT INTO historic (object, user, modification) VALUES (:object, :user, :modification)');
        	$prepare->bindValue('object', 'something');
        	$prepare->bindValue('user', $_SESSION['login']);
        	$prepare->bindValue('modification', 'modified');
        	$prepare->execute();
		}
	}