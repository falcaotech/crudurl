<?php

/**
 * Friendly URL
 * 
 * by Maurilio Henrique
 * mauriliohrc@gmail.com
 * http://www.mauriliohenrique.com.br
 *
 */

class FriendlyURL {

	protected $request;
    protected $controller;
    protected $action;
    protected $params = array();

    public function __construct() {
    
        if (isset($_GET['request'])) {
            $this->request = $_GET["request"];
        } else if (isset($_POST["request"])) {
            $this->request = $_POST["request"];
        }
	
		if ($this->request != NULL) {
        	$this->request = explode("/", $this->request);
        	$contador = count($this->request);
        } else {
        	$contador = 0;
        }
        
        switch ($contador) {	
        	case 0:
        		$this->controller = 'index';
        		$this->action = 'index';
        		$this->params = null;
        		break;
        	case 1:
        		$this->controller = $this->request[0];
        		$this->action = 'index';
        		$this->params = array();
        		break;
        	case 2:
        		$this->controller = $this->request[0];
        		$this->action = $this->request[1];
        		$this->params = array();
        		break;
        	default:
        		$this->controller = $this->request[0];
        		$this->action = $this->request[1];
        		$this->params = array_slice($this->request, 2);
        		break;
        
        }
		unset($this->request);
    }

    public function __set($prop, $val) {
        $this->$prop = $val;
    }

    public function __get($prop) {
        return $this->$prop;
    }

}

?>