<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;

use Breakit\Sbfni\Sbfnifront\Models\Teacher;

use Breakit\Sbfni\Sbfnifront\Http\Requests\TeacherRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\SbfnifrontApiController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class TeacherApiController extends SbfnifrontApiController
{
    public static $visiblePermissions = [
        'index'  => 'Index',
        'store'  => 'Store',
        'show'   => 'Show',
        'edit'   => 'Edit',
        'update' => 'Update',
        'delete' => 'Delete'
    ];
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Teacher());
        $this->response['status'] = 'ok';
        $this->response['data'] = $teachers;
        $this->response['columns'] = $columns;
        return response()->json($this->response);
    }

    public function store(TeacherRequest $request)
    {
        try {
            $validated = $request->validated();
            $teacher = new Teacher();
            $columns = $teacher->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn){
                $teacher->$mutableColumn = $request->input($mutableColumn);
            }
            
            $teacher->uuid = (String) Str::uuid();
            $teacher->save();
            
            $this->response['status'] = 'ok';
            $this->response['data'] = $teacher;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function show(Teacher $teacher)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $teacher;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function edit(Teacher $teacher)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $teacher;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function update(TeacherRequest $request, Teacher $teacher)
    {
        try {
            $validated = $request->validated();
            $columns = $teacher->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            
            foreach($mutableColumns as $mutableColumn) {
                $teacher->$mutableColumn = $request->input($mutableColumn);
            }
            
            $teacher->save();
            
            $this->response['data'] = $teacher;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function destroy(Teacher $teacher)
    {
        try {
            $columns = $teacher->getTableColumns(); // Required If History Is Enabled
            
            
            $this->response['status'] = 'ok';
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }
}
