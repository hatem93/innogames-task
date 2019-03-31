<div class="row" style="margin-top:10px;">
@foreach($nonFinishedRaces as $nonFinishedRace)
    <!-- Content Column -->
    <div class="col-lg-4 mb-4">
        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Race - {{$nonFinishedRace['race']->id}}</h6>
            </div>
            <div class="card-body">
                @foreach($nonFinishedRace['horses'] as $horse)
                    <h4 class="small font-weight-bold">{{$horse->name}} - {{$horse->time}} sec <span class="float-right">{{$horse->distanceCovered}} meter covered</span></h4>
                    <div class="progress mb-4">
                        @if($horse->percentage >= 66)
                        <div class="progress-bar bg-success" role="progressbar" style="width: {{round($horse->percentage)}}%" aria-valuenow="{{round($horse->percentage)}}" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($horse->percentage >= 33)
                            <div class="progress-bar bg-warning" role="progressbar" style="width: {{round($horse->percentage)}}%" aria-valuenow="{{round($horse->percentage)}}" aria-valuemin="0" aria-valuemax="100"></div>
                        @elseif($horse->percentage >= 0)
                            <div class="progress-bar bg-danger" role="progressbar" style="width: {{round($horse->percentage)}}%" aria-valuenow="{{round($horse->percentage)}}" aria-valuemin="0" aria-valuemax="100"></div>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endforeach
</div>
