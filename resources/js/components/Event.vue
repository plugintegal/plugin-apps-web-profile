<template>
  <div>
    <app-navbar />
    <!-- jumbotron -->
    <!-- <div class="slogan"></div> -->
    <div style="margin-bottom: 50px" id="OPREC1" class="OPREC1">
      <b-jumbotron text-variant="black" class="jevent align-middle">
        <div class="widewrapper thumbnail">
          <!-- <img class="" src="/asset/img/jumbotron.png" alt=""> -->
          <div class="post-content">
            <h2 class="text-black">ABOUT</h2>
            <h3
              class="text-black"
            >We invite you to enjoy a luxurious ground transportation service provided by our team of experts. We have the experience and skills to meet the expectations of every passenger and add value to every ride.</h3>
            <b-button v-b-toggle.collapse-1 class="tombol">Daftar</b-button>
          </div>
        </div>
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
          <br />
          <h3 style="text-align: center">HTM & Fasilitas</h3>
          <p style="text-align: left">Fee : Rp 35.000,-</p>
          <p style="text-align: left">Fasilitas : Sertifikat, Snack & Merchandise</p>
          <br />
        </div>

        <div class="col-lg-8">
          <h3 style="text-align: center">Deskripsi</h3>
          <P style="text-align: justify">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Laborum quidem quos maiores asperiores qui laudantium fugiat consequuntur.
            Voluptatum saepe dignissimos facere consectetur,
            quam officiis excepturi! Quibusdam veniam praesentium magni sed.
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Aliquam tenetur culpa praesentium est odio impedit consequuntur totam quidem nisi!
            Fugit,eligendi.
            Praesentium corrupti reprehenderit cupiditate blanditiis voluptatem totam voluptatibus
            architecto!
          </P>
          <div class="text-center">
            <img
              src="https://s.kaskus.id/r540x540/images/2019/05/02/10419174_20190502042606.jpg"
              alt
              width="150px"
              height="150px"
            />
          </div>
        </div>

        <b-col cols="4"></b-col>
      </b-row>
    </b-container>
    <!-- akhir detail event -->
  </div>
</template>


<script>
import axios from "axios";
import Navbar from "./Navbar.vue";
export default {
  components: {
    "app-navbar": Navbar
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
.widewrapper > img {
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
