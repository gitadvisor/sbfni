<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers;

use Breakit\Sbfni\Sbfnifront\Models\Event;

use Breakit\Sbfni\Sbfnifront\Http\Requests\EventRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\SbfnifrontController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class EventController extends SbfnifrontController
{
    public static $visiblePermissions = [
        'index'  => 'Index',
        'create' => 'Create',
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
        return view('sbfnifront::events.index', compact('events', 'columns'));
    }

    public function create()
    {
        return view('sbfnifront::events.create');
    }

    public function store(EventRequest $request)
    {
        try {
            $validated = $request->validated();
            $event = new Event();
            $columns = $event->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            foreach($mutableColumns as $mutableColumn) {
                $event->$mutableColumn = $request->input($mutableColumn);
            }
            
            $event->uuid = (String) Str::uuid();
            $event->save();
            ##ELOQUENTRELATIONSHIPSTORESECTION##

            
            return redirect()->route('events.index')->withSuccess('Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withInput()->withErrors($qe->getMessage());
        }
    }

    public function show(Event $event)
    {
        try {
            return view('sbfnifront::events.show', compact('event'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function edit(Event $event)
    {
        try {
            return view('sbfnifront::events.edit', compact('event'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
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
            ##ELOQUENTRELATIONSHIPUPDATESECTION##
            
            return redirect()->route('events.index')->withSuccess('Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function destroy(Event $event)
    {
        try {
            $columns = $event->getTableColumns(); // Required If History Is Enabled
            
            
            $event->delete();
            ##ELOQUENTRELATIONSHIPDELETESECTION##
            return redirect()->back()->withSuccess('Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }
}
