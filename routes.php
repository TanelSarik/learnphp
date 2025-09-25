<?php

use App\Controllers\ArticleController;
use App\Controllers\AuthController;
use App\Controllers\PublicController;
use App\Controllers\UsersController;
use App\Router;

Router::get('/', [PublicController::class, 'index']);

Router::get('/us', [PublicController::class, 'us']);

Router::get('/tech', [PublicController::class, 'tech']);

Router::get('/form', [PublicController::class, 'form']);

Router::post('/answer', [PublicController::class, 'answer']);

Router::get('/articles', [ArticleController::class, 'index']);

Router::get('/articles/create', [ArticleController::class, 'create']);

Router::post('/articles', [ArticleController::class, 'store']);

Router::get('/articles/view', [ArticleController::class, 'view']);

Router::get('/articles/edit', [ArticleController::class, 'edit']);

Router::post('/articles/edit', [ArticleController::class, 'update']);

Router::get('/articles/delete', [ArticleController::class, 'destroy']);

Router::get('/register', [AuthController::class, 'registerForm']);
Router::post('/register', [AuthController::class, 'register']);
Router::get('/login', [AuthController::class, 'loginForm']);
Router::post('/login', [AuthController::class, 'login']);
Router::get('/logout', [AuthController::class, 'logout']);
Router::get('/logout', [AuthController::class, 'logout']);
Router::get('/users', [UsersController::class, 'index']);
Router::get('/users/create', [UsersController::class, 'create']);
Router::post('/users', [UsersController::class, 'store']);
Router::get('/users/view', [UsersController::class, 'view']);
Router::get('/users/edit', [UsersController::class, 'edit']);
Router::post('/users/edit', [UsersController::class, 'update']);
Router::get('/users/delete', [UsersController::class, 'destroy']);

