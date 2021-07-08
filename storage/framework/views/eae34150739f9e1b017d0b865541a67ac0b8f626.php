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

        <div class="productObjetos flex wrap gap10">
            <?php if(count($videos)>=1): ?>
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($aux->user->rol_id==2): ?>
            <div class="bg-white panelProd rel bordeTL boxShadow maxH430">
                <!--    Imagen  -->
                <?php if(Storage::disk('images')->has($aux->image)): ?>
                <div class="imgObj lineaBotGris contCenter frm100">
                    <a href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>">
                        <img class="wFull imgAlign" src="<?php echo e(url('/miniatura/'.$aux->image)); ?>" />
                    </a>
                </div>
                <?php endif; ?>
                <!--    Info    -->
                <h3 class="txtCenter frm100">
                    <a class="txtB bold600"
                        href="<?php echo e(route('detailProducto', ['producto_id' => $aux->id])); ?>"><?php echo e($aux->title); ?></a>
                </h3>

                <?php if($aux->description!==null): ?>
                <p class="pad10 tamNormal marB40"><?php echo e($aux->description); ?></p>
                <?php endif; ?>

                <div class="panelGuardar flex lineaTopGris">

                    <a href="<?php echo e(route('getUserDetail', ['user_id' => $aux->user->id])); ?>" class="divCenter hvrUnderline txtB">
                        Por: <?php echo e($aux->user->name); ?>

                    </a>

                    <a href="" class="wIcon divCenter">
                        <i class="far fa-heart txtB hvrOrange"></i>
                    </a>
                </div>

                <?php if($aux->precio!==null): ?>
                <p class="txtW tam14 lblTL pad5 padLR10 bordeTL boxShadow">$<?php echo e($aux->precio); ?></p>
                <?php endif; ?>

                <?php if(Auth::guest()): ?>
                <?php else: ?>
                <!--    Botones     -->
                <?php if(Auth::check() && Auth::user()->id == $aux->user->id || Auth::user()->rol_id == 1): ?>
                <div class="mar10 txtRight marB30">
                    <a href="" class="pad5  typeRadio fillBlue hvrBorde">Editar</a>
                    <a href="<?php echo e(route('productoDelete', ['img_id' => $aux->id])); ?>"
                        class="pad5  typeRadio fillRojo hvrBorde"
                        onclick="return confirm('¿Está seguro de eliminar este producto?')">Eliminar</a>
                </div>
                <?php endif; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="dir">
                <?php echo e($videos->links()); ?>

            </div>
            <?php endif; ?>


            <?php $__currentLoopData = $perfil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuarios): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white h250 borde5 boxShadow">
                <div class="panelNormal borde5 h225 lineaBot flex align-items-center justify-content-center">
                    <?php if($usuarios->profile_photo_path!=null): ?>
                    <a href="<?php echo e(route('getUserDetail', ['user_id' => $usuarios->id])); ?>"><img
                            src="/storage/<?php echo e($usuarios->profile_photo_path); ?>" alt="" style="width:100%"
                            class="maxH225"></a>
                    <?php else: ?>
                    <a href="<?php echo e(route('getUserDetail', ['user_id' => $usuarios->id])); ?>"><img
                            src="<?php echo e(asset('images\avatar.png')); ?>" alt="" style="width:100%" class="maxH225"></a>
                    <?php endif; ?>

                </div>
                <p class="txtCenter txtB tam14"><?php echo e($usuarios->name); ?></p>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </main>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/search.blade.php ENDPATH**/ ?>