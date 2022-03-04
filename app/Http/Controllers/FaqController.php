<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Render a list of a resource
     */
    public function index()
    {
        $faq = Faq::all();

        return view('faqs.index', [
            'faqs' => $faq
        ]);
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
    public function store(Request $request)
    {
        Faq::create($this->validateFaq($request));
        // Faq::update($this->class = $_POST['class_type']);
        // TOFIX - $this->class = $_POST['class_type'];
        // Get the code to recognise the change in colour for the faq radio button

        return redirect(route('faq.index'));
    }

    /**
     * Show a view to edit a resource
     */
    public function edit(Faq $faq)
    {
        return view('faqs.edit', ['faq' => $faq]);
    }

    /**
     * Persist the edited resource
     */
    public function update(Faq $faq, Request $request)
    {
        $faq->update($this->validateFaq($request));
        // TOFIX - $this->class = $_POST['class_type'];
        // Get the code to recognise the change in colour for the faq radio button

        return redirect(route('faq.index'));
    }

    /**
     * Destroy/remove a resource
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect(route('faq.index'));
    }

    /**
     * Validate the inputs when creating/updating the blog
     * @return void
     */
    public function validateFaq($request): array
    {
        return $request->validate([
            'question' => 'required',
            'answer' => 'required'
        ]);
    }
}
