<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\AbasQuestionRequest;
use App\Http\Resources\AbasQuestionResource;
use App\Models\AbasQuestion;

class AbasQuestionsController extends Controller
{
    public function actionIndex()
    {
        return $this->sendSuccessReponse(AbasQuestionResource::collection(AbasQuestion::all()));
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
