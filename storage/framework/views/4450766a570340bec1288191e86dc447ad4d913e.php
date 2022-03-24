<?php $__env->startSection("titulo", "Cadastro de Cursos"); ?>

<?php $__env->startSection("formulario"); ?>
    <h1>Cadastro de Cursos</h1>
    <form action="/curso" method="POST" class="row">
        <div class="form-group col-8">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo e($curso->nome); ?>"/>
        </div>
        <div class="form-group col-4">
            <?php echo csrf_field(); ?>
            <input type="hidden" id="id" name="id" value="<?php echo e($curso->id); ?>"/>
            <a href="/curso" class="btn btn-primary" style="margin-top: 23px;"><i class="bi bi-plus-square"></i> Novo</a>
            <button type="submit" class="btn btn-success" style="margin-top: 23px;"><i class="bi bi-save"></i> Salvar</button>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection("tabela"); ?>
    <br />

    <h1>Lista de Cursos</h1>
    <table class="table table-striped">
        <colgroup>
            <col width="400">
            <col width="100">
            <col width="100">
        </colgroup>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cursos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $curso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($curso->nome); ?></td>
                    <td>
                        <a href="/curso/<?php echo e($curso->id); ?>/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Editar</a>
                    </td>
                    <td>
                        <form method="POST" action="/curso/<?php echo e($curso->id); ?>">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE" />
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make("templates.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lucas/Documentos/lucas/escola/resources/views/curso/index.blade.php ENDPATH**/ ?>