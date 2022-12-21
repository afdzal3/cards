@extends('layouts.blank')

@section('title', 'Page Title')


@section('content')
<div class="row">
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header">SQL01 -ORIGINAL</div>
            <div class="card-body scroll">
                <pre>
                {{$sql01}}

                </pre>
            </div>
            <div class="card-body scroll">
                <div class="alert alert-success">

                    {{$time1}}
                    <p>
                        {{date('H:i:s.u', $time1)}}
                    </p>
                </div>


            </div>

        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">SQL02</div>
            <div class="card-body">
                <div class="scroll row">
                    <pre>
                {{$sql02}}

                </pre>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="alert alert-success">
                            {{$time2}}
                            <p>
                                {{date('H:i:s.u', $time2)}}
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="alert alert-warning">
                            {{$diffRatio}}% faster

                        </div>
                    </div>

                </div>
            </div>
        </div>




    </div>
</div>

<div class="alert alert-info">
Explanation: Remove "group by". This is not aggreagte query.
</div>   






@stop