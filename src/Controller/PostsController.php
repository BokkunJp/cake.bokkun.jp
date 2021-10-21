<?php
namespace App\Controller;
use App\Controller\AppController;
use App\Form\PostsForm;
class PostsController extends AppController
{
    public function index()
    {
        if ($this->request->is('ajax')) {
            $this->viewBuilder()->enableAutoLayout(false);
            $data = '';
            foreach ($this->request->getData() as $_key => $_post) {
                $data .= $_post;
                $data .= ',';
            }
            $data = rtrim($data, ',');
            $jsonData = json_encode($data); // データをJSON形式にエンコードする
        }else {
            $post = new PostsForm();
            if ($this->request->is('post')) {
                if ($post->execute($this->request->getData())) {
                    $this->request->getSession()->write('Data', $this->request->getData());
                } else {
                    $this->Flash->error('入力に問題があります。');
                    $this->request->getSession()->destroy();
                }
            }
            $this->set('post', $post);
            $this->set('session', $this->request->getSession());
        }
    }
}
