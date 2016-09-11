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
            <a href="admin">Панель Администратора</a>
            <div >
                <?php foreach($articles as $a): ?>
                <div class="article">
                    <h3>
                        <a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                    </h3>
                    <em>Опубдикованно: <?=$a['date']?></em>
                    <p><?=$a['content']?></p>
                </div>
                <?php endforeach ?>
            </div>
            <footer>
                <p> Мой Первый Блог<br>Copyright &copy; 2016</p>
            </footer>
        </div>
    </body>
</html>