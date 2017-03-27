<?php
	// SESSION SEC
	session_start();
	if (empty($_SESSION)) {
		header("location: ../../../index.php");
		exit;
	}
	// INCLUDES SCRIPTS > CONFIG + ADD
	include'../../includes/config.php';
	include '../../includes/add.php';
?>

			<form action="./product-img.php" method="post" class="pform1-container">
				<div class="left-container">
					<h2 class="form-title">PRODUCT INFO</h2>
					<div class="input-container">
						<div class="labels">Nom</div>
						<input type="text" name="name" placeholder="Ex : Air Max 90" autofocus>
					</div>
					<div class="input-container">
						<div class="labels">Réf</div>
						<input type="text" name="reference" placeholder="Ex : 00015">
					</div>
					<div class="input-container">
						<div class="labels">Type</div>
						<input type="text" name="type" list="type">
						<datalist id="type">
        					<option value="Tennis">Tennis</option>
        					<option value="Running">Running</option>
        					<option value="Lifestyle">Lifestyle</option>
        					<option value="Basket">Basket</option>
        					<option value="Skateboard">Skateboard</option>
    					</datalist>
					</div>
					<div class="numb-container">
						<div class="input-container">
							<div class="labels">Prix</div>
							<input type="number" name="price" placeholder="0">
						</div>
						<div class="input-container">
							<div class="labels">Qtté</div>
							<input type="number" name="quantity" placeholder="0">
						</div>
					</div>
				</div>
				<div class="right-container">
					<h2 class="form-title">PRODUCT INFO</h2>
					<div class="input-container description">
						<div class="labels">Description</div>
						<textarea cols="30" rows="10" name="description" placeholder="La paire de chaussure historique de Nike remise au goût du jour"></textarea>
					</div>
					<div class="input-container">
						<div class="labels">Plus</div>
						<input type="text" name="plus" placeholder="Disponible en 5 coloris">
					</div>
					<div class="radios">
            		<label>
            		    <input type="radio" name="stock" value="sell">
            		    Produit en vente
            		</label>
            		<label>
            		    <input type="radio" name="stock" value="stockonly">
            		    Produit en stock seulement
    				</label>
        			</div>
				</div>
				<div class="submits">
					<input type="submit" value="CANCEL" class="submit-btn" name="cancelinfo">
					<input type="submit" value="CONTINUE" class="submit-btn" name="addinfo">
				</div>
			</form>