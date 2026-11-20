<?php

use App\Models\Reading;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('se puede crear un reading', function () {
    $this->postJson('/api/readings', [
        'title' => 'Canto Espiritual',
        'author' => 'Juan de la Cruz',
        'comment' => 'Peak',
    ])->assertSuccessful();

    $this->assertDatabaseHas('readings', ['title' => 'Canto Espiritual']);
    
});

test('cambiar estado de me gusta', function () {
    $reading = Reading::create([
        'title' => 'Canto Espiritual',
        'author' => 'Juan de la Cruz',
        'comment' => 'Peak',
        'like' => false,
    ]);

    $this->get(route('toggle', $reading->id))->assertRedirect();

    expect($reading->fresh()->like)->toBeTruthy();
});