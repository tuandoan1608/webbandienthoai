<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Throwable  $exception
     * @return void
     *
     * @throws \Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $exception)
    {
        if($this->isHttpException($exception)){
            if($request->is('admin/*')){
                if($exception->getStatusCode()==404){
                    return response()->view('errors.admin404',[],404);
                }
            }
            else{
                if($exception->getStatusCode()==404){
                    return response()->view('errors.404',[],404);
                }
            }
            
        }
        return parent::render($request, $exception);
    }
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        // if ($request->is('admin') || $request->is('admin/*')) {
        //     return redirect()->guest('/login/admin');
        // }
        if ($request->is('dang-nhap') || $request->is('dang-nhap/*')) {
            return redirect()->guest('/dang-nhap');
        }
        return redirect()->guest(route('dang-nhap'));
    }
}
