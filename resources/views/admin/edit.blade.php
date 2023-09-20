@extends('layouts.app')

@section('content')

<section class="wrapper-edit">
    <div class="container-fluid d-flex flex-column">
        <img class="align-self-center" src="../assets/navbar-logo.png" alt="" srcset="">

        <h1>
            Edit Profile
        </h1>
        <form action="{{ route('admin.update', auth::user()->hunter['user_id']) }}" method="POST"   enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" placeholder="First name" name="name" value="{{ old('name', auth::user()->hunter['name']) }}">
                </div>
                <div class="col">
                    <label for="surname" class="form-label">Surname</label>
                    <input type="text" class="form-control" id="surname" placeholder="Last name"  name="surname" value="{{ old('surname', auth::user()->hunter['surname']) }}">
                </div>
                <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Apartment, studio, or floor"  name="address" value="{{ old('address', auth::user()->hunter['address']) }}">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    
                    <option selected>Choose...</option>
                    <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    
                </div>
                <div class="mb-3 col">
                    <label for="image" class="form-label">Image</label> 
                    <input type="file" name="image" id="image" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}"> 
                </div>
                <div class="mb-3 col">
                    <label for="image" class="form-label">CV</label> 
                    <input type="file" name="cv" id="cv" class="form-control" placeholder="Upload your image" value="{{ old('image', '') }}"> 
                </div>
                @foreach ($specializations as $specialization)
                    <input type="text" name="specializations" class="form-check-input" id="specialization" value="{{ $specialization['id'] }}">
                    <label for="specialization" class="form-check-label me-2 ps-2">
                        {{ $specialization->name }} 
                    </label>
                @endforeach

                <div class="mb-3">
                    <label for="services" class="form-label">Services</label>
                    <textarea class="form-control" id="services" rows="3" name="services">
                        {{ old('content', auth::user()->hunter['services']) }}
                    </textarea>
                </div>

            </div>

            <button class="btn align-self-center" type="submit">
                <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 516.18 516.57"><title>hunters target</title><path d="M382.68,103.93V62.34h24V152C486.33,162.56,536.89,206.3,559.76,284c-8.78,0-16.46.15-24.12-.19-1,0-2.2-2.58-2.67-4.15a139.77,139.77,0,0,0-30.66-54.87q-46.1-50.47-114.55-48.24c-1.51,0-3,0-5.07,0V127.77c-9.63,1.46-18.77,2.11-27.54,4.28Q236.31,161.36,206.39,280.32c-.65,2.6-1.41,4-4.5,3.88-6.36-.28-12.74-.12-19.11-.17a8.64,8.64,0,0,1-1.75-.51c9.15-49.57,32.06-91.37,69.65-124.9S332.31,107.41,382.68,103.93Z" transform="translate(-136.59 -62.34)"/><path d="M357.9,534.26C269.46,520.71,184.14,442.34,178,332.76H136.59V308.84h90.12c4.1-45.81,22.72-84,56.64-114.38,21.33-19.1,46.17-31.68,74.58-38.1v23.91c-71.84,25.1-107.93,75.25-107.7,152.24H202.06c1.25,9,1.74,17.35,3.63,25.4q28.4,120.7,148.62,151.25c2.92.74,4.16,1.67,4,4.83-.25,6.21-.08,12.44-.1,18.66A8.65,8.65,0,0,1,357.9,534.26Z" transform="translate(-136.59 -62.34)"/><path d="M431.34,485V460.31c33.54-9.3,60.72-27.9,80.91-56.27s28.46-60,26.21-95.17h47.85C586,245.58,536.45,152.58,431.42,131V107.49c76.78,9.37,172.36,81.57,180,201.09h41.4v23.88h-90c-4.11,46.15-23,84.56-57.27,115A163.47,163.47,0,0,1,431.34,485Z" transform="translate(-136.59 -62.34)"/><path d="M229.75,357.43h24.63c25.32,72.09,75.42,108.24,152.34,107.79v48.47c10.51-1.67,20.4-2.55,29.95-4.87,64.8-15.8,110.39-54.61,136.57-115.92,4.3-10.07,6.75-20.95,9.69-31.55.86-3.1,1.92-4.31,5.23-4.16,6.5.28,13,.08,19.56.08-8.78,76.17-82.17,173.6-200.77,180.34V578.9H382.7V489.42C303,478.63,252.41,435,229.75,357.43Z" transform="translate(-136.59 -62.34)"/></svg>
                </span>
                <span class="text">Edit Profile</span>
            </button>
        </div>
    </form>
</section>

@endsection