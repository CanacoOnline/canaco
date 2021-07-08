@section('title', 'Editar Perfil')
<x-jet-form-section submit="updateProfileInformation">

    <x-slot name="title">
        {{ __('Información del perfil') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Actualice la información de perfil y la dirección de correo electrónico de su cuenta.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->

        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
            <!-- Profile Photo File Input -->
            <input type="file" class="hidden" wire:model="photo" x-ref="photo" x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

            <x-jet-label for="photo" value="{{ __('Foto de perfil') }}" class="txtCenter txtB tam36" />

            <!-- Current Profile Photo -->
            <div class="mt-2" x-show="! photoPreview">

                @if (Auth::user()->profile_photo_path)
                <img class="avatarNormal  rounded-full object-cover divCenter"
                    src="/storage/{{Auth::user()->profile_photo_path}}" alt="">
                @else
                <img class="avatarNormal rounded-full object-cover divCenter" src="{{Auth::user()->profile_photo_url}}"
                    alt="">
                @endif
            </div>

            <!-- New Profile Photo Preview -->
            <div class="mt-2 divCenter" x-show="photoPreview">
                <span class="block rounded-full w-40 h-40"
                    x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                </span>
            </div>

            <x-jet-secondary-button class="mt-2 mr-2 divCenter" type="button" x-on:click.prevent="$refs.photo.click()">
                {{ __('Seleccionar nueva foto') }}
            </x-jet-secondary-button>

            @if ($this->user->profile_photo_path)
            <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                {{ __('Remover foto') }}
            </x-jet-secondary-button>
            @endif

            <x-jet-input-error for="photo" class="mt-2" />
        </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" class="txtB tam18" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mar5 frm100 typeLinea lineaO outline-none"
                wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" class="txtB tam18" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mar5 frm100 typeLinea lineaO focus:outline-none"
                wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- Ubicación -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ubicacion" class="txtB tam18" value="{{ __('Ubicación') }}" />
            <x-jet-input id="ubicacion" type="ubicacion" class="mar5 frm100 typeLinea lineaO focus:outline-none"
                wire:model.defer="state.ubicacion" />
            <x-jet-input-error for="ubicacion" class="mt-2" />
        </div>

        <!-- Teléfono -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="telefono" class="txtB tam18" value="{{ __('Teléfono') }}" />
            <x-jet-input id="telefono" type="telefono" class="mar5 frm100 typeLinea lineaO focus:outline-none"
                wire:model.defer="state.telefono" />
            <x-jet-input-error for="telefono" class="mt-2" />
        </div>

        <!-- horario -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="horario" class="txtB tam18" value="{{ __('Horario') }}" />
            <x-jet-input id="horario" type="horario" class="mar5 frm100 typeLinea lineaO focus:outline-none"
                wire:model.defer="state.horario" />
            <x-jet-input-error for="horario" class="mt-2" />
        </div>

        <!-- Descripcion -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="descripcion" class="txtB tam18" value="{{ __('Sobre Nosotros') }}" />
            <textarea class="mar5 frm100 typeLinea lineaO focus:outline-none resize-none border" name="descripcion" maxlength="150"
                id="descripcion" wire:model.defer="state.descripcion" cols="30" rows="4"></textarea>
            <x-jet-input-error for="descripcion" class="mt-2" />
        </div>
        @include('profile.social')
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Guardado.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Actualizar') }}
        </x-jet-button>
    </x-slot>


</x-jet-form-section>