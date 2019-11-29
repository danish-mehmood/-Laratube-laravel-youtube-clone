@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$channel->name}}</div>

                <div class="card-body">
               @if($channel->editable())
                <form id="update_channel_form" action="{{route('channels.update' , $channel->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 @method("PATCH")
             @endif
                 <div class="form-group row justify-content-center">
                   <div onclick="document.getElementById('filer').click()" class="channel-avatar">
                   <img src="{{$channel->image()}}" alt="">
                </div>   
                
                @if($channel->editable())
                   <input  onchange="document.getElementById('update_channel_form').submit()" class="form-control" type="file" name="image" id="filer">
                </div>
                 <label for="name" class="form-control-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{$channel->name}}">
                 <label for="description" class="form-control-label">description</label>
                 <textarea name="description" id="description"  rows="3" class="form-control">

                    {{$channel->description}}
                 </textarea>
                 <br>
                 <button class="btn btn-success"  type="submit" id="submitter">Update Channel</button>

                 <ul class="m-5 list-group text-danger">
                    @if($errors->any()) 
                    @foreach ( $errors->all() as $error)
                         <li class="list-group-item">{{$error}}</li>
                     @endforeach
                    @endif 
                 </ul>
                </form>
                @endif
                @if(!$channel->editable())
               
                <div class=" form-group">
                        <br>
                    <h3 class="text-center">{{$channel->name}}</h3>
                    <br>
                <p class="text-center">{{$channel->description}}</p>
               
               
                <div class="text-center">
                        <subscribe_button inline-template :subscriptions ="{{$channel->subscriptions}}">  <button @click="toggleSub" class="btn btn-danger">Subscribe</button></subscribe_button>
              
                </div>
           
            </div>

                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
