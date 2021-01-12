@extends('layouts.dashboard.app')
 @section('content')
 <div class="content-wrapper">

    <section class="content-header">

        <h1>@lang('site.categories')</h1>

        <ol class="breadcrumb">
        <li> <a href="{{route('dashboard.welcome')}}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a> </li>
        <li><a href="{{route('dashboard.categories.index')}}"> @lang('site.categories')</a> </li>
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

            <form action="{{route('dashboard.categories.store')}}" method="POST" >
                {{ csrf_field() }}
                {{ method_field('post') }}

                 @foreach (config('translatable.locales') as $locale)
                 <div class="form-group">
                    <label>@lang('site.'.$locale.'.name')</label>
                    <input type="text" name="{{$locale}}[name]" class="form-control" id="" value="{{old($locale.'.name')}}">

                  </div>

                 @endforeach

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> <i class="fa fa-plus">@lang('site.add')</i></button>
                       </div>






                </form>
            </div>
        </div>
    </section>
 </div>

@endsection
