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
            <form @submit.prevent="postRegister" class="Form">
              <form-group :validator="$v.regFullName" class="form-group" label="Nama lengkap">
                <input
                  v-model="regFullName"
                  type="text"
                  class="form-control form-rounded"
                  :class="{'is-invalid': $v.regFullName.$error}"
                  placeholder="type your full name"
                />
              </form-group>
              <form-group :validator="$v.regEmail" class="form-group" label="Email">
                <input
                  v-model="regEmail"
                  type="email"
                  class="form-control form-rounded"
                  :class="{'is-invalid': $v.regEmail.$error}"
                  placeholder="type your email"
                />
              </form-group>
              <form-group :validator="$v.regPhone" class="form-group" label="NO HP">
                <input
                  v-model="regPhone"
                  type="number"
                  class="form-control form-rounded"
                  :class="{'is-invalid': $v.regPhone.$error}"
                  placeholder="type your phone number"
                />
              </form-group>
              <form-group :validator="$v.regInstitution" class="form-group" label="Instansi">
                <input
                  v-model="regInstitution"
                  type="text"
                  class="form-control form-rounded"
                  :class="{'is-invalid': $v.regInstitution.$error}"
                  placeholder="type the institution's origin"
                />
              </form-group>
              <form-group class="form-group">
                <label>Alamat</label>
                <textarea
                  v-model="regAddress"
                  class="form-control form-rounded"
                  rows="3"
                  placeholder="type your address"
                ></textarea>
              </form-group>
              <form-group class="form-group row">
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
              </form-group>
              <form-group :validator="$v.regSubCatId" class="form-group" label="Pilih Kategori">
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
                      :class="{'is-invalid': $v.regSubCatId.$error}"
                    />
                    <label
                      class="custom-control-label"
                      :for="subCategory.id"
                    >{{subCategory.sub_category_name}}</label>
                  </div>
                </div>
              </form-group>
            <form-group class="form-group">
                <div class="form-group">
                  <center>
                    <b-button
                      class="tombol"
                      type="submit"
                      value="Daftar"
                    >Daftar</b-button>
                  </center>
                </div>
              </form-group>
            </form>
          </b-col>
        </b-row>
      </div>
    </b-container>
  </div>
</template>

<script>
import axios from "axios";
import { required, minLength, maxLength, email } from 'vuelidate/lib/validators'
import { notPhone } from '../validator'
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
  validations : {
      regFullName: {
          required,
          maxLength: maxLength(100),
          minLength: minLength(3)
      },
      regEmail: {
          required,
          email,
          maxLength: maxLength(100)
      },
      regPhone: {
          required,
          notPhone,
          minLength: minLength(6)
      },
      regInstitution: {
          required
      },
      regSubCatId: {
          required
      }
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
        this.$v.$touch()
        if(this.$v.$error) return
        // axios.post("https://plugin-apps-server.herokuapp.com/api/participant", {
        //     headers: {'Content-Type': 'application/x-www-form-urlencoded' },
        //     event_id: this.regEventId,
        //     full_name: this.regFullName,
        //     email: this.regEmail,
        //     phone: this.regPhone,
        //     institution: this.regInstitution,
        //     address: this.regAddress,
        //     date_of_birth: this.regDateOfBirth,
        //     description: this.regDescription,
        //     sub_category_id: this.regSubCatId
        // }).then(response => {
        //     console.log(response);
        // }).catch(e => {
        //     console.log(e);
        // })
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
