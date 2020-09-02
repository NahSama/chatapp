<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\User;
use App\Events\ChatEvent;

class ChatController extends Controller
{
    public function __construct() 
    {
        
        $this->middleware('auth');
    }

    public function chat() 
    {

        return view('chat');
    }

    public function send(Request $request)
    {
        $user = Auth::user();
        event(new ChatEvent($request->message, $user));
        $this->saveToSession($request); 
    }

    public function send2()
    {
        $message = "hello";
        $user = Auth::user();
        event(new ChatEvent($message, $user));
    }

    public function saveToSession(request $request)
    {
        session()->put('chat', $request->chat);
    }

    public function getOldMessage()
    {
        return session('chat');
    }

    public function deleteSession()
    {
        session()->forget('chat');
    }
}
