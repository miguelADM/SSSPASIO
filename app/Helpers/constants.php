<?php
function getAdminLinks()
{
    $ADMIN_LINKS = [
        ['text' => 'Usuarios', 'href' => 'users', 'icon' => 'users', 'color' => '#FFB6C1'],
        ['text' => 'Grupos de Trabajo', 'href' => 'working-groups', 'icon' => 'add-group', 'color' => '#87CEEB'],
        ['text' => 'Enfermedades', 'href' => 'diseases', 'icon' => 'heart', 'color' => '#98FB98'],
        ['text' => 'Clasificacion de Ejercicios', 'href' => 'classification', 'icon' => 'trophy', 'color' => '#FFD700'],
        ['text' => 'Ejercicios', 'href' => 'exercises', 'icon' => 'weights', 'color' => '#FFA07A'],
        ['text' => 'Rutinas', 'href' => 'routines', 'icon' => 'exercise-running', 'color' => '#B0E0E6'],
        ['text' => 'Nutricional', 'href' => 'nutritional-recommendation', 'icon' => 'food', 'color' => '#FF69B4'],
        ['text' => 'Tips', 'href' => 'tips', 'icon' => 'tips', 'color' => '#90EE90'],
        ['text' => 'Progreso de Usuarios', 'href' => 'user-progress', 'icon' => 'chart-bar', 'color' => '#ADD8E6']
    ];

    return $ADMIN_LINKS;
}

function getUserLinks()
{
    $USER_LINKS = [
        ['text' => 'Inicio', 'href' => 'home', 'icon' => 'home', 'color' => '#90EE90'],
        ['text' => 'Mi progreso', 'href' => 'my-progress', 'icon' => 'chart', 'color' => '#B0E0E6'],
        ['text' => 'Top Ganadores', 'href' => 'top-winners', 'icon' => 'crown', 'color' => '#FF69B4'],
    ];

    return $USER_LINKS;
}
