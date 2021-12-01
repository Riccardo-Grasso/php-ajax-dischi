<?php
require_once "./data/albums.php"
?>

<!DOCTYPE html>
<html lang="it">
<?php
require __DIR__ . "/components/pageHead.php"
?>

<body>
    <!-- HEADER -->
    <?php
    include_once  "components/header.php"
    ?>

    <!-- MAIN -->
    <main>
        <div class="container">
            <div class="row row-cols-5 pt-5 g-4" id="vueContainer">
                <div class="col" v-for="(album, i) in albumList" :key="i">
                    <div class="card align-items-center">
                        <img :src="album.poster" class="card-img-top" alt="image" />
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">{{album.title.toUpperCase()}}</h4>
                            <div class="card-text text-center fs-5">{{album.author}}
                            </div>
                            <div class="card-text text-center fs-6">{{album.year}}</div>
                        </div>
                    </div>
                </div>;
            </div>
        </div>
    </main>

    </main>
    <script src="mainVue.js"></script>
</body>

</html>