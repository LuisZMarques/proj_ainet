<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TshirtImage;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
 

class TshirtImageController extends Controller
{
    public function index(Request $request) : View
    {
        $query = TshirtImage::query()->whereNull('customer_id');
        $category = $request->input('category');
        $search = $request->input('search');

        if ($category) {
            $query->where('category_id', $category);
        }

        if ($search) {
            $query->where('name', 'LIKE', '%' . $search . '%');
        }

        $tshirtImages = $query->paginate(15);
        $categories = Category::all();

        return view('tshirt_images.index', compact('tshirtImages', 'categories'));
    }

    public function show(TshirtImage $tshirtImage): View
    {
        
        if (Auth::user()->isAdmin()) {
            $customer = Customer::where('id', $tshirtImage->customer_id)->first();
            return view('tshirt_images.show', compact('tshirtImage', 'customer'));
        } else {
            return view('home')->with('alert-msg', 'Não tem permissões para ver as imagens das t-shirts!')->with('alert-type', 'danger');
        }
    }

    public function catalogo() : View
    {
        $customer_id = Auth::user()->id;
        $tshirtImages = TshirtImage::whereNull('category_id')
            ->orWhere('customer_id', $customer_id)
            ->get();
        return view('tshirt_images.catalogo', compact('tshirtImages'));
    }

    public function create(): View
    {
        $categories = Category::all();
        return view('tshirt_images.create', compact('categories'));
    }


    public function update(Request $request, TshirtImage $tshirtImage): View
    {   
        if(Auth::user()->isAdmin()){
            $categories = Category::all();
            $tshirtImage->update($request->all());
            return view('tshirt_images.edit', compact('tshirtImage', 'categories'));
        }else{
            return view('home')->with('alert-msg', 'Não tem permissões para editar imagens de tshirts!')->with('alert-type', 'danger');
        }
    }

    public function minhasTshirtImages(Request $request): View
    {
        $customer = $request->user()->customer;
        $tshirtImages = $customer->tshirt_images;

        return view('tshirt_images.minhas', compact('tshirtImages', 'customer'));
    }

    public function store(Request $request): RedirectResponse
    {
        TshirtImage::create($request->all());
        return redirect('/tshirt_images');
    }

    public function destroy(TshirtImage $tshirt_image): RedirectResponse
    {
        try {
            $tshirt_image->delete();
            if ($tshirt_image->image_url) {
                Storage::delete('/storage/tshirt_images/' . $tshirt_image->image_url);
            }
            return redirect()->route('tshirt_images.index')
                ->with('alert-msg', "Tshirt Image #{$tshirt_image->id} apagada com sucesso!")
                ->with('alert-type', 'success');
        } catch (\Exception $error) {
            $url = route('tshirt_images.show', ['tshirt_image' => $tshirt_image]);
            $htmlMessage = "Não foi possível apagar a Tshirt Image <a href='$url'>#{$tshirt_image->id}</a> porque ocorreu um erro!" . $error->getMessage();
            $alertType = 'danger';
            return back()
                ->with('alert-msg', $htmlMessage)
                ->with('alert-type', $alertType);
        }
    }
}
