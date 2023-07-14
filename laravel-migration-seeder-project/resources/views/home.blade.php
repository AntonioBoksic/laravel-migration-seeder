@extends("layouts/main-layout")

@section("content")

    <div>
        train journeys

        <ul>
            @foreach ($journeys as $journey)
            <li class="d-flex my-5">
                <div>
                    <strong>
                    Company:
                    </strong> <br>
                    {{$journey -> company}}
                </div>
                
                <div>
                    <strong>
                    Departure from station:
                    </strong> <br>
                    {{$journey -> station_departure}}
                </div>

                <div>
                    <strong>
                    Arrival at Station:
                    </strong> <br>
                    {{$journey -> station_arrival}}
                </div>

                <div>
                    <strong>
                    Departure Time:
                    </strong> <br>
                    {{$journey -> time_departure}}
                </div>

                <div>
                    <strong>
                    Arrival Time:
                    </strong> <br>
                    {{$journey -> time_arrival}}
                </div>

                <div>
                    <strong>
                    Train Code:
                    </strong> <br>
                    {{$journey -> train_code}}
                </div>

                <div>
                    <strong>
                    Number carriages:
                    </strong> <br>
                    {{$journey -> carriages}}
                </div>

                <div>
                    <strong>
                    On-time:
                    </strong> <br>
                    {{$journey -> on_time ? "yes" : "no"}}
                </div>

                <div>
                    <strong>
                    Canceled:
                    </strong> <br>
                    {{$journey -> canceled  ? "yes" : "no"}}
                </div>


            </li>
            @endforeach
        </ul>

    </div>


@endsection