
<?php $__env->startSection('title', 'Subir Producto'); ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<style>
    .frmOpciones{
        position: relative;
        width: 600px;
        height: auto;
        display: flex;
        flex-wrap: wrap;
    }
    .panelOpciones{
        flex:40%;
        margin: 10px;
        background: #fff;
        border-radius: 10px;
        
        box-shadow: 2px 2px 5px 1px rgba(0, 0, 0, 0.3);
    }
    .panelOpciones h2{
        color:#18455B;
        text-align: center;
        margin:10px;
    }
</style>
    <main class="contMain">
        <div class="frmOpciones">
            <div class="panelOpciones">
                <a href="<?php echo e(route('crearProducto')); ?>"><img src="<?php echo e(asset('iconos/productos.png')); ?>" style="width: 100%;"/></a>
                <h2>Productos</h2>
                
            </div>
            <div class="panelOpciones">
                <a href="<?php echo e(route('crearServicio')); ?>"><img src="<?php echo e(asset('iconos/servicios.png')); ?>" style="width: 100%;"/></a>
                <h2>Servicios</h2>
            </div>
            <div class="panelOpciones">
                <a href="<?php echo e(route('crearPromocion')); ?>"><img src="<?php echo e(asset('iconos/promo.png')); ?>" style="width: 100%;"/></a>
                <h2>Promociones</h2>
            </div>
            <div class="panelOpciones">
                <a href="<?php echo e(route('crearCupon')); ?>"><img src="<?php echo e(asset('iconos/cupon.png')); ?>" style="width: 100%;"/></a>
                <h2>Cupones</h2>
            </div>
        </div>
    </main>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home2/canaconl/canaco/resources/views/archivos/opciones.blade.php ENDPATH**/ ?>