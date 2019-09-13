@extends('./layout')

@section('content')
<div style="padding:50px 0;font-size:30px; ">
   List of кон tracktors: 
</div>
<table class="table table-hover" style="width:100%;">
        <thead>
                <tr>
                    <th>ID</th>
             
           
                      <th>Name</th>
              
                            <th>Phone</th>
                            <th>Created At</th>
                            <th></th>
                            <th></th>
                        </tr>
        </thead>
        <tbody>
    @foreach($companies as $company)
     
    <tr>

   
            <td style="width:10%">
                    <a href="/company/{{$company->id}}">
                    
                    {{$company->id}}
                    </a>
                    </td>
        <td style="width:25%">
                <a href="/company/{{$company->id}}">
        {{$company->name}}
                </a>
        </td>
        <td style="width:25%">
                <a href="/company/{{$company->id}}">
            {{$company->phone}}
                </a>
    
        </td>
        <td style="width:25%">
                <a href="/company/{{$company->id}}">
            {{$company->created_at}}
                </a>
    
        </td>
        <td style="width:7.5%">
                <a href="/company/{{$company->id}}/edit">
               <button  class="btn btn-info">
                     Edit
              </button>
                </a>
            </td>
        <td style="width:7.5%">
             <form method="POST" action="/company/{{$company->id}}">
                    @csrf
                    {{ method_field('DELETE')}}
            <button type="submit" class="btn btn-dark">
                  Delete
           </button>
         </form>
         </td>


    </tr>

    @endforeach
        </tbody>
    
</table>
@endsection