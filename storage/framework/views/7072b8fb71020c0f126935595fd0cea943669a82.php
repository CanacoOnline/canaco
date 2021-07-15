<?php $__env->startSection('title', $producto['title']); ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if($producto->tipo=='Promocion'): ?>
    <?php echo $__env->make('archivos.detailPromocion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
    <main class="layoutDetalle bg-white marTB10 borde">
        <div class="detalleHeader flex wrap gap10 pad10 marT20 justify-content-center">
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad" src="<?php echo e(url('/miniatura/'.$producto->image)); ?>" onclick="showImg(this);" />
            </div>
            <?php if($producto->image2!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image2)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image3!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image3)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image4!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image4)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image5!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image5)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image6!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image6)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image7!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image7)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
            <?php if($producto->image8!=null): ?>
            <div class="icon-img flex align-items-center lineaWhite borde hvrBorde">
                <img class="wFull hvrOpacidad hand" src="<?php echo e(url('/miniatura/'.$producto->image8)); ?>"
                    onclick="showImg(this);" />
            </div>
            <?php endif; ?>
        </div>
        <div class="detalleImg">
            <div class="cont450 flex align-items-center ">
                <img id="expandedImg" class="pad20 imgAlign wFull" src="<?php echo e(url('/miniatura/'.$producto->image)); ?>">
            </div>
        </div>
        <div class="detalleInfo mar10 pad20 rel">
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
                <a href="tel+<?php echo e($producto->user->telefono); ?>">
                    <p class="tam18"><i class="fas fa-phone-square-alt txtO"></i> <?php echo e($producto->user->telefono); ?></p>
                </a>

                <?php endif; ?>
                <?php if($producto->user->horario!==null): ?>
                <p class="tam18"><i class="fas fa-clock txtO"></i> <?php echo e($producto->user->horario); ?></p>
                <?php endif; ?>
                <div class="divCenter">
                    <?php if($producto->user->pagweb!==null): ?>
                    <a href="<?php echo e($producto->user->pagweb); ?>" target="_blank"><i
                            class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                    <?php endif; ?>
                    <?php if($producto->whatsapp!==null): ?>
                    <a href="https://wa.me/<?php echo e($producto->whatsapp); ?>" target="_blank"><i
                            class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
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
        <div class="detalleFooter bg-blue flex divEnd">
            <a href="<?php echo e(route('getUserDetail', ['user_id' => $producto->user->id])); ?>">
                <p class="hvrUnderline hand txtW block marR30">Por <?php echo e($producto->user->name); ?></p>
            </a>
        </div>
    </main>
    <?php endif; ?>
    <?php echo $__env->make('navMenu.comentarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/archivos/detail.blade.php ENDPATH**/ ?>