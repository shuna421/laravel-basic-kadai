<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User; // Userモデルも使うのでインポート

class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;

    public function definition()
    {
        // 実在するuser_idをランダムに取得（usersテーブルのID）
        $userIds = User::pluck('id')->toArray();

        return [
            'user_id' => $this->faker->randomElement($userIds), // usersテーブルのIDを指定
            'title' => $this->faker->sentence(4),  // 日本語で4語くらいのタイトル
            'content' => $this->faker->paragraph(3), // 日本語の3文くらいの本文
        ];
    }
}