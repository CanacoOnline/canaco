<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

<main class="contProductsMain">
        <div class="leftPanel">
            <div>
                <h1>Promociones</h1><br><br>
            </div>
            <div class="orden">
                <h1>Especial</h1>
                <ul class="listaCate">
                    <li><a class="hvrUnderline" href="/promociones">Promociones</a></li>
                    <li><a class="hvrUnderline" href="/Cupones">Cupones</a></li>
                </ul>
            </div>
            <div class="cate">
                <h1>Categorías</h1>
                <div class="categorias">
                    <ul class="listaCate">
                        <li><a class="hvrUnderline" href="#">Llanteras</a></li>
                        <li><a class="hvrUnderline" href="#">Pintura/Pisos</a></li>
                        <li><a class="hvrUnderline" href="#">Tortillerias</a></li>
                        <li><a class="hvrUnderline" href="#">Panaderias</a></li>
                        <li><a class="hvrUnderline" href="#">Pastelerias/Miscelaneas</a></li>
                        <li><a class="hvrUnderline" href="#">Mercados/Abarrotes</a></li>
                        <li><a class="hvrUnderline" href="#">Refaccionarias</a></li>
                        <li><a class="hvrUnderline" href="#">Ropa/Regalos</a></li>
                        <li><a class="hvrUnderline" href="#">Farmacias</a></li>
                        <li><a class="hvrUnderline" href="#">Ferreterias</a></li>
                        <li><a class="hvrUnderline" href="#">Tiendas Departamentales</a></li>
                        <li><a class="hvrUnderline" href="#">Dentistas/Salud</a></li>
                        <li><a class="hvrUnderline" href="#">Laboratorios</a></li>
                        <li><a class="hvrUnderline" href="#">Opticas</a></li>
                        <li><a class="hvrUnderline" href="#">Veterinarias</a></li>
                        <li><a class="hvrUnderline" href="#">Automotriz</a></li>
                        <li><a class="hvrUnderline" href="#">Gasolineras</a></li>
                        <li><a class="hvrUnderline" href="#">Transportes y Agencias Aduanales</a></li>
                        <li><a class="hvrUnderline" href="#">Agencias Seguridad</a></li>
                        <li><a class="hvrUnderline" href="#">Esteticas y Barberias</a></li>
                        <li><a class="hvrUnderline" href="#">Despachos/Consultoria</a></li>
                        <li><a class="hvrUnderline" href="#">Bancos</a></li>
                        <li><a class="hvrUnderline" href="#">Paqueteria</a></li>
                        <li><a class="hvrUnderline" href="#">Funerarias</a></li>
                        <li><a class="hvrUnderline" href="#">Gym's</a></li>
                        <li><a class="hvrUnderline" href="#">Educacion</a></li>
                        <li><a class="hvrUnderline" href="#">Hoteles</a></li>
                        <li><a class="hvrUnderline" href="#">Casinos/Recreacion</a></li>
                        <li><a class="hvrUnderline" href="#">Restaurantes</a></li>
                        <li><a class="hvrUnderline" href="#">Maquiladoras</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class=" flex wrap gap10 maxH188 justify-content-center">
        <?php $__currentLoopData = $cupones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($cupon->tipo=="Cupon" && $cupon->user->rol_id==2): ?> 
            <div class="panelCupon rel flex">
                <!--    Imagen  -->
                <?php if(Storage::disk('images')->has($cupon->image)): ?>
                <div class="contCenter frm100">
                    <a href="<?php echo e(route('detailProducto', ['producto_id' => $cupon->id])); ?>">
                        <img class="wFull imgAlign boxShadow" src="<?php echo e(url('/miniatura/'.$cupon->image)); ?>" />
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="dir">
                <?php echo e($cupones->links()); ?>

            </div>  
        </div>

    </main>


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/navMenu/cupon.blade.php ENDPATH**/ ?>