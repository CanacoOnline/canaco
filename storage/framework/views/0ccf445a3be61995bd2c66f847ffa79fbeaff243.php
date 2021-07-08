<?php if($edit->tipo=='Producto'): ?>
    <?php echo $__env->make('edit.producto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($edit->tipo=='Servicio'): ?>
    <?php echo $__env->make('edit.servicio', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($edit->tipo=='Promocion'): ?>
    <?php echo $__env->make('edit.promocion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php elseif($edit->tipo=='Cupon'): ?>
    <?php echo $__env->make('edit.cupon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/edit/editar.blade.php ENDPATH**/ ?>