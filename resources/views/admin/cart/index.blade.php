@extends('layouts.app')

@section('title', 'Cart')

@push('css')
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
	

@endpush

@section('content')
	<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @include('layouts.partial.msg')

              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Ordered Items</h4>

                </div>
                <div class="card-content">
                  <div class="table-responsive">
                    <table id="table" class="table table-striped" style="width:100%">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Item name
                        </th>
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                      </thead>
                      <tbody>
                      	 @foreach($cart as $key => $carts)

                      	 	<tr>
                      	 		<td>{{ $key + 1 }}</td>
                                <td>{{ $carts->item_name }}</td>
                      	 		<td>{{ $carts->created_at }}</td>
                      	 		<td>{{ $carts->updated_at }}</td>
                      	 	</tr>
                      	 @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0"> Table on Plain Background</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

@push('scripts')
	<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready(function()
		{
			$('#table').DataTable();
		}
		);
	</script>

@endpush