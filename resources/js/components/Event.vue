<template>
    <div>
        <app-navbar />
        <div style="margin-bottom: 50px" id="OPREC1" class="OPREC1">
            <b-jumbotron text-variant="black" class="jevent align-middle">
                <div class="widewrapper thumbnail">
                    <div class="post-content">
                        <div v-for="(data ,index) in events" v-bind:key="index">
                            <h2 class="text-black">{{ data.title }}</h2>
                        </div>
                        <h3 class="text-black">We invite you to enjoy a luxurious ground transportation service provided
                            by our team of experts. We have the experience and skills to meet the expectations of every
                            passenger and add value to every ride.</h3>
                        <b-button v-b-modal.modal-center>Launch centered modal</b-button>
                    </div>
                </div>
            </b-jumbotron>
        </div>


        <!-- detail event -->
        <b-container class="bv-example-row" style="margin-bottom: 50px; padding-top: 75px">
            <b-row>
                <div class="col-lg-4 mb-3">
                    <h3 style="text-align: center">Due Date</h3>
                    <div v-for="(data, index) in events" v-bind:key="index">
                        <p style="text-align: left">Tanggal : {{ formatDate(new Date(data.opened)) }}</p>
                    </div>
                    <p style="text-align: left">Tempat : Plug-In Home</p>
                    <p style="text-align: left">Waktu : 08.00 - selesai WIB</p>
                    <br />
                    <h3 style="text-align: center">HTM & Fasilitas</h3>
                    <div v-for="(data ,index) in events" v-bind:key="index">
                        <div v-for="(category) in data.category" v-bind:key="category">
                            <p style="text-align: left">Fee : Rp {{ category.price }},-</p>
                        </div>
                    </div>

                    <p style="text-align: left">Fasilitas : Sertifikat, Snack & Merchandise</p>
                    <br />
                </div>

                <div class="col-lg-8">
                    <h3 style="text-align: center">Deskripsi</h3>
                    <div v-for="(data ,index) in events" v-bind:key="index">
                        <P style="text-align: justify">
                            {{ data.description }}
                        </P>
                    </div>
                    <div class="text-center">
                        <img src="https://s.kaskus.id/r540x540/images/2019/05/02/10419174_20190502042606.jpg" alt
                            width="150px" height="150px" />
                    </div>
                </div>

                <b-col cols="4"></b-col>
            </b-row>
        </b-container>
        <!-- akhir detail event -->
        <!-- <b-modal id="bv-modal-example" hide-footer class="modal-dialog modal-dialog-centered" >
            <template v-slot:modal-title>
                Using <code>$bvModal</code> Methods
            </template>
            <div class="d-block text-center">
                <h3>Hello From This Modal!</h3>
            </div>
            <b-button class="mt-3" block @click="$bvModal.hide('bv-modal-example')">Close Me</b-button>
        </b-modal> -->

        <b-modal id="modal-center" centered title="Form Pendaftaran">
            <form action="">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <label for="">No. Handphone</label>
                    <input type="text" class="form-control form-control-sm">
                </div>
                <div class="form-group">
                    <input type="radio" name="" id=""> Seminar <br>
                    <input type="radio" name="" id=""> Workshop
                </div>
            </form>
        </b-modal>
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
                events: []
            }
        },
        methods: {
            formatDate: function formatDate(date) {
                var monthNames = [
                    "Januari", "Februari", "Maret",
                    "April", "Mei", "Juni", "Juli",
                    "Agustus", "September", "Oktober",
                    "November", "Desember"
                ];

                var day = date.getDate();
                var monthIndex = date.getMonth();
                var year = date.getFullYear();

                return day + ' ' + monthNames[monthIndex] + ' ' + year;
            }
        },
        mounted() {
            axios.get('http://plugin-apps-server.herokuapp.com/api/event/' + this.id).then((response) => {
                this.events = response.data.results;
                console.log(this.events.category);

            })
        }

    };

</script>

<style>
    .jevent {
        min-height: 500px;
        background: url(/asset/img/jumbotron.png);
        background-size: cover;
    }

    .widewrapper {
        width: 100%;
    }

    .widewrapper>img {
        width: 100%;
    }

    .post-content {
        background: none repeat scroll 0 0;
        top: 0;
        margin-top: 90px;
        left: 0;
        position: absolute;
    }

    .thumbnail {
        position: relative;
    }

    .OPREC1 {
        text-align: center;
        margin-top: 90px;
    }

    .tombol {
        background: #16a1e3;
        width: 150px;
        margin-top: 80px
    }

</style>
