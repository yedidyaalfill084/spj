@extends('main')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>SPJ</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">SPJ</a></li>
                    <li><a href="#">Data</a></li>
                    <li class="active">Detail</li>
                </ol>
            </div>
        </div>
    </div>
</div>  
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Detail SPJ</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('spj') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
               <div class="row">
                   <div class="col-md-4 offset-md-4">
                    
                    {{-- {{ $data->dokumen }} --}}
                       <iframe src="{{url('storage/'.$data->dokumen)}}" frameborder="0"></iframe>

                       {{-- <iframe id="if1" width="100%" height="900" style="visibility:visible" src="{{$data->dokumen}}"></iframe> --}}

                       {{-- <object data="http://127.0.0.1:8000/storage/1679901000.pdf" type="application/pdf">
                        <embed src="http://127.0.0.1:8000/storage/1679901000.pdf" type="application/pdf" />
                      </object> --}}
                   </div>    
                </div>      
               </div>
            </div>
        </div>
    </div>
</div>
@endsection