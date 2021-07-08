<!-- Redes Sociales -->
<div class="col-span-6 sm:col-span-4">
    <h2 class="txtB txtCenter marTB10 tam36">Redes Sociales</h2>
</div>
<!-- Pagina Web -->
<div class="col-span-6 sm:col-span-4">
    <label for="name" class="mar5 txtB tam18 ">Pagina Web</label>
    <x-jet-input id="pagweb" type="text" class="mar5 frm100 typeLinea lineaO " name="pagweb"
        wire:model.defer="state.pagweb" value="{{Auth::user()->pagweb}}" />
</div>

<!-- Whatsapp -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Whatsapp</label>
    <x-jet-input type="text" class="mar5 frm100 typeLinea lineaO" name="whatsapp" wire:model.defer="state.whatsapp"
        value="{{Auth::user()->whatsapp}}" />
</div>
<!-- Facebook -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Facebook</label>
    <x-jet-input type="text" class="mar5 frm100 typeLinea lineaO" name="facebook" wire:model.defer="state.facebook"
        value="{{Auth::user()->facebook}}" />
</div>
<!-- Instagram -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Instagram</label>
    <x-jet-input type="text" class="mar5 frm100 typeLinea lineaO" name="instagram" wire:model.defer="state.instagram"
        value="{{Auth::user()->instagram}}" />
</div>
<!-- Twitter -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Twitter</label>
    <x-jet-input type="text" class="mar5 frm100 typeLinea lineaO" name="twitter" wire:model.defer="state.twitter"
        value="{{Auth::user()->twitter}}" />
</div>

<div class="col-span-6 sm:col-span-4">
    <br><br><br>
    <p class="tam14 txtCenter">Nota: para que los links a sus páginas funcionen deben contar con
        "https://" <br>Ejemplo: https://www.facebook.com/CanaconlineNogales</p>
</div>