<?php

use App\Ebcms\Page404\Middleware\Page404;
use Ebcms\App;
use Ebcms\RequestHandler;

App::getInstance()->execute(function (
    RequestHandler $requestHandler
) {
    $requestHandler->lazyPrependMiddleware(Page404::class);
});
