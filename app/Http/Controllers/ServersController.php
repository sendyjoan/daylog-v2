<?php

namespace App\Http\Controllers;

use App\Models\Servers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServersController extends Controller
{
    // For View
    public function index()
    {
        return view('modules.servers.index');
    }

    // For API
    public function list(Request $request)
    {
        $query = Servers::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%")
                    ->orWhere('code', 'like', "%{$search}%");
        }

        $servers = $query->get();
        return response()->json($servers);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:servers,name|max:255',
        ]);

        DB::beginTransaction();

        try {
            $server = Servers::create([
                'code' => Servers::createCode(),
                'name' => $request->input('name'),
            ]);
            
            if ($server) {
                DB::commit();
                return response()->json(['message' => 'Server created successfully']);
            }else{
                DB::rollBack();
                return response()->json(['message' => 'Failed to create server'], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'id' => 'required|exists:servers,code',
        ]);

        DB::beginTransaction();

        try {
            $server = Servers::where('code', $request->input('id'))->first();
            $server->name = $request->input('name');
            $server->save();
            
            if ($server) {
                DB::commit();
                return response()->json(['message' => 'Server updated successfully']);
            }else{
                DB::rollBack();
                return response()->json(['message' => 'Failed to update server'], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:servers,code',
        ]);

        DB::beginTransaction();

        try {
            $server = Servers::where('code', $request->input('id'))->first();
            $server->delete();
            
            if ($server) {
                DB::commit();
                return response()->json(['message' => 'Server deleted successfully']);
            }else{
                DB::rollBack();
                return response()->json(['message' => 'Failed to delete server'], 500);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
}
