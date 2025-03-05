<?php

use App\Models\Comentario;
use App\Models\User;
use App\Models\Video;

test('crear comentario', function () {
    $usuario = User::factory()->create();
    $video = Video::factory()->create();
    // dd($video);
    $comentario = [
        'contenido' => 'contenido de prueba',
        'comentable_id' => $video->id,
        'comentable_type' => Video::class,
    ];
    $response = $this->actingAs($usuario)->post(route('comentarios.store', $video), $comentario);
    $response->assertStatus(302);
});
