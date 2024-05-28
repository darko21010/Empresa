

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Proyectos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php $__env->startSection('content'); ?>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">BIENVENIDO USUARIO</h1>
            <p class="lead text-body-secondary">Esta es una pestaña PROYECTOS.</p>
            <p>
                <a href="#" class="btn btn-primary my-2">Pruebame</a>
                <a href="#" class="btn btn-secondary my-2">Try</a>
            </p>
            </div>
        </div>
    </section>
        
    <?php $__env->stopSection(); ?>
    
</body>
</html>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\TBD-info\Empresa\resources\views/proyects/proyects.blade.php ENDPATH**/ ?>