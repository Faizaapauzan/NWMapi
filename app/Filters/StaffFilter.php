<?php

namespace App\Filters;

use Illuminate\Http\Request;

use App\Filters\ApiFilter;

class StaffFilter extends ApiFilter {

    protected $safeParms = [
        'username' => ['eq'],
        'password' => ['eq'],
        'techRank' => ['eq']
    ];

    protected $columnMap = [
        'techRank' => 'technician_rank'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '≤',
        'gt' => '>',
        'gte' => '≥', 

    ];

    public function transform(Request $request){

        $eloQuery = [];

        foreach ($this->safeParms as $parm => $operators){
            $query = $request->query($parm);

            if (!isset($query)) {
                continue;
            }

            $column = $this->columnMap[$parm] ?? $parm;

            foreach ($operators as $operator) {
                if (isset($query[$operator])) {
                    $eloQuery[] = [$column, $this->operatorMap[($operator)] , $query[$operator]];
                }
            }
        }

        return $eloQuery;
    }


}