<?php
	// INCLUDES > CONFIG + SUBS SCRIPT
	include "../../includes/config.php";
	include "../../includes/subscription.php";
?>

		<form action="#" method="post" class="form-container">
			<div class="success-messages">
				<?php foreach ($success_messages as $_message){ ?> 
       				<p> <?= "$_message" ?></p>
       			<?php } ?>
			</div>
			<div class="errors-messages">
       			<?php foreach ($error_messages as $_message): ?> 
       				<p> <?= "$_message" ?></p>
       			<?php endforeach ?>
    		</div>
			<h2 class="form-title">Inscription</h2>
			<div class="input-container">
				<div class="labels">USERNAME</div>
				<input type="text" name="username" placeholder="USERNAME">
			</div>
			<div class="input-container">
				<div class="labels">PASSWORD</div>
				<input type="password" name="password" placeholder="PASSWORD">
			</div>

			<input type="submit" class="submit-btn" value="VALIDER">
		</form>