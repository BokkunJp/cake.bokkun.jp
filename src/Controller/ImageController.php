<?php
namespace App\Controller;
use App\Controller\AppController;
// use App\Form\PostForm;
class ImageController extends AppController
{
    public function index() {
        $this->set('hello', 'world');
    }
}