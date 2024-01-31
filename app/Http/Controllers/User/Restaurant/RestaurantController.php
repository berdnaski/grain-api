<?php

namespace App\Http\Controllers\User\Restaurant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestaurantController extends Controller
{
    public function index(Request $request) {
        $search = $request->input('search');

        $query = Restaurant::query();

        if (!empty($search)) {
            $query->where('name', 'like', '%' . $search . '%');
        }

        $restaurants = $query->get();

        return $restaurants;
    }


    public function store(Request $request) {
        $data = $request->all();

        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $avatar_name = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->storeAs('public/images', $avatar_name);
            $data['avatar'] = $avatar_name;
        }

        return Restaurant::create($data);
    }

    public function show($id) {
        return Restaurant::find($id);
    }

    public function update(Request $request, $id) {
        $restaurant = Restaurant::find($id);
        $restaurant->update($request->all());
        return $restaurant;
    }

    public function destroy($id) {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return 204;
    }
}
