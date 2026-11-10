<?php

namespace Database\Factories;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Factories\Factory;

class BukuFactory extends Factory
{
    /**
     * "Cetakan" satu data buku palsu.
     */
    public function definition(): array //kategori_id diambil secara acak dari tabel kategori, judul diambil secara acak dari daftar kata, penulis diambil secara acak dari daftar nama, penerbit diambil secara acak dari daftar penerbit, tahun_terbit diambil secara acak antara 2000-2025, stok diambil secara acak antara 0-15, cover diambil secara acak dari 6 gambar yang tersedia
    {
        return [
            'kategori_id'  => Kategori::inRandomOrder()->value('id'),
            'judul'        => fake()->randomElement(['Jejak', 'Kisah', 'Senja di', 'Rahasia', 'Panduan Wisata']) . ' ' . fake()->city(),
            'penulis'      => fake()->name(),
            'penerbit'     => fake()->randomElement(['Gramedia', 'Erlangga', 'Mizan', 'Bentang Pustaka', 'Andi Offset']),
            'tahun_terbit' => fake()->numberBetween(2000, 2025),
            'stok'         => fake()->numberBetween(0, 15),
            'cover'        => 'course/' . fake()->numberBetween(1, 6) . '.png',
        ];
    }
}
