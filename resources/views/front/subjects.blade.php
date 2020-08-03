@extends('layouts.bg_layout')

@section('head')
    <link rel="stylesheet" href="{{asset('DataTables/css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')

        <section class="inner-banner">
            <div class="container">
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><a href="#">Subjects</a></li>
                </ul><!-- /.list-unstyled -->
                <!-- <h2 class="inner-banner__title"> </h2>  -->
                <div class="m-4"></div>
            </div><!-- /.container -->
        </section><!-- /.inner-banner -->

        <div class="m-5"></div>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"> <!-- left sidebar  -->

                    <nav class="dashboard-sidebar">
                        <ul class="list-unstyled">
                            <li>
                                <div>
                                    <a href="#" class="selected type-menu" id="all" onclick="typeFunction({{$data}})"><span> All </span></a>
                                </div>
                            </li>
                            @foreach( $type as $each)
                                <li>
                                    <a href="#" class="type-menu" id="{{$each['type']}}"  onclick="typeFunction({{$data}})"><span></span>{{$each['type']}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>

                    <div class="col-md-9"><!-- body content start -->
                        <div id="insertTable"></div>
                        <div id="datatable">
                            <table id="datatable_1" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Subject Title</th>
                                    <th>Type</th>
                                    <th>Language Medium</th>
                                    <th>Subject Code</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $No = 1?>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$No++}}</td>
                                        <td><a href = "{{$item['url']}}">{{$item['subjectTitle']}}</a></td>
                                        <td>{{$item['type']}}</td>
                                        <td>{{$item['languageMedium']}}</td>
                                        <td>{{$item['subjectCode']}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="m-5"></div>
@endsection

@section('foot')
    <script src="{{asset('DataTables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-datatable.js')}}"></script>
@endsection
