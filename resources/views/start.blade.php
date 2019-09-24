@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <prop-component :url_data="{{json_encode($url_data)}}">
                    </prop-component>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <ajax-component>

                    </ajax-component>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-body">
                    <line-chart-component>

                    </line-chart-component>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    import LineChart from "../js/components/LineChart";
    export default {
        components: {LineChart}
    }
</script>
