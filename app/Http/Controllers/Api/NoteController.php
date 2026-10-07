<?php
namespace App\Http\Controllers\Api;
use App\Note;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class NoteController extends Controller {
 public function categories(){return response()->json(Category::orderBy('name')->get());}
 public function index(){return response()->json(Note::with('category')->orderByDesc('noted_at')->get());}
 public function show(Note $note){return response()->json($note->load('category'));}
 private function validated(Request $request){return $request->validate(['title'=>'required|string|max:150','author'=>'required|string|max:100','noted_at'=>'required|date','body'=>'required|string|max:20000','category_id'=>'required|integer|exists:categories,id']);}
 public function store(Request $request){$note=Note::create($this->validated($request));return response()->json($note->load('category'),201);}
 public function update(Request $request,Note $note){$note->update($this->validated($request));return response()->json($note->load('category'));}
 public function destroy(Note $note){$note->delete();return response()->json(null,204);}
}
