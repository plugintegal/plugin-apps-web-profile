<template>
<div>
    <app-navbar />
    <!-- jumbotron -->
 <div class="text-center">
  <b-jumbotron  text-variant="black" class="jevent">
    <template v-slot:header>Nama Event</template>

    <template v-slot:lead>
      Tujuan Event
    </template>
    
  </b-jumbotron>
</div>
<!-- akhir jumbotron -->

<!-- detail event -->

<!-- akhir detail event -->

</div>
</template>


<script>
     import Navbar from "./Navbar.vue";
    export default {
        components: {
            "app-navbar": Navbar
        }
    };  

</script>

<style>
.jevent{
    min-height: 450px;
    background: url(/asset/img/jumbotron.png);
    background-size: cover;

}


</style>