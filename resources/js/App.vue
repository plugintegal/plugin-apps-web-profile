<template>
<div>
  <!-- <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Home</b-navbar-brand text="Lang" right>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
        <b-nav-item href="#">Squad</b-nav-item>
        <b-nav-item href="#" >Event</b-nav-item>
        <b-nav-item href="#" >About</b-nav-item>
        <b-nav-item href="#" >Wiyata OS</b-nav-item>
        <b-nav-item href="#" >Contacts</b-nav-item>
      </b-navbar-nav> -->

      <!-- Right aligned nav items -->
      
          <!-- Using 'button-content' slot -->
          <!-- <template v-slot:button-content>
            <em>User</em>
          </template>          
      </b-collapse>
  </b-navbar> -->
<app-navbar/>
<!-- Tentang -->
<b-jumbotron bg-variant="white" text-variant="black" border-variant="">
    
    <template v-slot:header>
      <div class="text-center"> PLUG-IN</div>
     
      </template>
    

    <template v-slot:lead>
      <div class="text-center">Plug-in adalah suatu organisasi atau komunitas studi linux di Politeknik Harapan Bersama Tegal. Kami mempunyai tujuan untuk mengenalkan dan mengOpen Source kan mahasiswa dan masyarakat umum dengan berbagai kegiatan yang nantinya bisa membuka wawasan serta mindset OpenSource guna untuk mengurangi angka pembajakan Software di Indonesia.</div>
    </template>
    
    <hr class="my-4">

    <p class="text-center">
      Politeknik Harapan Bersama Linux User Group Indonesia.
    </p>
  </b-jumbotron>
  		

        <!-- Squad -->
 <h4>Programming Squad</h4>
    <b-card img-src="https://placekitten.com/300/300" img-alt="Card image" img-left class="mb-3">
      <b-card-text>
        <div class="text-center">
      Squad kami berkontribusi dalam pengembangan aplikasi (mobile, desktop, web) dengan teknologi open source.  
      </div>
      </b-card-text>
    </b-card>
 <h4>Multimedia Squad</h4>
    <b-card img-src="https://placekitten.com/300/300" img-alt="Card image" img-right>
      <b-card-text>
        <div class="text-center">
        Squad kami bertujuan mengasah kemampuan dalam bidang design 2D dan 3D.
      </div>
      </b-card-text>
    </b-card>
    <p> </p>
  <h4>Networking Squad</h4>
  <p> </p>
<b-card img-src="https://placekitten.com/300/300" img-alt="Card image" img-left class="mb-3">
      <b-card-text>
        <div class="text-center">
        Squad kami bertujuan mengembangkan dalam mengelola jaringan internet dalam bidang IoT.
      </div>
      </b-card-text>
    </b-card>

   <h1><div class="text-center">
     Hubungi Kami
     </div></h1>

      <!-- Contacts -->
  <b-container class="bv-example-row">
  <b-row>
    <b-col>
      <b-card
    title="Phone"
    img-src="https://picsum.photos/600/300/?image=25"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2 text-center"
  >
    <b-card-text class="text-center">
      Zihan
      0895422809945
    </b-card-text>
    <b-card-text class="text-center">
      0895422809945
    </b-card-text>

    
  </b-card
  ></b-col>
    <b-col> <b-card
    title="Email"
    img-src="https://picsum.photos/600/300/?image=25"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2 text-center"
  >
    <b-card-text class="text-center">
     plugintegal@gmail.com
    </b-card-text>

    
  </b-card> </b-col>
    <b-col> <b-card
    title="Alamat"
    img-src="https://picsum.photos/600/300/?image=25"
    img-alt="Image"
    img-top
    tag="article"
    style="max-width: 20rem;"
    class="mb-2 text-center"
  >
    <b-card-text class="text-center">
     Jl. Mataram No.9, Kel. pesurungan lor, Kel. Pesurungan Lor, Pesurungan Lor, Margadana, Kota Tegal, Jawa Tengah 52147
    </b-card-text>

    
  </b-card> </b-col>
  </b-row>
</b-container>


</div>
</template>

<script>
import Navbar from './components/Navbar.vue'
import Home from './pages/Home.vue'
export default {
components: {

  "app-navbar": Navbar,
  Home

}
}
</script>

