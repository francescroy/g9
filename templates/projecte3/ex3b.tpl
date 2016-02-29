{$modules.head}


<p>{$nombre}</p>
<p>{$tipo}</p>

{if ($parametro) neq 0 }
    <a href="http://g9.dev/ex3b/{$parametro-1}">Anar a la anterior</a>
{/if}

<img src="{$url_imagen}" alt="Imagen no encontrada" style="width:304px;height:228px;">


{if ($parametro+1) neq $size }
    <a href="http://g9.dev/ex3b/{$parametro+1}">Anar a la seguent</a>
{/if}




{$modules.footer}
