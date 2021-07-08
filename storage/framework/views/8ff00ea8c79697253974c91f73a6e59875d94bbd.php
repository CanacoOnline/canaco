<h2 class="tamMediano txtGray marT10">Cupones más visitados</h2>
<main class="w100 txtCenter">
    <div class="rankingProducts gap10 rel txtCenter">
        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($aux->tipo=='Cupon'): ?>
        <div class="bg-white panelNormal rel bordeTL minW225">
            <?php if(Storage::disk('images')->has($aux->image)): ?>
            <div class=" lineaBotGris contCenter frm100">
                <a href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>" class="h225 contCenter">
                    <img class="wFull imgAlign maxH225 " src="<?php echo e(url('/miniatura/'.$aux->image)); ?>" />
                </a>
            </div>
            <?php endif; ?>
            <!--    Info    -->
            <h3 class="txtCenter frm100">
                <a class="txtB bold600" href=""><?php echo e($aux->title); ?></a>
            </h3>

            <p class="pad10 tamNormal marB40"><?php echo e($aux->description); ?></p>

            <div class="panelGuardar flex lineaTopGris">
                <a href="<?php echo e(route('getUserDetail', ['user_id' => $aux->user->id])); ?>" class="wIcon divCenter">
                    <i class="far fa-user txtB hvrOrange"></i>
                </a>
                <div class="wMore divCenterJA bg-orange hvrBorde txtW">
                    <a href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>" class="padLR30 ">Ver más</a>
                </div>
                <a href="" class="wIcon divCenter">
                    <i class="far fa-heart txtB hvrOrange"></i>
                </a>
            </div>
            <?php if($aux->precio!==null): ?>
            <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">$<?php echo e($aux->precio); ?></p>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</main><?php /**PATH /home2/canaconl/canaco/resources/views/destacado/topCupones.blade.php ENDPATH**/ ?>