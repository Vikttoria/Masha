<link rel="stylesheet" href="index.css" type="text/css"/>
<form  action="index.php" method="POST" enctype="multipart/form-data">
    <div class="survey">
        <label for="">Имя</label>
    <input type="text" placeholder="Пиши" name="one">
</div>
   <div class="survey">
    <label for="">Текст</label>
    <textarea name="two" id="" cols="30" rows="10" placeholder="Пиши" ></textarea>
    </div>

    <div class="survey">
    <label for="">Прикрепить фото документа</label>
    <input type="file" placeholder="Загрузи картинку" name="image">
    </div>
    <div class="survey">
    <label for="">Gmail</label>
    <input type="gmail" placeholder="Введите gmail" name="gmail">
    
    <div class="survey">
    <input type="submit" value="Отправить" class="knob">
    </div>
</form>