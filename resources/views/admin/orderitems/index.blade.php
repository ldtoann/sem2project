@extends('admin.layout')
@section('title', 'index order item')
@section('content')
<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <h3 class="kt-subheader__title">
                    ORDER ITEM
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
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect id="bound" x="0" y="0" width="24" height="24" />
                                            <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" id="Path-2" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" id="Path" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="kt-subheader__toolbar">
                <a href="#" class="">
                </a>
                <!-- <a href="{{ route('admin.categories.create') }}" class="btn btn-label-danger btn-lg btn-upper " style="color: black;"> ADD CATEGORY </a> -->
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
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--error kt-datatable--loaded" id="kt_apps_user_list_datatable" style="">
                <table class="kt-datatable__table" style="display: block;">
                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row">
                            <th style="width: 10%;" class="kt-datatable__cell"><span>NO.</span></th>
                            <th style="width: 10%;" class="kt-datatable__cell"><span>QUANTITY</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>PRODUCT_ID</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>ORDER_ID</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>CREATE</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>UPDATE</span></th>
                            <th style="width: 10%;" class="kt-datatable__cell"><span>EDIT</span></th>
                            <th style="width: 10%;" class="kt-datatable__cell"><span>DELETE</span></th>
                        </tr>
                    </thead>
                    @php $i = 0 @endphp
                    @foreach ($orderitemList as $orderitem)
                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row">
                            <th style="width: 10%;" class="kt-datatable__cell"><span>{{ increment($i) }}</span></th>
                            <th style="width: 10%; padding-left: 35px;" class="kt-datatable__cell"><span>{{ $orderitem->quantity }}</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>{{ $orderitem->product->name }}({{ $orderitem->product_id }})</span></th>
                            <th style="width: 15%; padding-left: 35px;" class="kt-datatable__cell"><span>{{ $orderitem->order_id }}</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>{{ $orderitem->created_at }}</span></th>
                            <th style="width: 15%;" class="kt-datatable__cell"><span>{{ $orderitem->updated_at }}</span></th>
                            <th style="width: 10%;" class="kt-datatable__cell"><span><a type="submit" href="{{ route('admin.orderitems.edit', $orderitem->id) }}">EDIT</a></span></th>
                            <th style="width: 10%;" class="kt-datatable__cell">
                                <form action="{{ route('admin.orderitems.destroy', $orderitem->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" style="color: red; border: none; background:none;"><span class="kt-nav__link-text">DELETE</span></button>
                                </form>
                            </th>
                        </tr>
                    </thead>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-pagination kt-pagination--brand">
                            <ul class="kt-pagination__links">
                                <li class="kt-pagination__link--first">
                                    <a href="#"><i class="fa fa-angle-double-left kt-font-brand"></i></a>
                                </li>
                                <li class="kt-pagination__link--next">
                                    <a href="#"><i class="fa fa-angle-left kt-font-brand"></i></a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">29</a>
                                </li>
                                <li>
                                    <a href="#">30</a>
                                </li>
                                <li class="kt-pagination__link--active">
                                    <a href="#">31</a>
                                </li>
                                <li>
                                    <a href="#">32</a>
                                </li>
                                <li>
                                    <a href="#">33</a>
                                </li>
                                <li>
                                    <a href="#">34</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>

                                <li class="kt-pagination__link--prev">
                                    <a href="#"><i class="fa fa-angle-right kt-font-brand"></i></a>
                                </li>
                                <li class="kt-pagination__link--last">
                                    <a href="#"><i class="fa fa-angle-double-right kt-font-brand"></i></a>
                                </li>
                            </ul>
                            <div class="kt-pagination__toolbar">
                                <select class="form-control kt-font-brand" style="width: 60px">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                <span class="pagination__desc">
                                    Displaying 10 of 230 records
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection