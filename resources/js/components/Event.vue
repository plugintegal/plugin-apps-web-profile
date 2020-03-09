<template>
    <div>
        <app-navbar />
        <div style="margin-bottom: 50px" id="OPREC1" class="OPREC1">
            <b-jumbotron text-variant="black" class="jevent align-middle">
                <div class="widewrapper thumbnail container">
                    <div class="post-content">
                        <div v-for="(data ,index) in events" v-bind:key="index">
                        <h2 class="text-black">{{ data.title }}</h2>
                        <img src="https://www.webdesign.org/img_articles/22292/head_full_770.jpg"
                        alt="Avatar" class="pamlet" >
                        </div>
                    </div>
                </div>
            </b-jumbotron>
        </div>

       
        <!-- detail event -->
        <b-container class="bv-example-row" style="margin-bottom: 50px; padding-top: 75px; ">
            <b-row>
                <div class="col-lg-4 mb-3">
                    <h3 style="text-align: center">Due Date</h3>
                    <div v-for="(data, index) in events" v-bind:key="index">
                        <p style="text-align: left">Tanggal : {{ formatDate(new Date(data.opened)) }}</p>
                    </div>
                    <p style="text-align: left">Tempat : Plug-In Home</p>
                    <p style="text-align: left">Waktu : 08.00 - selesai WIB</p>
                    <br>
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

                <b-col>
                    <center><div class="text"><b-button v-b-modal.modal-center class="tombol">Registrasi</b-button></div></center>
                </b-col>
            </b-row>
        </b-container>

        <b-modal id="modal-center" centered title="Form Pendaftaran" style="position: absolute; z-index: 9999" hide-footer>
            <form v-on:submit="sub" action="#" method="post">
                <div class="form-group">
                    <label>Nama lengkap</label>
                    <input type="text" class="form-control form-rounded" placeholder="type your full name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control form-rounded" placeholder="type your email" required>
                </div>
                <div class="form-group">
                    <label>NO HP</label>
                    <input type="number" class="form-control form-rounded" placeholder="type your phone number" required>
                </div>
                <div class="form-group">
                    <label>Instansi</label>
                    <input type="text" class="form-control form-rounded" placeholder="type the institution's origin" required>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control form-rounded" rows="3" placeholder="type your address"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-xs-3" style="margin : 0px 20px 0px 20px; width:100%;">
                        <label for="datepicker-placeholder">Tanggal Lahir</label>
                        <b-form-datepicker class="form-control form-rounded" id="datepicker-placeholder" placeholder="Choose a date" local="en"></b-form-datepicker>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pilih Kategori</label>
                     <div v-for="category in event.category" :key="category.name" class="col-xs-3" style="margin : 0px 20px 0px 20px; width:100%;">
                       <label>{{category.name}}</label>
                        <div v-for="subCategory in category.sub_category" :key="subCategory.id" class="custom-control custom-radio">
                            <input type="radio" :id="subCategory.id" :name="category.name" class="custom-control-input">
                            <label class="custom-control-label" :for="subCategory.id">{{subCategory.sub_category_name}}</label>
                        </div>
                    </div>

                    <!-- <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio1" value="WebwithVueJSandFirebase">Web with VueJS and Firebase</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio2" value="AndroidwithKotlineandFirebase">Android with Kotline and Firebase</label>
                    </div> -->
                </div>
                <div class="form-group">
                    <!-- <input type="submit" value="Daftar"> -->
                    <b-button class="tombol" type="submit" value="Daftar">Daftar</b-button>
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
                event: [],
                dialog: false,
                
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
            //axios.get('http://plugin-apps-server.herokuapp.com/api/event/' + this.id).then((response) => {
            axios.get('http://192.168.18.53:8000/api/event/' + this.id).then((response) => {
                this.event = response.data.results;
                // console.log(this.event.category);
                console.log(response.data.results.category)

            })
        }

    };

</script>

<style>
    .jevent {
        min-height: 500px;
        /* background: url(http://192.168.18.53:8000/images/{{event.image}}); */
        background-size: cover;
  /* overflow: auto; */
    }

    /* .widewrapper {
        width: 100%;
    }

    .widewrapper>img {
        width: 100%;
    } */

    .post-content {
        background: none repeat scroll 0 0;
        top: 0;
        margin-top: 90px;
        left: 0;
        position: absolute;
    }

    .thumbnail {
        /* position: relative; */
        margin: auto;
    }

    .OPREC1 {
        text-align: center;
        margin-top: 80px;
    }

    .tombol {
        background: #16a1e3;
        width: 150px;
        border-radius: 20px;
        /* margin-top: 80px */
    }

    .form-rounded {
        border-radius: 1rem;
    }
</style>
