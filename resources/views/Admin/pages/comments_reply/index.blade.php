@extends('Admin.layouts.master')

@section('css')

@section('title')
    {{ trans('backend.comments_reply') }}
@stop

@endsection
@section('page-header')
<!-- breadcrumb -->

@section('PageTitle')
    {{ trans('backend.comments_reply') }}
@stop

@section('PageButton')
    <!--<a href="{{ route('comments.create') }}" class="btn btn-primary" style="border-radius:0">{{ trans('backend.create_new') }}</a>-->
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
                            <th>{{ trans('backend.reply') }}</th>
                            <th>{{ trans('backend.comment') }}</th>
                            <th>{{ trans('backend.user') }}</th>
                            <th>{{ trans('backend.date') }}</th>
                            <th width="7%">{{ trans('backend.manage') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $comments_reply as $index => $reply )
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $reply->comment_reply }}</td>
                                <td>{{ $reply->comment->comment }}</td>
                                <td>{{ $reply->user->name }}</td>
                                <td>{{ $reply->created_at->format('Y-m-d') }} <br> {{ $reply->created_at->format('H:i A') }}</td>
                                
                                <td class="nav-item dropdown myActionsMenu">
                                    <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <div class="dropdown-menu myActionsMenu dropdown-menu-right dropdown-big dropdown-notifications">
                                        <form action="{{ route('reply.destroy' , $reply->id) }}" method="POST" style="display:inline">
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
