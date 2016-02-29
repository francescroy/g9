<?php
/**
 * Home Controller: Controller example.

 */
class Projecte3Ex3bController extends Controller
{
	protected $view = 'projecte3/ex3b.tpl';

	public function build()
	{


		$nombre = 	Filter::getString( 'nombre' );
		$tipo = 	Filter::getString( 'tipo' );
		$url = 		Filter::getString( 'url' );


		$obj = $this->getClass('Projecte3Ex3bModel');


		if($nombre && $tipo && $url) {
			$obj->executaUnInsert($nombre, $tipo, $url);
		}

		$result = $obj->retornaTot();


		$p = $this->getParams();

		$var = $p["url_arguments"];

		$var2 = $var[0];

		$size = sizeof($result);


		$this->assign("nombre",$result[$var2][nombre]);
		$this->assign("tipo",$result[$var2][tipo]);
		$this->assign("url_imagen",$result[$var2][url]);
		$this->assign("parametro",$var2);
		$this->assign("size",$size);

		$this->setLayout( $this->view );



	}


	
	
	


	/**
	 * With this method you can load other modules that we will need in our page. You will have these modules availables in your template inside the "modules" array (example: {$modules.head}).
	 * The sintax is the following:
	 * $modules['name_in_the_modules_array_of_Smarty_template'] = Controller_name_to_load;
	 *
	 * @return array
	 */
	public function loadModules() {
		$modules['head']	= 'SharedHeadController';
		$modules['footer']	= 'SharedFooterController';
		return $modules;
	}
}