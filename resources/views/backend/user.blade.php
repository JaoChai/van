	@extends('layout.master')


	@section('content')

	        <div id="page-wrapper">

	    <div class="row">

			
		<div class="panel-body">
			<table class="table">
		<thead>
			<tr>
				<th>ลำดับ</th>
				<th>ชื่อ</th>
			    <th>อีเมล์</th>
			    <th>เพศ</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>john@gmail.com</td>
				<td>john@gmail.com</td>
				<td>john@gmail.com</td>
				<td>
					 <button type="submit" class="btn btn-danger btn-sm">Delete</button>
				</td>
			</tr>

		</tbody>
	</table>			
	</div>
	   	</div>
	</div>


	@endsection