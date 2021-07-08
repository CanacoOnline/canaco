<main class="marTB10">
    <h2 class="tamMediano txtGray">Empresas más visitadas</h2>
    <div class="rankingPerfil rel gap10 ">
        <?php $__currentLoopData = $usuario; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-white h250 borde5">
            <div class="panelNormal borde5 h225 lineaBot flex align-items-center justify-content-center">
                <?php if($aux->profile_photo_path!=null): ?>
                <a href="<?php echo e(route('getUserDetail', ['user_id' => $aux->id])); ?>"><img
                        src="/storage/<?php echo e($aux->profile_photo_path); ?>" alt="" style="width:100%" class="maxH225"></a>
                <?php else: ?>
                <a href="<?php echo e(route('getUserDetail', ['user_id' => $aux->id])); ?>"><img
                        src="<?php echo e(asset('images\avatar.png')); ?>" alt="" style="width:100%" class="maxH225"></a>
                <?php endif; ?>

            </div>
            <p class="txtCenter txtB tam14"><?php echo e($aux->name); ?></p>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</main><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/destacado/topEmpresas.blade.php ENDPATH**/ ?>