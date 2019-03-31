<h3>Best Horse</h3>
@if($topHorse == "No horse have finished a race yet!")
    <h4>{{$topHorse}}</h4>
@else
<div class="row">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Race 1</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Time</th>
                        <th>Strength</th>
                        <th>Edurance</th>
                        <th>Speed</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr>
                        <td>{{$topHorse->name}}</td>
                        <td>{{$topHorse->time}}</td>
                        <td>{{$topHorse->strength}}</td>
                        <td>{{$topHorse->endurance}}</td>
                        <td>{{$topHorse->speed}}</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif