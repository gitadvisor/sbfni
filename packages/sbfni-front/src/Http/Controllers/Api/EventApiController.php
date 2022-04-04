<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;

use Breakit\Sbfni\Sbfnifront\Models\Event;

use Breakit\Sbfni\Sbfnifront\Http\Requests\EventRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\SbfnifrontApiController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class EventApiController extends SbfnifrontApiController
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
        $events = Event::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Event());
        $this->response['status'] = 'ok';
        $this->response['data'] = $events;
        $this->response['columns'] = $columns;
        return response()->json($this->response);
    }

    public function store(EventRequest $request)
    {
        try {
            $validated = $request->validated();
            $event = new Event();
            $columns = $event->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn){
                $event->$mutableColumn = $request->input($mutableColumn);
            }
            
            $event->uuid = (String) Str::uuid();
            $event->save();
            
            $this->response['status'] = 'ok';
            $this->response['data'] = $event;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function show(Event $event)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $event;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function edit(Event $event)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $event;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function update(EventRequest $request, Event $event)
    {
        try {
            $validated = $request->validated();
            $columns = $event->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            
            foreach($mutableColumns as $mutableColumn) {
                $event->$mutableColumn = $request->input($mutableColumn);
            }
            
            $event->save();
            
            $this->response['data'] = $event;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function destroy(Event $event)
    {
        try {
            $columns = $event->getTableColumns(); // Required If History Is Enabled
            
            
            $this->response['status'] = 'ok';
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }
}
