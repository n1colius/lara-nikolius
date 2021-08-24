@extends('layouts.default')
@section('content')

<div class="container-fluid p-0">
	<section class="resume-section">
        <div class="resume-section-content row">

        	<h3>Fun Projects</h3>
        	<br><br><br>

        	<div class="container">
        		<div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3">

        			<div class="col">
        				<div class="card" style="border:none;">
        					<img src="{{url('/')}}/assets/img/logodota.jpg" class="card-img-top" style="width:150px;">
        					<div class="card-body">
        						<h5 class="card-title"><a href="{{ route('dotahero') }}">Dota 2 Heroes</a></h5>
        					</div>

        				</div>
        			</div>

                    <div class="col">
                        <div class="card" style="border:none;">
                            <img src="{{url('/')}}/assets/img/logo-dota-putih.png" class="card-img-top" style="width:150px;">
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{ route('dota_analysis') }}">Dota 2 Match Analysis</a></h5>
                            </div>

                        </div>
                    </div>

        		</div>
        	</div>

        </div>
    </section>
</div>

@endsection