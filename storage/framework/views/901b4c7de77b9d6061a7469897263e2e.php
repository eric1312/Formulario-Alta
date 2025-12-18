<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>
<body>

<div class="form-container">
    <div class="form-header">
        <h1>Detalle del Cliente</h1>
    </div>

    <div class="text-white">
        <p><strong>Nombre Fantasía:</strong> <?php echo e($customer->nombre_fantasia); ?></p>
        <p><strong>CUIT / DNI:</strong> <?php echo e($customer->cuit_dni); ?></p>
        <p><strong>Razón Social:</strong> <?php echo e($customer->razon_social); ?></p>
        <p><strong>Dirección:</strong> <?php echo e($customer->direccion); ?></p>
        <p><strong>Localidad:</strong> <?php echo e($customer->localidad); ?></p>
        <p><strong>Provincia:</strong> <?php echo e($customer->provincia); ?></p>
        <p><strong>Email Administrativo:</strong> <?php echo e($customer->email_contacto_administrativo); ?></p>
        <p><strong>Teléfono Administrativo:</strong> <?php echo e($customer->telefono_contacto_administrativo); ?></p>
        <p><strong>Tiene Móvil Verificador:</strong> <?php echo e($customer->tiene_movil_verificador ? 'Sí' : 'No'); ?></p>
        <p><strong>Email Config Dealer:</strong> <?php echo e($customer->email_config_dealer); ?></p>
        <p><strong>Teléfono Config Dealer:</strong> <?php echo e($customer->telefono_config_dealer); ?></p>
        <p><strong>Marca y Puertos:</strong> <?php echo e($customer->marca_comunicadores_puertos); ?></p>
    </div>

    <a href="<?php echo e(route('customers.index')); ?>" class="btn btn-dark mt-3">⬅ Volver</a>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\formulario2\Formulario-Alta\resources\views/customers/show.blade.php ENDPATH**/ ?>