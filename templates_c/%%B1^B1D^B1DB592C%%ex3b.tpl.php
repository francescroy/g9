<?php /* Smarty version 2.6.14, created on 2016-02-28 19:25:02
         compiled from projecte3/ex3b.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>



<p><?php echo $this->_tpl_vars['nombre']; ?>
</p>
<p><?php echo $this->_tpl_vars['tipo']; ?>
</p>

<?php if (( $this->_tpl_vars['parametro'] ) != 0): ?>
    <a href="http://default.dev/ex3b/<?php echo $this->_tpl_vars['parametro']-1; ?>
">Anar a la anterior</a>
<?php endif; ?>

<img src="<?php echo $this->_tpl_vars['url_imagen']; ?>
" alt="Imagen no encontrada" style="width:304px;height:228px;">


<?php if (( $this->_tpl_vars['parametro']+1 ) != $this->_tpl_vars['size']): ?>
    <a href="http://default.dev/ex3b/<?php echo $this->_tpl_vars['parametro']+1; ?>
">Anar a la seguent</a>
<?php endif; ?>




<?php echo $this->_tpl_vars['modules']['footer']; ?>
