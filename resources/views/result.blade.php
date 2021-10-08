@extends('layout.layout')
@section('content')
<!-- Start main-content -->
<div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="images/bg/bg6.jpg">
        <div class="container pb-20 pt-70">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="text-center col-md-12">
                        <h2 class="text-white title">Examination Result</h3>
                            <ol class="mt-10 text-center text-black breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Examination</a></li>
                                <li class="active text-gray-silver">Result</li>
                            </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: event calendar -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <!-- rendering -->
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                    @endif
                    @foreach ($results as $result)





                    <div class="mb-20 upcoming-events bg-white-f3">
                        <div class="row">

                            <div class="pl-20 col-sm-4 pl-sm-15">
                                <div class="mt-20 event-details p-15">

                                    <a href="{{ $result->link }}">
                                        <h4 class="media-heading text-uppercase font-weight-500">{{ $result->name }}
                                        </h4>
                                    </a>
                                    <ul class="mb-20 list-inline font-11">
                                        <li><i class="mr-5 fa fa-calendar"></i>{{ $result->date }}</li>

                                    </ul>


                                </div>
                            </div>

                        </div>
                    </div>

                    @endforeach

                    <div class="row">
                        <div class="col-sm-12">
                            <nav>
                                <ul class="pagination pull-right xs-pull-center mb-xs-40">
                                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">...</a></li>
                                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Search box</h5>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" placeholder="Click to Search"
                                            class="form-control search-input">
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn search-button"><i
                                                    class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-left mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Latest Result</h5>
                            <ul class="list list-divider list-border">
                                @foreach ($results as $result)




                                <li><a href="{{ $result->link }}"><i
                                            class="mr-10 fa fa-check-square-o text-black-light"></i>{{ $result->name }}</a>
                                </li>


                                @endforeach
                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- end main-content -->
@endsection
