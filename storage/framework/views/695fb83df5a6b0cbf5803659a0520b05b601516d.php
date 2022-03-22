<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php echo $__env->yieldContent("titulo"); ?>
        </title>
        <!-- BOOTSTRAP.CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- BOOTSTRAP ICONS.CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

        <!-- BOOTSTRAP.JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <div class="container">

            <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
                <div class="navbar-nav">
                    <a class="nav-link" href="/curso">Cursos</a>
                    <a class="nav-link" href="/aluno">Alunos</a>
                </div>
            </nav>

            <?php echo $__env->yieldContent("formulario"); ?>
            <?php echo $__env->yieldContent("tabela"); ?>
        </div>
    </body>
</html><?php /**PATH /home/lucas/Documentos/lucas/escola/resources/views/templates/main.blade.php ENDPATH**/ ?>