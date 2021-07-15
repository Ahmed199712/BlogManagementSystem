@php
    $route = Route::currentRouteName() 
@endphp
<div class="container-fluid">
    
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: hidden">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                        <a href="{{ route('admin.dashboard') }}" class="{{ $route == 'admin.dashboard' ? 'active' : '' }}">
                            <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{trans('backend.dashboard')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>
                    

                    <!-- Admins-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#admins-menu" class="{{ $route == 'admins.index' || $route == 'admins.create' || $route == 'admins.edit' || $route == 'admins.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-user-plus"></i><span class="right-nav-text">{{trans('backend.admins')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'admins.index' || $route == 'admins.create' || $route == 'admins.edit' || $route == 'admins.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="admins-menu" class="collapse {{ $route == 'admins.index' || $route == 'admins.create' || $route == 'admins.edit' || $route == 'admins.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('admins.index') }}" class="{{ $route == 'admins.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.admins_list')}}
                            </a></li>
                            <li><a href="{{ route('admins.create') }}" class="{{ $route == 'admins.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                    <!-- Admins Groups-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#admingroup-menu" class="{{ $route == 'admingroup.index' || $route == 'admingroup.create' || $route == 'admingroup.edit' || $route == 'admingroup.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-user-circle "></i><span class="right-nav-text">{{trans('backend.admingroup')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'admingroup.index' || $route == 'admingroup.create' || $route == 'admingroup.edit' || $route == 'admingroup.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="admingroup-menu" class="collapse {{ $route == 'admingroup.index' || $route == 'admingroup.create' || $route == 'admingroup.edit' || $route == 'admingroup.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('admingroup.index') }}" class="{{ $route == 'admingroup.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.admingroup')}}
                            </a></li>
                            <li><a href="{{ route('admingroup.create') }}" class="{{ $route == 'admingroup.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                    <!-- Users-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users-menu" class="{{ $route == 'users.index' || $route == 'users.create' || $route == 'users.edit' || $route == 'users.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-users"></i><span class="right-nav-text">{{trans('backend.users')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'users.index' || $route == 'users.create' || $route == 'users.edit' || $route == 'users.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="users-menu" class="collapse {{ $route == 'users.index' || $route == 'users.create' || $route == 'users.edit' || $route == 'users.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('users.index') }}" class="{{ $route == 'users.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.users')}}
                            </a></li>
                            <li><a href="{{ route('users.create') }}" class="{{ $route == 'users.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                    <!-- Category-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#categories-menu" class="{{ $route == 'categories.index' || $route == 'categories.create' || $route == 'categories.edit' || $route == 'categories.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-tags"></i><span class="right-nav-text">{{trans('backend.categories')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'categories.index' || $route == 'categories.create' || $route == 'categories.edit' || $route == 'categories.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="categories-menu" class="collapse {{ $route == 'categories.index' || $route == 'categories.create' || $route == 'categories.edit' || $route == 'categories.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('categories.index') }}" class="{{ $route == 'categories.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.categories')}}
                            </a></li>
                            <li><a href="{{ route('categories.create') }}" class="{{ $route == 'categories.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                     <!-- Tags-->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#tags-menu" class="{{ $route == 'tags.index' || $route == 'tags.create' || $route == 'tags.edit' || $route == 'tags.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-tag"></i><span class="right-nav-text">{{trans('backend.tags')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'tags.index' || $route == 'tags.create' || $route == 'tags.edit' || $route == 'tags.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="tags-menu" class="collapse {{ $route == 'tags.index' || $route == 'tags.create' || $route == 'tags.edit' || $route == 'tags.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('tags.index') }}" class="{{ $route == 'tags.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.tags')}}
                            </a></li>
                            <li><a href="{{ route('tags.create') }}" class="{{ $route == 'tags.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                    <!-- Posts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#posts-menu" class="{{ $route == 'posts.index' || $route == 'posts.create' || $route == 'posts.edit' || $route == 'posts.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-edit"></i><span class="right-nav-text">{{trans('backend.posts')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'posts.index' || $route == 'posts.create' || $route == 'posts.edit' || $route == 'posts.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="posts-menu" class="collapse {{ $route == 'posts.index' || $route == 'posts.create' || $route == 'posts.edit' || $route == 'posts.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('posts.index') }}" class="{{ $route == 'posts.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.posts')}}
                            </a></li>
                            <li><a href="{{ route('posts.create') }}" class="{{ $route == 'posts.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>

                   



                    <!-- All Comments -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#comments-menu" class="{{ $route == 'comments.index' || $route == 'comments.show' || $route == 'reply.index' || $route == 'reply.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fa fa-comments"></i><span class="right-nav-text">{{trans('backend.comments')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'comments.index' || $route == 'comments.create' || $route == 'comments.edit' || $route == 'comments.show' || $route == 'reply.index' || $route == 'reply.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="comments-menu" class="collapse {{ $route == 'comments.index' || $route == 'comments.create' || $route == 'comments.edit' || $route == 'comments.show' || $route == 'reply.index' || $route == 'reply.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('comments.index') }}" class="{{ $route == 'comments.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.comments')}}
                            </a></li>
                            <li><a href="{{ route('reply.index') }}" class="{{ $route == 'reply.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.comments_reply')}}
                            </a></li>

                        </ul>
                    </li>


                     

                    <!-- Messages -->
                    <li>
                        <a href="{{ route('messages.index') }}" class="{{ $route == 'messages.index' || $route == 'messages.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fa fa-envelope-o"></i><span class="right-nav-text">{{trans('backend.messages')}}</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>



                    <!-- Abouts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#abouts-menu" class="{{ $route == 'abouts.index' || $route == 'abouts.create' || $route == 'abouts.edit' || $route == 'abouts.show' ? 'active' : '' }}">
                            <div class="pull-left"><i class="fas fa-info-circle"></i><span class="right-nav-text">{{trans('backend.abouts')}}</span></div>
                            <div class="pull-right"><i class="ti-{{ $route == 'abouts.index' || $route == 'abouts.create' || $route == 'abouts.edit' || $route == 'abouts.show' ? 'minus' : 'plus' }}"></i></div>
                            <div class="clearfix"></div>
                        </a>

                        <ul id="abouts-menu" class="collapse {{ $route == 'abouts.index' || $route == 'abouts.create' || $route == 'abouts.edit' || $route == 'abouts.show' ? 'show' : '' }}" data-parent="#sidebarnav">

                            <!-- Links Here ........ -->

                            <li><a href="{{ route('abouts.index') }}" class="{{ $route == 'abouts.index' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'ar' ? 'left' : 'right' }} fa-fw" style="font-size:6px"></i> {{trans('backend.abouts')}}
                            </a></li>
                            <li><a href="{{ route('abouts.create') }}" class="{{ $route == 'abouts.create' ? 'activeLinks' : '' }}">
                                <i class="fa fa-chevron-{{ app()->getLocale() == 'en' ? 'right' : 'left' }} fa-fw" style="font-size:6px"></i>{{trans('backend.create_new')}}
                            </a></li>

                        </ul>
                    </li>



                     <!-- Sliders-->
                     


                    <!-- Visit Website -->
                    <li>
                        <a target="_blank" href="{{ url('/') }}" class="">
                            <div class="pull-left"><i class="ti-eye"></i><span class="right-nav-text">Visit Website</span>
                            </div>
                            <div class="clearfix"></div>
                        </a>
                    </li>

                    





                    <!-----------------------
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span class="right-nav-text">{{trans('main_trans.classes')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard"></i></i><span class="right-nav-text">{{trans('main_trans.sections')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#students-menu">
                            <div class="pull-left"><i class="fas fa-user-graduate"></i></i></i><span class="right-nav-text">{{trans('main_trans.students')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="students-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>



                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Teachers-menu">
                            <div class="pull-left"><i class="fas fa-chalkboard-teacher"></i></i><span class="right-nav-text">{{trans('main_trans.Teachers')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Teachers-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Parents-menu">
                            <div class="pull-left"><i class="fas fa-user-tie"></i><span class="right-nav-text">{{trans('main_trans.Parents')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Parents-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Accounts-menu">
                            <div class="pull-left"><i class="fas fa-money-bill-wave-alt"></i><span class="right-nav-text">{{trans('main_trans.Accounts')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Accounts-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="calendar.html">Events Calendar </a> </li>
                            <li> <a href="calendar-list.html">List Calendar</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Attendance-icon">
                            <div class="pull-left"><i class="fas fa-calendar-alt"></i><span class="right-nav-text">{{trans('main_trans.Attendance')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Attendance-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Exams-icon">
                            <div class="pull-left"><i class="fas fa-book-open"></i><span class="right-nav-text">{{trans('main_trans.Exams')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Exams-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-icon">
                            <div class="pull-left"><i class="fas fa-book"></i><span class="right-nav-text">{{trans('main_trans.library')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="library-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Onlineclasses-icon">
                            <div class="pull-left"><i class="fas fa-video"></i><span class="right-nav-text">{{trans('main_trans.Onlineclasses')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Onlineclasses-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Settings-icon">
                            <div class="pull-left"><i class="fas fa-cogs"></i><span class="right-nav-text">{{trans('main_trans.Settings')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Settings-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                            <div class="pull-left"><i class="fas fa-users"></i><span class="right-nav-text">{{trans('main_trans.Users')}}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="fontawesome-icon.html">font Awesome</a> </li>
                            <li> <a href="themify-icons.html">Themify icons</a> </li>
                            <li> <a href="weather-icon.html">Weather icons</a> </li>
                        </ul>
                    </li>

                    ------------------->

                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================