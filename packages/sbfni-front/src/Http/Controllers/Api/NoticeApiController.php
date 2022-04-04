<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;

use Breakit\Sbfni\Sbfnifront\Models\Notice;

use Breakit\Sbfni\Sbfnifront\Http\Requests\NoticeRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\SbfnifrontApiController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class NoticeApiController extends SbfnifrontApiController
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
        $notices = Notice::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Notice());
        $this->response['status'] = 'ok';
        $this->response['data'] = $notices;
        $this->response['columns'] = $columns;
        return response()->json($this->response);
    }

    public function store(NoticeRequest $request)
    {
        try {
            $validated = $request->validated();
            $notice = new Notice();
            $columns = $notice->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn){
                $notice->$mutableColumn = $request->input($mutableColumn);
            }
            
            $notice->uuid = (String) Str::uuid();
            $notice->save();
            
            $this->response['status'] = 'ok';
            $this->response['data'] = $notice;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function show(Notice $notice)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $notice;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function edit(Notice $notice)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $notice;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function update(NoticeRequest $request, Notice $notice)
    {
        try {
            $validated = $request->validated();
            $columns = $notice->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            
            foreach($mutableColumns as $mutableColumn) {
                $notice->$mutableColumn = $request->input($mutableColumn);
            }
            
            $notice->save();
            
            $this->response['data'] = $notice;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function destroy(Notice $notice)
    {
        try {
            $columns = $notice->getTableColumns(); // Required If History Is Enabled
            
            
            $this->response['status'] = 'ok';
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }
}
