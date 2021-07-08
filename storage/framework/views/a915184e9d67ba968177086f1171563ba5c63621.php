<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <main class="contMain">
        <div class="contLogin">
            <!-- Panel Login -->
            <div class="panelPrimario">
                <header class="tituloLogin">
                    <h2 class="tam36 txtB txtCenter">Registrar Empresa</h2>
                </header>

                <form method="POST" action="<?php echo e(route('register')); ?>" class="formLogin">

                    <?php echo csrf_field(); ?>
                    <?php echo $__env->make('flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- Datos Comerciales -->
                    <br>
                    <h2 class="tam24 txtB">Datos comerciales</h2><br>
                    <!-- Nombre -->
                    <div class="form-login">
                        <label for="name" class="etiquetas">Nombre</label>
                        <input id="name" type="text" class="frm100 typeLinea lineaO" name="name" :value="old('name')"
                            required autofocus autocomplete="name">
                        <?php if($errors->has('name')): ?>
                        <strong>
                            <p class="txtRojo tam14">Este nombre ya existe.</p>
                        </strong>
                        <?php endif; ?>
                    </div>

                    <!-- Ubicación -->
                    <div class="form-login">
                        <label for="ubicacion" class="etiquetas">Ubicación</label>
                        <input id="ubicacion" type="text" class="frm100 typeLinea lineaO" name="ubicacion" required
                            :value="old('ubicacion')">
                    </div>
                    <!-- Telefono -->
                    <div class="form-login">
                        <label for="telefono" class="etiquetas">Teléfono</label>
                        <input id="telefono" type="number" class="frm100 typeLinea lineaO" name="telefono" required
                            :value="old('telefono')">
                    </div>

                    <!-- Datos de usuario -->
                    <br>
                    <h2 class="tam24 txtB">Datos del usuario</h2><br>
                    <div class="form-login">
                        <label for="nombreUser" class="etiquetas">Nombre</label>
                        <input id="nombreUser" type="text" class="frm100 typeLinea lineaO" name="nombreUser" required
                            :value="old('nombreUser')">
                    </div>
                    <!-- CodigoPostal -->
                    <div class="form-login">
                        <label for="telUser" class="etiquetas">Teléfono</label>
                        <input id="telUser" type="number" class="frm100 typeLinea lineaO" name="telUser" required
                            :value="old('telUser')">
                    </div>
                    <!-- Correo Electronico -->
                    <div class="form-login">
                        <label for="email" class="etiquetas">Correo Electrónico</label>
                        <input id="email" type="email" class="frm100 typeLinea lineaO" name="email" required>
                        <?php if($errors->has('email')): ?>
                        <strong>
                            <p class="txtRojo tam14">Este correo electrónico ya existe.</p>
                        </strong>
                        <?php endif; ?>
                    </div>
                    <!-- Contraseña -->
                    <div class="form-login">
                        <label for="password" class="etiquetas">Contraseña</label>
                        <input id="password" type="password" class="frm100 typeLinea lineaO" name="password" required
                            autocomplete="new-password">
                        <?php if($errors->has('email')): ?>
                        <strong>
                            <p class="txtRojo tam14">Las contraseñas no coinciden.</p>
                        </strong>
                        <?php endif; ?>
                    </div>

                    <div class="form-login">
                        <label for="password_confirmation" class="etiquetas">Confirmar Contraseña</label>
                        <input id="password_confirmation" type="password" class="frm100 typeLinea lineaO" placeholder=""
                            name="password_confirmation" required>
                    </div>

                    <?php if(Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature()): ?>
                    <div class="mt-4">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.label','data' => ['for' => 'terms']]); ?>
<?php $component->withName('jet-label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['for' => 'terms']); ?>
                            <div class="flex items-center">
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['name' => 'terms','id' => 'terms']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'terms','id' => 'terms']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                                <div class="ml-2">
                                    <?php echo __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of
                                        Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'"
                                        class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy
                                        Policy').'</a>',
                                    ]); ?>

                                </div>
                            </div>
                         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <div class="flex items-center justify-end mt-4">

                        <!-- Crear Cuenta -->
                        <button type="submit" name="registrar" class="btnAceptarLogin ml-4">Crear Cuenta</button>
                    </div>
                </form>
                <footer class="footerLogin">

                </footer>
            </div>

            <!-- Panel Secundario -->
            <div class="panelSecundario">
                <div class="divCenter">
                    <p class="txtW tam24 marT50">Prueba gratuita por 7 días.</p>
                </div>
                <div class="logomerca">
                    <img src="<?php echo e(asset('iconos/CanacoOnline.png')); ?>" alt="" style="width:100%;">
                </div>
                <div class="descripcionSecundario">
                    <p>Comercio Local, Experiencia Total</p>
                </div>
                <div class="logocanaco">
                    <img src="<?php echo e(asset('images/CANACO/IconoCanaco.png')); ?>" alt="">
                </div>

            </div>
        </div>
    </main>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/auth/register.blade.php ENDPATH**/ ?>