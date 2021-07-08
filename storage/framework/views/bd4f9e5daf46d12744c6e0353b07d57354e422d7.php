<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
                    <img src="images\banner\1.png">
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

    <?php echo $__env->make('destacado.topEmpresas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('destacado.topProductos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('destacado.topServicios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('destacado.topPromociones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('destacado.topCupones', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
    <h2 class="tamMediano txtGray">Patrocinadores</h2>
    <div class='sliderPatro marB20' id="sliderPatro">
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\DOS NACIONES.jpeg" class="wFull"/>
        </div>
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\logo la sonora de nog.jpeg"  class="wFull"/>
        </div>
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\graficos.png"  class="wFull"/>
        </div>
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\DOS NACIONES.jpeg"  class="wFull"/>
        </div>
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\logo la sonora de nog.jpeg"  class="wFull"/>
        </div>
        <div class="bg-white sostener">
            <img src="images\LogosSueltos\graficos.png"  class="wFull"/>
        </div>

    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/side.js')); ?>"></script>
    <script src="<?php echo e(asset('js/autoside.js')); ?>"></script>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/welcome.blade.php ENDPATH**/ ?>