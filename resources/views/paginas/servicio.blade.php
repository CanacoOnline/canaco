
@section('title', 'Contacto')
<x-app-layout>
<main class="main">

    <div class="imgFondo">
        <img src="{{ asset('images/CANACO/WhatsAppImage2021-01-15at12.06.03PM.jpeg') }}" alt="">
    </div>     
    <form class="formContacto" action="">   
        
        <h2 class="tituloContacto">CONTACTO</h2>
        <a href="https://canaconogales.com.mx/contacto/" target="_blank"><p class="texto"><i class="fas fa-desktop iconTam"></i>canaconogales.com.mx</p></a>
        <p class="texto"><i class="fas fa-envelope iconTam"></i> director@canaconogales.com.mx</p>
        <p class="texto"><i class="fab fa-whatsapp iconTam"></i> (631)314-5535 y (631)314-6470</p>
        <p class="texto"><i class="fas fa-map-marked-alt iconTam"></i>Blvd. El Greco No.26 Local 23, Plaza Kalitea, Col. El Greco</p>
        <br><br>
    </form> 
</main>
 

</x-app-layout>