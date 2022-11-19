<?php

namespace App\Queries;

use App\Models\LeiterRecordExportable;
use Illuminate\Http\Request;

use Illuminate\Database\Eloquent\Builder;

class LeiterRecordsQuery
{
    /**
     * Constructs leiter records query
     *
     * @param  mixed $request
     * @return Builder
     */
    public function get(Request $request, $type)
    {
        $query = LeiterRecordExportable::select('min_age', 'max_age', 'scaled_score', 'value')
            ->where(['type' => $type])
            ->orderBy('scaled_score', 'ASC')
            ->orderBy('value', 'ASC');

        if ($request->min_age && $request->min_age != '') {
            $query->where('min_age', (int)$request->min_age);
        }

        if ($request->max_age && $request->max_age != '') {
            $query->where('max_age', (int)$request->max_age);
        }

        if ($request->scaled_score && $request->scaled_score != '') {
            $query->where('scaled_score', (int)$request->scaled_score);
        }

        if ($request->value && $request->value != '') {
            $query->where('value', (int)$request->value);
        }

        if ($request->has('sort')) {
            $query->orderBy($request->sort[0], $request->sort[1]);
        }

        return $query;
    }
}
