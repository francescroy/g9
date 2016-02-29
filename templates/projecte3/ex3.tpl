{$modules.head}

    <form action="http://g9.dev/ex3b/0" method="POST">
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
	
{$modules.footer}
