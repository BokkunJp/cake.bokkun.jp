<?php

// 必要なファイルの読み込み
// CSS
echo $this->Html->css('layout/PC');
echo $this->Html->css('common/error');
// jQuery
echo $this->Html->script('https://code.jquery.com/jquery.min.js');
// JavaScript
echo $this->Html->script('post/ajax');
echo $this->Html->script('post/post');
echo $this->Html->script('post/index');

echo $this->Form->create($post, ['novalidate' => true]);
echo $this->Form->control('data');
if (!is_null($session->read('Data')) && isset($session->read('Data')['data'])) {
    $data = $session->read('Data')['data'];
    echo "<div><output>PHP: {$data}</output></div>";

}
echo "<p><output class='jsForm'></output></p>";
echo $this->Form->button('JSで送信', ['class' => 'jsSend', 'type' => 'button']);
echo $this->Form->button('PHPで送信');
echo $this->Form->end();
