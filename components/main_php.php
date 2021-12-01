 <?php
    require __DIR__ . "/../utilities/cardCompiler.php";
    ?>

 <main>
     <div class="container">
         <div class="row row-cols-5 pt-5 g-4">
             <?php
                foreach ($albums as $album) {
                    $albumImg = $album["poster"];
                    $albumData = compilatoreCard($album["title"], $album["author"], $album["year"]);
                    include "./components/albumCard.php";
                }
                ?>
         </div>
     </div>
 </main>