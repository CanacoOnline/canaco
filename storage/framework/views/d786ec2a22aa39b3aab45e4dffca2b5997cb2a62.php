<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if($usuario->rol_id==2): ?>
    <main class="grid gap10">
        <main class="boxShadowLight marT10">
            <div class="bgB h45">
            </div>
            <!-- Foto Perfil -->
            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <div class="txtCenter divCenter contFotoPerfil">
                    <?php if($usuario->profile_photo_path!=null): ?>
                    <img class="avatarNormal divCenter frm100 object-cover"
                        src="/storage/<?php echo e($usuario->profile_photo_path); ?>" alt="<?php echo e($usuario->name); ?>" />
                    <?php else: ?>
                    <img class="avatarNormal divCenter frm100 object-cover" src="<?php echo e(asset('images\avatar.png')); ?>"
                        alt="<?php echo e($usuario->name); ?>" />
                    <?php endif; ?>
                    <h1 class="txtB tamGrande frm100 bold600"><?php echo e($usuario->name); ?></h1>
                </div>
                <div class="divCenter contInfo">
                    <div class="divCenter contInfo">
                        <div class="divCenter frm100">
                            <h2 class="txtO tamMediano bold700">Sobre nosotros</h2><br>
                        </div>
                        <div class="divCenter frm100">
                            <p class="txtB tamNormal"><?php echo e($usuario->descripcion); ?></p>
                        </div>

                    </div>
                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Contacto</h2><br>
                    </div>
                    <div class="divCenter tamMediano frm100">
                        <?php if($usuario->pagweb!==null): ?>
                        <a href="<?php echo e($usuario->pagweb); ?>" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>

                        <?php if($usuario->whatsapp!==null): ?>
                        <a href="https://wa.me/+52<?php echo e($usuario->whatsapp); ?>" target="_blank"><i
                                class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>
                        <?php if($usuario->facebook!==null): ?>
                        <a href="<?php echo e($usuario->facebook); ?>" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>

                        <?php if($usuario->instagram!==null): ?>
                        <a href="<?php echo e($usuario->instagram); ?>" target="_blank"><i
                                class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>

                        <?php if($usuario->twitter!==null): ?>
                        <a href="<?php echo e($usuario->twitter); ?>" target="_blank"><i
                                class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>
                    </div>


                    <p class="divCenter frm100 txtB tamNormal"><i class="fas fa-map-marker-alt txtO tam18 pad5"></i>
                        <span class="txtGay">
                            <?php echo e($usuario->ubicacion); ?></span>
                    </p>
                    <a href="tel:+<?php echo e($usuario->telefono); ?>">
                        <p class="divCenter frm100 txtB tamNormal"><i
                                class="fas fa-phone-square-alt txtO tam18 pad5"></i>
                            <span class="txtGay"> <?php echo e($usuario->telefono); ?></span>
                        </p>
                    </a>
                    <?php if($usuario->horario!==null): ?>
                    <p class="divCenter frm100 txtB tamNormal"><i class="fas fa-clock txtO tam18 pad5"></i> <span
                            class="txtGay"> <?php echo e($usuario->horario); ?></span>
                    </p>
                    <?php endif; ?>
                </div>
            </div>
        </main>


        <div class="divSpaceA gap10">
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($usuario->id == $aux->user->id): ?>
            <div class="bg-white panelProd rel bordeTL boxShadowT1">
                <!--    Imagen  -->
                <?php if(Storage::disk('images')->has($aux->image)): ?>
                <div class="imgPanel">
                    <a href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>">
                        <img class="wFull maxH270" src="<?php echo e(url('/miniatura/'.$aux->image)); ?>" />
                    </a>
                </div>
                <?php endif; ?>
                <!--    Info    -->
                <h3 class="txtCenter">
                    <a class="txtB"
                        href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>"><?php echo e($aux->title); ?></a>
                </h3>
                <?php if($aux->description!==null): ?>
                <p class="pad10 marB20 tamNormal"><?php echo e($aux->description); ?></p>
                <?php endif; ?>

                <?php if($aux->precio!==null): ?>
                <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">$<?php echo e($aux->precio); ?></p>
                <?php endif; ?>
                <a href="" class="">
                    <p class="tamNormal createByBottom txtB">Por <?php echo e($aux->user->name.' '.$aux->user->surname); ?></p>
                </a>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="dir">
                <?php echo e($productos->links()); ?>

            </div>

        </div>


    </main>
<?php else: ?>
<p class="txtB tam24 divCenter mar10">Esta cuenta no existe o no cuenta con suscripción activa.</p>
<a href="/" class="txtO tam24 divCenter">Volver al inicio.</a>
<?php endif; ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/cuenta/perfil.blade.php ENDPATH**/ ?>