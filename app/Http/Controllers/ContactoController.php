<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Documents;

class ContactoController extends Controller
{
    //

    public function sendMessage(Request $request, Messages $message){

        $message->contact = $request->contact;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->body = $request->body;
        $message->seen = 0;

        $documents = $request->file('documents');
        
        
        if($message->save()) {
            //$image = new Images;
            $idmessage = $message->id;
            
            foreach ($documents as $document){
                
                $filename = $document->store('documents');

                Documents::create([
                    'id_message' => $idmessage,
                    'path' => $filename
                ]);

            }
        return redirect()->route('contacto');
            

        }else {

        return redirect()->route('contacto');
            
        }

    }
}
