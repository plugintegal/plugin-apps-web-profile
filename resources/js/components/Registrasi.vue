<template>
  <div class="daftar">
      <b-container>
          <div class="judul">
          <center>
              <h2><strong>Registrasi</strong> Pendaftaran</h2>
          </center>
          </div>
          <div class="FormDaftar">
          <b-row>
              <b-col sm="12" md="6">
                  <img src="/asset/img/poster.jpeg" alt="" srcset="" class="pamlete">
              </b-col>
              <b-col sm="12" md="6">
                <div class="Form">
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
                  <div class="form-group">
                    <center>
                    <!-- <input type="submit" value="Daftar"> -->
                    <b-button class="tombol" type="submit" value="Daftar">Daftar</b-button>
                    <!-- <b-button class="tombol" href="/registrasi">Daftar</b-button> -->
                    <!-- <router-link class="tombol">Daftar</router-link> -->
                    </center>
                </div>
                </div>
                </div>
              </b-col>
          </b-row>
        </div>
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
    .daftra{
        margin: 20px;
        /* margin-bottom: 20px;
        margin-bottom: 50px; */
    }
    .judul{
        margin-top: 20px;
        padding-bottom: 20px;
    }
    .FormDaftar{
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .pamlete{
        width: 100%;
        height: auto;
    }
    .Form{
        /* margin-left: 20%; */
        margin-top: 20px;
        /* margin-bottom: 20px; */
        margin-bottom: 50px;
    }
    .form-rounded {
    outline: 0;
    border-width: 0 0 2px;
    border-color: cyan;
    width: 70%;
    }
    .form-rounded:focus {
    border-color: aqua;
    }
    .tombol {
        background: #16a1e3;
        width: 150px;
        border-radius: 20px;
        margin-left: -30%;
    }

</style>