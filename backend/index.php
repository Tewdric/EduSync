<?php
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if ($method === 'OPTIONS') {
	http_response_code(204);
	exit;
}

if ($method !== 'GET') {
	http_response_code(405);
	echo json_encode([
		'status' => 'error',
		'message' => 'Método não permitido. Use GET.'
	], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	exit;
}

$pathInfo = trim((string)($_SERVER['PATH_INFO'] ?? ''), '/');
$endpoint = strtolower((string)($_GET['endpoint'] ?? $pathInfo));

if ($endpoint === '' || $endpoint === 'index.php') {
	echo json_encode([
		'status' => 'ok',
		'message' => 'API EduSync ativa',
		'endpoints' => [
			'teste' => 'GET /backend/index.php?endpoint=teste ou /backend/index.php/teste'
		]
	], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	exit;
}

if ($endpoint !== 'teste' && $endpoint !== 'test') {
	http_response_code(404);
	echo json_encode([
		'status' => 'error',
		'message' => 'Endpoint não encontrado.'
	], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
	exit;
}

echo json_encode([
	'status' => 'ok',
	'message' => 'Endpoint de teste funcionando com sucesso.',
	'endpoint' => 'teste',
	'method' => $method,
	'timestamp' => date('c')
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

