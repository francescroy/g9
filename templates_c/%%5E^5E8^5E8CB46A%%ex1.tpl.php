<?php /* Smarty version 2.6.14, created on 2016-02-19 12:39:45
         compiled from home/ex1.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>



<h1>Exercici 1</h1>

<?php if ($this->_tpl_vars['var2'] != 'trompeta'): ?>
<a href="http://default.dev/ex1/<?php echo $this->_tpl_vars['var5']; ?>
">Anar a la anterior</a>
<?php endif; ?>

<img src="http://default.dev/imag/<?php echo $this->_tpl_vars['var2']; ?>
.jpg" />

<?php if ($this->_tpl_vars['var2'] != 'tambor'): ?>
<a href="http://default.dev/ex1/<?php echo $this->_tpl_vars['var6']; ?>
">Anar a la seguent</a>
<?php endif; ?>




<?php echo $this->_tpl_vars['modules']['footer']; ?>
