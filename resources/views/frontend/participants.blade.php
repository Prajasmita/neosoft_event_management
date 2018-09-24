@extends('frontend.layouts.app')

@section('main-content')

    <!--About Us Area Start Here-->
    <div class="about-us-area pad-head bg-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        <div class="section-title text-center">
                            <h2>{{$event['title']}}</h2>
                        </div>
                        <ol class="breadcrumb">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li>|</li>
                            <li>Participants</li>
                        </ol>
                    </div>
                </div>
                <!-- /col-->
            </div>
            <!-- /row-->
        </div>
        <!--/ container-->
    </div>
    <!--About Us Area End Here-->

    <!--Whos Speaking Area Start Here-->
    <div class="whos-speaking-area speakers  pad100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <div class="title-text mb50">
                            <h2>All Participants</h2>
                        </div>
                    </div>
                </div>
                <!-- /col end-->
            </div>
            <!-- /.row  end-->
            <div class="row mb50">
                @foreach($participant_teams as $index => $team)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 participants-cards">
                    <div class="speakers xs-mb30">
                        <div class="">

                            @foreach($team['assets'] as $key => $asset)
                                    @if($asset['asset_type'] == 'image')
                                        @if($key ==0)
                                        <a href="{{$asset['assets']}}" data-lightbox="display{{$index}}">
                                            <img class="img-fluid" src="{{$asset['assets']}}" alt="trainer-img">
                                        </a>
                                        @else
                                        <a href="{{$asset['assets']}}" data-lightbox="display{{$index}}" style="display:none">
                                            <img class="img-fluid" src="{{$asset['assets']}}" alt="trainer-img">
                                        </a>
                                        @endif
                                    @else
                                        <iframe width="250" height="180" src="https://www.youtube.com/embed/sXmucZx5_ig" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen>
                                        </iframe>
                                    @endif
                            @endforeach
                            {{--<ul>--}}
                                {{--<li><a href="#" style="color:red">Click</a></li>--}}
                                {{--<li><a href="#" style="color:red">To</a></li>--}}
                                {{--<li><a href="#" style="margin-left: 15px;font-size: 20px;color:red">Vote</a></li>--}}
                            {{--</ul>--}}
                        </div>
                        <div class="spk-info">
                            <h3 style="font-size: 15px">{{$team['team_name']}}</h3>
                            <p>Captain,{{$team['contact_person']}}</p>
                            <button class="sub-btn btn-primary">
                                <a href="{{url('vote',$team['id'])}}">Vote</a>
                            </button>
                        </div>
                        <div style="display: none">
                            @foreach($team['assets'] as $asset)
                                <a href="#">{{$asset['assets']}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- /row end-->
        </div>
        <!-- /container end-->
    </div>

@endsection