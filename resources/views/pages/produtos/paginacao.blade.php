{{-- Extends da index --}}
@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>
    <div>
        <form action="" method="GET">
            <input type="text" name="pesquisar" placeholder="Digite o nome ">
            <button>Pesquisar</button>
            <a type="button" href="" class=" btn btn-success float-end">
                Adicionar produto
            </a>
        </form>
        <!-- <h2>Section title</h2> -->
        <div class="table-responsive mt-4">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($findProduto as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.') }}</td>
                            <td>
                                <a href="" class="btn btn-outline-light btn-sm">
                                       Editar     
                                </a>
                                <a href="" class="btn btn-outline-danger btn-sm">
                                    Excluir     
                             </a>
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    @endsection
