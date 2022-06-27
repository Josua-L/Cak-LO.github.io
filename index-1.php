<?php

include('layouts/header.php');
?>
 





        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <div class="home__container container grid">
                <div class="home__img-bg">
                    <img src="assets/img/itachi.png" alt="" class="home__img">
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            Facebook
                        </a>
                    <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            Twitter
                        </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            Instagram
                        </a>
                </div>

                <div class="home__data">
                    <h1 class="home__title">Animes en Tendencia<br> Temporada de Primavera</h1>
                    <p class="home__description">
                        Actualmente no disponemos con la mayoria de los animes en Tendencias, pero puedes ver lo que te ofrecemos
                    </p>
                    <span class="home__price">Actualmente solo 13</span>

                    <div class="home__btns">
                        <a href="#" class="button button--gray button--small">
                                Ver animes disponibles
                            </a>

                        <button class="button home__button">Ver animes en Moda</button>
                    </div>
                </div>
            </div>
        </section>


 <!--==================== Slider  ====================-->
 

 <div class="baxi">
 
 <div class="container-slider-img">

<input type="radio" id="1" name="image-slide" hidden/>
<input type="radio" id="2" name="image-slide" hidden/>
<input type="radio" id="3" name="image-slide" hidden/>

<div class="slides">
<div class="item-slide">

    <img class="imgs" src="./assets/img/slider-img/Tokyo-revenger.jpg" alt="">
    <div class="descripciones-naim"><a class="ali" href=""> Tokyo Revengers</a></div>  
    <p class="descripciones-naim-1"> Temporada 1 <br> 24 capitulos<br> Estado: Finalizado</p>


</div>

<div class="item-slide">
    <img class="imgs" src="./assets/img/slider-img/spyxfamiliy.png" alt="">
    <div class="descripciones-naim"><a class="ali" href=""> Spy x Family</a></div>  
    <p class="descripciones-naim-1"> Temporada 1 <br>  Estado: En Emision</p> 
</div>

<div class="item-slide">
    <img  class="imgs" src="./assets/img/slider-img/date-alive.png" alt="">
    <div class="descripciones-naim"><a class="ali" href=""> Date Alive</a></div> 
    <p class="descripciones-naim-1"> Temporadas: 4 <br> 12 capitulos C/d<br> Estado: Finalizado</p> 
</div>

</div>

<div class="pagination"> 
<label class="pagination-item" for="1">
    <img  class="imgs" src="./assets/img/slider-img/Tokyo-revenger.jpg" alt="">
</label>

<label class="pagination-item" for="2">
    <img class="imgs"  src="./assets/img/slider-img/spyxfamiliy.png" alt="">
</label>

<label class="pagination-item" for="3">
    <img  class="imgs" src="./assets/img/slider-img/date-alive.png" alt="">
</label>
</div>



