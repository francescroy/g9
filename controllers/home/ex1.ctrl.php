<?php
/**
 * Home Controller: Controller example.

 */
class HomeEx1Controller extends Controller
{
	protected $view = 'home/ex1.tpl';

	public function build()
	{

		
        $p = $this->getParams();
        
        $var = $p["url_arguments"];
        
        $var2 = $var[0];
        
        if ($var2 == "violin"){
            
            $var5="trompeta";
            $var6="tambor";
            
        }
        
        if ($var2 == "trompeta"){
            
            $var5="tambor";
            $var6="violin";
            
        }
        
        if ($var2 == "tambor"){
            
            $var5="violin";
            $var6="trompeta";
            
        }
        
        
        $this->assign("var2",$var2);
        $this->assign("var5",$var5);
        $this->assign("var6",$var6);
        
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