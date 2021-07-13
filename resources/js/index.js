var app = new Vue(
    {
        el: '#root',
            
        data: {
            searchAddress: '',
            searchResult: ''
        },

        methods: {
            getAddressCoord(){
                
                axios
                .get('https://api.tomtom.com/search/2/geocode/.json?key=HgVrAuAcCtAcxTpt0Vt2SyvAcoFKqF4Z&versionNumber=2',{

                    headers: { 
                        'Access-Control-Allow-Origin' : '*',
                        'Access-Control-Allow-Methods':'GET,PUT,POST,DELETE,PATCH,OPTIONS'
                    },

                    params: {
                        query: this.searchAddress
                    }
                })
                .then( (response) => {
                    
                    
                    const result = response.data;

                    this.searchResult = result;
                    console.log(this.searchResult);
            })
            }
		
        },
        mounted() {  

        }

    });
