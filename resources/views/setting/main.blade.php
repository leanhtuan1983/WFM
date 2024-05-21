@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'SETTINGS','key'=>'TAB'])

<link rel="stylesheet" href="{{ asset('css/setting.css') }}">
<div class="ag-offer-block">
  <div class="ag-format-container">
    <ul class="ag-offer_list">
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
            <img src="{{ asset('img/user-role-svgrepo-com.svg') }}" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">
            ROLE
          </div>
        </div>
        <div class="ag-offer_hidden-item">
          <p class="ag-offer_text">
          <a href="{{ route('setting.role.index') }}">Tạo mới, chỉnh sửa hoặc xóa role</a>
          </p>
        </div>
      </li>
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
            <img src="{{ asset('img/permissionmanagerx-svgrepo-com.svg') }}" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">
            PERMISSION
          </div>
        </div>
        <div class="ag-offer_hidden-item">
          <p class="ag-offer_text">
            Gán quyền cho các Role 
          </p>
        </div>
      </li>
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
          <img src="{{ asset('img/user-add-svgrepo-com.svg') }}" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">
          CREATE USER
          </div>
        </div>
        <div class="ag-offer_hidden-item">
          <p class="ag-offer_text">
          <a href="{{ route('setting.user.create') }}">Tạo user mới</a>
          </p>
        </div>
      </li>
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
          <img src="{{ asset('img/trusted-user-svgrepo-com.svg') }}" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">
          USER AUTHORIZATION
          </div>
        </div>
        <div class="ag-offer_hidden-item">
          <p class="ag-offer_text">
            Phân quyền cho các user
          </p>
        </div>
      </li>
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-5.svg" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">
            Aliquam lorem
          </div>
        </div>
        <div class="ag-offer_hidden-item">
          <p class="ag-offer_text">
            Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius.
          </p>
        </div>
      </li>
      <li class="ag-offer_item">
        <div class="ag-offer_visible-item">
          <div class="ag-offer_img-box">
            <img src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_images/icon-64-6.svg" class="ag-offer_img" alt="" />
          </div>
          <div class="ag-offer_title">Phasellus</div>
        </div>
        <div class="ag-offer_hidden-item">
          <a href="#" class="ag-offer_btn">
            Dapibus viverra
          </a>
        </div>
      </li>
    </ul>
  </div>
</div>

@endsection