@extends('./layout')

@section('content')
  <div  style="padding:50px 0;margin-left:50%;transform:translateX(-50%);"> 
<form action="/company/{{$company->id}}" method="POST">
        @csrf
        {{method_field('PATCH')}}
        <div class="container" style="padding:20px 0;">
                <h3>{{$title}}</h3>
            </div>
        <div class="container" style="padding:10px 0;">
            <div class="row" >
                <div class="col-md-12" >
                    <label for="companyName" class="h5">Name:</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="text" name="name" id="companyName" value="{{$company->name}}" placeholder="Name..." class="form-control" style="{{$errors->has('name') ?'border:2px solid tomato': ''}}">
                    </div>
            </div>
        </div>
        <div class="container" style="padding:10px 0;">
            <div class="row" >
                    <div class="col-md-12">
                        <label for="companyPhone" class="h5">Phone:</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="phone" id="companyPhone" value="{{$company->phone}}" placeholder="Phone..." class="form-control" style="{{$errors->has('phone') ?'border:2px solid tomato': ''}}">
                        </div>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding:20px 0 10px 0 ;">
                    <button type="submit" id="CompanyCreateButton" style="width:100%;background-color:#E01E5A;border:none;">
                        Update
                    </button>
                </div>
            </div>
        </div>
    
    </form>
    <form method="POST"  action="/company/{{$company->id}}">
        @csrf
        {{ method_field('DELETE')}}
         <button type="submit" class="btn btn-dark" style="width:100%;">
      Delete
         </button>
    </form>

</div>
@endsection