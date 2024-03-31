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

        <input type="text" id="searchInput" placeholder="Entrez le titre du livre ou le nom de la catégorie" class="input-dark red">      
       
        <div class="wrapper">
        <button onclick="searchBooks()" class="uiverse">
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
            
            
            <select id="categories" class="input-dark blue">
                <option value="">Toutes catégories</option>
                <option value="fiction">Fiction</option>
                <option value="history">Histoire</option>
                <option value="technology">Technologie</option>
                <option value="art">Art</option>
                <option value="science">Science</option>
                <option value="religion">Religion</option>
                <option value="travel">Voyages</option>
                <option value="cooking">Cuisine</option>
                <option value="children">Jeunesse</option>
            </select>
 
        </div>
 
        <div id="results" class="results-grid">

        </div>
    </div>

    <div class="container third">
        <div class="results"></div>
    </div>

</body>
</html>