<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;
use App\Models\IssuedBook;
use App\Models\User;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.dashboard');
    }

    public function books()
    {
        $books = Book::all();
        return view('student.books', compact('books'));
    }

    public function profile()
    {
        return view('student.profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
        ]);

        $user = Auth::user();
        $user->update($request->only('name', 'email'));

        return redirect()->route('student.profile')->with('success', 'Profile updated successfully.');
    }

    public function issuedbooks()
    {
        $studentId = auth()->id();
         $issuedBooks = IssuedBook::with('book')
                    ->where('student_id', $studentId)
                    ->get();
        return view('student.issued', compact('issuedBooks'));
    }
    public function bookList(Request $request)
    {
        $search = $request->input('search');

        $books = Book::with(['author', 'category'])
            ->withCount(['issuedBooks as active_issues_count' => function ($query) {
                $query->where('status', 'issued');
            }])
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%');
            })
            ->get();

        return view('student.books', compact('books'));
    }   
}
