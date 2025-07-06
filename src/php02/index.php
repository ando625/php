<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="php02/index.php">World Clock</a>
        </div>
    </header>

    <main>
        <div class="search-form__content">
            <h2 class="search-form__content-title">日本と世界の時計を比較</h2>
        </div>
        <form class="search-form" action="result.php" method="get">
            <div class="search-form__item">
                <select class="search-form__item-select"name="city" id=""></select>
            </div>
        </form>
    </main>



</body>
</html>