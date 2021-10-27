<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
require_once  __DIR__.'/PHPMailer-master/src/Exception.php';
require_once  __DIR__.'/PHPMailer-master/src/PHPMailer.php';
require_once  __DIR__.'/PHPMailer-master/src/SMTP.php';
/*var_dump($_POST);
var_dump($_FILES);
var_dump($_FILES['image']['error']);
// Если в $_FILES существует "image" и она не NULL
if (isset($_FILES['image'])) {
    $image = $_FILES['image'];
    // Получаем нужные элементы массива "image"
    $fileTmpName = $_FILES['image']['tmp_name'];
    $errorCode = $_FILES['image']['error'];
    // Проверим на ошибки
    if ($errorCode !== UPLOAD_ERR_OK || !is_uploaded_file($fileTmpName)) {
      // Массив с названиями ошибок
      $errorMessages = [
        UPLOAD_ERR_INI_SIZE   => 'Размер файла превысил значение upload_max_filesize в конфигурации PHP.',
        UPLOAD_ERR_FORM_SIZE  => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE в HTML-форме.',
        UPLOAD_ERR_PARTIAL    => 'Загружаемый файл был получен только частично.',
        UPLOAD_ERR_NO_FILE    => 'Файл не был загружен.',
        UPLOAD_ERR_NO_TMP_DIR => 'Отсутствует временная папка.',
        UPLOAD_ERR_CANT_WRITE => 'Не удалось записать файл на диск.',
        UPLOAD_ERR_EXTENSION  => 'PHP-расширение остановило загрузку файла.',
      ];
      // Зададим неизвестную ошибку
      $unknownMessage = 'При загрузке файла произошла неизвестная ошибка.';
      // Если в массиве нет кода ошибки, скажем, что ошибка неизвестна
      $outputMessage = isset($errorMessages[$errorCode]) ? $errorMessages[$errorCode] : $unknownMessage;
      // Выведем название ошибки
      die($outputMessage);


    } else {
      echo 'Ошибок нет.';
      // Создадим ресурс FileInfo
$fi = finfo_open(FILEINFO_MIME_TYPE);
 
// Получим MIME-тип
$mime = (string) finfo_file($fi, $fileTmpName);
 
// Проверим ключевое слово image (image/jpeg, image/png и т. д.)
if (strpos($mime, 'image') === false) die('Можно загружать только изображения.');
    }

    // Сгенерируем новое имя файла на основе MD5-хеша
$name = md5_file($fileTmpName);
$image = getimagesize($fileTmpName); 
// Сгенерируем расширение файла на основе типа картинки
$extension = image_type_to_extension($image[2]);
 
// Сократим .jpeg до .jpg
$format = str_replace('jpeg', 'jpg', $extension);
 var_dump($format);
 if(!is_dir(__DIR__ . '/upload/')){
    if (!mkdir(__DIR__ . '/upload/', 0777, true)) {
        die('Не удалось создать директории...');
    }   
 }

// Переместим картинку с новым именем и расширением в папку /upload
if (!move_uploaded_file($fileTmpName, __DIR__ . '/upload/' . $name . $format)) {
  die('При записи изображения на диск произошла ошибка.');
}
 
echo 'Картинка успешно загружена!';
  };
*/

  $mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'yashuk803@gmail.com';                     //SMTP username
    $mail->Password   = ;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;           //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('vikattttoria@gmail.com', 'Mailer');
    $mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    //Attachments
    /*$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg'); */   //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}