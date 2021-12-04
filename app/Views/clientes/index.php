<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>

<body class="sidebar-noneoverflow">
    <!--  BEGIN CONTENT AREA  -->

    <h2>Lista de Clinete</h2>
    <div id="column-filter_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
        
        <div class="table-responsive">
            <table id="column-filter" class="table dataTable" role="grid" aria-describedby="column-filter_info" style="width: 1272px;">
                <thead>
                    <tr>
                        <th>Cod.</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Data Nascimento</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Limite de Credito</th>
                        <th>Dia de Pagamento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($clientes as $cliente) : ?>
                        <tr>
                            <td><?php echo $cliente['id_cliente'] ?></td>
                            <td><?php echo $cliente['nome'] ?></td>
                            <td><?php echo $cliente['data_de_nascimento'] ?></td>
                            <td><?php echo $cliente['cpf'] ?></td>

                            <td><?php echo $cliente['telefone'] ?></td>
                            <td><?php echo $cliente['endereco'] ?></td>
                            <td><?php echo $cliente['limite_de_credito'] ?></td>
                            <td><?php echo $cliente['dia_de_pagamento'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

            </table>
        </div>
        <div class="dt--bottom-section d-sm-flex justify-content-sm-between text-center">
            <div class="dt--pages-count  mb-sm-0 mb-3">
                <div class="dataTables_info" id="column-filter_info" role="status" aria-live="polite">Showing page 1 of 1</div>
            </div>
            <div class="dt--pagination">
                <div class="dataTables_paginate paging_simple_numbers" id="column-filter_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="column-filter_previous"><a href="#" aria-controls="column-filter" data-dt-idx="0" tabindex="0" class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left">
                                    <line x1="19" y1="12" x2="5" y2="12"></line>
                                    <polyline points="12 19 5 12 12 5"></polyline>
                                </svg></a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="column-filter" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="column-filter_next"><a href="#" aria-controls="column-filter" data-dt-idx="2" tabindex="0" class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



</body>
<!-- <body>
    <h1>clientes</h1>
    <div class="main-container">
    <table width='100%' border='1' class="table table-striped dataTable">
        
        <tbody>
           
        </tbody>
    </table>
    </div>
</body> -->

</html>