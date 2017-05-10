<!DOCTYPE html>
<html>
<head>
    <meta charset="utd8">
    <title>My First Blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../../bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
    <body>
        <div class="container">
            <h1>Мой Первый Блог</h1>
            <div>
                <form method="post" action="index.php?action=add">
                    <label>
                        Название
                        <input type="text" name="title" value="" class="from-item" autofocus required>
                    </label>
                    <label>
                        Дата
                        <input type="date" name="date" value="" class="form-item" required>
                    </label>
                    <label>
                        Содержимое
                        <textarea class="form-item" name="content" required></textarea>
                    </label>
                    <input type="submit"
 value="Сохранить" class="btn">
                </form>
            </div>
            <footer>
                <p>Мой Первый Блог<br>Copyright&copy; 2016</p>
            </footer>
        </div>
    </body>
</html>