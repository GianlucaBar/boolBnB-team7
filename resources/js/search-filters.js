var app = new Vue(
    {
        el: '#root',
            
        data: {
            searchResult: '',
        },

        methods: { 
            getSearchResult(){
                
                this.searchResult = localStorage.getItem('searchResult');

                localStorage.removeItem('searchResult');

            }


        },
        mounted() {  
            this.searchResult();
            console.log(this.searchResult);
        }

    });