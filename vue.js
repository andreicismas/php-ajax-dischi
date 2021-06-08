const app = new Vue({
    el: '#root',
    data: {
        myMusic : [],
    },
    mounted(){
        axios.get("http://localhost/boolean/php-ajax-dischi/dataphp/server_api.php")
        .then((resp)=>
        {
            this.myMusic = resp.data;
            console.log(this.myMusic)
        })
    }
});
