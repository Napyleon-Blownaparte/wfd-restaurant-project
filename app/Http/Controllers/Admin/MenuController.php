<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\MenuCategory;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MenuCategory $menuCategory)
    {
        $allMenuCategories = MenuCategory::all();
        return view('admin-views.menus.index', [
            'menuCategory' => $menuCategory,
            'allMenuCategories' => $allMenuCategories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(MenuCategory $menuCategory)
    {
        return view('admin-views.menus.create', [
            'menuCategory' => $menuCategory,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, MenuCategory $menuCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'price' => 'required|integer|min:1',
            'image_url' => 'required|image|mimes:jpg,jpeg,png|max:204800',
        ]);


        $image_url = $request->file('image_url')->store('menus_images', 'public');

        $menuCategory->menus()->create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'price' => $validated['price'],
            'image_url' => $image_url,
        ]);



        return redirect()->route('admin.menu-categories.menus.index', $menuCategory->id)->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        // return view('admin-views.menus.show', [
        //     'menu' => $menu,
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin-views.menus.edit', [
            'menu' => $menu,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
            'price' => 'sometimes|integer|min:1',
            'image_url' => 'sometimes|mimes:jpg,jpeg,png|max:204800',
        ]);

        $menu->update($validated);

        if ($request->hasFile('image_url')) {
            $menu->image_url = $request->file('image_url')->store('menus_images', 'public');

        }

        $menu->save();

        return redirect()->route('admin.menu-categories.menus.index', $menu->menu_category)->with('success', 'Menu berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();

        return redirect()->route('admin.menu-categories.menus.index', $menu->menu_category)->with('success', 'Menu berhasil dihapus');
    }
}
