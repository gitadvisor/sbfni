<?php

namespace Breakit\Sbfni\Sbfnifront\Models;

use Illuminate\Database\Eloquent\Model;

class Sbfnifront extends Model
{
    public function getTableColumns() {
        $columns = $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
        $columns = array_filter($columns, function ($value) {
            return strpos($value, '$') == 0;
        });
        $columns = array_values($columns);
        return $columns;
    }
}
