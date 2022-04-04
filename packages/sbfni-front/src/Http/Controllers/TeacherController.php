<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers;

use Breakit\Sbfni\Sbfnifront\Models\Teacher;

use Breakit\Sbfni\Sbfnifront\Http\Requests\TeacherRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\SbfnifrontController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class TeacherController extends SbfnifrontController
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
        $teachers = Teacher::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Teacher());
        return view('sbfnifront::teachers.index', compact('teachers', 'columns'));
    }

    public function create()
    {
        return view('sbfnifront::teachers.create');
    }

    public function store(TeacherRequest $request)
    {
        try {
            $validated = $request->validated();
            $teacher = new Teacher();
            $columns = $teacher->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            foreach($mutableColumns as $mutableColumn) {
                $teacher->$mutableColumn = $request->input($mutableColumn);
            }
            
            $teacher->uuid = (String) Str::uuid();
            $teacher->save();
            ##ELOQUENTRELATIONSHIPSTORESECTION##

            
            return redirect()->route('teachers.index')->withSuccess('Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withInput()->withErrors($qe->getMessage());
        }
    }

    public function show(Teacher $teacher)
    {
        try {
            return view('sbfnifront::teachers.show', compact('teacher'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function edit(Teacher $teacher)
    {
        try {
            return view('sbfnifront::teachers.edit', compact('teacher'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
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
            ##ELOQUENTRELATIONSHIPUPDATESECTION##
            
            return redirect()->route('teachers.index')->withSuccess('Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function destroy(Teacher $teacher)
    {
        try {
            $columns = $teacher->getTableColumns(); // Required If History Is Enabled
            
            
            $teacher->delete();
            ##ELOQUENTRELATIONSHIPDELETESECTION##
            return redirect()->back()->withSuccess('Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }
}
