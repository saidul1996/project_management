<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $total_assigned_amount = Project::where('project_start_date', '<', '2023-07-21')->sum('amount');
        // $total_project_released_amount = Project::where('project_start_date', '<', '2023-07-21')->whereBetween('payment_released_date', ['2023-06-20', '2023-07-30'])->sum('amount');
        // return $paymentReleasedPercent = (($total_project_released_amount / $total_assigned_amount) * 100) . '%';

        $paymentReleasedPercent = Project::where('project_start_date', '<', '2023-07-21')
            ->selectRaw('(SUM(CASE WHEN payment_released_date BETWEEN "2023-06-20" AND "2023-07-30" THEN amount ELSE 0 END) / SUM(amount)) * 100 as payment_released_percent')
            ->value('payment_released_percent');

        return view('project.index', [
            'projects' => Project::all(),
            'paymentReleasedPercent' => $paymentReleasedPercent ?? 0
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'project_start_date' => 'required|date',
            'payment_released_date' => 'required|date'
        ]);

        Project::create($validated);
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
