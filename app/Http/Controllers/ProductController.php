<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function liste_product()
    {
        $product = Product::paginate(4);
        return view('product.liste',compact('product'));
    }

    public function ajouter_product()
    {
        return view('product.ajouter');
    }

    public function ajouter_product_traitement(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->nom = $request->nom;
        $product->prix = $request->prix;
        $product->description = $request->description; // Correction de la variable description
        $product->save();

        return redirect('/ajouter')->with('status', 'Le produit a été bien ajouté.'); // Correction du message de succès
    }

    public function update_product(Product $product){
        return view('product.update',compact('product'));
    }

    public function update_product_traitement(Product $product){

        $validated = request()->validate([
            'nom' => 'required',
            'prix' => 'required',
            'description' => 'required',
        ]);

        $product->update($validated);
        return redirect()->route('list');

    }


    public function delete_product($id){
        $product = Product::find($id);
        $product -> delete();
        return redirect()->route('list');
    }



}
