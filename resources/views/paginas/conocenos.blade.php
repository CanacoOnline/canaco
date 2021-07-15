<x-app-layout>
    <h2 class="txtB tam36 txtCenter marTB10 bold800">CONOCENOS</h2>
    <main class="flex wrap divCenter marTB10 gap10">
        <div class="flex wrap divCenter gap10 align-items-center">
            <video width="400" controls class="frm50">
                <source src="{{ asset('videos/CANACONLINE VIDEO.mp4') }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>
            <p style="text-align: justify;" class="frm50">A través de nuestra Cámara las empresas pueden contar con una
                comunicación confiable y representativa ante distintas autoridades gubernamentales y privadas; la
                defensa y promoción de los intereses del comercio, la industria y los servicios; así como capacitaciones
                constantes, bolsa de trabajo y publicidad a su empresa.
            </p>
        </div>
        <div class="flex wrap divCenter gap10 align-items-center">
            <p style="text-align: justify;" class="frm50 ">CANACO SERVyTUR Nogales es un organismo no gubernamental y
                representativo de las Empresas de Comercio, Servicios y Turismo establecidos en la Ciudad de Nogales,
                Sonora. Donde nuestro principal objetivo es apoyar a las empresas locales, fomentando su crecimiento
                económico, desarrollo e innovación.</p>
            <video width="400" controls class="frm50 ">
                <source src="{{ asset('videos/PRESENTACION CANACO.mp4') }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>

        </div>
    </main>


</x-app-layout>