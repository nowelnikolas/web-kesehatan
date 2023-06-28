<?php

namespace App\Http\Controllers;


use App\Models\Doctor;
use App\Models\province;
use App\Models\city;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Doctor::with('province');
    
        $provinceId = $request->input('province_id');
        if ($provinceId) {
            $query->where('province_id', $provinceId);
        }
    
        $doctors = $query->get();
    
        $provinces = Province::all();
    
        return view('doctors.index', [
            'doctors' => $doctors,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('doctors.create');
    
    }

    public function manage()
    {
       
        $provinces = province::with('city')->get();

        
        return view('doctors.manage')->with("provinces", $provinces);
    
    }

    
    function getCity($e){
        $cities = city::where('province_id', $e)->get();
        return response()->json($cities);
    }

    function getDoctorById($id){
        $doctor = Doctor::where('id', $id)->get();
        return response()->json($doctor);
    }

    // public function getDoctors()
    // {
    //     $doctors = Doctor::all();
    //     $totalRecords = count($doctors);

    //     $response = [
    //         'draw' => 1,
    //         'recordsTotal' => $totalRecords,
    //         'recordsFiltered' => $totalRecords,
    //         'data' => $doctors
    //     ];
    
    //     return response()->json($response);
    // }

    public function getDoctors(Request $request)
{
    $columns = [
        // Define your column names here
        'doctors.id',
        'doctors.name',
        'doctors.hospital',
        'doctors.address',
        'provinces.name AS prv',
        'cities.name AS ct',
        'doctors.phone_number',
    ];

    $totalRecords = Doctor::count();

    // Apply sorting
    $orderByColumn = $columns[$request->input('order.0.column')];
    $orderDir = $request->input('order.0.dir');
    $orderBy = $orderByColumn;
    if ($orderByColumn === 'provinces.name AS prv') {
        $orderBy = 'provinces.name ' . $orderDir;
    } elseif ($orderByColumn === 'cities.name AS ct') {
        $orderBy = 'cities.name ' . $orderDir;
    }

    $doctors = Doctor::select($columns)
        ->join('provinces', 'doctors.province_id', '=', 'provinces.id')
        ->join('cities', 'doctors.city_id', '=', 'cities.id')
        ->orderByRaw($orderBy);

    // Apply searching
    $searchValue = $request->input('search.value');
    if ($searchValue) {
        $doctors->where(function ($query) use ($columns, $searchValue) {
            
            foreach ($columns as $column) {
                if($column === 'provinces.name AS prv'){
                    $column = 'provinces.name';
                }
                if($column === 'cities.name AS ct'){
                    $column = 'cities.name';
                }
                $query->orWhere($column, 'like', '%' . $searchValue . '%');
            }
        });
    }

    // Paginate the results if needed
    if ($request->input('start') && $request->input('length')) {
        $start = $request->input('start');
        $length = $request->input('length');
        $doctors->skip($start)->take($length);
    }

    $response = [
        'draw' => intval($request->input('draw')),
        'recordsTotal' => $totalRecords,
        'recordsFiltered' => $doctors->count(),
        'data' => $doctors->get()
    ];

    return response()->json($response);
}
    /**
     * Store a newly created resource in storage.
     */
    public function storeDoctor(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'hospital' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'province_id' => 'required',
            'city_id' => 'required'
        ]);

        // Simpan data dokter ke database
        $doctor = new Doctor;
        $doctor->name = $request->name;
        $doctor->hospital = $request->hospital;
        $doctor->address = $request->address;
        $doctor->phone_number = $request->phone_number;
        $doctor->province_id = $request->province_id;
        $doctor->city_id = $request->city_id;
    
        // Save the doctor to the database
        $doctor->save();
    
        // Return a JSON response indicating success
        return response()->json(['success' => true]);
    }

    public function updateDoctor(Request $request)
    {
        $doctor = Doctor::find($request->id);

            $request->validate([
                'name' => 'required',
                'hospital' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
                'province_id' => 'required',
                'city_id' => 'required'
            ]);

            $doctor->name = $request->name;
            $doctor->hospital = $request->hospital;
            $doctor->address = $request->address;
            $doctor->phone_number = $request->phone_number;
            $doctor->province_id = $request->province_id;
            $doctor->city_id = $request->city_id;
            $doctor->save();
        return response()->json(['success' => true]);
    }

    public function deleteDoctor(Request $request)
    {
        $id = $request->input('id');

        // Perform the deletion logic here based on the provided ID
        // Example: Delete the doctor record from the database
        $doctor = Doctor::find($id);
        if ($doctor) {
            $doctor->delete();
            return response()->json(['success' => true, 'message' => 'Doctor deleted successfully.']);
        }

        return response()->json(['success' => false, 'message' => 'Doctor not found.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
