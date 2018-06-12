<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\Routing\Router;

class ArticlesController extends AppController
{
	public $base_url;

	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->layout('loginlayout');

		$this->base_url = Router::url("/",true);
	}
	public function login()
	{
		// print_r($this->url);die;
		//$this->autoRender= false;
		//echo "Login function";
		$this->set("title","Login");
		$this->set("baseurl",$this->base_url);

		// $this->set("fname","Mradul");
		// $this->set("lname","Kumar");

		// $namearray = array("FirstName" => "Durgesh Kumar" ,
		// 					"SecondName" => "Shashank" );
		// $this->set(compact("namearray"));
	}

	public function signup()
	{
		$this->set("title","Signup");
		$this->set("baseurl",$this->base_url);
	}

	public function index()
	{
		$this->loadComponent('Paginator');
		$this->loadModel('Articles');
		$data = $this->Articles->find("all")->hydrate(false)->toArray();
		//pr($data);die;
		$articles = $this->Paginator->paginate($this->Articles->find());
        //$this->set(compact('articles'));
		$this->set("data",$data);
	}


	public function view($slug = null)
	{
	    $article = $this->Articles->findBySlug($slug)->firstOrFail();
	    $this->set(compact('article'));

	}

	 public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $article->user_id = 1;

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Your article has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your article.'));
        }
        $this->set('article', $article);
    }

    public function edit($slug)
	{
	    $article = $this->Articles->findBySlug($slug)->firstOrFail();
	    if ($this->request->is(['post', 'put'])) {
	        $this->Articles->patchEntity($article, $this->request->getData());
	        if ($this->Articles->save($article)) {
	            $this->Flash->success(__('Your article has been updated.'));
	            return $this->redirect(['action' => 'index']);
	        }
	        $this->Flash->error(__('Unable to update your article.'));
	    }

	    $this->set('article', $article);
	}
}