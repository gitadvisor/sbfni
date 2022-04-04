<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers;

use Breakit\Sbfni\Sbfnifront\Models\News;

use Breakit\Sbfni\Sbfnifront\Http\Requests\NewsRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\SbfnifrontController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class NewsController extends SbfnifrontController
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
        $news = News::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new News());
        return view('sbfnifront::news.index', compact('news', 'columns'));
    }

    public function create()
    {
        return view('sbfnifront::news.create');
    }

    public function store(NewsRequest $request)
    {
        try {
            $validated = $request->validated();
            $news = new News();
            $columns = $news->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            foreach($mutableColumns as $mutableColumn) {
                $news->$mutableColumn = $request->input($mutableColumn);
            }
            
            $news->uuid = (String) Str::uuid();
            $news->save();
            ##ELOQUENTRELATIONSHIPSTORESECTION##

            
            return redirect()->route('news.index')->withSuccess('Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withInput()->withErrors($qe->getMessage());
        }
    }

    public function show(News $news)
    {
        try {
            return view('sbfnifront::news.show', compact('news'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function edit(News $news)
    {
        try {
            return view('sbfnifront::news.edit', compact('news'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function update(NewsRequest $request, News $news)
    {
        try {
            $validated = $request->validated();
            $columns = $news->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            
            foreach($mutableColumns as $mutableColumn) {
                $news->$mutableColumn = $request->input($mutableColumn);
            }
            
            $news->save();
            ##ELOQUENTRELATIONSHIPUPDATESECTION##
            
            return redirect()->route('news.index')->withSuccess('Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function destroy(News $news)
    {
        try {
            $columns = $news->getTableColumns(); // Required If History Is Enabled
            
            
            $news->delete();
            ##ELOQUENTRELATIONSHIPDELETESECTION##
            return redirect()->back()->withSuccess('Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }
}
