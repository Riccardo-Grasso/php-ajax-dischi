<?php

function compilatoreCard($albumName, $albumAuthor, $albumYear)
{

    return "<h4 class='card-title text-center mb-3'>$albumName</h4>
    <div class='card-text text-center fs-5'> $albumAuthor </div>
    <div class='card-text text-center fs-6'> $albumYear</div>";
}
