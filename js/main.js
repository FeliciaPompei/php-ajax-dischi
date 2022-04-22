const app = new Vue({
    'el' : '#app',
    data : {
        disks : []
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
        })
        .catch((error)=>{
            console.warn(error);
        });
    }
})

