const app = new Vue({
    'el' : '#app',
    data : {
        disks : [],
        genre : []
    },
    methods : {
        addGenre(){
            
        }
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/server/controller.php')
        .then((result) =>{
            this.disks = result.data.results;
            console.table(this.disks)
            this.disks.forEach((discElement) => {
                if (!this.genre.includes(discElement.genre)){
                    this.genre.push(discElement.genre)
            };
            });
        })
        .catch((error)=>{
            console.warn(error);
        });
    }

})

