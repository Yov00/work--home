@extends('./layout')

@section('content')
  
    <form action="/company" method="POST" style="padding:50px 0;margin-left:50%;transform:translateX(-50%);">
        @csrf
  
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
                    <input type="text" name="name" id="companyName" value="{{old('name')}}" placeholder="Name..." class="form-control" style="{{$errors->has('name') ?'border:2px solid black': ''}}">
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
                        <input type="text" name="phone" id="companyPhone" value="{{old('phone')}}" placeholder="Phone..." class="form-control" style="{{$errors->has('phone') ?'border:2px solid black': ''}}">
                        </div>
                </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="padding:20px 0;">
                    <button type="submit" id="CompanyCreateButton" style="width:100%;background-color:#E01E5A;border:none;">
                        Create
                    </button>
                </div>
            </div>
        </div>

        @if($errors->any())
        <div class="content" style="padding:20px 0">

            @foreach($errors->all() as $error)

            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
        
        </div>
        @endif
    </form>
    
@endsection