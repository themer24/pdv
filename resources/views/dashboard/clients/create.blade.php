@extends('layouts.dashboard.app')
 @section('content')
 <div class="content-wrapper">

    <section class="content-header">

        <h1>@lang('site.clients')</h1>

        <ol class="breadcrumb">
        <li> <a href="{{route('dashboard.welcome')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a> </li>
        <li><a href="{{route('dashboard.clients.index')}}"> @lang('site.clients')</a> </li>
        <li class="active"> @lang('site.add')</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">@lang('site.add')</h3>
            </div>
            <div class="box-body">
                @include('partials._errors')

            <form action="{{route('dashboard.clients.store')}}" method="POST" >
                {{ csrf_field() }}
                {{ method_field('post') }}


                     <div class="form-group">
                        <label >@lang('site.name')</label>
                     <input type="text" name="name" id="" class="form-control" value="{{old('name')}}">
                     </div>

                     @for ($i = 0; $i < 2; $i++)
                     <div class="form-group">
                        <label >@lang('site.phone')</label>
                     <input type="text" name="phone[]" id="" class="form-control" >
                     </div>

                     @endfor

                     <div class="form-group">
                        <label >@lang('site.address')</label>
                     <textarea name="address" class="form-control" >{{old('address')}}</textarea>
                     </div>



                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-plus">@lang('site.add')</i></button>
                       </div>






                </form>
            </div>
        </div>
    </section>
 </div>

@endsection
