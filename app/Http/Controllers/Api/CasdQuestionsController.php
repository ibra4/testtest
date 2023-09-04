<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasQuestionRequest;
use App\Http\Requests\CasdQuestionRequest;
use App\Models\CasdQuestion;
use App\Queries\CasdQuestionsQuery;
use Illuminate\Http\Request;

class CasdQuestionsController extends Controller
{
    private $casdQuestionsQuery;

    public function __construct(CasdQuestionsQuery $casdQuestionsQuery)
    {
        $this->casdQuestionsQuery = $casdQuestionsQuery;
    }

    public function actionIndex(Request $request)
    {
        $query = $this->casdQuestionsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    public function actionGet($id)
    {
        return $this->sendSuccessReponse(CasdQuestion::findOrFail($id));
    }

    public function actionCreate(CasdQuestionRequest $request)
    {
        $question = CasdQuestion::create($request->all());
        return $this->sendSuccessReponse($question);
    }

    public function actionUpdate(CasdQuestionRequest $request, $id)
    {
        $question = CasdQuestion::findOrFail($id);
        $question->update($request->all());

        return $this->sendSuccessReponse($question);
    }
}
