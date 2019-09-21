<?php
  class Pages extends Controller{

    public function __construct()
    {
      // $this->postModel = $this->model('Post');
        
    }

    public function index()
    {
      $data = [
        'title' => 'Home page',
        'body' => 'Here is description'
    ];

        $this->view('pages/index',$data);

    }
    public function about()
    {
        $data = [
            'title' => 'About page',
            'body' => 'Here is description'
        ];
          $this->view('pages/about', $data);
    }
  }// End Class Pages