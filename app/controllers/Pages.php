<?php

class Pages extends Controller
{
    public function __construct()
    {
        $this->penModel = $this->model('Pen');
    }

    public function index()
    {
        //Bring in the data 
        $pens = $this->penModel->getPens();

        //Load the data to pass in
        $data = [
            'title' => "Home Page",
            'pens' => $pens
        ];

        $this->view('pages/index', $data);
    }
    public function about()
    {
        $this->view('pages/about');
    }
}
