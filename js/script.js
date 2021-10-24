const app = new Vue({
    el: '#root',
    data: {
        dischi: [],
        selectGenre: "",
        genres: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
        .then((response) => {
            // handle success
            this.dischi = response.data;
            // if(!this.dischi.includes(response.genre)) {

            // }
            this.dischi.forEach((el) => {
                if(!this.genres.includes(el.genre.toLowerCase())) {
                    this.genres.push(el.genre.toLowerCase())
                }
            });
        })
        .catch(function (error) {
            // handle error
            alert("errori");
        })
    },
    methods: {
        filtraggio() {
                axios.get('http://localhost/php-ajax-dischi/api/index.php', {
                    params: {
                        "genre": this.selectGenre
                    }
                })
            .then((response) => {
                // handle success
                this.dischi = response.data;
            })
            .catch(function (error) {
                // handle error
                alert("errori");
            })
        }
    }

}) 