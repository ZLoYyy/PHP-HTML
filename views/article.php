<!DOCTYPE HTML>
<html>
    <head>
        <meta charset = utf-8>
        <title>My First Blog</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div>
            <h1>Мой Первый Блог</h1>
            <div >
                <div class="article">
                    <h3>
                        <?=$article['title']?>
                    </h3>
                    <em>Опубдикованно: <?=$article['date']?></em>
                    <p><?=$article['content']?></p>
                </div>
            </div>
            <footer>
                <p> Мой Первый Блог<br>Copyright &copy; 2016</p>
            </footer>
        </div>
    </body>
</html>