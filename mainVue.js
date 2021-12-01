new Vue({
    el: "#vueContainer",
    data: {
        albumList: []
    },
    mounted() {
        axios.get("http://localhost/php-ajax-dischi/api/albums_api.php").then((resp) => {
            this.albumList = resp.data;
        });
    }
})