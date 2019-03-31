<h3>Last 5 races</h3>
@if(count($top5Races) == 0)
    <h4>There is no finished races yet!</h4>
@else
    <div class="row">
        @foreach($top5Races as $race)
            <div class="col-md-2 col-md-offset-1">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Race - {{$race['race']->id}}</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Time</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($race['horses'] as $horse)
                                    <tr>
                                        <td>{{$horse['name']}}</td>
                                        <td>{{$horse['time']}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif


