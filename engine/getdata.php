<?php 

define('PHOTO_PATH','img/large/');

//Функция будет возвращать список файлов для отображения
function getImgList():array {
    
    $files=scandir(PHOTO_PATH,0);
    unset($files[0], $files[1]);

    $result=[];
    foreach($files as $key=>$file) {
        $result[]=['id'=>$key,
                'imgPath'=>PHOTO_PATH.$file,
                'title'=>'Has no title yet',
                'category'=>'European cities',
                'description'=>'Has no description yet'];
    }

    return $result;
}


//имитация возврата 1 файла по id
function getImgById(int $id):array {
    
    $files=scandir(PHOTO_PATH,0);

    unset($files[0], $files[1]);

    if ($id<0||$id>=(count($files)+2)) {
        return [];
    } else {
    return ['id'=>$id,
        'imgPath'=>PHOTO_PATH.$files[$id],
        'title'=>'Has no title yet',
        'category'=>'European cities',
        'description'=>'Has no description yet']; }

}

?>