@extends('layouts.app')

@section('content')
    {{-- main body dashboard --}}
    <div class="content-wrapper" style="background: none; padding:10px;">
        <div class="row mt-3">
            <div class="col col-md-4">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
            <div class="col col-md-4">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Rooms</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-bed"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
            <div class="col col-md-4">
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Floors</p>
                    </div>
                    <div class="icon">
                        <i class="fa-solid fa-stairs"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>

            </div>
           
        </div>
    </div>

    {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{-- latest udates tables --}}

    <div class="content-wrapper" style="background: none; padding:10px">
        <div class="row">
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Users</h3>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                   
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                   
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                   
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    
                                    <td><span class="badge bg-success">90%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

 {{-- ----------------------------------------------------------------------------------------------------- --}}
    {{-- the sconed table start --}}
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Avilable Rooms </h3>
                    </div>

                    <div class="card-body p-0">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Task</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Update software</td>
                                   
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Clean database</td>
                                    
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Cron job running</td>
                                    
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                <tr>
                                    <td>4.</td>
                                    <td>Fix and squish bugs</td>
                                    <td><span class="badge bg-success">90%</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
