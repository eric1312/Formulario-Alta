<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <h1>Editar Cliente</h1>
    </div>

    <form action="<?php echo e(route('customers.update', $customer->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="nombre_fantasia">Nombre Fantasía</label>
                <input type="text" id="nombre_fantasia" name="nombre_fantasia" class="form-control" value="<?php echo e(old('nombre_fantasia', $customer->nombre_fantasia)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="cuit_dni">CUIT / DNI</label>
                <input type="text" id="cuit_dni" name="cuit_dni" class="form-control" value="<?php echo e(old('cuit_dni', $customer->cuit_dni)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="razon_social">Razón Social</label>
                <input type="text" id="razon_social" name="razon_social" class="form-control" value="<?php echo e(old('razon_social', $customer->razon_social)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo e(old('direccion', $customer->direccion)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="localidad">Localidad</label>
                <input type="text" id="localidad" name="localidad" class="form-control" value="<?php echo e(old('localidad', $customer->localidad)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="provincia">Provincia</label>
                <input type="text" id="provincia" name="provincia" class="form-control" value="<?php echo e(old('provincia', $customer->provincia)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="email_contacto_administrativo">Email Contacto Administrativo</label>
                <input type="email" id="email_contacto_administrativo" name="email_contacto_administrativo" class="form-control" value="<?php echo e(old('email_contacto_administrativo', $customer->email_contacto_administrativo)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="telefono_contacto_administrativo">Teléfono Contacto Administrativo</label>
                <input type="text" id="telefono_contacto_administrativo" name="telefono_contacto_administrativo" class="form-control" value="<?php echo e(old('telefono_contacto_administrativo', $customer->telefono_contacto_administrativo)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="tiene_movil_verificador">¿Tiene Móvil Verificador?</label>
                <select id="tiene_movil_verificador" name="tiene_movil_verificador" class="form-select">
                    <option value="1" <?php echo e($customer->tiene_movil_verificador ? 'selected' : ''); ?>>Sí</option>
                    <option value="0" <?php echo e(!$customer->tiene_movil_verificador ? 'selected' : ''); ?>>No</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="email_config_dealer">Email Config Dealer</label>
                <input type="email" id="email_config_dealer" name="email_config_dealer" class="form-control" value="<?php echo e(old('email_config_dealer', $customer->email_config_dealer)); ?>" required>
            </div>

            <div class="col-md-6">
                <label for="telefono_config_dealer">Teléfono Config Dealer</label>
                <input type="text" id="telefono_config_dealer" name="telefono_config_dealer" class="form-control" value="<?php echo e(old('telefono_config_dealer', $customer->telefono_config_dealer)); ?>" required>
            </div>

            <div class="col-md-12">
                <label for="marca_comunicadores_puertos">Marca de Comunicadores y Puertos</label>
                <textarea id="marca_comunicadores_puertos" name="marca_comunicadores_puertos" class="form-control"><?php echo e(old('marca_comunicadores_puertos', $customer->marca_comunicadores_puertos)); ?></textarea>
            </div>
        </div>

        <button type="submit" class="btn btn-dark mt-3">💾 Guardar Cambios</button>
        <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-secondary mt-3">⬅ Volver</a>
    </form>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\formulario2\Formulario-Alta\resources\views/customers/edit.blade.php ENDPATH**/ ?>