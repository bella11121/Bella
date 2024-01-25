<?php

include_once('../admin/header.php');

$query = "SELECT * FROM agends WHERE user_id" ;

$result = mysqli_query($con, $query);

$agends = array();

if(mysqli_num_rows($result) > 0){
    $agends = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

?>

<!-- Conteúdo do dashboard -->
<main class="container py-5">
    <div class="row">
        <!-- Sidebar do dashboard -->
        <div class="col-md-3">
            <?php
                include_once('../admin/menu_sidebar.php');
            ?>
        </div>
        <!-- Main do dashboard -->
        <section class="col-md-9">
            <h2>Título</h2>
            <p>Descrição</p>
            <a href="create_agend.php" class="btn btn-success my-2 my-sm-0 text-light">
                Adicionar novo agendamento
            </a>
            <hr>

            <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-<?= $_SESSION['message_type'] ?>" role="alert">
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php unset($_SESSION['message']); } ?>

            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Titulo</th>
                                <th>Data da consulta</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach($users as $user){ ?>

                            <tr>
                                <td><?php echo $user['nome']; ?></td>
                                <td><?php echo $user['title']; ?></td>
                                <td><?php echo date('d/m/Y', strtotime($user['scheduled_to']) ); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ações
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-edit"></i>
                                                Editar
                                            </a>
                                            <a class="dropdown-item text-danger" href="#">
                                                <i class="fas fa-trash"></i>
                                                Excluir
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
include_once('..admin/footer.php');

?>
