@extends('master')

@section('title')
 welcome page
@endsection

@section('styles')
<!-- add your extra styles links for this page here!  -->
@endsection

@section('content')
<div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Task
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    <!-- New Task Form -->
                    <form action="{{url('task')}}" method="POST" class="form-horizontal">
                    @csrf

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Task Name -->
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Task</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="task-name" class="form-control" value="">
                            </div>
                        </div>

                        <!-- Add Task Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Task
                                    @csrf


                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Tasks -->
                @if($tasks->count() > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Tasks
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>Task</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                            @foreach($tasks as $task)
                                    <tr>
                                        <td class="table-text">
                                        
                                        <div>  {{$task->name}} </div>
                                        </td>

                                        <!-- Task Delete Button -->
                                        <td>
                                        <!-- task/{task}/delete -->
                                            <form action="{{ URL('task/'.$task->id .'/delete')  }}" method="POST">
                                               <!-- <input type="hidden" name="_method" value="delete">
                                                -->
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
        </div>
</div>
@endsection
 



@section('scripts')
   <!-- JavaScripts -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

