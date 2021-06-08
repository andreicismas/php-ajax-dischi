
<?php

?>

<!-- Seconda Milestone:
Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà, attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
Bonus: Attraverso un’altra chiamata api, filtrare gli album per genere -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <!-- style -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    
    <title>Document</title>
</head>
<body>
    <div id="root">
       <h1>ciao ho fatto una cosa molto semplice:)</h1>

      
        <div v-for="album in myMusic" >
            <div >
                <img :src="album.copertina" alt="">
            </div>
            <div class="specs">
                <div class="title">
                    <strong> {{album.titolo}} </strong>
                </div>
                <div >
                    {{album.artista}}
                </div>
                <div >
                    {{album.anno}}
                </div>
            </div>
        </div>
    </div>


    <script src="vue.js"></script>
</body>
</html>