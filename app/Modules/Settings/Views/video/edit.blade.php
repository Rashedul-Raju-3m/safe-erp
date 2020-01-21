



@extends('backend.layout.master')
 @section('body')
            
            
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <h1>

        {{$ModuleTitle}}
        {{-- <small>Preview</small> --}}
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">{{$ModuleTitle.' > '.$pageTitle}}</a></li>
      </ol>

      <ol class="breadcrumb breadcrumbbutton">
        <a style="margin-left: 10px;" href="javascript:history.back()" class="btn btn-warning waves-effect pull-right">Back</a>

        <a style="margin-left: 10px;" href=" {{route('admin.frontvedio.create')}} " class="btn btn-primary waves-effect pull-right">Add Vedio</a>

        @if (\Request::route()->getName() == 'admin.frontvedio.index')
        	<a style="margin-left: 10px;" href=" {{route('admin.frontvedio.cancellist')}} " class="btn btn-primary btn-warning pull-right">Cancel List</a>
        @else 
        	<a style="margin-left: 10px;" href=" {{route('admin.frontvedio.index')}} " class="btn btn-primary btn-warning pull-right">Active List</a>
        @endif

        

        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       @include('backend.layout.msg')
      
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">{{$pageTitle}}</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">

          {!! Form::model($data, ['method' => 'PATCH', 'files'=> true, 'route'=> ['admin.frontvedio.update', $data->id],"class"=>"", 'id' => '']) !!}

      @include('Settings::video._form')

      {!! Form::close() !!}
        </div>
      </div>
      <!-- /.box -->

      

      

    </section>
    <!-- /.content -->
  </div>

@endsection

           