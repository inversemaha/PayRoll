@extends('layouts.master_layout')
@section('title', 'View Department')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Advanced Table
                        </header>
                        @if(isset($result))
                            <table class="table table-advance table-hover">
                                <thead>
                                <tr>
                                    <th><i class="fa fa-bullhorn"></i> SL</th>
                                    <th><i class="fa fa-bookmark"></i> Department Name</th>
                                    <th><i class=" fa fa-edit"></i> Action</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $counter=1;?>
                                @foreach($result as $res)
                                    <tr>
                                        <td><a href="#">{{ $counter++ }}</a></td>
                                        <td class="hidden-phone">{{ $res->department_name }}</td>

                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        @endif
                    </section>


                </div>
            </div>

        </section>
    </section>



@endsection

