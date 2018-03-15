	@extends('layout.master')


	@section('content')

	        <div id="page-wrapper">
				 <div class="row">
					     	
					<form>
					  <div class="form-group">
					     <label>จังหวัด</label>
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
	</div>


	@endsection