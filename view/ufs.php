<?php
include_once('../model/Uf.php');
include_once('../model/Mp.php');
if (!isset($_SESSION)) session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>MPS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <header>
        <?php include_once('./templates/navbar.php') ?>
    </header>
    <main>
        <form class="m-4 border p-3 bg-light col-11 col-md-7 col-lg-6 col-xl-5 mx-auto" action="../controller/UfController.php" method="post">
            <div class="mb-3">
                <select class="form-select form-select-lg" name="mp_sel" id="llistamps">
                    <?php
                    foreach ($_SESSION['mps'] as $mp) {
                    ?>
                        <option value="<?php echo $mp->getNumMp() ?>"><?php echo $mp->getNomMp() ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Número UF</label>
                <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="For ex. 1" name="num_uf">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput4" class="form-label">Nom UF</label>
                <input type="text" class="form-control" id="exampleFormControlInput4" placeholder="For ex. UF de nose" name="nom_uf">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput5" class="form-label">Hores UF</label>
                <input type="number" class="form-control" id="exampleFormControlInput5" placeholder="For ex. 120" name="hores_uf">
            </div>
            <button class="btn btn-primary mt-2" type="submit" name="sub_desa_uf">Desa!</button>
        </form>
        <hr class="my-5">
        <div class="table-responsive">
            <table class="table table-secondary table-striped">
                <thead>
                    <tr>
                        <th scope="col">Número MP</th>
                        <th scope="col">Número UF</th>
                        <th scope="col">Nom UF</th>
                        <th scope="col">Hores UF</th>
                        <th scope="col">Accions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['mps'] as $mp) {

                        foreach ($mp->getUfs() as $uf) { ?>
                            <tr>
                                <td><?php echo $mp->getNumMp() ?></td>
                                <td><?php echo $uf->getNumUf() ?></td>
                                <td><?php echo $uf->getNomUf() ?></td>
                                <td><?php echo $uf->getHoresUf() ?></td>
                                <td>
                                    <a href="../controller/UfController.php?remove_uf_mp=<?php echo $mp->getNumMp(); ?>&remove_uf_uf=<?php echo $uf->getNumUf(); ?>" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                    <?php
                        }
                    } ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>