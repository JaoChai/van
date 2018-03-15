	@extends('layout.master')


	@section('content')

	        <div id="page-wrapper">
				 <div class="row">
					     	
					<form>
					  <div class="form-group">
					    <label for="j">เพิ่มจังหวัด</label>
					    <input type="text" class="form-control" id="j">
					  </div>

					  <button type="submit" class="btn btn-info">Save</button>
					</form>

	   			</div>

	    <div class="row">

			
		<div class="panel-body">
			<table class="table">
		<thead>
			<tr>
				<th>ลำดับ</th>
				<th>จังหวัด</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>john@gmail.com</td>
				<td>
					 <button type="submit" class="btn btn-primary btn-sm">Edit</button>
					 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</td>
			</tr>

		</tbody>
	</table>			
	</div>
	   	</div>
	</div>


	@endsection