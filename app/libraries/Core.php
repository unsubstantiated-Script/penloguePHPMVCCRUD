<?php

//Core App Class
class Core
{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    //Storing an expanding url 
    protected $params = [];

    //Constructor to build the array 
    public function __construct()
    {
        //Grabbing the URL array
        $url = $this->getUrl();

        //Checking to see if the file that matches the url exists in the controller...ucwords capitalizes the first letter
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            // Unset 0 Index
            unset($url[0]);
        }

        //Requiring the and building it with pages or the url coming in
        require_once '../app/controllers/' . $this->currentController . '.php';


        $this->currentController = new $this->currentController;

        if (isset($url[1])) {
            // Checking to see which controller we're trying to get from the URL
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                unset($url[1]);
            }
        }

        //Method params? If not keep it empty 
        $this->params = $url ? array_values($url) : [];

        //Call a callback w/ array of params

        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    //Parsing the URL 
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
