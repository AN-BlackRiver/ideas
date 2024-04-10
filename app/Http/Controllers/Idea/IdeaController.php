<?php

namespace App\Http\Controllers\Idea;

use App\Http\Controllers\Controller;
use App\Http\Requests\Idea\StoreRequest;
use App\Http\Requests\Idea\UpdateRequest;
use App\Models\Idea;
use App\Models\User;

class IdeaController extends Controller
{
    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();
        Idea::query()->create($validatedData);

        return redirect()->route('index')->with('success', 'Мысль успешно добавлена');
    }

    public function show(Idea $idea)
    {
        $usersFollow = User::inRandomOrder()->limit(5)->get();
        return view('idea.show', compact('idea', 'usersFollow'));
    }

    public function edit(Idea $idea)
    {
        $usersFollow = User::inRandomOrder()->limit(5)->get();
        if (auth()->id() !== $idea->user_id){
            abort(404);
        }
        $editing = true;
        return view('idea.show', compact('idea', 'editing','usersFollow'));
    }

    public function update(UpdateRequest $request, Idea $idea)
    {
        if (auth()->id() !== $idea->user_id){
            abort(404);
        }
        if ($request->validated('content') == $idea->content) {
            return redirect()->route('ideas.show', $idea->id);
        };

        $idea->update($request->validated());
        return redirect()->route('ideas.show', $idea->id)->with('update', 'Мысль успешно обновлена');

    }

    public function destroy(Idea $idea)
    {
        if (auth()->id() !== $idea->user_id){
            abort(404);
        }
        $idea->delete();
        return redirect()->route('index')->with('destroy', 'Мысль удалена');
    }
}
