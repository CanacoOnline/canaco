<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <h2 class="txtB tam36 txtCenter marTB10 bold800">CONOCENOS</h2>
    <main class="flex wrap divCenter marTB10 gap10">
        <div class="flex wrap divCenter gap10 align-items-center">
            <video width="400" controls class="frm50">
                <source src="<?php echo e(asset('videos/CANACONLINE VIDEO.mp4')); ?>" type="video/mp4">
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
                <source src="<?php echo e(asset('videos/PRESENTACION CANACO.mp4')); ?>" type="video/mp4">
                Your browser does not support HTML video.
            </video>

        </div>
    </main>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/paginas/conocenos.blade.php ENDPATH**/ ?>