<?php

    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Illuminate\Http\RedirectResponse;
    use App\Models\Kategori;
    use App\Models\Pembina;

    class KategoriController extends Controller
    {
        public function show()
        {
            // Retrieve all categories
            $list_kategori= Kategori::all();
            
            // Pass the retrieved categories to the view
            return view('kategori.show', compact('list_kategori'));
        }

        public function create()
        {
            // Retrieve all Pembina (assuming Pembina is another model)
            $list_pembina = Pembina::all();
            
            // Create a new instance of Kategori
            $kategori = new Kategori();
            
            // Pass the new instance and the list of Pembina to the view
            return view('kategori.form', compact('kategori', 'list_pembina'));
        }

        public function store(Request $request): RedirectResponse
        {
            // Validate incoming request data
            $validatedData = $request->validate([
                'nama' => 'required',
                // Assuming 'id' is auto-incremented or should not be validated as required during creation
            ]);
            
            // Create or update based on presence of 'id'
            if ($request->id) {
                Kategori::find($request->id)->update($validatedData);
                $message = 'Data berhasil diupdate';
            } else {
                Kategori::create($validatedData);
                $message = 'Data berhasil disimpan';
            }
            
            // Redirect back to show page with success message
            return redirect()->route('kategori.show')->with('pesan', $message);
        }

        public function edit($id)
        {
            // Find the category to edit
            $kategori = Kategori::findOrFail($id);
            
            // Retrieve all Pembina
            $list_pembina = Pembina::all();
            
            // Pass the category and Pembina list to the view
            return view('kategori.form', compact('kategori', 'list_pembina'));
        }

        public function view($id)
        {
            // Find the category to view
            $kategori = Kategori::findOrFail($id);
            
            // Pass the category to the view
            return view('kategori.view', compact('kategori'));
        }

        public function destroy($id): RedirectResponse
        {
            // Find the category and delete it
            Kategori::findOrFail($id)->delete();
            
            // Redirect back to show page with success message
            return redirect()->route('kategori.show')->with('pesan', 'Data berhasil dihapus');
        }
    }