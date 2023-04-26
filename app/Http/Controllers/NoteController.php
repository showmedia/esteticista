<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Face;
use App\Models\Anamnese;

class NoteController extends Controller
{
    public function store($ts, $id, Request $request){
        $note = new Note;
        $note->description = $request->note;
        if($ts == 1){
            $note->anamneses_id = $id;
            $anamnese = Anamnese::findOrFail($id);
            $note->save();
            return redirect('/anamnese/'.$anamnese->cliente->id)->with('msg', 'Anotação adicionada!');
        }else if($ts == 2){
            $note->faces_id = $id;
            $facial = Face::findOrFail($id);
            $note->save();
            return redirect('/facial/'.$facial->cliente->id)->with('msg', 'Anotação adicionada!');

        }
        
    }
    public function delete($id){
        $note = Note::findOrFail($id);
        if($note->anamnese){
            $id = $note->anamneses_id;
            $this->del($note);
            return redirect('/anamnese/'.$id)->with('msg', 'Anotação excluída!');
        }
        
        
    }

    public function del($note){
        $note->delete();
    }
}
