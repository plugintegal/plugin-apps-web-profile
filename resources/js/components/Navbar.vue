<template>
    <div>
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                        <a class="navbar-brand logo_h" href="#home"><img src="asset/img/logo_plugin.png" alt="" width="150" height="40" style="margin-left: 20px"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation" style="margin-right: 20px">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent" style="margin-right: 20px">
                            <ul class="nav navbar-nav menu_nav justify-content-end" id="navbar_area">
                                <li class="nav-item" href="#about"><a class="nav-link click" href="#about">About</a></li>
                                <li class="nav-item" href=""><a class="nav-link click" href="#squad">Squad</a></li>
                                <li class="nav-item"><a class="nav-link click" href="#event">Event</a></li>
                                <li class="nav-item"><a class="nav-link click" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

    </div>
</template>

<script>
    export default {

    }

    $(document).ready(function(){
        $('.click').click(function(event){
            if(this.hash != ""){
                event.preventDefault();

                var hash = this.hash;

                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                },800, function(){
                    window.location.hash = hash;
                });
            }
        });
    });

</script>

<style>

</style>
