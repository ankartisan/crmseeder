@extends('master')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading list-page-header">
        <div class="col-lg-10">
            <h2>Contacts</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('dashboard') }}">Home</a>
                </li>
                <li class="active">
                    <strong>Contacts</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2 pos-rel">
            <a href="{{ route('contact.show', ['id' => 'new']) }}" type="button" class="btn btn-primary pull-right btn-new-entity">New Contact</a>
        </div>
    </div>
    <div class="row">
        <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row m-b-md">
                        <form id="search-form">
                            <input type="hidden" name="page" />
                            <div class="col-sm-3 col-xs-12">
                                <input type="text" placeholder="Search" name="search" class="input-sm form-control" />
                            </div>
                        </form>
                    </div>
                    <div class="list-container">
                        @include('contact/list')
                    </div>
                </div>
            </div>
    </div>
@stop
