<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use EllipseSynergie\ApiResponse\Contracts\Response;
use App\Storage;
use App\Transformer\TaskTransformer;

class StorageController extends Controller
{
    //
    protected $respose;
 
    public function __construct(Response $response)
    {
        $this->response = $response;
    }
 
    public function index()
    {
        //Get all task
        $storages = Storage::all();
        // Return a collection of $task with pagination
        return $this->response->withCollection($storages, new  TaskTransformer());
    }
 
    public function show($id)
    {
        //Get the task
        $storages = Storage::find($id);
        if (!$storages) {
            return $this->response->errorNotFound('Task Not Found');
        }
        // Return a single task
        return $this->response->withItem($storages, new  TaskTransformer());
    }
 
    public function destroy($id)
    {
        //Get the task
        $storages = Storage::find($id);
        if (!$storages) {
            return $this->response->errorNotFound('Task Not Found');
        }
 
        if($storages->delete()) {
             return $this->response->withItem($storages, new  TaskTransformer());
        } else {
            return $this->response->errorInternalError('Could not delete a task');
        }
 
    }
 
    public function store(Request $request)  {
        if ($request->isMethod('put')) {
            //Get the task
            $storages = Storage::find($request->id);
            if (!$storages) {
                return $this->response->errorNotFound('Task Not Found');
            }
        } else {
            $storages = new Storage;
        }
 
        $storages->id = $request->input('id');
        $storages->name_costumer = $request->input('name_costumer');
        $storages->location_storage = $request->input('location_storage');
 
        if($storages->save()) {
            return $this->response->withItem($storages, new  TaskTransformer());
        } else {
             return $this->response->errorInternalError('Could not updated/created a task');
        }
 
    }
}
