<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin-views.menu-categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $menuCategory = MenuCategory::create([
            'name' => $validated['name'],
        ]);

        return redirect()
            ->route('admin.menu-categories.menus.index', $menuCategory->id)
            ->with('success', 'Kategori menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuCategory $menuCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuCategory $menuCategory)
    {
        return view('admin-views.menu-categories.edit', [
            'menuCategory' => $menuCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuCategory $menuCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $menuCategory->name = $validated['name'];
        $menuCategory->save();

        return redirect()
            ->route('admin.menu-categories.menus.index', $menuCategory->id)
            ->with('success', 'Kategori menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuCategory $menuCategory)
    {
        $menuCategory->delete();

        // Mencari kategori menu sebelumnya
        $nextCategory = MenuCategory::where('id', '<', $menuCategory->id)
            ->latest()
            ->first();

        // Jika tidak ada kategori yang lebih kecil, cari kategori setelahnya
        if (!$nextCategory) {
            $nextCategory = MenuCategory::where('id', '>', $menuCategory->id)
                ->oldest()
                ->first();
        }

        return redirect()
            ->route('admin.menu-categories.menus.index', $nextCategory->id)
            ->with('success', 'Kategori menu berhasil dihapus');
    }
}
