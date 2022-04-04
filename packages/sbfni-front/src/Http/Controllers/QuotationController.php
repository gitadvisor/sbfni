<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers;

use Breakit\Sbfni\Sbfnifront\Models\Quotation;

use Breakit\Sbfni\Sbfnifront\Http\Requests\QuotationRequest;
use Breakit\Sbfni\Sbfnifront\Http\Controllers\SbfnifrontController;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;
use Exception;

class QuotationController extends SbfnifrontController
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
        $quotations = Quotation::orderBy('id', 'DESC')->get();
        $columns = $this->prepareColumnsMap(new Quotation());
        return view('sbfnifront::quotations.index', compact('quotations', 'columns'));
    }

    public function create()
    {
        return view('sbfnifront::quotations.create');
    }

    public function store(QuotationRequest $request)
    {
        try {
            $validated = $request->validated();
            $quotation = new Quotation();
            $columns = $quotation->getTableColumns();
            $mutableColumns = $this->processMutableColumns($columns);
            foreach($mutableColumns as $mutableColumn) {
                $quotation->$mutableColumn = $request->input($mutableColumn);
            }
            
            $quotation->uuid = (String) Str::uuid();
            $quotation->save();
            ##ELOQUENTRELATIONSHIPSTORESECTION##

            
            return redirect()->route('quotations.index')->withSuccess('Created Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withInput()->withErrors($qe->getMessage());
        }
    }

    public function show(Quotation $quotation)
    {
        try {
            return view('sbfnifront::quotations.show', compact('quotation'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function edit(Quotation $quotation)
    {
        try {
            return view('sbfnifront::quotations.edit', compact('quotation'));
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
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
            ##ELOQUENTRELATIONSHIPUPDATESECTION##
            
            return redirect()->route('quotations.index')->withSuccess('Updated Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }

    public function destroy(Quotation $quotation)
    {
        try {
            $columns = $quotation->getTableColumns(); // Required If History Is Enabled
            
            
            $quotation->delete();
            ##ELOQUENTRELATIONSHIPDELETESECTION##
            return redirect()->back()->withSuccess('Deleted Successfully');
        } catch (Exception $e) {
            return redirect()->back()->withErrors($e->getMessage());
        } catch (QueryException $qe) {
            return redirect()->back()->withErrors($qe->getMessage());
        }
    }
}
