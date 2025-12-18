<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <link rel="icon" href="<?php echo e(asset('img/logoProteger.jpg')); ?>" type="image/jpeg">
</head>
<body>

    <div class="table-container mt-5">
        <div class="card p-4 shadow-lg">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="text-white">📋 Listado de Clientes</h2>
                <a href="<?php echo e(route('customers.create')); ?>" class="btn btn-dark">+ Nuevo Cliente</a>
            </div>

            <?php if(session('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre Fantasía</th>
                            <th>CUIT / DNI</th>
                            <th>Razón Social</th>
                            <th>Localidad</th>
                            <th>Provincia</th>
                            <th>Email Contacto Adm.</th>
                            <th>Tel. Contacto Adm.</th>
                            <th>Tiene Móvil Verificador</th>
                            <th>Email Config Dealer</th>
                            <th>Tel. Config Dealer</th>
                            <th>Marca y Puertos</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($customer->id); ?></td>
                                <td><?php echo e($customer->nombre_fantasia); ?></td>
                                <td><?php echo e($customer->cuit_dni); ?></td>
                                <td><?php echo e($customer->razon_social); ?></td>
                                <td><?php echo e($customer->localidad); ?></td>
                                <td><?php echo e($customer->provincia); ?></td>
                                <td><?php echo e($customer->email_contacto_administrativo); ?></td>
                                <td><?php echo e($customer->telefono_contacto_administrativo); ?></td>
                                <td>
                                    <?php if($customer->tiene_movil_verificador): ?>
                                        ✅ Sí
                                    <?php else: ?>
                                        ❌ No
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($customer->email_config_dealer); ?></td>
                                <td><?php echo e($customer->telefono_config_dealer); ?></td>
                                <td><?php echo e($customer->marca_comunicadores_puertos); ?></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary">Ver</a>
                                    <a href="#" class="btn btn-sm btn-warning">Editar</a>
                                    <a href="#" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="13" class="text-center text-muted">No hay clientes registrados aún</td>
                            </tr>
                        <?php endif; ?>
                        <td>
                            <a href="<?php echo e(route('customers.show', $customer->id)); ?>" class="btn btn-sm btn-primary">Ver</a>
                            <a href="<?php echo e(route('customers.edit', $customer->id)); ?>" class="btn btn-sm btn-warning">Editar</a>
                            <form action="<?php echo e(route('customers.destroy', $customer->id)); ?>" method="POST" style="display:inline;">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este cliente?')">Eliminar</button>
                            </form>
                        </td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\formulario2\Formulario-Alta\resources\views/customers/index.blade.php ENDPATH**/ ?>