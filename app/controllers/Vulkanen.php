<?php

class Vulkanen extends BaseController
{
    private $VulkanenModel;

    public function __construct()
    {
         $this->VulkanenModel = $this->model('VulkanenModel');
    }

    public function index()
    {
       /**
        * Hier halen we alle smartphones op uit de database
        */
       $result = $this->VulkanenModel->getAllVulkanen();
       
       /**
        * Het $data-array geeft informatie mee aan de view-pagina
        */
       $data = [
            'title' => 'Top 5 actiefste Vulkanen ter wereld',
            'vulkanen' => $result
       ];

         /**
          * Met de view-method uit de BaseController-class wordt de view
          * aangeroepen met de informatie uit het $data-array
          */
       $this->view('vulkanen/index', $data); 
    }

}