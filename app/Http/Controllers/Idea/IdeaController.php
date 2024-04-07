<?php

namespace App\Http\Controllers\Idea;

use App\Http\Controllers\Controller;
use App\Http\Requests\Idea\StoreRequest;
use App\Http\Requests\Idea\UpdateRequest;
use App\Models\Idea;

class IdeaController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(StoreRequest $request)
    {
        Idea::query()->create($request->validated());

        return redirect()->route('index')->with('success', 'Мысль успешно добавлена');
    }

    public function show(Idea $idea)
    {
        return view('idea.show', compact('idea'));
    }

    public function edit(Idea $idea)
    {
        $editing = true;
        return view('idea.show', compact('idea', 'editing'));
    }

    public function update(UpdateRequest $request, Idea $idea)
    {
        if ($request->validated('content') == $idea->content) {
            return redirect()->route('idea.show', $idea->id);
        };

        $idea->update($request->validated());
        return redirect()->route('idea.show', $idea->id)->with('update', 'Мысль успешно обновлена');

    }

    public function destroy(Idea $idea)
    {
        $idea->delete();

        return redirect()->route('index')->with('destroy', 'Мысль удалена');
    }
}
