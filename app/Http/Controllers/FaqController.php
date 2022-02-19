<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    /**
     * Render a list of a resource
     */
    public function index()
    {
        $posts = Faq::all();

        return view('faqs.index', [
            'posts' => $posts
        ]);
    }
    /**
     * Show the faq.blade.php page when called
     */
    public function show()
    {
        //
    }

    /**
     * Shows a view to create a new resource
     */
    public function create()
    {
        return view('faqs.create');
    }

    /**
     * Store/Persist a new resource
     */
    public function store()
    {
        $faqPost = new Faq();

        $faqPost->question = request('question');
        $faqPost->answer = request('answer');
        // This grabs the value of the radio button so the code can read it
        $faqPost->class = $_POST['class_type'];

        $faqPost->save();

        return redirect('/faq');
    }

    /**
     * Show a view to edit a resource
     */
    public function edit()
    {
        //
    }

    /**
     * Persist the edited resource
     */
    public function update()
    {
        //
    }

    /**
     * Destroy/remove a resource
     */
    public function destroy()
    {
        //
    }
}
