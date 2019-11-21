<template>
    <div>
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
            integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous" />
        <app-navbar />
        <!-- Tentang -->
        <section id="about" class="jumbotron bg-white">
            <b-jumbotron bg-variant="white" text-variant="black">
                <div class="text-center">
                    <h1>PLUG-IN</h1>
                </div>

                <div class="text-center">
                    <p style="text-align: justify">
                        Plug-in adalah suatu organisasi atau komunitas studi linux di Politeknik Harapan Bersama Tegal.
                        Kami
                        mempunyai tujuan untuk mengenalkan dan mengOpen Source kan mahasiswa dan masyarakat umum dengan
                        berbagai kegiatan yang nantinya bisa membuka wawasan serta mindset OpenSource guna untuk
                        mengurangi
                        angka pembajakan Software di Indonesia.
                    </p>
                </div>
                <hr class="my-4" />

                <p class="text-center">Politeknik Harapan Bersama Linux User Group Indonesia.</p>
            </b-jumbotron>
        </section>

        <!-- Squad -->
        <section id="squad">
            <b-jumbotron bg-variant="white" text-variant="black" border-variant id="squad">
                <div class="text-center" style="padding-bottom:20px">
                    <h1>Programming Squad</h1>
                </div>
                <br />
                <b-row style="margin-bottom: 40px">
                    <b-col>
                        <b-img src="asset/img/web_dev.png" width="450px" height="350px"
                            style="margin-left: 100px img-fluid"></b-img>
                    </b-col>
                    <b-col>
                        <div>
                            <h3>Web Development</h3>
                        </div>
                        <div style="margin-right: 100px">
                            <p style="text-align: justify">
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Adipisci voluptatum rem, nemo doloremque temporibus architecto pariatur cumque autem et
                                exercitationem. Quaerat sit eveniet veritatis, ullam error laboriosam modi cupiditate
                                vitae.
                            </p>
                            <b-button pill variant="primary" style="width:100px">Detail</b-button>
                        </div>
                    </b-col>
                </b-row>
                <b-row style="margin-bottom: 50px">
                    <b-col style="margin-top: 50px">
                        <div style="margin-left: 100px">
                            <h3>Mobile Development</h3>
                        </div>
                        <div style="margin-left: 100px">
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium rem
                                debitis
                                necessitatibus, repellat voluptatibus quisquam non ipsa doloribus dolor asperiores hic
                                facere veritatis vitae voluptatum porro quam accusamus saepe!
                            </p>
                            <b-button pill variant="primary" style="width:100px">Detail</b-button>
                        </div>
                    </b-col>
                    <b-col>
                        <b-img src="asset/img/mobile_dev.png" width="450px" height="350px"
                            style="margin-right: 100px img-fluid"></b-img>
                    </b-col>
                </b-row>
                <b-row>
                    <b-col>
                        <b-img src="asset/img/uiux.png" width="450px" height="350px"
                            style="margin-left: 100px img-fluid"></b-img>
                    </b-col>
                    <b-col style="margin-top: 50px">
                        <div>
                            <h3>UI/UX</h3>
                        </div>
                        <div style="margin-right: 100px">
                            <p style="text-align: justify">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis odit corporis vel
                                facere,
                                iure ipsum soluta sed? Commodi expedita nihil quisquam repellendus, quae rem, quod velit
                                quia accusantium labore dolorem.
                            </p>
                            <b-button pill variant="primary" style="width:100px">Detail</b-button>
                        </div>
                    </b-col>
                </b-row>
            </b-jumbotron>
        </section>

        <!-- Event -->
        <section id="event">
            <h1>
                <div class="text-center">Event</div>
            </h1>

            <b-container class="bv-example-row" id="event">
                <b-card-group deck class="event">
                    <div class="text-center" v-for="event of events" v-bind:key="event.event_id">
                        <b-card img-src="https://picsum.photos/600/300/?image=25" img-alt="Image"
                            img-top tag="article" style="max-width: 20rem;" class="mb-2">
                            <b-card-title>{{event.event_name}}</b-card-title>
                            <b-card-text>{{event.description}}</b-card-text>
                            <router-link to="/event" class="btn btn-primary">Detail</router-link>
                            <!-- <b-button router-link to="/event" variant="primary">Detail</b-button> -->
                            <!-- <router-link :to="{name: 'detailMember', params: {member_id: user.member_id}}">Detail</router-link> -->
                        </b-card>
                    </div>
                </b-card-group>   
            </b-container>
        </section>

        <!-- Contacts -->
        <section id="kontak">
            <b-jumbotron bg-variant="white" text-variant="black" border-variant id="kontak">
                <div class="text-center" style="padding-bottom:20px">
                    <h1>Hubungi Kami</h1>
                </div>
                <br />
                <b-row style="margin-bottom: 50px">
                    <div class="col-sm-4">
                        <div class="text-center">
                            <a href="#">
                                <img src="asset/img/phone.png" width="50px" height="50px" style="margin-bottom: 20px" />
                            </a>
                            <h3>Phone</h3>
                            <p>
                                Zihan
                                <br />0895422809945
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <a href="#">
                                <img src="asset/img/email.png" width="50px" height="50px" style="margin-bottom: 20px" />
                            </a>
                            <h3>Email</h3>
                            <p>
                                plugintegal@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="text-center">
                            <a href="https://www.google.co.id/maps/place/PLUGIN+HOME/@-6.8886796,109.1138097,17z/data=!3m1!4b1!4m5!3m4!1s0x2e6fb9a911a57b03:0x517b64e58f7cbd9c!8m2!3d-6.8886796!4d109.1159984"
                                target="_blank">
                                <img src="asset/img/alamat.png" width="50px" height="50px"
                                    style="margin-bottom: 20px" />
                            </a>
                            <h3>Alamat</h3>
                            <p>
                                Jl. Mataram No.9, Kel. pesurungan lor, Kel. Pesurungan Lor,
                                Pesurungan Lor, Margadana, Kota Tegal, Jawa Tengah 52147
                            </p>
                        </div>
                    </div>
                </b-row>
            </b-jumbotron>
        </section>

        <!--Start Footer-->
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="ftlogo">
                            <div class="sci">
                                <img src="asset/img/plugin.png" width="200" height="60" alt>
                            </div>
                            <ul class="sci">
                                <li>
                                    <a href="https://github.com/plugintegal" target="_blank">
                                        <i class="fa fa-github"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/officialplugin/" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/u/0/107691223860674495969" target="_blank">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UCW0p5Y6cNZ34G1LkY46xeLg" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul><br>
                            <p class="COPYRIGHT">© COPYRIGHT 2019. MAINTANCE BY PLUGIN TEAM</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--End Footer-->
    </div>
</template>

<script>
    import axios from "axios";
    import Navbar from "./components/Navbar.vue";
    export default {
        components: {
            "app-navbar": Navbar
        },
        name: "wp",
        data() {
            return {
                events: []
            };
        },
        mounted() {
            console.log("Berhasil tampil");
            axios.get('http://localhost:8001/api/event').then(response => this.events = response.data);
        }
    };

</script>
<style>
    .jumbotron {
        min-height: 300px;
        margin-top: 70px;
    }
    .event{
        margin-left: 40px !important;
        position: relative; 
        

    }

    .footer {
        margin-top: -100px;
    }

    .sci {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: bottom;
        align-content: center;
        margin-top: 50px;
    }

    .sci li {
        list-style: none;
        margin: 0 20px;
    }

    .sci li a {
        color: #000;
        font-size: 2em;
        transition: 0, 5s;
    }

    .sci li a:hover {
        color: #000;
    }

    .COPYRIGHT {
        text-align: center;
        color: #000;
    }

    .ftlogo {
        margin-top: 40px;
        padding-top: 40;
    }

</style>
