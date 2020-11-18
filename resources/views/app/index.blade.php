@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="row">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-condensed">
                    <thead>
                        <tr>
                            <th scope="col" class="d-print-none" style="width:50px;">ID</th>
                            <th scope="col">Título</th>
                            <th scope="col">Ano</th>
                            <th scope="col" class="d-print-none" style="width:150px;">Ação</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($whoWeAre->galleryStories as $gallery)
                            <tr>
                                <td>{{ $gallery->id }}</td>
                                <td>
                                    <a href="{{ route('panel.cms.who-we-are.galleryEdit', ['whoWeAre' => $whoWeAre->id, 'gallery' => $gallery->id]) }}">
                                        {{ $gallery->title }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('panel.cms.who-we-are.galleryEdit', ['whoWeAre' => $whoWeAre->id, 'gallery' => $gallery->id]) }}">
                                        {{ $gallery->year}}
                                    </a>
                                </td>
                                <td>
                                    @can('update')
                                        <a href="{{ route('panel.cms.who-we-are.galleryEdit', ['whoWeAre' => $whoWeAre->id, 'gallery' => $gallery->id]) }}" class="btn btn-sm btn-info mx-1">
                                            <i class="fas fa-fw fa-edit"></i>
                                        </a>

                                        <button class="btn btn-sm btn-danger delete-registry mx-1" data-ref="galleries-delete" data-href="{{ route('panel.cms.who-we-are.galleryDestroy', ['product' => $whoWeAre->id, 'gallery' => $gallery->id]) }}">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody> --}}
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
