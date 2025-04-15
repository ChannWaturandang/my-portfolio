<?php

namespace App\Http\Controllers;

use App\Models\Achievements;
use Illuminate\Http\Request;

class AchievementsController extends Controller
{
    public function index(Request $request)
    {
        $title = $request->input('title');
        $sort = $request->input('sort', 'newest');

        $achievements = Achievements::when($title, function ($query, $title) {
            return $query->where('title', 'like', "%$title%");
        });

        // Apply custom sorting based on publication_date
        if ($sort === 'oldest') {
            $achievements = $achievements->orderBy('publication_date', 'asc');
        } else {
            $achievements = $achievements->orderBy('publication_date', 'desc'); // newest first
        }

        return view('contents.achievements', [
            'achievements' => $achievements->get(),
        ]);
    }

    public function create()
    {
        return view('crud.achievements_forms');
    }

    public function store(Request $request)
    {

        // Validasi input
        $data = $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'expiration_date' => 'nullable|date',
            'credential_url' => 'nullable|url|max:255',
            'image' => 'nullable' // Validasi file gambar
        ]);

        // Jika ada file image, simpan dan masukkan ke dalam array data
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('achievements', 'public');
        }

        // Simpan ke database
        Achievements::create($validated);

        // Redirect dengan pesan sukses
        return redirect()->route('achievements.create')->with('success', 'Achievement successfully added.');
    }

    public function edit($id)
    {
        $achievement = Achievements::findOrFail($id);
        return view('crud.achievements_forms', compact('achievement'));
    }

    public function update(Request $request, $id)
    {
        $achievement = Achievements::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'publication_date' => 'required|date',
            'expiration_date' => 'nullable|date',
            'credential_url' => 'nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Jika ada file image baru, simpan dan update
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('achievements', 'public');
        }

        $achievement->update($validated);

        return redirect()->route('achievements.index')->with('success', 'Achievement successfully updated.');
    }
}
