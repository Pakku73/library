<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animation.css">
    <script src="script.js" defer></script>
    <title>Lavathek</title>
</head>
<body>
    
    <div class="container first">
        <div class="nav">
            <a href="index.php">Acceuil</a>
            <a href="login/singin.php">login</a>
        </div>
    </div>

    <div class="container second">
        <h1 class="mainTitle">Lavathek</h1>

        <div class="search">

            <input id="search" type="text" name="search_bar" placeholder="search" method="_POST">
            <button class="uiverse" type="submit" name="submit">
                <div class="wrapper">
                    <span>Rechercher</span>
                    <div class="circle circle-12"></div>
                    <div class="circle circle-11"></div>
                    <div class="circle circle-10"></div>
                    <div class="circle circle-9"></div>
                    <div class="circle circle-8"></div>
                    <div class="circle circle-7"></div>
                    <div class="circle circle-6"></div>
                    <div class="circle circle-5"></div>
                    <div class="circle circle-4"></div>
                    <div class="circle circle-3"></div>
                    <div class="circle circle-2"></div>
                    <div class="circle circle-1"></div>
                </div>
            </button>
            
            <select name="cars" id="categories">
                <option value="none"></option>
                <option value="fantasy">Fantasy</option>
                <option value="saab">Science-Fiction</option>
                <option value="mercedes">Romance</option>
                <option value="audi">Cuisine</option>
            </select>
        </div>
    </div>

    <div class="container third">
        <div class="results"></div>
    </div>

</body>
</html>