@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="row">
                <div class="col-10">
                    <div class="card bg-transparent">
                        <div class="card-header my_header-glass">
                            Statistics
                        </div>
                        <div class="card-body my_bg-glass">
                            <table class="table">
                                <thead class="bg-transparent">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Membership</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">MOMO</th>
                                        <td>FRANCESCO</td>
                                        <td>LISA</td>
                                        <td>GABRIELE</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Administrate Users</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
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
    </div>
</div>
@endsection