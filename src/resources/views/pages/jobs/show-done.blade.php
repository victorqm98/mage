@extends('mage::layout.page')
@section('web-title', __('backend.done-jobs.index.web-title'))
@section('page-title', __('backend.done-jobs.index.page-title'))
@section('breadcrumbs')
<li class="breadcrumb-item"><a
    href="{{route('backend.jobs.index')}}">@lang('backend.done-jobs.index.breadcrumb.title')</a>
</li>
<li class="breadcrumb-item active">{{$job['id']}}</li>
@endsection
@section('page')
<div class="container">

    <div class="card" style="background: transparent; border:0; box-shadow: none">
        <ul class="nav nav-tabs profile-tab" role="tablist" style="background: white">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#details" role="tab" aria-selected="true">@lang('backend.done-jobs.show.details')</a>
            </li>
        </ul>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title font-weight-bold">@lang('backend.done-jobs.show.title')</h3>
        </div>
    
        <div class="greyed card-body">
            <div class="row">
                <div class="row col-12 m-0" style="text-align: left">
                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.id')}}</div>
                        <div>
                            {{$job['id'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.connection')}}</div>
                        <div>
                            {{$job['connection'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.queue')}}</div>
                        <div>
                            {{$job['queue'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-6 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.job')}}</div>
                        <div>
                            {{$job['job'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-12 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.payload')}}</div>
                        <div>
                            @if(isset($job['payload']))
                                <div class="row">
                                    @foreach ($payload as $item)
                                        <div class="col-12">
                                            {{$item}}
                                            <br><br>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <p>-</p>
                            @endif
                        </div>
                    </div>

                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.attempts')}}</div>
                        <div>
                            {{$job['attempts'] ?? '-'}}
                        </div>
                    </div>
    
                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.done_at')}}</div>
                        <div>
                            {{$job['done_at'] ?? '-'}}
                        </div>
                    </div>

                    <div class="col-4 mb-5">
                        <div class="mb-2 font-weight-bold">{{__('backend.done-jobs.show.created_at')}}</div>
                        <div>
                            {{$job['created_at'] ?? '-'}}
                        </div>
                    </div>
                </div>
                <input id="inputhid" type="hidden" value="">
            </div>
        </div>
    </div>
    

</div>
@endsection