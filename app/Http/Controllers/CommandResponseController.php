<?php

namespace App\Http\Controllers;

use App\Managers\SentenceManager;
use App\Models\Action;
use App\Models\Command;
use App\Models\Content;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function PHPSTORM_META\type;

class CommandResponseController extends Controller
{
    protected $sentenceManager;

    public function __construct(SentenceManager $sentenceManager) {
        $this->sentenceManager = $sentenceManager;
    }

    /**
     * @param Request $request
     * @param int $step
     * @return void
     */
    public function getResponse(Request $request) {
        // get user sentence
        $sentence   = $request->sentence;
        $step       = $request->step;

        // tokenized sentence (array)
        $sentenceTokenized = $this->sentenceManager->tokenize($sentence);

        // check whether user sentence words are in the list of commands
        // fetch actions from database and check whether they are present in user sentence
        $actions = Action::all();

        if ($step == 1) {
            foreach ($actions as $action) {
                if (Str::contains($sentenceTokenized, $action->slug)) {
                    $actionCommands = $action->commands;
                    break;
                }
            }

            foreach ($actionCommands as $command) {
                if (Str::contains($sentenceTokenized, $command->slug)) {
                    break;
                }
            }

            if ($command->slug == "syllabus") {
                $questionToAsk = "What is the course name or course code?";
            }

            return response(['step' => $step, 'content' => $questionToAsk, 'done' => 0]);
        }

        if ($step == 2) {
            $courseNameOrCode = $sentence;
            $course = Course::whereName($courseNameOrCode)->orWhere('code', $courseNameOrCode)->firstOrFail();
            if ($course) {
                $content = Content::whereCourseId($course->id)->first();

                return response(['step' => $step, 'content' => $content->body, 'done' => 1, 'status' => 'ok']);
            } else {
                return response(['step' => 1, 'content' => 'There is no course with a specified name or code', 'done' => 0, 'status' => 'error']);
            }


        }


        // if system could not recognize what user wants, try by asking user what he wants, progress asking
    }
}
