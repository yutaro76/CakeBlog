<?php
namespace App\Controller;

class TagsController extends AppController 
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

    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Posts');
    }

    
    public function index()
    {
        $this->paginate = [
            'limit' => 30,
            'order' => [
                'created' => 'desc'
            ],
            ];

        $tags = $this->paginate($this->Tags->find());
        $this->set(compact('tags'));
    }

    public function view($id = null)
    {
        $tag = $this->Tags->get($id, [
            'contain' => 'Posts'
        ]);

        $this->paginate = [
            'limit' => 10,
            'order' => [
                'Posts.created' => 'desc'
            ],
            'contain' => ['Users', 'Tags']
            ];
    
        $posts = $this->Posts->find();
        $posts->matching(
                'Tags', function($q) use ($id) {
                    return $q->where(['Tags.id' => $id]);
                }
            );
        $posts = $this->paginate($posts);

        $this->set(compact('tag','posts'));
        // $this->render('/Posts/index');
    }
}