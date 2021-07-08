<?php $__env->startSection('title', 'Subir Servicio'); ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if(Auth::user()->rol_id == 2): ?>
    <div class="full">
        <main class="divCenterJA">
            <form action="<?php echo e(route('saveProducto')); ?>" method="post" enctype="multipart/form-data"
                class="panel borde boxShadow  mar20 pad20 rel" id="uploadForm">
                <?php echo csrf_field(); ?>

                <h1 class="txtB tam36 txtCenter pad20">Subir Servicio</h1>
                <!--Tipo-->
                <input type="text" id="tipo" name="tipo" value="Servicio" style="display:none" />
                <!--Categoria-->
                <div class="flex wrap justify-content-center marB20">
                    <label class="txtO tam24 w100 txtCenter" for="categoria">Categoría</label>
                    <select id="categoria" name="categoria"
                        class="divCenter p-1 bg-white border border-gray-200 rounded shadow-sm appearance-none" require>
                        <option value="0">Seleccionar</option>
                        <?php $__currentLoopData = $categoria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aux): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($aux->categoria); ?>"><?php echo e($aux->categoria); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('categoria')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('categoria')); ?></strong>
                    </span>
                    <?php endif; ?>
                </div>

                <!--Info-->
                <div class="flex wrap justify-content-center gap10">
                    <!--Titutlo-->
                    <div class="flex wrap marTB10 fw30 justify-content-center">
                        <label class="txtB tam24 w100 txtCenter" for="title">Título</label>
                        <input type="text" class="typeLinea lineaO w90" id="title" name="title" require />
                        <?php if($errors->has('title')): ?>
                        <strong>
                            <p class="txtRojo tam14">Debe introducir al menos 5 caracteres</p>
                        </strong>
                        <?php endif; ?>
                    </div>

                    <!--Descripcion-->
                    <div class="flex wrap marTB10 fw30 justify-content-center">
                        <label class="txtB tam24 w100 txtCenter" for="description">Descripción</label>
                        <input type="text" class=" typeLinea lineaO w90" id="description" name="description" require />
                        <?php if($errors->has('description')): ?>
                        <strong>
                            <p class="txtRojo tam14">Debe introducir al menos 5 caracteres</p>
                        </strong>
                        <?php endif; ?>
                    </div>

                    <!--Precio-->
                    <div class="flex wrap marTB10 fw30 justify-content-center">
                        <label class="txtB tam24 w100 txtCenter" for="precio">Precio</label>
                        <input type="number" class=" typeLinea lineaO w90" id="precio" name="precio" min="1" require>
                        <?php if($errors->has('precio')): ?>
                        <span class="help-block">
                            <strong>
                                <p class="txtRojo tam14">Introduzca correctamente los datos</p>
                            </strong>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="divCenter fw30">
                    <select type="text" name="cant" id="cant"
                        class="w-full p-1 bg-white border border-gray-200 rounded shadow-sm appearance-none">
                        <option value="0">Seleccionar cantidad de imagenes</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                    </select>
                </div>
                <div class="flex wrap justify-content-center w100">

                    <!--foto del producto-->
                    <div class="marTB10 fw25 txtCenter aux1">
                        <label class="tam14 hvrBorde borde btnImage" for="image">Imagen Portada</label>
                        <input type="file" class="inputUploadImg " id="image" name="image" require />
                        <div class="imgProd ">
                            <div class="w100 flex" id="preview"></div>
                        </div>
                        <?php if($errors->has('image')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('image')); ?></strong>
                        </span>
                        <?php endif; ?>
                    </div>
                    <!--imagen2-->
                    <div class="marTB10 fw25 txtCenter aux2" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image2">Agregar 2da Imagen</label>
                        <input type="file" class="inputUploadImg " id="image2" name="image2" />
                        <div class="imgProd">
                            <div class="w90" id="preview2"></div>
                        </div>
                    </div>
                    <!--imagen3-->
                    <div class="marTB10 fw25 txtCenter aux3" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image3">Agregar 3ra Imagen</label>
                        <input type="file" class="inputUploadImg" id="image3" name="image3" />
                        <div class="imgProd">
                            <div class="w90" id="preview3"></div>
                        </div>
                    </div>
                    <!--imagen4-->
                    <div class="marTB10 fw25 txtCenter aux4" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image4">Agregar 4ta Imagen</label>
                        <input type="file" class="inputUploadImg " id="image4" name="image4" />
                        <div class="imgProd">
                            <div class="w90" id="preview4"></div>
                        </div>
                    </div>
                    <!--imagen5-->
                    <div class="marTB10 fw25 txtCenter aux5" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image5">Agregar 5ta Imagen</label>
                        <input type="file" class="inputUploadImg " id="image5" name="image5" />
                        <div class="imgProd">
                            <div class="w90" id="preview5"></div>
                        </div>
                    </div>
                    <!--imagen6-->
                    <div class="marTB10 fw25 txtCenter aux6" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image6">Agregar 6ta Imagen</label>
                        <input type="file" class="inputUploadImg" id="image6" name="image6" />
                        <div class="imgProd">
                            <div class="w90" id="preview6"></div>
                        </div>
                    </div>
                    <!--imagen7-->
                    <div class="marTB10 fw25 txtCenter aux7" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image7">Agregar 7ma Imagen</label>
                        <input type="file" class="inputUploadImg" id="image7" name="image7" />
                        <div class="imgProd">
                            <div class="w90" id="preview7"></div>
                        </div>
                    </div>
                    <!--imagen8-->
                    <div class="marTB10 fw25 txtCenter aux8" style="display:none;">
                        <label class=" tam14 hvrBorde borde btnImage" for="image8">Agregar 8va Imagen</label>
                        <input type="file" class="inputUploadImg" id="image8" name="image8" />
                        <div class="imgProd">
                            <div class="w90" id="preview8"></div>
                        </div>
                    </div>
                </div>

                <!--Boton-->
                <div class="contCenter marTB10">
                    <button type="submit" class="typeRadio fillBlue tam24 boxShadow padLR50 hvrBorde">Subir
                        archivo</button>
                </div>
            </form>
        </main>
    </div>

    <?php else: ?>

    <?php endif; ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/archivos/crearServicio.blade.php ENDPATH**/ ?>