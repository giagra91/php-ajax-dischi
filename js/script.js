const app = new Vue(
    {
        el: "#app",
        data: {
            albums: [],
            filteredAlbums: [],
        },
        created(){
            axios
            .get("http://localhost/php-ajax-dischi/server/controller.php")
            .then((result) =>{
                console.log(result.data.results);
                this.albums=result.data.results;
            }).catch((error) =>{
                console.error(error);
            });

        },
        methods:{

        }
    },
)