@extends('admin.layouts.master')

@section('content')
<div class="container mt-5">
    <div class="row ">
        <div class="col-md-12">

            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">All Users</li>
              </ol>
            </nav>
            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

         
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Start Date</th>
                    <th>Address</th>
                    <th>Mobile</th>
                    
                </tr>
            </thead>
           
            <tbody>
                @if(count($users)>0)
                @foreach($users as $key=>$user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img src="{{asset('profile')}}/{{$user->image}}"></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->description}}</td>

                    <td>
                        <a href="{{route('departments.edit',[$department->id])}}"><i class="fas fa-edit"></i></a>
                    </td>
                       
                    <td>
                       
                        <a href="#" data-toggle="modal" data-target="#exampleModal{{$department->id}}">
                        <i class="fas fa-trash"></i>
                         </a>
                 
                        <!-- BS Modal -->
                <div class="modal fade" id="exampleModal{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <form action="{{route('departments.destroy',[$department->id])}}" method="post">@csrf
                        {{method_field('DELETE')}}
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      
                        Do you want to delete?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
                <!--Modal end-->
                        <!--Modal end-->

                   
                    </td>
                
                
                </tr>
                @endforeach
                @else
                <td>No users to display</td>
                @endif
               
               
              
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
