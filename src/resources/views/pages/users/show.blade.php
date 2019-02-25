@extends('mage::layout.page')
@section('title', __('mage.users.index.title'))
@section('page-title', __('mage.users.index.title'))
@section('breadcrumbs')
<li class="breadcrumb-item">@lang('mage.users.index.title')</li>
<li class="breadcrumb-item active">@lang('mage.users.show.title')</li>
@endsection

@section('page')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">@lang('mage.users.show.title')</h3>
        <div class="card-tools">
            
        </div>
    </div>
    <div class="card-body">
    </div>
</div>
@endsection