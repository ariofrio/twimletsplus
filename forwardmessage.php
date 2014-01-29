<Response>
	<Message to="<?php echo $_REQUEST['PhoneNumber']; ?>">
		<?php echo $_REQUEST['From']; ?>: <?php echo $_REQUEST['Body']; ?>
	</Message>
</Response>