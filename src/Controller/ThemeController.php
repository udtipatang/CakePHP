<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;
/**
* 
*/
class ThemeController extends AppController
{
	public $base_url;

	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->layout('themelayout');
		$this->base_url = Router::url("/",true);
	}
	
	function index()
	{
		# code...
		$this->set("title","index page");
		$this->set("baseurl",$this->base_url);
	}
}