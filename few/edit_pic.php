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
            <p> Редактирование галереи </p>

                <form method="post" action="alena.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>&type=<?=$_GET['type']?>">
                    <label>
                        Номер фото
                        <input type="num" name="num" class="form-item" value="<?=$ph['num']?>" autofocus required>
                    </label>
                    <label>
                        Номер галереи
                        <input type="id_galery" name="id_galery" class="form-item" value="<?=$ph['id_galery']?>" autofocus required>
                    </label>
                    <label>
                        Путь к фото
                        <textarea name="image" class="form-item" autofocus required> <?=$ph['image']?></textarea>
                    </label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
                
            </div>
        </div>
      
    </body>
</hmtl>