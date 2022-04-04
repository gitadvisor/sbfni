<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;

use Breakit\Sbfni\Sbfnifront\Models\Quotation;

use Breakit\Sbfni\Sbfnifront\Http\Requests\QuotationRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\Api\SbfnifrontApiController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class QuotationApiController extends SbfnifrontApiController
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
        $quotations = Quotation::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Quotation());
        $this->response['status'] = 'ok';
        $this->response['data'] = $quotations;
        $this->response['columns'] = $columns;
        return response()->json($this->response);
    }

    public function store(QuotationRequest $request)
    {
        try {
            $validated = $request->validated();
            $quotation = new Quotation();
            $columns = $quotation->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);

            foreach($mutableColumns as $mutableColumn){
                $quotation->$mutableColumn = $request->input($mutableColumn);
            }
            
            $quotation->uuid = (String) Str::uuid();
            $quotation->save();
            
            $this->response['status'] = 'ok';
            $this->response['data'] = $quotation;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function show(Quotation $quotation)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $quotation;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function edit(Quotation $quotation)
    {
        try {
            $this->response['status'] = 'ok';
            $this->response['data'] = $quotation;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function update(QuotationRequest $request, Quotation $quotation)
    {
        try {
            $validated = $request->validated();
            $columns = $quotation->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            
            foreach($mutableColumns as $mutableColumn) {
                $quotation->$mutableColumn = $request->input($mutableColumn);
            }
            
            $quotation->save();
            
            $this->response['data'] = $quotation;
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }

    public function destroy(Quotation $quotation)
    {
        try {
            $columns = $quotation->getTableColumns(); // Required If History Is Enabled
            
            
            $this->response['status'] = 'ok';
            return response()->json($this->response);
        } catch (Exception $e) {
            return response()->json($this->response(false, $e->getMessage()));
        } catch (QueryException $qe) {
            return response()->json($this->response(false, $qe->getMessage()));
        }
    }
}
