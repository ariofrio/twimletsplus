<?php header('Content-Type: application/xml'); ?>
<Response>
	<Message to="<?php echo htmlspecialchars($_REQUEST['PhoneNumber']); ?>"><?php echo htmlspecialchars($_REQUEST['From']); ?>: <?php echo htmlspecialchars($_REQUEST['Body']); ?></Message>
</Response>