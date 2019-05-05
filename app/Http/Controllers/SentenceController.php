<?php

namespace App\Http\Controllers;

use App\Managers\SentenceManager;
use Illuminate\Http\Request;

class SentenceController extends Controller
{
    /**
     * @var SentenceManager Dependency injected into this class
     */
    protected $sentenceManager;

    /**
     * SentenceController constructor.
     * @param SentenceManager $sentenceManager
     */
    public function __construct(SentenceManager $sentenceManager) {
        $this->sentenceManager = $sentenceManager;
    }
    /**
     * Tokenize sentence which user said.
     *
     * @param Request $request
     * @return array
     */
    public function tokenizeSentence(Request $request) {
        $sentence = $request->sentence;

        // Using custom tokenize string method
//        return $this->sentenceManager->tokenize($sentence);

        // using python script nltk
        $output = shell_exec(env('PYTHON_ENV') . ' ' . env('PYTHON_SCRIPT_FILE_PATH') . ' "' . $sentence . '"');

        return $output;
    }
}
