<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionAnswerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Build Answers
        $answers = collect([]);
        $counter = 1;
        foreach ($this->Answers as $answer) {
            $answers->put('answer_'.$counter, $answer->answer);
            $counter = $counter + 1;
        }

        // Initial Question array
        $questions = [
            'question_id' => $this->id,
            'question' => $this->question,
        ];

        // Combine arrays and return
        return array_merge($questions, $answers->toArray());
    }
}
