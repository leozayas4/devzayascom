@extends('layout')


@section('content')

    <h1>Edit Task</h1>

    <form method="post" action="/tasks/{{ $task->id }}">
        @method('PATCH')
        @csrf
        
        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="user_id">User Id</label>

            <div class="">
                <input type="text" class="" name="user_id" placeholder="User Id" value="{{ $task->user_id }}" disabled>
            </div>
        </div>

        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="property_id">Property Id</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="property_id" placeholder="" value="{{ $task->property_id }}">
            </div>
        </div>

        <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="description">Title</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="description" placeholder="" value="{{ $task->description }}">
            </div>
        </div>

         <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="comments">Comments</label>

            <div class="">
                <textarea type="text" class="" style="width: 300px;" name="comments" placeholder="">{{ $task->comments }}</textarea>
            </div>
        </div>

         <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="status">Status</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="status" placeholder="" value="{{ $task->status }}">
            </div>
        </div>

         <div class="" style="margin-bottom: 20px; border-radius: 10px; border: 1px solid rgba(204, 204, 204, .50); padding: 20px;">
            <label class="" for="scheduled_date">Scheduled Date</label>

            <div class="">
                <input type="text" class="" style="width: 300px;" name="scheduled_date" placeholder="" value="{{ $task->scheduled_date }}">
            </div>
        </div>

        <div>
            <button type="submit" style="margin-bottom: 20px;">Make Changes</button>
                 <form method="post" action="/tasks/{{ $task->id }}">
                    @method('DELETE')
                    @csrf

                    <button name="delete" type="submit">Delete Property</button>
                </form>
        </div>
    </form>

    
 
@endsection