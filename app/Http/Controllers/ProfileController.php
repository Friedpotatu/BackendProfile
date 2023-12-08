<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreAppointmentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(User::get(), 200);
    }

    public function profile()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = User::find($id);
        return response()->json($profile, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string',
            'city' => 'required|string',
            'country' => 'required|string',
            'summary' => 'required|string',
            'frameworks' => 'required|string',
            'hobbies' => 'required|string',
        ]);

        try {
            DB::beginTransaction();
            $profile = User::where('id', $id)->update([
                'name' => $fields['name'],
                'last_name' => $fields['last_name'],
                'email' => $fields['email'],
                'city' => $fields['city'],
                'country' => $fields['country'],
                'summary' => $fields['summary'],
                'frameworks' => $fields['frameworks'],
                'hobbies' => $fields['hobbies'],
            ]);
            DB::commit();
            return response()->json($profile, 200);
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error($exception->getMessage());
            return response()->json(['error' => $exception->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
