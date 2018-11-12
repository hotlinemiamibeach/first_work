<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="utf-8">
        <title>Блог</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div id="addart">
            <p> Редактирование галереи </p>

                <form method="post" action="alena.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>&type=<?=$_GET['type']?>">
                    <label>
                        Название
                        <input type="text" name="title" class="form-item" value="<?=$art['title']?>" autofocus required>
                    </label>
                    <label>
                        Описание
                        <textarea name="type" class="form-item" autofocus required> <?=$art['type']?></textarea>
                    </label>
                    <label>
                        Путь к основному фото
                        <input type="text" value="<?=$art['main_ph']?>" name="main_ph" class="form-item" autofocus required>
                    </label>
                    <label>
                        Номер галереи
                        <input type="text" name="id_galery" value="<?=$art['id_galery']?>" class="form-item" autofocus required>
                    </label>
                    <input type="submit" value="Сохранить" class="btn">
                </form>
                
            </div>
        </div>
      
    </body>
</hmtl>