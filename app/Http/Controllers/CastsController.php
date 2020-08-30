<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cast;
use App\Reserve;
use App\Mail\ReserveMail;
use Mail;
class CastsController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('main.index', ['casts' => $casts]);
    }

    public function show($id)
    {
        $cast = Cast::find($id);
        return view('main.profile', ['cast' => $cast]);
    }

    public function confirm(Request $request)
    {
        $inputs = $request->all();
        //dd($inputs);

        return view('mails.confirm', ['inputs' => $inputs]);
    }

    public function process(Request $request)
    {
       
        $action = $request->get('action', 'return');
        $input  = $request->except('action');

        if($action === 'submit') {

            // DBにデータを保存
            $reserve = new Reserve();
            $reserve->fill($input);
            //dd($reserve);
            $reserve->save();

            // メール送信
            //dd($email);
            Mail::to($input['email'])->send(new ReserveMail('mails.contact', 'お問い合わせありがとうございます', $input));

            return redirect()->route('complete');
        } else {
            return redirect()->route('cast')->withInput($input);
        }
    }

    public function complete()
    {
        return view('mails.complete');
    }


}