</div>

 </div>


 <!--==================== Slider end  ====================-->



        <!--==================== FEATURED ====================-->
        <section class="featured section container" id="featured">
            <h2 class="section__title">
                Lo ultimos de Temporada
            </h2>

            <div class="featured__container grid">
                <article class="featured__card">
                    <span class="featured__tag">Favoritos</span>

                    <img src="assets/img/bloodc.jpg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Blood-C</h3>
                        <span class="featured__price">Genero: Gore</span>
                    </div>
                    <form method="get" action="./videm.php">
                        <button class="button featured__button"> <a href="./videm.php"></a> Ver ahora</button>
                    </form>

                </article>

                <article class="featured__card">
                    <span class="featured__tag">Favoritos</span>

                    <img src="assets/img/spyfamily.jpg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Spy X Family</h3>
                        <span class="featured__price">Genero: Romance, Accion, Shonen</span>
                    </div>

                    <form method="get" action="./videm.php">
                        <button class="button featured__button"> <a href="./videm.php"></a> Ver ahora</button>
                    </form>

                </article>

                <article class="featured__card">
                    <span class="featured__tag">Favoritos</span>

                    <img src="assets/img/datelive.jpg" alt="" class="featured__img">

                    <div class="featured__data">
                        <h3 class="featured__title">Date a Live</h3>
                        <span class="featured__price">Genero: Romance, shoujo, shounen, Accion</span>
                    </div>

                    <button class="button featured__button">Ver ahora</button>
                </article>
            </div>
        </section>

        <!--==================== STORY ====================-->
        <section class="story section container">
            <div class="story__container grid">
                <div class="story__data">
                    <h2 class="section__title story__section-title">
                        Our Story
                    </h2>

                    <h1 class="story__title">
                        Pagina Online para ver animes <br> this year
                    </h1>

                    <p class="story__description">
                        Todo inicio cuando dejaron de tarea en la universidad hacer una Pagina web cualquiera para entregarla como proyecto final.
                    </p>

                    <a href="#" class="button button--small">Leer mas...</a>
                </div>

                <div class="story__images">
                    <img src="assets/img/nuestra-historia.png" alt="" class="story__img">
                    <div class="story__square"></div>
                </div>
            </div>
        </section>

        <!--==================== PRODUCTS ====================-->
        <section class="products section container" id="products">
            <h2 class="section__title">
                Tendencia de la temporada pasada
            </h2>

            <div class="products__container grid">
                <article class="products__card">
                    <img src="assets/img/tokiorevengers.jpg" alt="" class="products__img">

                    <h3 class="products__title">Tokyo Revengers</h3>
                    <span class="products__price">Temporada 1</span>

                    <button class="products__button">
                            <i class='bx bx-shopping-bag'><a href="index-1.html"></a></i>
                        </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/tokioghoul.jpg" alt="" class="products__img">

                    <h3 class="products__title">Tokyo Ghoul</h3>
                    <span class="products__price">Temporada final</span>

                    <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/products/tensei.webp" alt="" class="products__img">

                    <h3 class="products__title">Tensei Shitara Slime Datta Ken</h3>
                    <span class="products__price">Temporada 1</span>

                    <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/products/mushoku.jpg" alt="" class="products__img">

                    <h3 class="products__title">Mushoku tensei</h3>
                    <span class="products__price">Temporada 1</span>

                    <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                </article>

                <article class="products__card">
                    <img src="assets/img/products/kokoro.jpg" alt="" class="products__img">

                    <h3 class="products__title">Kokoro Connect</h3>
                    <span class="products__price">Temporada 1</span>

                    <button class="products__button">
                            <i class='bx bx-shopping-bag'></i>
                        </button>
                </article>
            </div>
        </section>

        <!--==================== TESTIMONIAL ====================-->
        <section class="testimonial section container">
            <div class="testimonial__container grid">
                <div class="swiper testimonial-swiper">
                    <div class="swiper-wrapper">
                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Sabemos que el Spam es algo molesto, asi que decidimos hacer algo mas simple que no tenga tanta publicidad espero que lo disfrutes.
                            </p>
                            <h3 class="testimonial__date">March 27. 2021</h3>

                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial1.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Josua Lopez</span>
                                    <span class="testimonial__perfil-detail">Desarrolador-Estudiante</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Sabemos que el Spam es algo molesto, asi que decidimos hacer algo mas simple que no tenga tanta publicidad espero que lo disfrutes.
                            </p>
                            <h3 class="testimonial__date">March 27. 2021</h3>

                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Camila Salinas</span>
                                    <span class="testimonial__perfil-detail">Desarrolador-Estudiante</span>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Sabemos que el Spam es algo molesto, asi que decidimos hacer algo mas simple que no tenga tanta publicidad espero que lo disfrutes.
                            </p>
                            <h3 class="testimonial__date">March 27. 2021</h3>

                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Keren Jemima</span>
                                    <span class="testimonial__perfil-detail">Desarrolador-Estudiante</span>
                                </div>
                            </div>
                        </div>


                        <div class="testimonial__card swiper-slide">
                            <div class="testimonial__quote">
                                <i class='bx bxs-quote-alt-left'></i>
                            </div>
                            <p class="testimonial__description">
                                Sabemos que el Spam es algo molesto, asi que decidimos hacer algo mas simple que no tenga tanta publicidad espero que lo disfrutes.
                            </p>
                            <h3 class="testimonial__date">March 27. 2021</h3>

                            <div class="testimonial__perfil">
                                <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__perfil-img">

                                <div class="testimonial__perfil-data">
                                    <span class="testimonial__perfil-name">Carlos Navas</span>
                                    <span class="testimonial__perfil-detail">Desarrolador-Estudiante</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-button-next">
                        <i class='bx bx-right-arrow-alt'></i>
                    </div>
                    <div class="swiper-button-prev">
                        <i class='bx bx-left-arrow-alt'></i>
                    </div>
                </div>

                <div class="testimonial__images">
                    <div class="testimonial__square"></div>
                    <img src="assets/img/CAKLO.png" alt="" class="testimonial__img">
                </div>
            </div>
        </section>

        <!--==================== NEW ====================-->
        <section class="new section container" id="new">
            <h2 class="section__title">
                Episodios Nuevos <br><h4 class="section__title">Si estas navegando desde un dispositvo movil desplaza hacia la derecha para dosfrutar de esta seccion</h4>
            </h2>

            <div class="new__container">
                <div class="swiper new-swiper">
                    <div class="swiper-wrapper">
                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="assets/img/products/kaguya.jpg" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Kaguya-sama Love is war</h3>
                                <span class="new__price">Temporada 1</span>
                            </div>

                            <button class="button new__button">Ver ahora</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="assets/img/products/koitouso.jpg" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title"> Koi To Uso</h3>
                                <span class="new__price">Temporada 1</span>
                            </div>

                            <button class="button new__button">Ver ahora</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="assets/img/products/tensei.webp" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Tensei Shitara Datta Ken</h3>
                                <span class="new__price">Temporada 2-3</span>
                            </div>

                            <button class="button new__button">Ver ahora</button>
                        </article>

                        <article class="new__card swiper-slide">
                            <span class="new__tag">New</span>

                            <img src="assets/img/products/kuzo.jpg" alt="" class="new__img">

                            <div class="new__data">
                                <h3 class="new__title">Kuzo no Honkai</h3>
                                <span class="new__price">Temporada 1</span>
                            </div>

                            <button class="button new__button">Ver ahora</button>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== NEWSLETTER ====================-->
        <section class="newsletter section container">
            <div class="newsletter__bg grid">
                <div>
                    <h2 class="newsletter__title">¿Quieres recibir<br>las ultimas Novedades?</h2>
                    <p class="newsletter__description">
                        No te pierdas la caildad de nuestro servicio. Suscríbase a nuestro boletín de correo electrónico para obtener las mejores avisos de los animes de la siguiente Temporada y para ver cuales estan disponibles
                    </p>
                </div>

                <form action="mailto:outlex29@gmail.com" class="newsletter__subscribe">
                    <input type="email"  placeholder="Enter your email" class="newsletter__input">
                    <button class="button">
                            SUBSCRIBE
                        </button>
                </form>
            </div>
        </section>









    </main>

    <div class="videospruebas">


    </div>




    <div class="contenedor-span">

<div class="contenedor-de-let">
<span class="spant" style="--l: '¡C';">¡C</span>
<span class="spant" style="--l: 'a';">a</span>
<span class="spant" style="--l: 'k';">k</span>
<span class="spant" style="--l: 'L';">L</span>
<span class="spant" style="--l: 'O!';">O!</span>


</div>
</div>










<?php

include('layouts/footer.php');
?>

