<template>
  <div class="daftar">
    <b-container>
      <div class="judul">
        <center>
          <h2>
            <strong>Registrasi</strong> Pendaftaran
          </h2>
        </center>
      </div>
      <div class="FormDaftar">
        <b-row>
          <b-col sm="12" md="6">
            <img src="/asset/img/poster.jpeg" alt srcset class="pamlete" />
          </b-col>
          <b-col sm="12" md="6">
            <div class="Form">
              <div class="form-group">
                <label>Nama lengkap</label>
                <input
                  v-model="regFullName"
                  type="text"
                  class="form-control form-rounded"
                  placeholder="type your full name"
                  required
                />
              </div>
              <div class="form-group">
                <label>Email</label>
                <input
                  v-model="regEmail"
                  type="email"
                  class="form-control form-rounded"
                  placeholder="type your email"
                  required
                />
              </div>
              <div class="form-group">
                <label>NO HP</label>
                <input
                  v-model="regPhone"
                  type="number"
                  class="form-control form-rounded"
                  placeholder="type your phone number"
                  required
                />
              </div>
              <div class="form-group">
                <label>Instansi</label>
                <input
                  v-model="regInstitution"
                  type="text"
                  class="form-control form-rounded"
                  placeholder="type the institution's origin"
                  required
                />
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <textarea
                  v-model="regAddress"
                  class="form-control form-rounded"
                  rows="3"
                  placeholder="type your address"
                ></textarea>
              </div>
              <div class="form-group row">
                <div class="col-xs-3" style="margin : 0px 20px 0px 20px; width:100%;">
                  <label for="datepicker-placeholder">Tanggal Lahir</label>
                  <b-form-datepicker
                    v-model="regDateOfBirth"
                    class="form-control form-rounded"
                    id="datepicker-placeholder"
                    placeholder="Choose a date"
                    local="en"
                  ></b-form-datepicker>
                </div>
              </div>
              <div class="form-group">
                <label>Pilih Kategori</label>
                <div
                v-for="category in event.category"
                  :key="category.name"
                  class="col-xs-3"
                  style="margin : 0px 20px 0px 20px; width:100%;"
                >
                  <select v-model="desCategory">
                    <option  v-bind:value="category.name"  >{{category.name}}</option>
                  </select>
                  <div
                    v-for="subCategory in category.sub_category"
                    :key="subCategory.id"
                    class="custom-control custom-radio"
                  >
                    <input
                      type="radio"
                      v-model="regSubCatId"
                      :id="subCategory.id"
                      :value="subCategory.sub_category_name"
                      :name="category.name"
                      class="custom-control-input"
                    />
                    <label
                      class="custom-control-label"
                      :for="subCategory.id"
                    >{{subCategory.sub_category_name}}</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <input
                  v-model="regDescription"
                  type="text"
                  class="form-control form-rounded"
                  placeholder="Deskripsi"
                  required
                />
              </div>
              <div class="form-group">
                <div class="form-group">
                  <center>
                    <b-button
                      class="tombol"
                      type="submit"
                      @click="postRegister()"
                      value="Daftar"
                    >Daftar</b-button>
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
      event: [],
      dialog: false,
      regEventId: this.$route.params.id,
      regFullName: "",
      regEmail: "",
      regPhone: "",
      regInstitution: "",
      regAddress: "",
      regDateOfBirth: "",
      regDescription: "",
      regSubCatId: "",
      desCategory: '',
      post: ""
    };
  },
  methods: {
    getDetail() {
      axios
        .get(
          `http://plugin-apps-server.herokuapp.com/api/event/${this.$route.params.id}`
        )
        .then(response => {
          this.event = response.data.results;
        });
    },
    postRegister(){
        axios.post("https://plugin-apps-server.herokuapp.com/api/participant", {
            headers: {'Content-Type': 'application/x-www-form-urlencoded' },
            event_id: this.regEventId,
            full_name: this.regFullName,
            email: this.regEmail,
            phone: this.regPhone,
            institution: this.regInstitution,
            address: this.regAddress,
            date_of_birth: this.regDateOfBirth,
            description: this.regDescription,
            sub_category_id: this.regSubCatId
        }).then(response => {
            console.log(response);
        }).catch(e => {
            console.log(e);
        })
    }
  },
  mounted() {
    this.getDetail();
  }
};
</script>

<style>
.daftra {
  margin: 20px;
}
.judul {
  margin-top: 20px;
  padding-bottom: 20px;
}
.FormDaftar {
  margin-top: 20px;
  margin-bottom: 20px;
}
.pamlete {
  width: 100%;
  height: auto;
}
.Form {
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
