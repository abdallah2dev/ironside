@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card  box-solid">
                <div class="card-header bg-primary with-border">
                    <h3 class="card-title text-white">
                        <span><i class="fa fa-table"></i></span>
                        <span>{{ __('dashboard/indexes.list_all_cities') }}</span>
                    </h3>
                </div>

                @include('DH::partials.info')

                @include('DH::partials.toolbar')

                <div class="card-body">

                    <table id="tbl-list" data-server="false" class="dt-table table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>{{ __('dashboard/forms.title') }}</th>
                            <th>{{ __('dashboard/indexes.latitude') }}</th>
                            <th>{{ __('dashboard/indexes.longitude') }}</th>
                            <th>{{ __('dashboard/forms.province') }}</th>
                            <th>{{ __('dashboard/forms.action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->latitude }}</td>
                                <td>{{ $item->longitude }}</td>
                                <td>{!! $item->province->title !!}</td>
                                <td>
                                    {!! action_row($selectedNavigation->url, $item->id, $item->title, ['show', 'edit', 'delete']) !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection