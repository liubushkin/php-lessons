<?

$roles  = ['admin', 'editor'];
$includes = ['article', 'comment', 'stat'];

$access = [
    $roles[0] => [$includes[0], $includes[1], $includes[2]],
    $roles[1] => [$includes[0], $includes[1]]
];

$role = $_GET['role'] ?? null;
$include = explode(',', $_GET['include'] ?? '');

// validation start

if (empty($role)) {
    http_response_code(404);
    echo '404 Неизвестный уровень доступа. Доступ запрещен';
    exit;
}

if (!in_array($role, $roles, true)) {
    http_response_code(404);
    echo '400 Неизвестный уровень доступа. Доступ запрещен';
    exit;
}

if (!empty(array_diff($include, $includes))) {
    echo '400 Неверный запрос';
    exit;
}

// validation end

// auth start

if (!empty(array_diff($include, $access[$role]))) {
    http_response_code(401);
    echo '401 Неизвестный уровень доступа. Доступ запрещен';
    exit;
}

// auth end

http_response_code(200);
echo '«200 Данные успешно получены»';
