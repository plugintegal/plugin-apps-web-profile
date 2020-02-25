<template>
  <div>
    <app-navbar />
    <!-- jumbotron -->
    <div style="margin-bottom: 50px" id="OPREC1" class="OPREC1">
      <b-jumbotron text-variant="black" class="jevent">
        <template v-slot:header>OPREC 1.0</template>
        <template v-slot:lead>
          This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
          featured content or information. Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Saepe ratione delectus esse iste repellendus, dolorum nulla vitae veritatis ducimus,
          quasi quos reprehenderit dignissimos debitis eligendi ab quia iure sit. Obcaecati?
        </template>
      </b-jumbotron>
    </div>
    <!-- akhir jumbotron -->

    <!-- detail event -->
    <b-container class="bv-example-row" style="margin-bottom: 50px; padding-top: 75px">
      <b-row>
        <div class="col-lg-4 mb-3">
            <h3 style="text-align: center">Due Date</h3>
                  <p style="text-align: left">Tangga : 30 Feb 2020</p>
                  <p style="text-align: left">Tempat : Plug-In Home</p>
                  <p style="text-align: left">Waktu : 08.00 - selesai WIB</p>
            <br>
            <h3 style="text-align: center">HTM & Fasilitas</h3>
          <p style="text-align: left">Fee : Rp 35.000,-</p>
          <p style="text-align: left">Fasilitas : Sertifikat, Snack & Merchandise</p>
        </div>

        <div class="col-lg-8">
          <h3 style="text-align: center">Deskripsi</h3>
          <P style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laborum quidem quos maiores asperiores qui laudantium fugiat consequuntur.
            Voluptatum saepe dignissimos facere consectetur,
            quam officiis excepturi! Quibusdam veniam praesentium magni sed.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aliquam tenetur culpa praesentium est odio impedit consequuntur totam quidem nisi! Fugit,eligendi.
            Praesentium corrupti reprehenderit cupiditate blanditiis voluptatem totam voluptatibus architecto!
          </P>
        </div>

        <b-col cols="4">
          
        </b-col>
      </b-row>
    </b-container>
    <!-- akhir detail event -->

<div class="daftar mb-5 text-center">
  <b-container>
  <b-button v-b-toggle.collapse-1 class="tombol">Daftar</b-button>
  <b-collapse id="collapse-1" class="mt-2">
    <b-card  class="form">
      <b-card-body>
            <!-- isi daftar -->
            <div>
              <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                <!-- nama -->
                <b-form-group id="input-group-2" label-for="input-2">
                  <b-form-input
                    id="input-2"
                    v-model="form.name"
                    required
                    placeholder="Ketikan nama"
                  ></b-form-input>
                </b-form-group>
                <!-- asal -->
                <b-form-group id="input-group-4" label-for="input-4">
                  <b-form-input
                    id="input-4"
                    v-model="form.institusi"
                    required
                    placeholder="Ketikan asal institusi"
                  ></b-form-input>
                </b-form-group>
                <!-- email -->
                <b-form-group id="input-group-1" label-for="input-1">
                  <b-form-input
                    id="input-1"
                    v-model="form.email"
                    type="email"
                    required
                    placeholder="Ketikan Email"
                  ></b-form-input>
                </b-form-group>
                <!-- Nomor HP -->
                <b-form-group id="input-group-5" label-for="input-5">
                  <b-form-input
                    id="input-5"
                    v-model="form.NomorHP"
                    required
                    placeholder="Ketikan No HP"
                  ></b-form-input>
                </b-form-group>
                <!-- Gender -->
                <b-form-group id="input-group-3" label-for="input-3">
                  <b-form-select id="input-3" v-model="form.gender" :options="gender" required></b-form-select>
                </b-form-group>
                <br>
                <!-- Alamat -->
                <b-form-group id="input-group-6" label-for="input-6" class="jarak">
                  <b-form-textarea
                    id="textarea"
                    v-model="text"
                    placeholder="Ketikan Alamat"
                    rows="3"
                    max-rows="6"
                  ></b-form-textarea>
                  <pre class="mt-3 mb-0">{{ Alamat }}</pre>
                </b-form-group>
                <!-- Acara -->
                <b-form-group id="input-group-7" label="Pilih Acara:" label-for="input-7">
                  <b-form-checkbox-group v-model="selected" :options="options" plain stacked></b-form-checkbox-group>
                </b-form-group>
                <!-- Save -->
                <div class="text-center">
                  <!-- <router-link to="/regis" class="btn btn-primary" type="submit">Daftar</router-link> -->
                  <b-button type="submit" variant="primary" class="submit">Submit</b-button>
                </div>
              </b-form>
            </div>
            <!-- akhir isi daftar -->
          </b-card-body>
    </b-card>
  </b-collapse>
  </b-container>
</div>
  </div>
</template>


<script>

import axios from  "axios";
import Navbar from "./Navbar.vue";
export default {
  components: {
    "app-navbar": Navbar
  },
  data() {
    return {
      selected: [], // Must be an array reference!
      options: [
        { text: "Seminar", value: "Seminar" },
        { text: "Workshop", value: "Workshop" }
      ],

      form: {
        name: "",
        institusi: "",
        email: "",
        NomorHP: "",
        gender: null,
        Alamat: ""
      },
      gender: [
        { text: "Jenis Kelamin", value: null },
        "Laki-laki",
        "Perempuan"
      ],
      show: true
    };
  },
  methods: {
    onSubmit(evt) {
      evt.preventDefault();
      alert(JSON.stringify(this.form));
      axios.post('http://localhost:8001/api/regis').then(response => this.regis = response.data);
    },
    onReset(evt) {
      evt.preventDefault();
      // Reset our form values
      this.form.email = "";
      this.form.name = "";
      this.form.institusi = "";
      this.form.NomorHP = "";
      this.form.gender = null;
      this.textArea.Alamat = "";
      this.selected;
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    }
  },
  mounted() {
            console.log("Berhasil tampil");
            axios.get('http://localhost:8001/api/regis').then(response => this.regis = response.data);
        }

};
</script>

<style>
.jevent {
  min-height: 550px;
  background: url(/asset/img/jumbotron.png);
  background-size: cover;
  margin-top: 30px;
}
.OPREC1{
  text-align: center;
  margin-top: 50px;

}
.daftar{
  position: absolute;
  right: 20%;
  left: 20%;
  margin-bottom: 10px;
  /* background: #16a1e3; */
  /* width: 30px; */
}
.form{
  background-color: #16a1e3;
  border: none;
  border-radius: 20px;
  text-align: left;
}
.jarak{
  margin-top: 35px;
}
.tombol{
  background: #16a1e3;
  width: 150px;
}
.submit{
  background: #1676bd;
}
</style>