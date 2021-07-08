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
                <h2 class="txtB tam36">Login</h2>
            </header>


            <form method="POST" action="<?php echo e(route('login')); ?>" class="formLogin w-9/12">
                <?php echo csrf_field(); ?>
                <div class="flex justify-start items-center w-full">
                    <i class="fas fa-envelope iconInput"></i>
                    <input id="email" type="text" class="w-full typeLinea lineaO padL30" placeholder="Email"
                        name="email" required autofocus>
                        
                </div>

                <div class="flex justify-start items-center w-full">
                    <i class="fas fa-lock iconInput"></i>
                    <input id="password" type="password" class="w-full typeLinea lineaO padL30" placeholder="Contraseña"
                        name="password" required autocomplete="current-password">
                </div>
                
                <div class="flex justify-center"> 
                    <?php if($errors->has('email')): ?>
                        <span class="txtRojo">
                            <strong>El email y/o la contraseña son incorrectos.</strong>
                        </span>
                    <?php endif; ?> 
                </div>

                <button type="sumbit" class="btnAceptarLogin">Aceptar</button>
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.checkbox','data' => ['id' => 'remember_me','name' => 'remember']]); ?>
<?php $component->withName('jet-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'remember_me','name' => 'remember']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                        <span class="ml-2 text-sm text-gray-600"><?php echo e(__('Remember me')); ?></span>
                    </label>
                </div>
               
            </form>

            <footer class="footerLogin">
                <?php if(Route::has('password.request')): ?>
                <a class="text-sm txtO" href="<?php echo e(route('password.request')); ?>">
                    <?php echo e(__('Olvidaste tu contraseña?')); ?>

                </a>
                <?php endif; ?>
                <a class="textFooter-Login" href="<?php echo e(route('register')); ?>">Registrarse</a>
            </footer>
        </div>

        <!-- Panel Secundario -->
        <div class="panelSecundario ">
            <div class="logomerca">
                <img src="<?php echo e(asset('iconos/CanacoOnline.png')); ?>" alt="logo" style="width:100%;">
            </div>
            <div class="descripcionSecundario">
                <p>Comercio Local, Experiencia Total</p>
            </div>
            <div class="redes">
                <a href=""><i class="fab fa-facebook"></i></a>
                <a href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</main>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/auth/login.blade.php ENDPATH**/ ?>