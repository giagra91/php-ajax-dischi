<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script src="http://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <title>Php Dischi</title>
</head>
<body>
    <div id="app">
        <header>
            <img src="img/logo.svg" alt="">

        </header>
        
        <main>
            <div class="central-container">
                <div class="album-card" v-for="album in albums">
                    <img :src="album.poster" :alt="album.title">
                    <h4>{{ album.title }}</h4>
                    <p>{{ album.author }}</p>
                    <p>{{ album.year }}</p>
                </div>
            </div>
        </main>
    </div>



    <script src="http://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>