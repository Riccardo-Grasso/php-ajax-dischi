<main>
    <div class="container">
        <div class="row row-cols-5 pt-5">
            <?php
            foreach ($albums as $album) {
                $albumImg = $album["poster"];
                $albumName = $album["title"];
                $albumAuthor = $album["author"];
                $albumYear = $album["year"];
                include "./components/albumCard.php";
            }
            ?>
        </div>
    </div>
</main>