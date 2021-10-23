const app = new Vue({
    el: '#root',
    data: {
        dischi: []
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/api/index.php')
        .then((response) => {
            // handle success
            this.dischi = response.data;
        })
        .catch(function (error) {
            // handle error
            alert("errori");
        })
    }
}) 