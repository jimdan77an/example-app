<?php
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

class ContactoController extends BaseController
{
    public function index()
    {
        return view('mis-views.contacto',
        ['name'=> 'Heidi']
    );
    }

    public function send(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);


        $name = 'Heidi';
        Mail::to('sbhiaedla77@gmail.com')->send(new ContactanosMailable($name));


        return redirect(route('contactado'), 302);

    }
    /*public function recibir(){
        $request([
            $nombre => 'Heidi',
            $email => 'sbhiaedla77@gmail.com',
        ]);    
    }*/
    public function contacted()
    {
        return view('mis-views.contactado');
    }
}
