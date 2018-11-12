<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Блог</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div id="addart">
            <p> Редактирование тегчика </p>

                <form method="post" action="alena.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>&type=<?=$_GET['type']?>">
                    <label>
                        Номер галереи
                        <input type="num" name="id_galery" class="form-item" value="<?=$teg['id_galery']?>" autofocus required>
                    </label>
                    <label>
                        К какому айди относится
                        <input type="id_img" name="id_img" class="form-item" value="<?=$teg['id_img']?>" autofocus required>
                    </label>
                    <label>
                        Комментарий
                        <textarea name="comment" class="form-item" autofocus required> <?=$teg['comment']?></textarea>
                    </label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
                
            </div>
        </div>
      
    </body>
</hmtl>