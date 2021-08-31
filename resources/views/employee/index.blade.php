@extends("employee.master")
@section("contenu")

<div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - laravelcode.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('employee.create') }}"> Create New Employee</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>cin</th>
            <th>nom et prenom</th>
            <th>tel</th>
            <th>Email</th>
            <th>Adresse</th>


<th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->cin }}</td>
            <td>{{ $value->nom }} {{ $value->prenom }}</td>
            <td>{{ $value->tel }}</td>
            <td>{{ $value->email }}</td>
            <td>{{ $value->adresse }}</td>
            <td>
                <form action="{{ route('employee.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('employee.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('employee.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!} 
@endsection