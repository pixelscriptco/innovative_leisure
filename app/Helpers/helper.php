<?php

use App\Models\PrivilegeRole;
use Illuminate\Support\Facades\Auth;

function appendVersion()
{
    $now = new DateTime();
    return '?v=' . urlencode($now->getTimestamp());
}

function role()
{
    return Auth::user()->role_id;
}

function hasReadAccess($privilege_id)
{
    $access = PrivilegeRole::whereRoleId(role())->wherePrivilegeId($privilege_id)
        ->pluck('has_read_access')->all();
    if (isset($access[0]) && $access[0] === 1) {
        return 1;
    }
    return 0;
}

function hasWriteAccess($privilege_id)
{
    $access = PrivilegeRole::whereRoleId(role())->wherePrivilegeId($privilege_id)
        ->pluck('has_write_access')->all();
    if (isset($access[0]) && $access[0] === 1) {
        return 1;
    }
    return 0;
}

function hasDeleteAccess($privilege_id)
{
    $access = PrivilegeRole::whereRoleId(role())->wherePrivilegeId($privilege_id)
        ->pluck('has_delete_access')->all();
    if (isset($access[0]) && $access[0] === 1) {
        return 1;
    }
    return 0;
}

function jsonResponse($message, $data, $code)
{
    $title = '';
    if (is_array($message)) {
        $title = $message[1];
        $message = $message[0];
    }
    $response = [
        'title' => $title,
        'message' => $message,
        'data' => $data,
    ];

    return response()->json($response, $code);
}

function successResponse($message = 'Successfully Submitted', $data = [], $code = 200)
{
    return jsonResponse($message, $data, $code);
}

function errorResponse($message = 'Error while processing data', $data = [], $code = 400)
{
    return jsonResponse($message, $data, $code);
}

function infoResponse($message = 'Something went wrong', $data = [], $code = 500)
{
    return jsonResponse($message, $data, $code);
}

function deleteResponse($message = 'Successfully Deleted', $data = [], $code = 200)
{
    return jsonResponse($message, $data, $code);
}
