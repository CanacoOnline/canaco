<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!-- Icono -->
    <link rel="icon" href="<?php echo e(asset('iconos/canaco.png')); ?>">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Styles -->
    <?php echo \Livewire\Livewire::styles(); ?>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link href="<?php echo e(asset('css/buraStyles.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/contacto.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/header.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/contPerfil.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/loginregistro.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/contImageProductos.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/imageHorizontal.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/panelProductos.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
</head>

<body class="font-sans antialiased">
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

    <div class="contenedor">
        <header class="header">
            <div class="iconMenu">
                <input type="checkbox" id="menu-bar">
                <label for="menu-bar"><i class="fas fa-bars "></i></label>

                <!-- Authentication Links -->
                <?php if(Auth::guest()): ?>
                <nav class="menu">
                    <li class="pad5"><a class="hvrUnderline txtW" href="<?php echo e(route('login')); ?>">Ingresar</a></li>
                    <li class="pad5"><a class="hvrUnderline txtW" href="<?php echo e(route('register')); ?>">Registrarse</a></li>
                    <li class="pad5"><a class="hvrUnderline txtW" href="/conocenos">Conocenos</a></li>
                </nav>
                <?php else: ?>
                <nav class="menu contCenter">
                    <?php if(Auth::user()->rol_id == 1): ?>
                    <li class="pad5"><a class="hvrUnderline txtW" href="/admin"><?php echo e(Auth::user()->name); ?></a></li>
                    <?php endif; ?>

                    <?php if(Auth::user()->rol_id == 2): ?>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown','data' => ['allign' => 'right','width' => '48']]); ?>
<?php $component->withName('jet-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['allign' => 'right','width' => '48']); ?>
                         <?php $__env->slot('trigger'); ?> 
                            <button type="button" class="focus:outline-none transition divCenter bgNone">
                                <?php if( Auth::user()->profile_photo_path!=null): ?>
                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="/storage/<?php echo e(Auth::user()->profile_photo_path); ?>"
                                    alt="<?php echo e(Auth::user()->name); ?>" />
                                <?php else: ?>
                                <img class="h-12 w-12 rounded-full object-cover"
                                    src="<?php echo e(asset('images\avatar.png')); ?>"
                                    alt="<?php echo e(Auth::user()->name); ?>" />
                                <?php endif; ?>
                            </button>

                            <p class="txtW tam14 hand "><?php echo e(Auth::user()->name); ?></p>

                         <?php $__env->endSlot(); ?>

                         <?php $__env->slot('content'); ?> 
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                <?php echo e(__('Administrar Cuenta')); ?>

                            </div>

                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('empresa')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('empresa')).'']); ?>
                                <i class="fas fa-user txtB"></i><?php echo e(__(' Perfil')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => '/user/profile']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/user/profile']); ?>
                                <i class="fas fa-user-edit"></i><?php echo e(__(' Editar Perfil')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => '/subirProducto']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/subirProducto']); ?>
                                <i class="fas fa-upload txtB"></i><?php echo e(__(' Subir Producto')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                            <?php if(Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('api-tokens.index')).'']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('api-tokens.index')).'']); ?>
                                <?php echo e(__('API Tokens')); ?>

                             <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php endif; ?>
                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>

                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dropdown-link','data' => ['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                            this.closest(\'form\').submit();']]); ?>
<?php $component->withName('jet-dropdown-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => ''.e(route('logout')).'','onclick' => 'event.preventDefault();
                                                            this.closest(\'form\').submit();']); ?>
                                    <i class="fas fa-sign-out-alt txtB"></i><?php echo e(__(' Cerrar sesión')); ?>

                                 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            </form>
                         <?php $__env->endSlot(); ?>
                     <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>

                    <?php endif; ?>
                    <?php if(Auth::user()->rol_id == 3): ?>
                    <li class="pad5"><a class="hvrUnderline txtW" href="/consumidor"><?php echo e(Auth::user()->name); ?></a></li>
                    <?php endif; ?>
                </nav>
                <?php endif; ?>



            </div>

            <div class="logoMerca">
                <a class="navbar-brand" href="/">
                    <img class="imgMerca" src="<?php echo e(asset('iconos/CanacoOnline.png')); ?>" alt="logo"></a>
            </div>
            <div class="logoCanaco">
                <a class="navbar-brand" href="https://canaconogales.com.mx/contacto/" target="_blank">
                    <img class="imgCanaco" src="<?php echo e(asset('iconos/IconoCanaco.png')); ?>" alt="logo"></a>
            </div>

            <form class="buscar" role="search" action="<?php echo e(url('/search')); ?>">
                <span class="buscador"><i class="fa fa-search"></i>
                    <input class="inputBuscar" type="search" id="search" placeholder="Buscar..." name="search" />
                </span>
            </form>

            <ul class="nav">
                <div class="categorias">
                    <!-- Comercio -->
                    
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/empresas-participantes">Empresas
                            participantes</a></li>
                         
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/promociones">Promociones</a></li>
                    <li class="pad5"><a class="hvrUnderline tamNormal" href="/cupones">Cupones</a></li>
                </div>
            </ul>

        </header>
        <div class="hehe"></div>
    </div>

    <!-- Page Content -->
    <main class="full hojaNormal">
        <?php echo e($slot); ?>

    </main>

    <?php echo $__env->make('destacado.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('modals'); ?>

    <?php echo \Livewire\Livewire::scripts(); ?>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/8f25d8b894.js" crossorigin="anonymous"></script>
    <script src="<?php echo e(asset('js/buscador.js')); ?>"></script>
    <script src="<?php echo e(asset('js/preview.js')); ?>"></script>
    <script src="<?php echo e(asset('js/images.js')); ?>"></script>
    <script src="<?php echo e(asset('js/imgGallery.js')); ?>"></script>

</body>

</html><?php /**PATH /home2/canaconl/canaco/resources/views/layouts/app.blade.php ENDPATH**/ ?>