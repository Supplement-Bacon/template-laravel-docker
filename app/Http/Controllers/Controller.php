<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version=L5_SWAGGER_CONST_VERSION,
     *      title=L5_SWAGGER_CONST_APP_NAME,
     *      description="Ready-to-go Laravel project with Passport/Swagger in containerized environment.",
     *      @OA\Contact(
     *          email=L5_SWAGGER_CONST_CONTACT_EMAIL
     *      ),
     *      @OA\License(
     *          name="Supplement Bacon",
     *          url="https://supplement-bacon.com"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description=L5_SWAGGER_CONST_HOST_DESCRIPTION
     * )
     *
     */

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
