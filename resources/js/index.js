const { filter, result } = require("lodash");

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
            filteredList: '',
            extras: '',
            currentCheckedExtras: [],
            isFiltered: false
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

                this.searchResult = data;

            },

            //api call to get extras's list
            async getExtras(){
                
                let url = new URL('http://127.0.0.1:8000/api/extras')
                
                const response = await fetch(url);

                const data = await response.json();
            
                this.extras = data;
            },

            // function to populate currentCheckedExtras 
            getCheckboxValue(id){
                if(!this.currentCheckedExtras.includes(id)){
                    this.currentCheckedExtras.push(id);
                } else{
                    this.currentCheckedExtras.forEach((element, index) => {
                        console.log( this.currentCheckedExtras);
                        if(element == id){
                            this.currentCheckedExtras.splice(index, 1);
                        }
                    });
                }
                
                console.log( this.currentCheckedExtras);
            },

            filter(){
                let filteredList = [];

                if(this.beds != 1 || this.rooms != 1){
                    this.searchResult.forEach(element => {
                        if(element.beds >= this.beds && element.rooms >= this.rooms){
                            filteredList.push(element);
                        }
                    });
                    // if(filteredList.length == 0){
                    //     this.filteredList = filteredList;
                    // }
                } else {
                    filteredList = this.searchResult
                }
                
                //se l'array "currentCheckedExtras" è popolato
                //prendo solo gli appartamenti da i cui id degli extra corrispondono agli id in currentCheckedExtras
                let extraFilteredArray = [];

                if(this.currentCheckedExtras.length){
                    // cycle apartments 
                    filteredList.forEach(element =>{
                        let extraAp = element.extras;
                        let thisExtras = [];
                        extraAp.forEach(extra=>{
                            thisExtras.push(extra.id)
                        })
                        
                        // Comparo nel ciclo i due array
                        let isMatched = this.currentCheckedExtras.every(i => thisExtras.includes(i));
                        if (isMatched) {
                            extraFilteredArray.push(element);
                        }
        
                    })
                    filteredList = extraFilteredArray;
                }
                this.isFiltered = true;
                this.filteredList = filteredList
            },
        },

        mounted() { 
            // call to get extras  
            this.getExtras()
        }

    });
