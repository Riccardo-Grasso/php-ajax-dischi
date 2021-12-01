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
            <div class="row row-cols-5 pt-5 g-4" id="cardsContainer">
            </div>
        </div>
    </main>

    </main>
    <script src="main.js"></script>
</body>

</html>