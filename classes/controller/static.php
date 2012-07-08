<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Static extends Controller_Template {

	public $template = 'template/main';
	
	public function action_fallback()
	{
		// Pure static, get the matching view from the pages folder
		$this->template->content = View::factory('static/'.$this->pagename);
	}

	public function before()
	{
		parent::before();
		
		// Get the page name
		$this->pagename = $this->request->action();

		// Bind it to a variable for use in views
		View::bind_global('pagename', $this->pagename);
		
		// The page might be static plus, set content to the action for now
		$this->template->content = View::factory('static/'.$this->request->action());
	}

}
