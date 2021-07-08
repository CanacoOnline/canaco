<x-app-layout>
    <main class="divCenter">
        <!--image slider start-->
        <div class="img-slider">
            <div class="slide active">
                <a href="#">
                    <img src="images\banner\1.png">
                </a>
            </div>

            <div class="slide">
                <a href="#">
                    <img src="images\banner\2.png">
                </a>
            </div>

            <div class="slide ">
                <a href="#">
                    <img
                        src="images\banner\1.png">
                </a>
            </div>

            <div class=" slide">
                <a href=" #">
                    <img src="images\banner\2.png">
                </a>
            </div>

            <div class="navigation">
                <div class="btn active"></div>
                <div class="btn"></div>
                <div class="btn"></div>
                <div class="btn"></div>
            </div>
        </div>
        <!--image slider end-->
    </main>

    @include('destacado.topEmpresas')
    @include('destacado.topProductos')
    @include('destacado.topServicios')
    @include('destacado.topPromociones')
    @include('destacado.topCupones')
    
    </div>
    <h2 class="tamMediano txtGray">Patrocinadores</h2>
    <div class='sliderPatro marB20' id="sliderPatro">
        <img src="images\LogosSueltos\DOS NACIONES.jpeg" />
        <img src="images\LogosSueltos\logo la sonora de nog.jpeg" />
        <img src="images\LogosSueltos\DOS NACIONES.jpeg" />
        <img src="images\LogosSueltos\logo la sonora de nog.jpeg" />
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/side.js') }}"></script>
    <script src="{{ asset('js/autoside.js') }}"></script>

</x-app-layout>