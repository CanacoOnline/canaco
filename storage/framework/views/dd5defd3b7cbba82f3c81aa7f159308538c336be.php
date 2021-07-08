<main class="w100 bg-white marTB10 mainPromo">
    <div class="flex align-items-start leftPromo rel">
        <div class="mar10 pad20 rel">
            <h1 class="txtB tam36 bold600"><?php echo e($producto->title); ?></h1>
            <?php if($producto->precio!=null): ?>
            <h3 class="bold200 tam18">$ <?php echo e($producto->precio); ?></h3>
            <?php endif; ?>
            <?php if($producto->description!=null): ?>
            <p class="marT20 tam14"><?php echo e($producto->description); ?></p>
            <?php endif; ?>
            <div class="tam24 lineaO borde pad10 marT30 grid gap10">
                <p>Datos de la empresa</p>
                <?php if($producto->user->ubicacion!==null): ?>
                <p class="tam18"><i class="fas fa-map-marker-alt txtO"></i> <?php echo e($producto->user->ubicacion); ?></p>
                <?php endif; ?>
                <?php if($producto->user->telefono!==null): ?>
                <a href="tel:+<?php echo e($producto->user->telefono); ?>"><p class="tam18"><i class="fas fa-phone-square-alt txtO"></i> <?php echo e($producto->user->telefono); ?></p></a>
                <?php endif; ?>
                <?php if($producto->user->horario!==null): ?>
                <p class="tam18"><i class="fas fa-clock txtO"></i> <?php echo e($producto->user->horario); ?></p>
                <?php endif; ?>
                <div class="divCenter">
                    <?php if($producto->user->pagweb!==null): ?>
                    <a href="<?php echo e($producto->user->pagweb); ?>" target="_blank"><i
                            class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                    <?php endif; ?>

                    <?php if($producto->user->facebook!==null): ?>
                    <a href="<?php echo e($producto->user->facebook); ?>" target="_blank"><i
                            class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                    <?php endif; ?>

                    <?php if($producto->user->instagram!==null): ?>
                    <a href="<?php echo e($producto->user->instagram); ?>" target="_blank"><i
                            class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                    <?php endif; ?>

                    <?php if($producto->user->instagram!==null): ?>
                    <a href="<?php echo e($producto->user->twitter); ?>" target="_blank"><i
                            class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="flex align-items-center rightPromo w70 pad10">
        <img class="w100" src="<?php echo e(url('/miniatura/'.$producto->image)); ?>">
    </div>
</main><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/archivos/detailPromocion.blade.php ENDPATH**/ ?>