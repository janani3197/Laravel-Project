import './bootstrap';
import { createApp } from 'https://unpkg.com/vue@3/dist/vue.esm-browser.js'

createApp({

    data() {
        return {
            message: 'Care APP!',
            search: '',
            users: [],
            loading: false,
            patient: [],  
            patent:""          
        };
    },

    mounted() {
        // Fetch the users from the server
        // this.getUser();
        // this.getPatient();
        console.log('its working')

    },

    computed: {
        // squareMessageLength() {
        //     return this.message.length * this.message.length;
        // },

        // moviesToDisplay() { 
        //     return this.search ? this.doSearch() : this.movies;
        // }
    },

    methods: {

        // getMoviePosterStyle: movie => 'background-image: url(' + movie.poster + ')',

        // renameTitle(movie) {
        //     movie.title = prompt('Rename movie', movie.title);
        // },

        // doSearch() {
            // go through the movies and find the ones whose titles (and other?)
            // match the search term
        //     const searchLower = this.search.toLowerCase();
        //     return this.movies.filter(
        //         movie => movie.title.toLowerCase().indexOf(searchLower) != -1
        //     );

        // },

        getUser() {
            this.loading = true;
            fetch('/users.json')
                .then(response => response.json())
                .then(users => {
                    this.users = users;
                    this.loading = false;

                    console.log(this.users)
                });  
        },

        getPatient() {
            this.loading = true;
            fetch('/patient.json')
                .then(response => response.json())
                .then(patients => {
                    this.patient = patients;
                    this.loading = false;

                    console.log(this.users)
                });
        },

        // showNewMovieModal() {
        //     const newMovieModal = new bootstrap.Modal(this.$refs.newMovieModal);
        //     newMovieModal.show();
        // },

        createBooking() {
            
            console.log("Newbooking accessed")
            const patent = this.patient[0]['address']['city']; 
            for (let i=0; i< (this.user).length; i++)
            {
                if (patent == (this.users[i]['address']['city'])) {
                    this.patent = " " + this.user[i]['name']
                }
                console.log(this.patent)
            }
                
                            
            
        }
    }
}).mount('#app')