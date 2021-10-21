<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;

class PostsForm extends Form {
    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('data', ['type' => 'string']);
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator->requirePresence('data')
            ->notEmptyString('data', "PHP:データがありません");

        return $validator;
    }

    protected function _execute(array $data): bool
    {
        // メールを送信する
        return true;
    }

}