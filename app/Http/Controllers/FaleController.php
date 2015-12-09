<?php

namespace App\Http\Controllers;

use Mail;
use DB;
use Illuminate\Http\Request;
use App\Fale;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Alert;
use Illuminate\Support\Facades\Redirect;

class FaleController extends Controller
{
    private $request;
    private $user;

    public function __construct(
            Request $request,
            Fale $user
        ){
        $this->request = $request;
        $this->user = $user;
    }


    public function index(){
        return view('site.fale');
    }



    public function post(Request $request)
    {
        $dadosForm = $this->request->all();
           //dd($dadosForm);
        $this->user->create($dadosForm)->save();

       /* Mail::send('emails.alerta', ['email' => $user, 'address' => $end, 'description' => $des, 'name' => $nom], function ($m) use ($user, $end ,$des) {
            
            $m->to($user)
              ->cc('mariliasemdengue@marilia.sp.gov.br','Marília sem Dengue')
              ->bcc('faq@sotaquepropaganda.com.br','Marília sem Dengue')
              ->subject("Nova denúncia - ".$end);
        });*/

        Alert::success('Em breve entraremos em contato com você ', 'Obrigado!')->persistent("Fechar");

        return view('site.fale');
    }  

}
