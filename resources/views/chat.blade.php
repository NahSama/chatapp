@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center"  id="app">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    <h1 class="" style="text-align:center">Chat Room <span class="badge badge-fill badge-danger">@{{numberOfUsers}}</span></h1>
                    <a href="" class="btn btn-danger btn-sm float-right" @click.prevent="deleteSession">Clear chat</a>
                </div>
                <div class="card-body">
                    <ul class="list-group" style="overflow-y: scroll; max-height: 200px" v-chat-scroll>
                        <message 
                        v-for="value,index in chat.message" 
                        :key=value.index
                        :color=chat.color[index]
                        :user=chat.user[index]
                        :time=chat.time[index]
                        :position=chat.position[index]
                        >@{{value}}</message>
                    </ul>
                    <div class="badge badge-pill badge-primary">@{{ typing }}</div>
                    <input type="text" class="form-control" placeholder="Type your message" v-model="message" @keyup.enter="send">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection