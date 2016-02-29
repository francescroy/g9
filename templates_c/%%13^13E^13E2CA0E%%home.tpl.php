<?php /* Smarty version 2.6.14, created on 2014-07-26 00:35:41
         compiled from home/home.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>


	<!-- This is an HTML comment -->
	
	<div id="success">Welcome to Salle's framework!</div>

	<div class="block">

		<div class="inner-block">

            <h2>This is an example of a form</h2>

	<?php if ($this->_tpl_vars['user_name']): ?>
		<p>Welcome to Projectes Web, <strong><?php echo $this->_tpl_vars['user_name']; ?>
</strong>!</p>
	<?php else: ?>
		<p>Hello! What's your name? </p>
		<form action="" method="POST">
			<input type="text" name="user_name">
			<input type="submit" name="submit" value="Enviar">
		</form>
	<?php endif; ?>

		</div>

	</div>

	
<div class="clear"></div>
<?php echo $this->_tpl_vars['modules']['footer']; ?>