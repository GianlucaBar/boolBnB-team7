var app = new Vue(
    {
        el: '#root',
            
        data: {
            searchAddress: '',
            lat: '',
            lon: ''
        },

        methods: { 

            // api call to get coordinates from a given address 
            async getAddressCoord(){
                
                let url = new URL('https://api.tomtom.com/search/2/geocode/.json')
                url.search = new URLSearchParams({
                    query: this.searchAddress,
                    key: 'HgVrAuAcCtAcxTpt0Vt2SyvAcoFKqF4Z',
                    versionNumber: '2',
                    limit: '1'
                })
            
                const response = await fetch(url);

                const data = await response.json();
                this.lat = data.results[0].position.lat;
                this.lon = data.results[0].position.lon;

                console.log(this.lat);
            },

        },

        mounted() { 
        
        }

    });
