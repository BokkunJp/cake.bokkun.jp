<?php

// 必要なファイルの読み込み
// CSS
$this->Html->css(['layout/PC']);
// jQuery
echo $this->Html->script('https://code.jquery.com/jquery.min.js');
// JavaScript
echo $this->Html->script('post/ajax');
echo $this->Html->script('post/post');
echo $this->Html->script('post/index');

echo $this->Form->create($post);
debug($post);
echo $this->Form->control('data');
echo $this->Form->button('JSで送信', ['class'=>'jsSend', 'type' => 'button']);
echo $this->Form->button('PHPで送信');
echo "<p><output class='jsForm'></output></p>";
if (!is_null($session->read('Data')) && isset($session->read('Data')['data'])) {
    $data = $session->read('Data')['data'];
} else {
    $data = "";
}
echo "<div><output>PHP: {$data}</output></div>";
echo $this->Form->end();
