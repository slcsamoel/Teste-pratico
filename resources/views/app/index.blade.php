@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row pb-3">
        <div class="col">
            <h3>Meus Veiculos</h3>
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
                            <th scope="col" style="width:100px;">Marca</th>
                            <th scope="col" style="width:100px;">Ano</th>
                            <th scope="col">Renavam</th>
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
                                    
                                    {{ $veiculo->marca}}
                                
                                 </td>
                                 <td>
                                    
                                    {{ $veiculo->ano}}
                                
                                 </td>
                                 <td>
                                  {{ $veiculo->renavam}}                     
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
