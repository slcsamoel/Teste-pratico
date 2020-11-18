@extends('layouts.admin')

@section('content')

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-12">
        @if($veiculo->id)
            <h3 class="mb-4 text-gray-800">Editar Veiculo </h3>
        @else
            <h3 class="mb-4 text-gray-800">Registrar Veiculo</h3>
        @endif

        @if(session('success'))
            <div class="my-2 alert alert-success" role="alert">
                <i class="fas fa-fw fa-check"></i>{{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if($veiculo->id)
            <form action="{{ route('admin.veiculo.update') }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
        @else
            <form action="{{ route('admin.veiculo.store') }}" method="POST" enctype="multipart/form-data">
        @endif
            @csrf

            <div class="card shadow mt-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dados</h6>
                </div>
                <div class="card-body">
                    <div class="form-group row border-bottom pb-3 no-target">
                        <div class="col-md-2 text-right">
                            <label for="placa">
                                <strong>Placa</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="placa" id="placa" class="form-control @error('placa') is-invalid @enderror" value="{{ old('placa') ?: $veiculo->placa }}" />

                            @error('placa')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row border-bottom pb-3 no-target">
                        <div class="col-md-2 text-right">
                            <label for="modelo">
                                <strong>Modelo</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="modelo" id="modelo" class="form-control @error('modelo') is-invalid @enderror" value="{{ old('modelo') ?: $veiculo->modelo }}" />

                            @error('modelo')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row border-bottom pb-3 no-target">
                        <div class="col-md-2 text-right">
                            <label for="marca">
                                <strong>Marca</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="marca" id="marca" class="form-control @error('marca') is-invalid @enderror" value="{{ old('marca') ?: $veiculo->marca }}" />

                            @error('marca')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row border-bottom pb-3 no-target">
                        <div class="col-md-2 text-right">
                            <label for="renavam">
                                <strong>Renavam</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="renavam" id="renavam" class="form-control @error('renavam') is-invalid @enderror" value="{{ old('renavam') ?: $veiculo->renavam }}" />

                            @error('renavam')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                
                    <div class="form-group row border-bottom pb-3 no-target">
                        <div class="col-md-2 text-right">
                            <label for="ano">
                                <strong>Ano</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="ano" id="ano" class="form-control @error('ano') is-invalid @enderror" value="{{ old('ano') ?: $veiculo->ano }}" />

                            @error('ano')
                                <span class="invalid-feedback" role="alert">
                                    <strong></strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row ">
                        <div class="col-md-2 text-right">
                            <label for="user_id">
                                <strong>Proprietário</strong>
                            </label>
                        </div>
                        <div class="col-md-10">
                            <select name="user_id" class="form-control ">
                                @foreach ($proprietarios as $proprietario)
                                    <option {{ $veiculo->user_id == $proprietario->id ? 'selected' : '' }} value="{{ $proprietario->id }}">
                                        {{ $proprietario->name }} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 py-3">
                    <a href="{{ route('admin.home') }}" class="btn btn-lg btn-block btn-secondary">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        Voltar
                    </a>
                </div>
                <div class="col-lg-3 offset-lg-6 py-3">
                    <button type="submit" class="btn btn-lg btn-block btn-success">
                        <i class="fas fa-save"></i>
                        Salvar
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
</div>
@endsection
@push('scripts')
 <script type="text/javascript">



 </script>
@endpush