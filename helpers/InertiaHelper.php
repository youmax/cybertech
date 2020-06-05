<?php

function InertiaHardVisit(string $url)
{
    return response('', \Symfony\Component\HttpFoundation\Response::HTTP_CONFLICT)->header('x-inertia-location', $url);
}
