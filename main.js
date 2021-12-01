const cardsContainer = document.getElementById("cardsContainer");

axios.get("http://localhost/php-ajax-dischi/api/albums_api.php").then((resp) => {
    const albums = resp.data;
    console.log(albums);
    albums.forEach(album => {
        const card = `
        <div class="col">
            <div class="card align-items-center">
                <img src="${album.poster}" class="card-img-top" alt="image" />
                <div class="card-body">
                    <h4 class="card-title text-center mb-3">${album.title.toUpperCase()}</h4>
                    <div class="card-text text-center fs-5">${album.author}</div>
                    <div class="card-text text-center fs-6">${album.year}</div>
                </div>
            </div>
        </div>`;

        cardsContainer.innerHTML += card;
    });
});