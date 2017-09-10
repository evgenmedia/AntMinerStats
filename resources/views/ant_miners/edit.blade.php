@extends('layouts.app')

@section('title',"Edit: \"$antMiner->title\" -")

@section('content')
    <section class="content-header">
        <h1>
            Edit miner: {!! $antMiner->title !!}
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($antMiner, ['route' => ['antMiners.update', $antMiner->id], 'method' => 'patch']) !!}
                        @include('ant_miners.fields')
                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection