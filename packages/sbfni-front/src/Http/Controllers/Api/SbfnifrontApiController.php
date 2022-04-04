<?php
namespace Breakit\Sbfni\Sbfnifront\Http\Controllers\Api;
use App\Http\Controllers\Controller;
class SbfnifrontApiController extends Controller
{
    protected $blackListedInsertUpdateColumns = ['id', 'uuid', 'created_at', 'created_by', 'updated_at', 'updated_by', 'deleted_at', 'deleted_by'];
    
    public function processHistoryColumns($columns, $identifier)
    {
        $historyColumns = [];
        foreach ($columns as $column) {
            if ($column !== 'id') {
                $historyColumns[$column] = $column;
                continue;
            }
            $historyColumns['source_id'] = $column;
        }
        return $historyColumns;
    }

    public function processMutableColumns($columns)
    {
        $mutableColumns = [];
        foreach ($columns as $column) {
            if (in_array($column, $this->blackListedInsertUpdateColumns) || in_array($column, $this->specialInsertUpdateColumns))
                continue;
            $mutableColumns[] = $column;
        }
        return $mutableColumns;
    }

    protected function prepareColumnsMap($entity)
    {
        $allColumns = $entity->getTableColumns();
        $columns = [];
        foreach ($allColumns as $column) {
            if (in_array($column, $this->blackListedInsertUpdateColumns))
                continue;
            $viewColumnName = '';
            $columnSegments = explode('_', $column);
            foreach ($columnSegments as $columnSegment) {
                $columnSegment = ucfirst($columnSegment);
                $viewColumnName .= "{$columnSegment} ";
            }
            $viewColumnName = trim($viewColumnName);
            $columns[$column] = $viewColumnName;
        }
        return $columns;
    }
}
