<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateBookRequest;
use RealRashid\SweetAlert\Facades\Alert;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Hapus buku!';
        $text = "Apakah anda yakin ingin menghapus buku ini?";
        confirmDelete($title, $text);
        // show all books by auth user except admin
        return view('dashboard.book.index', [
            'books' => (auth()->user()->role == 'admin') ? Book::all() : Book::where('user_id', auth()->user()->id)->get(),
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.book.create', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //upload image and pdf
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('images', 'public');
        }
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf')->store('pdf', 'public');
        }

        Book::create([
            'title' => $request->validated('title'),
            'category_id' => $request->validated('category_id'),
            'user_id' => auth()->user()->id,
            'image' => $image,
            'pdf' => $pdf,
            'amount' => $request->validated('amount'),
            'description' => $request->validated('description'),
        ]);

        Alert::success('Success', 'Book created successfully');
        return redirect()->route('book.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return view('dashboard.book.showPdf', [
            'book' => $book,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('dashboard.book.edit', [
            'book' => $book,
            'categories' => Category::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {

        try {
            //upload image and pdf
            if ($request->hasFile('image')) {
                // Delete old image if it exists
                if ($request->oldImage) {
                    Storage::disk('public')->delete($request->oldImage);
                }

                // Store the new image
                $image = $request->file('image')->store('images', 'public');
            } else {
                // If no new image is provided, retain the old image
                $image = $request->oldImage;
            }

            if ($request->hasFile('pdf')) {
                // Delete old PDF if it exists
                if ($request->oldPdf) {
                    Storage::disk('public')->delete($request->oldPdf);
                }

                // Store the new PDF
                $pdf = $request->file('pdf')->store('pdf', 'public');
            } else {
                // If no new PDF is provided, retain the old PDF
                $pdf = $request->oldPdf;
            }

            $book->update([
                'title' => $request->validated('title'),
                'category_id' => $request->validated('category_id'),
                'user_id' => auth()->user()->id,
                'image' => $image,
                'pdf' => $pdf,
                'amount' => $request->validated('amount'),
                'description' => $request->validated('description'),
            ]);

            Alert::success('Success', 'Book updated successfully');
            return redirect()->route('book.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Book failed to update');
            return redirect()->route('book.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            Storage::disk('public')->delete($book->image);
            Storage::disk('public')->delete($book->pdf);
            $book->delete();
            Alert::success('Success', 'Book deleted successfully');
            return redirect()->route('book.index');
        } catch (\Throwable $th) {
            Alert::error('Error', 'Book failed to delete');
            return redirect()->route('book.index');
        }
    }
}
