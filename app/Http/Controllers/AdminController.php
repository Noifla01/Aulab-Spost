<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        $adminRequests = User::where('is_admin', NULL)->get();
        $revisorRequests = User::where('is_revisor', NULL)->get();
        $writerRequests = User::where('is_writer', NULL)->get();

        return view('admin.dashboard',compact('adminRequests','revisorRequests','writerRequests'));
    }


    public function setAdmin(User $user){
        $user->is_admin= true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message','Hai reso AMMINISTRATORE l\'utente scelto');


}

    public function setRevisor(User $user){
        $user->is_revisor= true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message','Hai reso REVISORE l\'utente scelto');
}

public function setWriter(User $user){
    $user->is_writer= true;
    $user->save();

    return redirect(route('admin.dashboard'))->with('message','Hai reso REDATTORE l\'utente scelto');
}


    public function editTag(Request $request, Tag $tag){
        $request->validate([
            'name'=> 'required|unique:tags',

        ]);
        $tag->update([
            'name'=> strtolower ($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message','Hai aggiornato il tag correttamente!');
}

    public function deleteTag(Tag $tag){
        foreach ($tag->articles as $article){
            $article->tags()->detach($tag);
    }
    $tag->delete();

    return redirect(route('admin.dashboard'))->with('message','Hai cancellato il tag correttamente!');

    }

    public function editCategory(Request $request, Category $category){
        $request->validate([
            'name'=> 'required|unique:categories',

        ]);
        $category->update([
            'name'=> strtolower ($request->name),
        ]);
        return redirect(route('admin.dashboard'))->with('message','Hai aggiornato la categoria correttamente!');
}

public function deleteCategory(Category $category){
    $category->delete();

    return redirect(route('admin.dashboard'))->with('message','Hai cancellato la categoria correttamente!');
}

public function storeCategory(Request $request){
    Category::create([
        'name'=> strtolower($request->name),
    ]);
    return redirect(route('admin.dashboard'))->with('message','Hai inserito una nuova categoria correttamente!');
}

}


