<?php

namespace App\Http\Controllers\Ticket;
 
use Illuminate\Http\Request;
 
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; //DBを呼び出し　Facades＝機能？

use App\Ticket;
use App\Resarv;

use Auth;

class TicketController extends Controller
{
 
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        // 検索機能
       if ($cond_title != "") {
         $posts = Ticket::where('ticket_title','like','%'.$cond_title.'%')->paginate(5);
       }else {
         $posts = Ticket::orderBy('created_at','desc')->paginate(5);
       }

        return view('ticket.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }

    public function confirm(Request $request)
    {
        $resarv = new Resarv;

        $user = $request->user();
        // 送信されたフォームデータをすべて格納
        $form = $request->all();
        
        return view('ticket.confirm', compact('form', 'user'));
    }

    public function complete(Request $request)
    {

        $resarv = new Resarv;

        $form = $request->all();
        $user = $request->user();
        // リレーション
        $resarv->user_id = $request->user()->id;

        unset($form['_token']);

       $resarv->fill($form)->save();

        return view('ticket.complete', compact('form', 'user'));
    }

    public function history(Request $request)
    {

        $user = $request->user();
        $user_id = $request->user();

        $resarvs = Resarv::where('user_id',$user_id->id)->orderBy('created_at','desc')->paginate(5);

        return view('ticket.history', ['resarvs' => $resarvs, 'user' => $user]);
    }

    public function delete(Request $request)
    {
        $resarv = Resarv::find($request->id);
        $resarv->delete();
        return redirect('/history');
    }
}
