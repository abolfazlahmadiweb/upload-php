<?php

$file = $_FILES['file'];

$ghesmat1 = explode('.', $file['name']);

$ghesmat2 = end($ghesmat1);

if(in_array($ghesmat2, ['png', 'jpeg', 'jpeg', 'mp3'])){
    $ghesmat3 = 'img-'.rand(10, 5000).'.'.$ghesmat2;
    move_uploaded_file($file['tmp_name'], 'images/'.$ghesmat3);
}else{
    echo 'فرمت فایل مورد نظر پشتیبانی نمیشود';
}