<?php

namespace App\Exceptions;

// controller
use App\Http\Controllers\Common\PhpMailController;
use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        'Symfony\Component\HttpKernel\Exception\HttpException',
    ];

    /**
     * Create a new controller instance.
     * constructor to check
     * 1. php mailer.
     *
     * @return void
     */
    // public function __construct(PhpMailController $PhpMailController)
    // {
    //     $this->PhpMailController = $PhpMailController;
    // }

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param \Exception $e
     *
     * @return void
     */
    public function report(Exception $e)
    {
        return parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Exception               $e
     *
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        $phpmail = new PhpMailController();
        if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException) {
            return response()->json(['message' => $e->getMessage(), 'code' => $e->getStatusCode()]);
        } elseif ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException) {
            return response()->json(['message' => $e->getMessage(), 'code' => $e->getStatusCode()]);
        }
        // This is to check if the debug is true or false
        if (config('app.debug') == false) {
            // checking if the error is actually an error page or if its an system error page
            if ($this->isHttpException($e) && $e->getStatusCode() == 404) {
                return redirect()->route('error404');
            } else {
                // checking if the application is installed
                if (\Config::get('database.install') == 1) {
                    // checking if the error log send to Ladybirdweb is enabled or not
                    if (\Config::get('app.ErrorLog') == '1') {
                        $this->phpmail->sendmail($from = $this->PhpMailController->mailfrom('1', '0'), $to = ['name' => 'faveo logger', 'email' => 'faveoerrorlogger@gmail.com'], $message = ['subject' => 'Faveo downloaded from github has occured error', 'scenario' => 'error-report'], $template_variables = ['e' => $e]);
                    }
                }

                return redirect()->route('error500');
            }
        }
        // returns non oops error message
        // return parent::render($request, $e);
        // checking if the error is related to http error i.e. page not found
        if ($this->isHttpException($e)) {
            // returns error for page not found
            return $this->renderHttpException($e);
        }
        // checking if the config app sebug is enabled or not
        if (config('app.debug')) {
            // returns oops error page i.e. colour full error page
            return $this->renderExceptionWithWhoops($e);
        }

        return parent::render($request, $e);
    }

    /**
     * function to generate oops error page.
     *
     * @param \Exception $e
     *
     * @return \Illuminate\Http\Response
     */
    protected function renderExceptionWithWhoops(Exception $e)
    {
        // new instance of whoops class to display customized error page
        $whoops = new \Whoops\Run();
        $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler());

        return new \Illuminate\Http\Response(
                $whoops->handleException($e), $e->getStatusCode(), $e->getHeaders()
        );
    }
}
