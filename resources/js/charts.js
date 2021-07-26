
var app = new Vue(
    {
        el: '#root2',
            
        data: {
            views: '',
            labels: '',
            datas: '',
            months: ['gennaio', 'febbraio', 'marzo', 'aprile', 'maggio', 'giugno', 'luglio', 'agosto', 'settembre', 'ottobre', 'novembre', 'dicembre'],
            currentYear: '2021',
            myChart: ''
        },
        
        methods: { 
            renderChart(){

                // if chart is already loaded, destroy it 
                if(this.myChart != ''){
                    this.myChart.destroy();
                }

                // get currentYear datas 
                this.labels = views[this.currentYear].labels;
                this.datas = views[this.currentYear].data;

                // config 
                const config = {
                    type: 'bar',
                    data: {
                        labels: this.labels,
                        datasets: [{
                            label: '# of Views',
                            data: this.datas,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                };
                
                // populate chart 
                var ctx = document.getElementById('chart').getContext('2d');

                this.myChart = new Chart(ctx, config);

            },
            
        },
        mounted() { 
            
            this.renderChart();

        }

    });