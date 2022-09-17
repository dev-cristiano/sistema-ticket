<!-- As a link -->
<div class="div-center">
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-center" id="staticBackdropLabel">CADATRAR NOVO CLIENTE</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Dados -->
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Nome Cliente</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Cpf/Cnpj</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Cidade</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Bairro</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div><div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Cep</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <div class="col-sm-6 mb-2">
                        <label for="exampleFormControlInput1" class="form-label">Numero</label>
                        <input type="email" class="form-control form-control-sm" id="exampleFormControlInput1">
                    </div>
                    <!-- Fim Dados -->
                </div>
                <div class="modal-footer">
                    <button type="button" name="sair" class="btn-sair" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Sair</button>
                    <button type="button" name="salvar" class="btn-salvar"><i class="fa-solid fa-check"></i> Salvar</button>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar mt-3">
        <div class="container-fluid">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link link-light" href="menu.php"><i class="fa-solid fa-gauge">
                        </i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="grid_ticket.php"><i class="fa-solid fa-ticket">
                        </i> Meus Ticket</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#staticBackd">
                    <i class="fa-solid fa-registered"></i> Cadastro
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa-solid fa-user"></i> Cliente</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="suporte.php">
                        <i class="fa-solid fa-circle-info"></i> Suporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-light" href="session_destroy.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- Finsh Navbar -->

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>