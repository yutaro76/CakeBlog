<?php
namespace App\Controller;

class PostsController extends AppController 
{
    // public $autoRender = false;

    // コントローラーの初期化時に呼ばれる
    // voidはパラメーターを受け付けないという意味
    // public function initialize() :void
    // {
    //     // initializeメソッドを使えばこれも必ずやる
    //     parent::initialize();
    //     $this->viewBuilder()->setLayout('test');
    // }

    public $paginate = [
        'limit' => 10,
        'order' => [
            'created' => 'desc'
        ],
        'contain' => 'Users'
        ];

    public function index()
    {
       $posts = $this->paginate($this->Posts->find());
       $this->set(['posts'=>$posts]);
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => 'Users'
        ]);
        $this->set(['post'=>$post]);
        // $this->render('/Posts/index');
    }
}