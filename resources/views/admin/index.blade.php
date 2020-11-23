@extends('layouts.admin')

@section('content')

<div class="container">

        @if(session('success'))
            <div class="my-2 alert alert-success" role="alert">
                <i class="fas fa-fw fa-check"></i>{{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
     <div class="row pb-3">
        <div class="col">
            <a href="{{ route('admin.veiculo.create') }}" class="btn btn-success new-galleries">
                <i class="fas fa-plus"></i> Registrar Novo Veiculo
            </a>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                        <tr>
                            <th scope="col" class="d-print-none" style="width:50px;">ID</th>
                            <th scope="col" style="width:100px;">Modelo</th>
                            <th scope="col" style="width:100px;">placa</th>
                            <th scope="col">Proprietario</th>
                            <th scope="col" class="d-print-none" style="width:150px;">Ação</th>
                        </tr>
                    </thead>
                  <tbody>
                        @foreach($veiculos as $veiculo)
                            <tr>
                                <td>{{ $veiculo->id }}</td>
                                <td>
                                    
                                        {{ $veiculo->modelo }}
                                    
                                </td>
                                <td>
                                    
                                        {{ $veiculo->placa}}
                                    
                                </td>
                                 <td>
                                    
                                        {{ $veiculo->user->name}}
                                    
                                </td>
                                <td> 
                                        <a href="{{ route('admin.veiculo.edit',['veiculo'=>$veiculo->id]) }}" class="btn btn-sm btn-info mx-1" placeholder="Editar">
                                            <i class="fas fa-fw fa-edit"></i>
                                        </a>

                                        <a href="{{ route('admin.veiculo.delete',['veiculo'=>$veiculo->id]) }}" class="btn btn-sm btn-danger delete-registry mx-1" placeholder="Excluir">
                                            <i class="fas fa-trash-alt"></i>
                                        </a>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')
 <script type="text/javascript">

 </script>
@endpush
