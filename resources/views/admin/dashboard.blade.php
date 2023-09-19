@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-between">
        <div class="col-2">
            <div class="row">
                <div class="col">
                    <div class="card border-0 bg-transparent mb-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-center">
                                <img src="https://i.pinimg.com/564x/d6/04/54/d60454e0eb80e5e14926ce7364e3fa8c.jpg" alt="" class="my_profile-picture">
                            </li>
                            <li class="list-group-item ">Name: </li>
                            <li class="list-group-item ">Surname: </li>
                            <li class="list-group-item ">CV: </li>
                            <li class="list-group-item ">Platinum: </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-7">
            <div class="row mb-3">
                <div class="col">
                    <div class="card bg-transparent my_header-glass">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent my_header-glass">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent my_header-glass">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card bg-transparent my_header-glass">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card bg-transparent">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-3">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            My Details
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <img src="" alt="">
                                </li>
                                <li class="list-group-item">Name: </li>
                                <li class="list-group-item">Surname: </li>
                                <li class="list-group-item">CV: </li>
                                <li class="list-group-item">Platinum: </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            Buy Sponsorship
                        </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Invitee: </li>
                                <button class="btn btn-primary">24 hour Membership</button>
                                <button class="btn btn-primary">72 hour Membership</button>
                                <button class="btn btn-primary">144 hour Membership</button>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection