<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <main class="marTB10">
        <h2 class="tamMediano txtGray">Empresas participantes</h2>
        <div class="divCenter  flex wrap gap10">
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/canaco">
                        <img class="maxH225" src="<?php echo e(asset('images/CANACO/WhatsAppImage2021-01-15at12.06.03PM.jpeg')); ?>"
                            alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/ansautos">
                        <img class="maxH225" src="<?php echo e(asset('images\LogosSueltos\AutosNacionalesDeSonora.jpeg')); ?>"
                            alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/pasteleria">
                        <img class="maxH225" src="<?php echo e(asset('images/Pasteleria/LOGO.jpg')); ?>" alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/mirsa">
                        <img class="maxH225" src="<?php echo e(asset('images/mirsa/img10.jpg')); ?>" alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/marques">
                        <img class="maxH225" src="<?php echo e(asset('images/Marques/LogoMarques.png')); ?>" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="/intactics">
                        <img class="maxH225" src="<?php echo e(asset('images\intactics\logoIntactics.jpeg')); ?>" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="<?php echo e(asset('images/Bura/logobura.jpeg')); ?>" alt="" style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225"
                            src="<?php echo e(asset('images\Aseguradoras\Axa\WhatsApp Image 2021-01-22 at 6.03.31 PM.jpeg')); ?>"
                            alt="" style="width:100%">
                    </a>
                </div>
            </div>

            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="<?php echo e(asset('images\Aseguradoras\Nogales Insurance\logo.jpg')); ?>" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="<?php echo e(asset('images/Reyla.png')); ?>" alt="" style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="<?php echo e(asset('images\LogosSueltos\cempa.jpeg')); ?>" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center">
                    <a href="">
                        <img class="maxH225" src="<?php echo e(asset('images\LogosSueltos\electronica jaramillo.JPG')); ?>" alt=""
                            style="width:100%">
                    </a>
                </div>
            </div>
            <?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center justify-content-center">
                    <?php if($usuarios->profile_photo_path!=null): ?>
                    <a href="<?php echo e(route('getUserDetail', ['user_id' => $usuarios->id])); ?>"><img
                            src="/storage/<?php echo e($usuarios->profile_photo_path); ?>" alt="" style="width:100%"
                            class="maxH225"></a>
                    <?php else: ?>
                    <a href="<?php echo e(route('getUserDetail', ['user_id' => $usuarios->id])); ?>"><img
                            src="<?php echo e(asset('images\avatar.png')); ?>" alt="" style="width:100%" class="maxH225"></a>
                    <?php endif; ?>
                   
                </div>
                <p class="txtCenter txtB tam14"><?php echo e($usuarios->name); ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </main>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/empresas/empresas.blade.php ENDPATH**/ ?>