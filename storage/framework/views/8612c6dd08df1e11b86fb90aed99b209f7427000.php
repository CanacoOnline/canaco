<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>

    <main class="grid gap10">
        <!-- Foto Perfil -->
        <main class="boxShadowLight marT10">
            <div class="bgB flex">
                <?php if(Auth::user()->dias<=7): ?> <div class="tamNormal">
                    <p class="txtW pad10">Su membrecia esta a punto de expirar. Dias restantes: <?php echo e(Auth::user()->dias); ?>

                    </p>
            </div>
            <?php endif; ?>
            <div class="tamNormal panelVacio divEnd">
                <li>
                    <a class="hvrUnderline txtW pad5 marT5 " href="/user/profile"> Editar perfil
                        <i class="fas fa-user txtO"></i>
                    </a>
                </li>
                <li>
                    <a class="hvrUnderline txtW pad5 marT5" href="/subirProducto"> Subir Producto
                        <i class="fas fa-upload txtO"></i>
                    </a>
                </li>
                <li>
                    <a class="hvrUnderline txtW pad5 marT5" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        Cerrar sesión <i class="fas fa-sign-out-alt txtO"></i>
                    </a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </li>
            </div>
            </div>

            <div class="pad5 panel flex wrap divCenter mainPerfil">
                <?php if( Auth::user()->profile_photo_path!=null): ?>
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100 object-cover"
                        src="storage/<?php echo e(Auth::user()->profile_photo_path); ?>"
                        alt="storage/<?php echo e(Auth::user()->profile_photo_path); ?>" />
                    <h1 class="txtB tamGrande frm100 bold600"><?php echo e(Auth::user()->name); ?></h1>
                </div>
                <?php else: ?>
                <div class="txtCenter divCenter contFotoPerfil">
                    <img class="avatarNormal divCenter frm100 object-cover" src="<?php echo e(asset('images\avatar.png')); ?>">
                    <h1 class="txtB tamGrande frm100 bold600"><?php echo e(Auth::user()->name); ?></h1>
                </div>
                <?php endif; ?>

                <div class="divCenter contInfo">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Sobre nosotros</h2><br>
                    </div>
                    <div class="divCenter frm100">
                        <p class="txtB tamNormal"><?php echo e(Auth::user()->descripcion); ?></p>
                    </div>

                </div>
                <div class="divCenter contContacto">
                    <div class="divCenter frm100">
                        <h2 class="txtO tamMediano bold700">Contacto</h2><br>
                    </div>
                    <div class="divCenter tamMediano frm100">
                        <?php if(Auth::user()->pagweb!==null): ?>
                        <a href="<?php echo e(Auth::user()->pagweb); ?>" target="_blank"><i
                                class="fas fa-globe pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>
                        <?php if(Auth::user()->whatsapp!==null): ?>
                        <a href="https://wa.me/<?php echo e(Auth::user()->whatsapp); ?>" target="_blank"><i
                                class="fab fa-whatsapp pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>
                        <?php if(Auth::user()->facebook!==null): ?>
                        <a href="<?php echo e(Auth::user()->facebook); ?>" target="_blank"><i
                                class="fab fa-facebook pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>

                        <?php if(Auth::user()->instagram!==null): ?>
                        <a href="<?php echo e(Auth::user()->instagram); ?>" target="_blank"><i
                                class="fab fa-instagram pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>

                        <?php if(Auth::user()->twitter!==null): ?>
                        <a href="<?php echo e(Auth::user()->twitter); ?>" target="_blank"><i
                                class="fab fa-twitter pad10 txtB hvrBorde"></i></a>
                        <?php endif; ?>
                    </div>
                    <p class=" divCenter frm100 txtB tamNormal align-items-end"><i
                            class="fas fa-map-marker-alt txtO tam18 pad5"></i>
                        <span class="txtGray">
                            <?php echo e(Auth::user()->ubicacion); ?></span>
                    </p>
                    <a href="tel:+<?php echo e(Auth::user()->telefono); ?>">
                        <p class="divCenter frm100 txtB tamNormal align-items-end"><i
                                class="fas fa-phone-square-alt txtO tam18 pad5"></i>
                            <span class="txtGray"> <?php echo e(Auth::user()->telefono); ?></span>
                        </p>
                    </a>

                    <?php if(Auth::user()->horario!==null): ?>
                    <p class=" divCenter frm100 txtB tamNormal align-items-end"><i
                            class="fas fa-clock txtO tam18 pad5"></i> <span class="txtGray">
                            <?php echo e(Auth::user()->horario); ?></span>
                    </p>
                    <?php endif; ?>

                </div>
            </div>

        </main>

        <div class="divSpaceA gap10">

            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(Auth::check() && Auth::user()->id == $aux->user->id): ?>
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
                <p class="pad10  tamNormal"><?php echo e($aux->description); ?></p>
                <?php endif; ?>
                <p class="tamNormal createByBottom ">Por <?php echo e($aux->user->name.' '.$aux->user->surname); ?></p>
                <?php if($aux->precio!==null): ?>
                <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">$<?php echo e($aux->precio); ?></p>
                <?php endif; ?>
                <!-- <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">$<?php echo e($aux->created_at->diffForHumans()); ?></p> -->
                <?php if(Auth::guest()): ?>
                <?php else: ?>
                <!--    Botones     -->
                <?php if(Auth::check() && Auth::user()->id == $aux->user->id || Auth::user()->rol_id == 1): ?>
                <div class="mar10 txtRight marB30">
                    <a href="<?php echo e(route('productoEdit', ['producto_id' => $aux->id])); ?>"
                        class="pad5  typeRadio fillBlue hvrBorde">Editar</a>
                    <a href="<?php echo e(route('productoDelete', ['img_id' => $aux->id])); ?>"
                        class="pad5  typeRadio fillRojo hvrBorde"
                        onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <div class="dir w100">
                <?php echo e($productos->links()); ?>

            </div>


        </div>


    </main>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH /home2/canaconl/canaco/resources/views/cuenta/empresa.blade.php ENDPATH**/ ?>