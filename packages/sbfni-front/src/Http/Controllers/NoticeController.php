<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers;

use Breakit\Sbfni\Sbfnifront\Models\Notice;

use Breakit\Sbfni\Sbfnifront\Http\Requests\NoticeRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\SbfnifrontController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class NoticeController extends SbfnifrontController
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
        $notices = Notice::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Notice());
        return view('sbfnifront::notices.index', compact('notices', 'columns'));
    }

    public function create()
    {
        return view('sbfnifront::notices.create');
    }

    public function store(NoticeRequest $request)
    {
        try {
            $validated = $request->validated();
            $notice = new Notice();
            $columns = $notice->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            foreach($mutableColumns as $mutableColumn) {
                $notice->$mutableColumn = $request->input($mutableColumn);
            }
            
            $notice->uuid = (String) Str::uuid();
            $notice->save();
            ##ELOQUENTRELATIONSHIPSTORESECTION##

            
            return redirect()->route('notices.index')->withSuccess('Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withInput()->withErrors($qe->getMessage());
        }
    }

    public function show(Notice $notice)
    {
        try {
            return view('sbfnifront::notices.show', compact('notice'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function edit(Notice $notice)
    {
        try {
            return view('sbfnifront::notices.edit', compact('notice'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
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
            ##ELOQUENTRELATIONSHIPUPDATESECTION##
            
            return redirect()->route('notices.index')->withSuccess('Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function destroy(Notice $notice)
    {
        try {
            $columns = $notice->getTableColumns(); // Required If History Is Enabled
            
            
            $notice->delete();
            ##ELOQUENTRELATIONSHIPDELETESECTION##
            return redirect()->back()->withSuccess('Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }
}
