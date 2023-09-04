<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasQuestionRequest;
use App\Models\AbasQuestion;
use App\Queries\AbasQuestionsQuery;
use Illuminate\Http\Request;

class AbasQuestionsController extends Controller
{
    private $abasQuestionsQuery;

    public function __construct(AbasQuestionsQuery $abasQuestionsQuery)
    {
        $this->abasQuestionsQuery = $abasQuestionsQuery;
    }

    public function actionIndex(Request $request)
    {
        $query = $this->abasQuestionsQuery->get($request);
        return $this->sendSuccessReponse($query->paginate());
    }

    public function actionGet($id)
    {
        return $this->sendSuccessReponse(AbasQuestion::findOrFail($id));
    }

    public function actionCreate(AbasQuestionRequest $request)
    {
        $question = AbasQuestion::create($request->all());
        return $this->sendSuccessReponse($question);
    }

    public function actionUpdate(AbasQuestionRequest $request, $id)
    {
        $question = AbasQuestion::findOrFail($id);
        $question->update($request->all());

        return $this->sendSuccessReponse($question);
    }
}
