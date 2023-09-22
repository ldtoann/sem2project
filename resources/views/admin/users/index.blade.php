@extends('admin.layout')
@section('title', 'index user')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    USER
                </h3>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                <div class="kt-subheader__group" id="kt_subheader_search">
                    <span class="kt-subheader__desc" id="kt_subheader_total">
                    </span>

                    <form class="kt-margin-l-20" id="kt_subheader_search_form">
                        <div class="kt-input-icon kt-input-icon--right kt-subheader__search">
                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                            <span class="kt-input-icon__icon kt-input-icon__icon--right">
                                <span>
                                    <i class="kt-nav__link-icon flaticon2-search-1" style="color: rgb(145,7,7); font-weight: 900;"></i>
                                </span>
                            </span>
                        </div>
                    </form>
                </div>
                <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                @if(Session::has('message'))
                <h3 class="kt-subheader__title" style="color: green;">
                    {{Session::get('message')}}
                </h3>
                @endif
            </div>
            <div class="kt-subheader__toolbar">
                <a href="#" class="">
                </a>
                <a href="{{ route('admin.users.create') }}" class="btn btn-lg btn-upper " style="color: white; background-color: rgb(145,7,7);"> ADD USER </a>
                <div class="kt-subheader__wrapper">
                    <div class="dropdown dropdown-inline" data-toggle="kt-tooltip-" title="Quick actions" data-placement="left">
                        <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24" />
                                    <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                    <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000" />
                                </g>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            @foreach ($userList as $user)
            <div class="col-xl-3">
                <div class="kt-portlet kt-portlet--height-fluid">
                    <div class="kt-portlet__head kt-portlet__head--noborder">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">
                            </h3>
                        </div>
                        <div class="kt-portlet__head-toolbar">
                            <a href="#" class="btn btn-icon" data-toggle="dropdown" aria-expanded="false">
                                <i class="flaticon-more-1" style="color: rgb(145,7,7);"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(260px, 49px, 0px);">
                                <ul class="kt-nav">
                                    <li class="kt-nav__item">
                                        <a type="submit" class="kt-nav__link" href="{{ route('admin.users.edit', $user->id) }}" style="color: black;">
                                            <i class="kt-nav__link-icon flaticon2-pen"></i>
                                            <span class="kt-nav__link-text">EDIT</span>
                                        </a>
                                    </li>
                                    <li class="kt-nav__item">
                                        <a href="#" class="kt-nav__link">
                                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="margin-top: 10px;">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <i class="kt-nav__link-icon flaticon2-delete"></i>
                                                <button type="submit" style="color: black; border: none; margin-top: -5px; background:none;"><span class="kt-nav__link-text">DELETE</span></button>
                                            </form>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        <div class="kt-widget kt-widget--user-profile-2">
                            <div class="kt-widget__head">
                                <div class="kt-widget__media">
                                    @php $thumbnail = $user->getMedia('images')->first() @endphp
                                    @if($thumbnail)
                                    <img class="kt-widget__img kt-hidden-" src="{{ $thumbnail->getUrl() }}" alt="image" width="100px" height="90px" style="object-fit: cover;">
                                    @endif
                                    <div class="kt-widget__pic kt-widget__pic--success kt-font-success kt-font-boldest kt-hidden">

                                    </div>
                                </div>
                                <div class="kt-widget__info">
                                    <a href="#" class="kt-widget__username">
                                        {{ $user->name }}
                                    </a>
                                    <span class="kt-widget__desc">
                                        {{ $user->role }}
                                    </span>
                                </div>
                            </div>
                            <div class="kt-widget__body">
                                <div class="kt-widget__section">
                                </div>
                                <div class="kt-widget__item">
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Email:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->email }}</a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Role:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->role }}</a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Create:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->created_at }}</a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Update:</span>
                                        <a href="#" class="kt-widget__data">{{ $user->updated_at }}</a>
                                    </div>
                                    <div class="kt-widget__contact">
                                        <span class="kt-widget__label">Location:</span>
                                        <span class="kt-widget__data">VIET NAM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection