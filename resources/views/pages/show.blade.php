@extends('./layout')

@section('content')

    <div class="container" style="margin-top:50px;">
        <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 compName" style="font-size:40px;font-weight:bold;">
                    {{$company->name}}
                </div>
             </div>
        <div class="row">
                <div class="col-md-6 comPhone">
                 Contact us:     {{$company->phone}}
                </div>
        </div>
      @if(count($company->employee->all()) >0)
        <div class="row">
        <div class="container" style="padding:50px 20px;">
                    <div>
                    Employees:     {{count($company->employee->all())}}
                     </div>
                    <ul>
                @foreach ($company->employee->all() as $employee)
                    <li>{{$employee->name}}: {{$employee->Job_title}}</li>
                @endforeach
             </ul>
            </div>

           
           </div>
           @endif
           <div class="container" style="padding:20px 0">
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-danger"><a href="/" style="color:white;text-decoration:none;">Back</a> </button>
                    </div>
                </div>
            </div>
        </div>
       
   
    <div class="col-md-4">
  
    <form action="/employee/{{$company->id}}" method="POST">
        @csrf
    <div class="container">
            
  
            <div class="container" style="padding:0  0 20px 0;">
                    <h3>Add Employee:</h3>
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
                            <label for="jobTitle" class="h5">Job title:</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" name="Job_title" id="jobTitle" value="{{old('phone')}}" placeholder="Job title..." class="form-control" style="{{$errors->has('phone') ?'border:2px solid black': ''}}">
                            </div>
                    </div>
            </div>
            <div class="container" style="padding:10px 0;">
                    <div class="row" >
                            <div class="col-md-12">
                                <label for="managerId" class="h5">Manager ID:</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="manager_id" id="managerId" value="{{old('phone')}}" placeholder="Job title..." class="form-control" style="{{$errors->has('phone') ?'border:2px solid black': ''}}">
                                </div>
                        </div>
                </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="padding:20px 0;">
                        <button type="submit" id="CompanyCreateButton" style="width:100%;background-color:#E01E5A;border:none;">
                            Add
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
    </div>
</div>
</div>
</div>
</form>
@endsection