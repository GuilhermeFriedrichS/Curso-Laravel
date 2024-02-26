<?php

namespace App\Traits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\MessageBag;

trait HttpResponses
{
    public function response(string $menssage, string|int $status, array|Model $data = [])
    {
        return response()->json([
            'message' => $menssage,
            'status' => $status,
            'data'=> $data,
        ], $status);
    }

    public function error(string $menssage, string|int $status, array|MessageBag $errors = [], array $data = [])
    {
        return response()->json([
            'message' => $menssage,
            'status' => $status,
            'errors'=> $errors,
            'data'=> $data,
        ], $status);
    }
}