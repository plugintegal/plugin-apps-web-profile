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
        <b-col cols="4">
          <h3 style="text-align: center">Due Date</h3>
          <p style="text-align: left">Tangga : 30 Feb 2020</p>
          <p style="text-align: left">Tempat : Plug-In Home</p>
          <p style="text-align: left">Waktu : 08.00 - selesai WIB</p>
        </b-col>

        <b-col cols="8">
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
        </b-col>

        <b-col cols="4">
          <h3 style="text-align: center">HTM & Fasilitas</h3>
          <p style="text-align: left">Fee : Rp 35.000,-</p>
          <p style="text-align: left">Fasilitas : Sertifikat, Snack & Merchandise</p>
        </b-col>
      </b-row>
    </b-container>
    <!-- akhir detail event -->

    <!-- daftar -->
    <div class="container">
    <div role="tablist" style="margin-bottom: 10px">
      <b-card no-body class="mb-1">
        <b-card-header header-tag="header" class="p-1" role="tab">
          <b-button block href="#" v-b-toggle.accordion variant="light">Daftar</b-button>
        </b-card-header>
        <b-collapse id="accordion" accordion="my-accordion" role="tabpanel">
          <b-card-body>
            <!-- isi daftar -->
            <div>
              <b-form @submit="onSubmit" @reset="onReset" v-if="show">
                <!-- nama -->
                <b-form-group id="input-group-2" label="Nama lengkap:" label-for="input-2">
                  <b-form-input
                    id="input-2"
                    v-model="form.name"
                    required
                    placeholder="Ketikan nama"
                  ></b-form-input>
                </b-form-group>
                <!-- asal -->
                <b-form-group id="input-group-4" label="Asal Institusi:" label-for="input-4">
                  <b-form-input
                    id="input-4"
                    v-model="form.institusi"
                    required
                    placeholder="Ketikan asal institusi"
                  ></b-form-input>
                </b-form-group>
                <!-- email -->
                <b-form-group id="input-group-1" label="Email:" label-for="input-1">
                  <b-form-input
                    id="input-1"
                    v-model="form.email"
                    type="email"
                    required
                    placeholder="Ketikan Email"
                  ></b-form-input>
                </b-form-group>
                <!-- Nomor HP -->
                <b-form-group id="input-group-5" label="Nomor HP:" label-for="input-5">
                  <b-form-input
                    id="input-5"
                    v-model="form.NomorHP"
                    required
                    placeholder="Ketikan kuwuk"
                  ></b-form-input>
                </b-form-group>
                <!-- Gender -->
                <b-form-group id="input-group-3" label="jenis kelamin:" label-for="input-3">
                  <b-form-select id="input-3" v-model="form.gender" :options="gender" required></b-form-select>
                </b-form-group>
                <!-- Alamat -->
                <b-form-group id="input-group-6" label="Alamat:" label-for="input-6">
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
                <b-button type="submit" variant="primary">Submit</b-button>
                <b-button type="reset" variant="danger">Reset</b-button>
              </b-form>
            </div>
            <!-- akhir isi daftar -->
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
    </div>
    <!-- akhir daftar -->
  </div>
</template>


<script>
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
        { text: "Workshop", value: "Workshop" },
        { text: "TalkShow", value: "TalkShow" }
      ],

      form: {
        name: "",
        institusi: "",
        email: "",
        NomorHP: " ",
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
    },
    onReset(evt) {
      evt.preventDefault();
      // Reset our form values
      this.form.email = "";
      this.form.name = "";
      this.form.institusi = " ";
      this.form.NomorHP = " ";
      this.form.gender = null;
      this.textArea.Alamat = " ";
      this.selected;
      // Trick to reset/clear native browser form validation state
      this.show = false;
      this.$nextTick(() => {
        this.show = true;
      });
    }
  }
};
</script>

<style>
.jevent {
  min-height: 550px;
  background: url(/asset/img/jumbotron.png);
  background-size: cover;
}

.OPREC1{
  text-align: center;


}
</style>