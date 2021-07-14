const { filter } = require("lodash");

var app = new Vue(
    {
        el: '#root',
            
        data: {
            searchResult: '',
            searchAddress: '',
            lat: '',
            lon: '',
            radius: '20',
            rooms: '1',
            beds: '1',
            filteredList: ''
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

            },

            //api call to our api controller

            async getSearchResult(){
                
            let url = new URL('http://127.0.0.1:8000/api?_token=nPc2OyCh7Nt1iIzKwV7sYV4xjps5FcKPAtDnb3Hf&_method=GET')
            url.search = new URLSearchParams({
                latitude: this.lat,
                longitude: this.lon,
                radius: this.radius
            })
        
            const response = await fetch(url);

            const data = await response.json();

            // storage.setItem('searchResult', data);

            console.log(data);
            this.searchResult = data;
            console.log(this.searchResult);

            },

            filter(){
                let filteredList = [];

                if(this.beds != 1 || this.rooms != 1){
                    this.searchResult.forEach(element => {
                        if(element.beds >= this.beds && element.rooms >= this.rooms){
                            filteredList.push(element);
                        }
                    });
                } else {
                    filteredList = this.searchResult
                }
                

                return filteredList;
            }

        },
        mounted() {  
            
        }

    });
