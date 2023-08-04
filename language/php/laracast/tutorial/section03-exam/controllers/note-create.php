<?php 

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);
$heading = 'Create Note';

// METHOD가 POST일때만 DB저장 실행
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    if(!Validator::string($_POST['body'], 1, 255)) {
        $errors['body'] = '0~255자이내의 글자를 입력해주세요.';
    }

    if(empty($errors)) {
        $db->query("INSERT INTO notes(body, user_id) VALUES(:body, :user_id)", [
            'body' => $_POST['body'],
            'user_id' => 5
        ]);

        // redirect()
    }
}

require 'views/layouts/app.blade.php';


// validation
// 값이 없음에도 , Trim
// 글자수제약

// Redirect

//erorr-> session