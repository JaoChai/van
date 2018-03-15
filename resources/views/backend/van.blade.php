	@extends('layout.master')


	@section('content')

	        <div id="page-wrapper">
				 <div class="row">
					     	
					<form>
					  <div class="form-group">
					     <label>เลือกจังหวัด</label>
			                <select class="form-control">
			                    <option>1</option>
			                    <option>2</option>
			                    <option>3</option>
			                    <option>4</option>
			                    <option>5</option>
			                </select>
					  </div>

					    <div class="form-group">
					    <label>รูปสถานที่</label>
                		<input type="file">
					  </div>

					    <div class="form-group">
					    <label for="j">เวลา</label>
               			<textarea class="form-control" rows="3"></textarea>
					  </div>

					    <div class="form-group">
					    <label for="j">เบอร์โทร</label>
					    <input type="text" class="form-control" id="j">
					  </div>

					    <div class="form-group">
					    <label for="j">ต้นทาง</label>
					    <input type="text" class="form-control" id="j">
					  </div>

					      <div class="form-group">
					    <label for="j">ปลายทาง</label>
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
				<th>จังหวัด</th>
				<th>รูป</th>
			    <th>เบอร์โทร</th>
			    <th>ต้นทาง</th>
			     <th>ปลายทาง</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>John</td>
				<td>john@gmail.com</td>
				<td>john@gmail.com</td>
				<td>john@gmail.com</td>
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