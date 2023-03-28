@extends('main')

@section('title', 'SPJ')

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
                    <li class="active">Create</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah SPJ</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('spj') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
               <div class="row">
                   <div class="col-md-4 offset-md-4">
                       <form action="{{ url('spj') }}" method="post" enctype="multipart/form-data">
                        @csrf
                           <div class="form-group">
                               <label>Nama SPJ</label>
                               <select name="namaspj_id" class="form-control @error('namaspj_id') is-invalid @enderror">
                                    <option value="">--- Pilih ---</option>
                                    @foreach ($namaspjs as $item)
                                    <option value="{{$item->id}}" {{ old('namaspj_id') == $item->id ? 'selected' : null }}>{{$item->nama}}</option>
                                    @endforeach
                               </select>
                               @error('namaspj_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                           </div>
                           <div class="form-group">
                                <label>Upload SPJ</label>
                                <input type="file" name="dokumen" class="form-control @error('dokumen') is-invalid @enderror" value="{{ old('dokumen') }}" accept="pdf/*">
                                @error('dokumen')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        <button type="submit" class="btn btn-success">Save</button>
                       </form>
                   </div>    
                </div>      
               </div>
            </div>
        </div>
    </div>
</div>
@endsection