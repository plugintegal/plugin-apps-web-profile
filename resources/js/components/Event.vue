<template>
    <div>
        <app-navbar />
        <b-container class="Detail">
        <div style="margin-bottom: 50px" id="#" class="Banner">
            <b-jumbotron text-variant="black" class="jevent align-middle">
                <div class="Slogan">
                    <b-row>
                        <b-col>
                            <img fluid src="https://www.webdesign.org/img_articles/22292/head_full_770.jpg"
                            alt="Avatar" class="Pamlete" >
                        </b-col>
                    </b-row>
                    <!-- <div class="Slogan" v-for="(data ,index) in event" v-bind:key="index">
                        
                    </div> -->
                    <!-- <h2 class="text-black">{{ data.title }}</h2> -->
                        
                </div>
            </b-jumbotron>
        </div>
       
        <!-- detail event -->
        <b-container class="bv-example-row" style="margin-bottom: 50px; padding-top: 20px; ">
            <b-row>
                <div class="col-lg-4 mb-3">
                    <h3 style="text-align: center">Due Date</h3>
                    <div v-for="(data, index) in event" v-bind:key="index">
                        <p style="text-align: left">Tanggal : {{ formatDate(new Date(data.opened)) }}</p>
                    </div>
                    <p style="text-align: left">Tempat : Plug-In Home</p>
                    <p style="text-align: left">Waktu : 08.00 - selesai WIB</p>
                    <br>
                    <h3 style="text-align: center">HTM & Fasilitas</h3>
                    <div v-for="(data ,index) in event" v-bind:key="index">
                        <div v-for="(category) in data.category" v-bind:key="category">
                            <p style="text-align: left">Fee : Rp {{ category.price }},-</p>
                        </div>
                    </div>

                    <p style="text-align: left">Fasilitas : Sertifikat, Snack & Merchandise</p>
                    <br />
                </div>

                <div class="col-lg-8">
                    <h3 style="text-align: center">Deskripsi</h3>
                    <div v-for="(data ,index) in event" v-bind:key="index">
                        <P style="text-align: justify">
                            {{ data.description }}
                        </P>
                    </div>
                </div>
            </b-row>
                  <div class="form-group">
                    <center>
                    <!-- <input type="submit" value="Daftar"> -->
                    <b-button class="tombol" href="/registrasi">Daftar</b-button>
                    <router-link class="tombol">Daftar</router-link>
                    </center>
                </div>
        </b-container>
        </b-container>
    </div>
</template>


<script>
    import axios from "axios";
    import Navbar from "./Navbar.vue";
    export default {
        components: {
            "app-navbar": Navbar
        },
        data() {
            return {
                
                id: this.$route.params.id,
                event: [],
                dialog: false,
                
            }
        },
        methods: {
            
        },
        mounted() {
            axios.get('http://plugin-apps-server.herokuapp.com/api/event/' + this.id).then((response) => {
            // axios.get('http://192.168.18.53:8000/api/event/' + this.id).then((response) => {
                this.event = response.data.results;
                // console.log(this.event.category);
                console.log(response.data.results.category)

            })
        }

    };

</script>

<style>
.Detail{
    padding-bottom: 20px;
    padding-top: 50px;
    margin-bottom: 30px;
}
    /* .jevent {
        max-height: 500px;
        background: transparent;
    } */
    .Pamlete{
        width: 100%;
        margin: auto;
    }
    .tombol {
        background: #16a1e3;
        width: 150px;
        border-radius: 20px;
        /* margin-top: 80px */
    }
    @media only screen and (max-width: 600px) {
        /* img{
            width: 360px;
            margin-left: -17px;
        } */

    }
</style>
