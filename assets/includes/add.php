<?php   
    $error_messages = array();
    $success_messages = array();
    // CANCEL BTN
    if ( (!empty($_POST)) && (isset($_POST['cancel']))) {
        header('location: ./home.php');
    }
        // UPLOAD FORM
    // CHECK POST & SEC
    if ( (!empty($_POST)) && (isset($_POST['formname']))) {

    	// NAME SEC
    	if (empty($_POST['name']))
    		$error_messages['name'] = 'Invalid Name';
        else
            $name = $_POST['name']; 

    	// NICE SITUATION
    	if (empty($error_messages)) {
    		// Prepare request
    		$prepare = $pdo->prepare('INSERT INTO products (name) VALUES (:name)');
    		// Bind and Send
    		$prepare->bindValue('name', $name);
    		$prepare->execute();

            // HISTORIC
            $prepare = $pdo->prepare('INSERT INTO historic (object, user, modification) VALUES (:object, :user, :modification)');
            $prepare->bindValue('object', $name);
            $prepare->bindValue('user', $_SESSION['login']);
            $prepare->bindValue('modification', 'created');
            $prepare->execute();
    	} else {
            // CLEANING
        	$_POST['name'] = '';
            // & REDIR
            header('location: ./product-form.php');
            exit;
        }
    }

        // UPLOAD FILE
    // IF AN IMAGE IS UPLOADED
    if ((!empty($_FILES)) && (isset($_POST['formname'])) ) {
        // INIT
        $extensions = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $extension  = strtolower(  substr(  strrchr($_FILES['image_url']['name'], '.')  ,1)  );
        $img_sizes   = getimagesize($_FILES['image_url']['tmp_name']);
        $maxsize    = '2000000';
        $max_width  = '16000';
        $max_height = '16000';
        // FILE SECURITY
        // UPLOAD SEC
        if ($_FILES['image_url']['error'] > 0) 
            $error_messages['file'] = "Erreur lors du transfert";
        // SIZE SEC
        if ($_FILES['image_url']['size'] > $maxsize)
            $error_messages['file'] = "Le fichier est trop gros";
        // FILETYPE SEC
        if (!in_array($extension,$extensions))
            $error_messages['file'] = "Mauvais format";
        // FILE DIM SEC
        if ($img_sizes[0] > $max_width OR $img_sizes[1] > $max_height)
            $error_messages = "Image trop grande";

        // NICE SITUATION
        if (empty($error_messages)) {
            $img_name = "../../img/upload/{$_FILES['image_url']['name']}";
            $resultat = move_uploaded_file($_FILES['image_url']['tmp_name'],$img_name);
            $prepare = $pdo->prepare('UPDATE products SET file=:file WHERE name=:name');
            $prepare->bindValue('file', $img_name);
            $prepare->bindValue('name', $_SESSION['last_imgName']);
            $prepare->execute();
            // CLEAN
            $_SESSION['last_imgName'] = '';
        } 
    } 
 