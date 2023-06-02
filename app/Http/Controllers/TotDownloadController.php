<?php

namespace App\Http\Controllers;

use App\Models\Tot;
use Dompdf\Dompdf;
use PDF;
use Illuminate\Http\Request;
// use PDF;

class TotDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.tot-print', [
            'tots' => Tot::all()
        ]);
    }

    public function print()
    {
        
        $tots = Tot::all();
        $tot = view('dashboard.posts.tot-print', compact('tots'));

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($tot);
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }

    // public function print() 
    // {
    //     $tots = Tot::all();

    //     view()->share('tot', $tots);
    //     $pdf = PDF::loadView('/dashboard/posts/print', compact('tots'))->setOptions(['defaultFont' => 'sans-serif']);
    //     $pdf->setPaper('A4', 'landscape');
    //     return $pdf->download('document.pdf');

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
