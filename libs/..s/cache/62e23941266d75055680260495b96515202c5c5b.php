




<div class="container">
    <form action="<?php echo e(URL.'categoria/save'); ?>" method="POST" id="myForm">
        <div class="form-group">
            <input type="hidden" name="IdCategoria" value="<?php echo e($data->IdCategoria); ?>">
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="Nombre" id="Nombre" value="<?php echo e($data->Nombre); ?>">
                    <div class="messages"></div>
                </div>
                <div class="form-group">
                    <label for="">Descripcion</label>
                    <input type="text" name="Descripcion" id="Descripcion" value="<?php echo e($data->Descripcion); ?>">
                    <div class="messages"></div>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-right">
            <div class="col modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/validate.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/show_errors_validations.js"></script>
<script src="<?php echo e(URL); ?>js/mis_scripts/categoria.js"></script>
<?php /**PATH C:\xampp\htdocs\MiBodega\app\views/categoria/detail.blade.php ENDPATH**/ ?>