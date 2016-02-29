<?php /* Smarty version 2.6.14, created on 2016-02-28 17:16:21
         compiled from projecte3/ex3.tpl */ ?>
<?php echo $this->_tpl_vars['modules']['head']; ?>


    <form action="http://default.dev/ex3b/0" method="POST">
        <fieldset>

            <legend>Instrumentos</legend>

            <p>Nombre del instrumento:</p>
            <input type="text"   name="nombre">

            <p>Nombre del instrumento:</p>
            <select name="tipo">
                <option value="viento">Viento</option>
                <option value="percusion">Percusion</option>
                <option value="cuerda">Cuerda</option>
            </select>

            <p>URL:</p>
            <input type="text"   name="url">

            <br /><br />

            <input type="submit" name="submit" value="Inserir">
        </fieldset>
    </form>
	
<?php echo $this->_tpl_vars['modules']['footer']; ?>
