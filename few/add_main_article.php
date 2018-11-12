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
            <p> Добавление галереии </p>
                <form method="post" action="alena.php?action=add">
                    <label>
                        Название
                        <input type="text" name="title" class="form-item" autofocus required>
                    </label>
                    <label>
                        Описание
                        <input type="text" name="type" class="form-item" autofocus required>
                    </label>
                    <label>
                        Путь к основному фото
                        <input type="text" name="main_ph" class="form-item" autofocus required>
                    </label>
                    <label>
                        Номер галереи
                        <input type="text" name="id_galery" class="form-item" autofocus required>
                    </label>
                    
               

                    <div class="addjpg">
                        <p> Добавление фото </p>
                            <div id ="nike">
                            <label>
                                   Путь к фотографии
                                   <input type="text" name="image1" class="form-item" autofocus required id = "help">
                            </label>
                            </div>
                    </div>
                    <div id ="comment">
                        <label>
                            Тег к фотографии
                            <input type="text" name="1teg1" class="form-item" autofocus required id = "help">
                        </label>
                    </div>
                    <input type ="button" id = "btn1" value = "add teg" onclick="add_teg();">
                    <input type ="button" id = "btn1" value = "add img" onclick="add_elem();">

                    <input type="submit" value="Сохранить" class="btn">
                    
                   
                </form>
        </div>
        <script type="text/javascript">
            var nom = 1;
            var teg = 1;
            function add_elem() {
                nom++;
                document.getElementById('comment').innerHTML += "<label>Путь к фотографии<input type='text' name='image"+ nom +"' class='form-item' autofocus required id = 'help'></label>";
                teg = 0;
            }
            function add_teg() {
                teg++;
                document.getElementById('comment').innerHTML += "<label>Тег к фотографии<input type='text'name='"+nom+"teg"+teg+"'class='form-item' autofocus required id='help'></label>";
            }

        </script>
    </body>
</hmtl>