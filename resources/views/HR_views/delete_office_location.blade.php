@include('HR_views.navigation_header')
		<div id="page-wrapper">
				<div class="graphs">
					<h3 class="blank1">Delete Office Location</h3>
			<div class="panel-body1">
					   
		<form role="form" class="form-horizontal" method="POST" action="{{ url('confirm_office_location_delete') }}">
			
			<div class="form-group">
				<label class="col-md-2 control-label">Office Location Name</label>
				<div class="col-md-8">
					<div class="input-group in-grp1">							
						<input type="hidden" value="{{$officeLocationName}}" name="prevOfficeLocationName">
						<input type="text" class="form-control1" name="officeLocationName" value="{{$officeLocationName}}"readonly>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			
			<br><br>
			
			
			<div class="form-group">
				<div class="col-md-8">
					<div class="input-group in-grp1">							
						{!! Form::token() !!}
						<input type="submit" class="btn btn-lg btn-success form-control1" name="addOfficeLocation" value="Delete Office Location"style="background-color:#C40401; color:white">
					</div>
			<div class="clearfix"> </div>
			</div>
			
			
			
			

					</form>
			</div>
		</div>
	</div>
@include('HR_views.navigation_footer')