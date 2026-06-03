<div>
      <div class="page-content">
        <div class="div w-100">
            {{-------------------       PORTADA / HERO       ------------------------------}}
            <nav class="navbar navbar-expand-lg ww-nav-bar fixed-top" aria-label="Navegación principal">
                <div class="container ww-nav-container">
                    <button class="navbar-toggler ww-nav-toggler order-1" type="button" data-toggle="collapse" data-target="#heroNav"
                            aria-controls="heroNav" aria-expanded="false" aria-label="Abrir menú">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse order-2 justify-content-center" id="heroNav">
                        <ul class="navbar-nav ww-nav-links text-center">
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#home">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#MIS_PALABRAS">Mi Historia</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#events">Evento</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll" href="#rsvp">Confirma tu asistencia</a></li>
                        </ul>
                    </div>
                    <div class="ww-nav-heart order-3" aria-hidden="true">
                        <i class="far fa-heart"></i>
                    </div>
                </div>
            </nav>

            <div class="ww-home-page" id="home">
                <img class="ww-deco-floral ww-deco-floral--tl" src="{{ asset('images/ramo/pngtree-flower-frame-with-watercolor-flowers-png-image_7887052-removebg-preview.png') }}" alt="" aria-hidden="true"/>
                <img class="ww-deco-floral ww-deco-floral--br" src="{{ asset('images/ramo/RAMO.png') }}" alt="" aria-hidden="true"/>

                <div class="ww-wedding-announcement d-flex align-items-center">
                    <div class="container-fluid ww-hero-container px-lg-4">
                        <div class="row align-items-center ww-hero-row no-gutters">
                            <div class="col-lg-6 col-md-12 ww-hero-visual" data-aos="fade-right" data-aos-duration="1000">
                                <div class="ww-hero-portrait-wrap">
                                    <div class="ww-hero-wash" aria-hidden="true"></div>
                                    <img class="ww-hero-portrait" src="{{ asset('images/quinceanera/ash_2.png') }}" alt="Ashley — Mis XV Años"/>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 ww-hero-content" data-aos="fade-left" data-aos-duration="1000">
                                <div class="ww-hero-text-block">

                                    <h1 class="ww_my_wedding">MIS XV AÑOS</h1>
                                    <h2 class="ww-hero-name ww-title">
                                        <span class="ww-title">Ashley</span>
                                    </h2>

                                    <div class="ww-hero-divider" aria-hidden="true">
                                        <span class="ww-hero-divider-line"></span>
                                        <i class="fas fa-heart ww-hero-divider-heart"></i>
                                        <span class="ww-hero-divider-line"></span>
                                    </div>

                                    <p class="ww-title_date">8 · AGOSTO · 2026</p>
                                    <div class="ww-hero-gold-rule" aria-hidden="true"></div>

                                    <p class="ww-hero-countdown-label">Faltan</p>
                                    <div class="simply-countdown simply-countdown-one ww-hero-countdown"></div>

                                    <a class="ww-hero-scroll smooth-scroll" href="#MIS_PALABRAS" aria-label="Desplazarse hacia abajo">
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{-------------------            PADRES  --}}
                <div class="ww-section" id="Parents">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid flower_class mb-2" src="{{ asset('images/horse/horse.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                                <h1 class="h1 text-center pb-3 rouge-script www-title-rose-color" data-aos="zoom-in-down" data-aos-duration="1000">Mis Padres</h1>
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center pb-4">
                            <div class="col-md-8 col-sm-10">
                            </div>
                        </div>
                        <div class="row text-center pt-2">
                            <div class="col-md-4 mt-3" data-aos='fade-right'>
                                <h3 class="h2 rouge-script">Alejandro Escobedo Lira</h3>
                                <p class="pt-3 text-md-right text-sm-center poppins_regular ">Agradezco a Dios la oportunidad de ver a mi adorada hija el día de hoy convertida en una mujer. Agradezco la suerte de ser tu padre y quiero que sepas lo orgulloso que estoy de verte hoy tan hermosa y tan realizada. ¡Feliz quince años! Te quiero hasta el cielo y más allá.</p>
                            </div>
                            <div class="col-md-4 mb-4">
                                <img class="img-fluid w-100" src="{{ asset('images/padrinos/parents2.jpeg') }}" style="max-width: 275px;" alt="mis_padres" data-aos="fade-down" data-aos-duration="1000"/>
                            </div>
                            <div class="col-md-4" data-aos='fade-right'>
                                <h3 class="h2 rouge-script">Araceli Cruz Cervantes</h3>
                                <p class="pt-3 text-md-left text-sm-center poppins_regular">Me has enseñado la construcción de la originalidad en la vida, me has enseñado a ser mamá a ser amiga, a ser compañera de camino. Hoy, que cumples tus 15 años, quiero darle gracias a Dios, por la vida, y porque me ha dado la oportunidad de acompañarte, de apoyarte y amarte.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <hr class="hr_rounded rounded">

{{--    --}}{{----}}{{-------------------          1  PADRINOS VESTIDO --}}
                <div class="ww-section" id="Padrinos">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid flower_class mb-2" src="{{ asset('images/horse/horse2.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                                <h1 class="h1 text-center  rouge-script www-title-rose-color"
                                    data-aos="zoom-in-down" data-aos-duration="1000">Mis Padrinos De Velación
                                </h1>
                                <!-- <img class="img-fluid dress_class mb-2 pb-3"
                                     src="{{ asset('images/flowers/vestido/dress.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/> -->
                            </div>
                        </div>
                        <div class="row d-flex align-items-center justify-content-center pb-4">
                            <div class="col-md-8 col-sm-10">
                            </div>
                        </div>
                        <div class="row text-center pt-2">
                            <div class="col-md-4 mt-3" data-aos='fade-right'>
                                <h3 class="h2 rouge-script">José Cruz</h3>
                                <p class="pt-3 text-md-right text-sm-center poppins_regular ">Mi amada Ruby agradezco a Dios y a tus padres por hacerme el tío más feliz y hoy a ti por elegirme tu padrino. Que hoy, mañana y siempre seas la mujer más feliz de este mundo te quiero mucho mi Ruby.</p>
                            </div>
                            <div class="col-md-4 pb-4">
                                <img class="img-fluid w-100 " src="{{ asset('images/padrinos/dress4.png') }}" style="max-width: 275px;" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                            </div>
                            <div class="col-md-4" data-aos='fade-right'>
                                <h3 class="h2 rouge-script">Saraí Nolasco</h3>
                                <p class="pt-3 text-md-left text-sm-center poppins_regular">Vuela Ruby, que nadie te detendrá, lucha por tus sueños, ve en busca de lo que realmente anhelas. Felices quince años. Para una linda mujer que hoy ha desplegado las alas para convertirse en una hermosa mariposa. Nunca dejes de soñar, que tus padrinos estaremos siempre para apoyarte.</p>
                            </div>
                        </div>
                    </div>
                </div>

            <hr class="hr_second rounded">

            {{--    --}}{{----}}{{-------------------     2       PADRINOS MISA --}}
            <div class="ww-section" id="Padrinos">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid flower_class mb-2" src="{{ asset('images/horse/horse3.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                            <h1 class="h1 text-center rouge-script www-title-rose-color"
                                data-aos="zoom-in-down" data-aos-duration="1000">Mis Padrinos De Iglesia
                            </h1>
                        </div>
                    </div>
                    <div class="row d-flex align-items-center justify-content-center pb-4">
                        <div class="col-md-8 col-sm-10">
                        </div>
                    </div>
                    <div class="row text-center pt-2">
                        <div class="col-md-4 mt-3" data-aos='fade-right'>
                            <h3 class="h2 rouge-script">Silviano Ortíz</h3>
                            <p class="pt-3 text-md-right text-sm-center poppins_regular ">Mi querida Ruby, desde que llegaste a nuestras vidas, has sido una fuente inagotable de alegría. Ser tu padrino es un honor que valoro mucho. En tus quince años, te deseo una vida llena de amor y felicidad. Siempre estaré aquí para ti. Te quiero muchísimo.! </p>
                        </div>
                        <div class="col-md-4 pb-4">
                            <img class="img-fluid w-100" src="{{ asset('images/padrinos/example3.png') }}" style="max-width: 275px;" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                        </div>
                        <div class="col-md-4" data-aos='fade-right'>
                            <h3 class="h2 rouge-script">Lidia Morales</h3>
                            <p class="pt-3 text-md-left text-sm-center poppins_regular">Querida Ruby, en tus quince años, te deseo que vueles alto y persigas tus sueños con valentía. Hoy despliegas tus alas para convertirte en una hermosa mariposa, y siempre estaré aquí para apoyarte en cada vuelo. ¡Feliz cumpleaños, linda mujer!.</p>
                        </div>
                    </div>
                </div>
            </div>

{{--            --}}{{----}}{{----------            MIS PALABRAS --}}
            <div class="py-5">
                <div class="col-12 py-5">
                    <div class="ww-section quote-container"
                         data-aos="flip-up" data-aos-delay="300" data-aos-duration="1000" id="MIS_PALABRAS">
                        <div class="frame_blue m-4 h-auto">
                            <i class="fas fa-quote-left fa-3x quote_color"></i>
                            <div class="d-flex justify-content-center text-center">
                                <div class="w-100 m-4 pb-4">
                                    <h1 class="rouge-script white-letter" >
                                        "Aquí y ahora, cierro una etapa y me abro a todo lo bueno que la vida tiene para mí"
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--            --}}{{----}}{{--            DÓNDE Y CUANDO?--}}
            <div class="ww-section bg-light" id="events">
                <div class="container ww-wedding-event">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid mb-2 flower_class" src="{{ asset('images/horse/horse4.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                            <h1 class="h1 text-center pb-3 ww-title www-title-rose-color"
                                data-aos="zoom-in-down" data-aos-duration="1000">¿Dónde y Cuándo?</h1>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center pt-3 " data-aos="fade-down-right" data-aos-duration="1000">
                            <div class="shadow-lg p-2 rounded-lg custom-shadow ww-event-card">
                                <div class="p-3 rounded-lg shadow-lg">
                                    <div class="h4 ww-title text-center www-title-accent">Misa <i class="fas fa-church text-muted" aria-hidden="true"></i></div>
                                    <div class="h5 poppins_regular text-center mb-3">La Villita en Juárez</div>
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">Juárez</span></li>
                                        <li class="pt-2"><i class="fas fa-calendar-alt text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">8 de Agosto del 2026</span></li>
                                        <li class="pt-2"><i class="fas fa-clock text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">1:00 PM</span></li>
                                    </ul>
                                    <div class="row d-flex align-items-center justify-content-center mt-3">
                                        <img class="img-fluid rounded-lg w-100 ww-event-card-img" src="{{ asset('images/places/church3.jpg') }}" alt="Misa — La Villita en Juárez"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center pt-3"  data-aos="fade-up-right" data-aos-duration="1000">
                            <div class="shadow-lg p-2 rounded-lg ww-event-card">
                                <div class="p-3 rounded-lg shadow-lg ">
                                    <div class="h4 ww-title text-center www-title-accent">Recepción / Comida <i class="fas fa-utensils text-muted" aria-hidden="true"></i></div>
                                    <div class="h5 poppins_regular text-center mb-3">Salón Buenos Aires</div>
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">Salón Buenos Aires</span></li>
                                        <li class="pt-2"><i class="fas fa-calendar-alt text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">8 de Agosto del 2026</span></li>
                                        <li class="pt-2"><i class="fas fa-clock text-muted" aria-hidden="true"></i><span class="pl-2 text-muted">3:00 PM</span></li>
                                        <li class="d-flex justify-content-center align-items-center pt-3">
                                            <a class="p-0 m-0" target="_blank" rel="noopener noreferrer" href="https://maps.app.goo.gl/aFZU594dY9q3JqCu8">
                                                <button type="button" class="btn mt-2 church_btn ww-btn-location">Cómo llegar <i class="fas fa-map-marker-alt maps_color" aria-hidden="true"></i></button>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="row d-flex align-items-center justify-content-center mt-3">
                                        <img class="img-fluid w-100 rounded-lg ww-event-card-img" src="{{ asset('images/places/rancho2.jpg') }}" alt="Recepción — Salón Buenos Aires"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

{{--    --}}{{----}}{{-------------------            GALERIA  --}}
            <div class="ww-section " id="gallery">
                <div class="ww-photo-gallery">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img class="img-fluid mb-2 flower_class" src="{{ asset('images/horse/horse5.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                                <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Galeria de Fotos</h2>
                            </div>
                        </div>
                        <div class="col-md-12 text-center ww-category-filter mb-4"></div>
                        <div class="ww-gallery" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1000" data-aos-offset="0">
                            <div class="card-columns">
                                <div class="card">
                                    <a href="{{ asset('images/quinceanera/q1.jpeg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                                        <img class="img-fluid rounded-lg"  src="{{ asset('images/quinceanera/q1.jpeg') }}" alt="Gallery Pic 1"/>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ asset('images/quinceanera/q2.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                                        <img class="img-fluid rounded-lg"  src="{{ asset('images/quinceanera/q2.jpg') }}" alt="Gallery Pic 1"/>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ asset('images/quinceanera/q3.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                                        <img class="img-fluid rounded-lg"  src="{{ asset('images/quinceanera/q3.jpg') }}" alt="Gallery Pic 1"/>
                                    </a>
                                </div>
                                <div class="card">
                                    <a href="{{ asset('images/quinceanera/q4.jpg') }}" data-toggle="lightbox" data-gallery="ww-gallery">
                                        <img class="img-fluid rounded-lg"  src="{{ asset('images/quinceanera/q4.jpg') }}" alt="Gallery Pic 1"/>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="hr_rounded rounded">

{{--      --}}{{----}}{{-------------------            FORM ASISTENCIA  --}}{{----}}{{--     --}}
            <div class="ww-section ww-rsvp-detail" id="rsvp">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <img class="img-fluid mb-2 flower_class" src="{{ asset('images/horse/horse6.png') }}" alt="mis_padres" data-aos="flip-left" data-aos-duration="1000"/>
                            <h2 class="h1 text-center pb-3 ww-title" data-aos="zoom-in-down" data-aos-duration="1000">Confirmar asistencia </h2>
                        </div>
                    </div>
                    <div class="row ww-rsvp-form">
                        <div class="col-md-8 frame_dorado rounded-lg mx-2">
                            <div class="card-body">
                                <form >
                                    <div class="row">
                                        <div class="col md-6 pb-3">
                                            <div class="form-group poppins_regular">
                                                <label for="name-input"> Nombre</label>
                                                <input class="form-control form_class" id="name-input" wire:model.live="name" type="text" name="name" required="required"/>
                                                <div class="h3 badge badge-success">@error('name') {{ $message }} @enderror</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col md-6 pb-3">
                                            <div class="form-group poppins_regular">
                                                <label for="guest-input">Número de personas confirmadas</label>
                                                <select class="form-control form_class" id="guest-input" wire:model="people_confirmed" name="guest">
                                                    <option value="1">Uno</option>
                                                    <option value="2">Dos</option>
                                                    <option value="3">Tres</option>
                                                    <option value="4">Cuatro</option>
                                                    <option value="5">Cinco o más</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col">
                                            <div class="form-group poppins_regular">
                                                <label for="message-input">Nombres de quienes asisten</label>
                                                <textarea class="form-control" id="message-input" name="message" wire:model="people_asist" rows="4"></textarea>
                                                <div class="text-danger">@error('people_asist') {{ $message }} @enderror</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col text-center poppins_regular">
                                            <button class="btn btn-primary btn-submit " type="button" wire:click="saveData">Enviar</button>
                                            <div wire:loading >
                                                {{__('cargando ...')}}
                                           </div>
                                        </div>
                                    </div>
                                </form>
                                <div class=" mt-2" >
                                    <div class="row text-center poppins_regular" >
                                        <h4 id="span_text_saved"><strong><span class="badge badge-success">{{$this->message_succes}}</span></strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="ww-footer bg-light">
                <div class="container text-center py-4 poppins_regular">
                    <p class="my-0">&copy; Wonderful Party's. All rights reserved. </p>
                    <p class="mb-0"> Diseño y Creación por • <a class="credit" href="https://ederportfolio.c1.is/" target="_blank">Ing. Eder Escobedo • Cotizaciones al 7751905138 • Bodas / XV Años / Bautizos y Más</a></p>
                </div>
                <div class="container text-center py-4 d-none">
                    <audio id="background-music" controls muted autoplay loop>
                        <source src="{{ asset('music/vals_amor.mp3') }}" type="audio/mp3">
                    </audio>
                </div>
            </div>
            <div class="pt-5" id="rsvp">
            </div>
        </div>
    </div>
    <footer></footer>
    <div id="mute-icon"  onclick="toggleMute()">
        <img id="mute-img" src="{{ asset('music/mute.svg') }}" alt="Mute/Unmute Icon" style="max-width: 55px;">
    </div>

