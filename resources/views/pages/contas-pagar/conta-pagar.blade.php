@extends('adminlte::page')

@section('title', 'Contas a pagar')

@section('content_header')
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4>Conta a pagar</h4>
                <hr>
                <div class="form-group row pt-2">
                    <div class="col-12 col-md-3 col-lg-3">
                        <button class="btn btn-outline-info mb-2" id="novo-cadastro" onclick="adicionarRegistro();"><i class="fas fa-plus-circle mx-2"></i>Nova forma de pagamento</button>
                    </div>
                    <div class="col-12 col-md-8 col-lg-8">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-navy" id="search_label"><i class="fas fa-search text-white"></i></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Pesquisar por centro de custo..."
                                aria-label="Pesquisar por centro de custo..."
                                aria-describedby="search_label"
                                autofocus
                            >
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card-invisible" id="content-card">
            <div class="card-header">
                <h4>Cadastrar nova conta</h4>
            </div>
            <div class="card-body bg-light shadow">
                <form >
                    <div class="form-group row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="documento">Número do documento</label>
                            <input
                                type="text"
                                name="documento"
                                id="documento"
                                class="form-control pt-2"
                                required
                                placeholder="Digite o número do documento"
                            >
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="fornecedor">Fornecedor</label>
                            <select
                                name="fornecedor"
                                id="fornecedor"
                                class="custom-select">
                                <option>Escolher uma</option>
                                <option value="1">André Alimentos</option>
                                <option value="2">Anuda Comércio</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <label for="forma-pagamento">Forma de Pagamento</label>
                            <select
                                name="forma-pagamento"
                                id="forma-pagamento"
                                class="custom-select">
                                <option>Escolher uma</option>
                                <option value="1">Cartão de Crédito</option>
                                <option value="2">Cartão de Débito</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-12 col-md-4 col-lg-4 pt-1">
                            <button
                                type="submit"
                                class="btn btn-outline-success">
                                <i class="fas fa-save mx-2"></i>
                                Salvar
                            </button>
                            <button
                                type="reset"
                                onclick="cancelarRegistro();"
                                class="btn btn-outline-danger">
                                <i class="fas fa-eraser mx-2"></i>
                                Cancelar
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
@stop

@section('js')
    <script src={{ asset('js/main.js') }}></script>
@endsection


