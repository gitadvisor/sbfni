<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;

use Breakit\Sbfni\Sbfnifront\Models\News;

use Breakit\Sbfni\Sbfnifront\Http\Requests\NewsRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\SbfnifrontApiController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class NewsApiController extends SbfnifrontApiController
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
        $news = News::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new News());
        $this->response['status'] = 'ok';
        $this->response['data'] = $news;
        $this->response['columns'] = $columns;
        return response()->json($this->response);
    }

    public function store(NewsRequest $request)
    {
        try {
            $validated = $request->validated();
            $news = new News();
            $columns = $news->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn){
                $news->$mutableColumn = $request->input($mutableColumn);
            }
            
            $news->uuid = (String) Str::uuid();
            $news->save();
            
            $this->response['status'] = 'ok';
            $this->response['data'] = $news;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function show(News $news)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $news;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function edit(News $news)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $news;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
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
            
            $this->response['data'] = $news;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function destroy(News $news)
    {
        try {
            $columns = $news->getTableColumns(); // Required If History Is Enabled
            
            
            $this->response['status'] = 'ok';
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }
}
