



@extends('backend.layout.master')
      

            @section('body')
            
            
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

      <h1>
        {{$ModuleTitle}}
      </h1>

      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('admin.member.index')}}">{{$ModuleTitle.' > '}}</a><a href="{{route('admin.member.create')}}">{{$pageTitle}}</a></li>
      </ol>

      <ol class="breadcrumb breadcrumbbutton">
        <a style="margin-left: 10px;font-weight: bold;" href="javascript:history.back()" class="btn btn-warning waves-effect pull-right">Back</a>
        
        @if (Route::currentRouteName() != 'admin.member.inactive')
        <a style="margin-left: 10px;font-weight: bold;" href=" {{route('admin.member.inactive')}} " class="btn btn-danger waves-effect pull-right">Inactive Member</a>
        @endif
        
        @if (Route::currentRouteName() != 'admin.member.index')
          <a style="margin-left: 10px;font-weight: bold;" href=" {{route('admin.member.index')}} " class="btn btn-success waves-effect pull-right">Active Member</a>
        @endif
        
        @if (Route::currentRouteName() != 'admin.member.create')
        @if (Auth::user()->type == 'Admin')

        <a style="margin-left: 10px;font-weight: bold;" href=" {{route('admin.member.create')}} " class="btn btn-primary waves-effect pull-right">Add Member</a>
        @endif
        @endif
        
      </ol>

      
    </section>
    <!-- Main content -->
    <section class="content">
       @include('backend.layout.msg')

      <div class="row">
        <div class="col-md-12">
                  <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$pageTitle}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table  id="example1" class="table table-bordered table-striped text-center">
                <thead>

                <tr>
                  <th>Sl No</th>
                  <th style="background: rgb(126, 172, 206);">Name</th>
                  <th> ID </th>
                  <th> Nominee </th>
                  <th> Extra </th>
                  <th> Details </th>
                  <th> Type</th>
                  <th> Action </th>
                </tr>
                </thead>
<tbody>
@if(count($data) > 0)
<?php
$total_rows = 1;
?>
@foreach($data as $values)


<tr>
  <td style="vertical-align: middle;"><?=$total_rows?></td>
  <td style="vertical-align: middle;"><img src="{{URL::to('')}}/uploads/member/{{$values->image_link}}" class="img-circle" style="width: 50px;
height: 50px;" alt="User Image"><br>{{$values->name}}<br>{{' 0'.$values->mobile  }}</td>
  <td style="vertical-align: middle;">
{{'M-ID : '.$values->member_id}}<br>{{'N-ID : '.$values->national_id}}
</td>
<td style="vertical-align: middle;">{{$values->nominee}}<br>{{'N-ID : '.$values->nominee_n_id}}<br>{{'0'.$values->nominee_mobile}}</td>
<td style="vertical-align: middle;">{{$values->religion}}<br>{{$values->gender}}</td>
<td style="vertical-align: middle;">{{$values->join_time}}
                          <br>{{ $values->join_day}}
                          <br>{{$values->join_date  }}</td>
<td style="vertical-align: middle;">

@php
if ($values->type == 'Admin') {
$raju = 'btn-success';
}

if ($values->type == 'Chairman') {
$raju = 'btn-warning';
}

if ($values->type == 'General secretary') {
$raju = 'btn-primary';
}
if ($values->type == 'Member') {
$raju = 'btn-danger';
}
@endphp

<span class="btn {{$raju}}">{{$values->type}}</span>


</td>

<td style="vertical-align: middle;">

{{-- <a title="VIEW" target="new" style="border: 1px solid;padding: 2px 5px;" href="{{ route('admin.member.show', $values->id) }}" ><i class="fa fa-eye"></i></a> --}}

@if (isset($Cancel) && $Cancel == 'Cancel')
<a title="ROLL BACK" target="new"  style="border: 1px solid;padding: 2px 5px;" href="{{ route('admin.member.rollback', $values->id) }}"  onclick="return confirm('Move to active member?')" ><i class="fa fa-repeat" aria-hidden="true"></i></a>


@if (Auth::user()->type == 'Admin')

<a title="PARMANENT DELETE" target="new"  style="border: 1px solid;padding: 2px 5px;" href="{{ route('admin.member.delete', $values->id) }}"  onclick="return confirm('Are you sure to parmanent delete?')" ><i class="fa fa-trash"></i></a>
@endif

@else
@if ((Auth::user()->type == 'Admin') || (Auth::user()->user_id == $values->id))

<a title="EDIT" target="new"  style="border: 1px solid;padding: 2px 5px;" href="{{ route('admin.member.edit', $values->id) }}" ><i class="fa fa-edit"></i></a>
@endif
<a title="Inactive" target="new"  style="border: 1px solid;padding: 2px 5px;" href="{{ route('admin.member.destroy', $values->id) }}"  onclick="return confirm('Are you sure to Inactive?')" ><i class="fa fa-ban" aria-hidden="true"></i>
</a>
@endif
</td>
</tr>
<?php
$total_rows++;
?>
@endforeach
@endif
</tbody>
              </table>
            </div>
            <!-- /.box-body -->
        
           
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
            
    </section>
    <!-- /.content -->
  </div>
@endsection

           

