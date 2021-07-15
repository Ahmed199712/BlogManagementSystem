@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.users') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->

@section('PageTitle')
    {{ trans('backend.users') }}
@stop

@section('PageButton')
    <a href="{{ route('users.create') }}" class="btn btn-primary" style="border-radius:0">{{ trans('backend.create_new') }}</a>
@stop

<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->

<div class="mainContent">

    <div class="card" style="border-top:3px solid #639a40">
        <div class="card-body">
        
            <div class="table table-responsive">
                <table id="datatable" class="table table-hover table-bordered text-center">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ trans('backend.image') }}</th>
                            <th>{{ trans('backend.name') }}</th>
                            <th>{{ trans('backend.email') }}</th>
                            <th>{{ trans('backend.phone') }}</th>
                            <th>{{ trans('backend.date') }}</th>
                            <th width="7%">{{ trans('backend.manage') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $users as $index => $user )
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    <img src="{{ asset($user->avatar) }}" style="width:40px;height:35px" alt="">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->created_at->format('Y-m-d') }} <br> {{ $user->created_at->format('H:i A') }}</td>
                                
                                <td class="nav-item dropdown myActionsMenu">
                                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu myActionsMenu dropdown-menu-right dropdown-big dropdown-notifications">
                                        <a title="{{ trans('backend.show') }}" class="dropdown-item" href="{{ route('users.show' , $user->id) }}"><i class="fa fa-eye fa-fw"></i> {{ trans('backend.show') }} </a>
                                        <a title="{{ trans('backend.edit') }}" class="dropdown-item" href="{{ route('users.edit' , $user->id) }}"><i class="fa fa-pencil fa-fw"></i> {{ trans('backend.edit') }} </a>
                                        <form action="{{ route('users.destroy' , $user->id) }}" method="POST" style="display:inline">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button title="{{ trans('backend.delete') }}" type="submit"  class="dropdown-item delete" style="cursor:pointer">
                                                <i class="fa fa-trash fa-fw"></i> {{ trans('backend.delete') }}
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

<!-- row closed -->
@endsection

@section('js')

@endsection
